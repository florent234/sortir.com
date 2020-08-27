<?php


namespace App\Controller;


use App\Entity\Villes;
use App\Form\VillesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/villes")
 */
class VillesController extends AbstractController
{

    /**
     * @Route("/",name="villes")
     *
     */
    public function afficherVilles(EntityManagerInterface $em,
                                   Request $request){

        $villesRepo = $this->getDoctrine()->getRepository(Villes::class);
        $villes = $villesRepo->findAll();

        $villes2= new Villes();
        $formVilles = $this->createForm(VillesType::class, $villes2);
        $formVilles->handleRequest($request);
        if(isset($_POST['submit']) && $formVilles->isSubmitted() && $formVilles->isValid())
        {
            $em->persist($villes2);
            $em->flush();

            return $this->redirectToRoute('villes',["villes"=>$villes]);
        }



        return $this->render("villes/villes.html.twig",["villes"=>$villes, "formVilles"=>$formVilles->createView()]);
    }
    /**
     * @Route("/supprimer/{id}", name="villes_supprimer", requirements={"id": "\d+" });
     */
    public function supprimer($id, EntityManagerInterface $em,
                              Request $request){

        $villesRepo = $this->getDoctrine()->getRepository(Villes::class);
        $villesSup =$villesRepo->find($id);

        $em->remove($villesSup);
        $em->flush();

        $villesRepo = $this->getDoctrine()->getRepository(Villes::class);
        $villes = $villesRepo->findAll();

        $ville2= new Villes();
        $formVilles = $this->createForm(VillesType::class, $ville2);
        $formVilles->handleRequest($request);

        return $this->render('villes/villes.html.twig', [
            "villes"=>$villes, "formVilles"=>$formVilles->createView()
        ]);
    }
    /**
     * @Route("/modifier/{id}", name="villes_modifier", requirements={"id": "\d+" });
     */
    public function modifier($id, EntityManagerInterface $em,
                              Request $request)
    {
        $villesRepo = $this->getDoctrine()->getRepository(Villes::class);
        $villes = $villesRepo->findAll();

        $villes2= $villesRepo->find($id);
        $formVilles = $this->createForm(VillesType::class, $villes2);
        $formVilles->handleRequest($request);
        if(isset($_POST['submit']) && $formVilles->isSubmitted() && $formVilles->isValid())
        {
            $em->persist($villes2);
            $em->flush();

            return $this->redirectToRoute('villes',["villes"=>$villes]);
        }
        return $this->render("villes/modifier.html.twig",["villes"=>$villes, "formVilles"=>$formVilles->createView(), "id"=>$id]);
    }

}