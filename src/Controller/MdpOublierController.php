<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\MdpType;
use App\Form\ModifMdpType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class MdpOublierController extends AbstractController
{
    /**
     * @Route("/connection/oublier", name="mdp_oublier")
     */
    public function traitementMail(Request $request, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator)
    {
        $mdpForm = $this->createForm(MdpType::class); //creation du formulaire
        $mdpForm->handleRequest($request);

        if ($mdpForm->isSubmitted() && $mdpForm->isValid()) { //si le formulaire est valide et validé
            $mailSaisie = $mdpForm->getData(); //recuperation de l'adresse mail saisie
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository(Utilisateur::class)->findByUserMail($mdpForm->getData()['email']);

            if(!$user){ //si l'adresse mail saisie ne renvoie aucun utilisateur, celui-ci sera redirigé
                return $this->redirectToRoute("connection");
            }
            //creation du token et de la demande du changement de mot de passe et enregidstrement en base
            $user->setToken($tokenGenerator->generateToken());
            $user->setPasswordRequestedAt(new \Datetime());
            $em->flush();
            //creation du mail à envoyer
            $message = (new \Swift_Message('changer mot de passe '))
                ->setFrom($mailSaisie['email'])
                ->setTo($mailSaisie['email'])
                ->setBody($this->renderView(
                    'mail/mail.html.twig',["user"=>$user]), 'text/html');
            $mailer->send($message);
        }
                return $this->render('mdpOublier/modifMdp.html.twig', ["modifForm" => $mdpForm->createView()]);
    }

    // si supérieur à 10min, retourne false
    // sinon retourne false
    private function isRequestInTime(\Datetime $passwordRequestedAt = null)
    {
        if ($passwordRequestedAt === null)
        {
            return false;
        }

        $now = new \DateTime();
        $interval = $now->getTimestamp() - $passwordRequestedAt->getTimestamp();

        $daySeconds = 60 * 10;
        $response = $interval > $daySeconds ? false : $reponse = true;
        return $response;
    }

    /**
     * @Route("/connection/modifMdp/{id}/{token}", name="modifMdp")
     */
    public function modifMdp(Utilisateur $user,$token,Request $request, UserPasswordEncoderInterface $encoder)
    {
        // interdit l'accès à la page si:
        // le token associé au membre est null
        // le token enregistré en base et le token présent dans l'url ne sont pas égaux
        // le token date de plus de 10 minutes
    if ($user->getToken() === null || $token !== $user->getToken() || !$this->isRequestInTime($user->getPasswordRequestedAt())){

        throw new AccessDeniedHttpException();
    }
        $mdpForm = $this->createForm(ModifMdpType::class,$user);
        $mdpForm->handleRequest($request);

        if ($mdpForm->isSubmitted() && $mdpForm->isValid()){
            $hashed = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hashed);
            $user->setToken('null');
            $user->setPasswordRequestedAt('null');

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute("connection");
        }


        return $this->render('mdpOublier/mdp.html.twig',["mdpForm"=>$mdpForm->createView()]);
    }




}
