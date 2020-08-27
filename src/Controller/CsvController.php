<?php


namespace App\Controller;


use App\Entity\Csv;
use App\Entity\Utilisateur;
use App\Form\CsvType;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Exception;
use League\Csv\Reader;
use League\Csv\Statement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/CSV")
 */
class CsvController extends AbstractController
{

    /**
     * @Route("/",name="CSV_afficher")
     *
     */
    public function afficherCSV(){



        $csvRepo = $this->getDoctrine()->getRepository(Csv::class);
        $csv = $csvRepo->findAll();


        return $this->render("CSV/CSVFiles.html.twig",["csv"=>$csv]);
    }

    /**
     * @Route("/creation", name="CSV_creation");
     */
    public function creation(EntityManagerInterface $em,
                             Request $request){

        $csvfile= new Csv();

        $formcsv = $this->createForm(CsvType::class, $csvfile);
        $formcsv->handleRequest($request);

        if(isset($_POST['submit']) && $formcsv->isSubmitted() && $formcsv->isValid()){

            $file = $csvfile->getCode();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_csv'),$fileName);
            $csvfile->setCode($fileName);



            $em->persist($csvfile);
            $em->flush();

            return $this->redirectToRoute('administrateur',[]);
        }

        return $this->render('CSV/CSV_creation.html.twig',  ["formCSV"=>$formcsv->createView()]);
    }

    /**
     * @Route("/importation/{id}", name="CSV_importation", requirements={"id": "\d+" });
     */
    public function importation($id, EntityManagerInterface $em){

        $csvRepo = $this->getDoctrine()->getRepository(Csv::class);
        $csv = $csvRepo->find($id);

            ///// problème sur le nom du fichier !!!!!
      //  $string='\%kernel.root_dir\%/../src/Data/%s';
      //  $path= sprintf($string, $csv->getCode());

      //  $reader = Reader::createFromPath($path);
        $reader = Reader::createFromPath('%kernel.root_dir%/../src/Data/data.csv');
      //  $reader = Reader::createFromPath('App/src/Data/data.csv');


        /// Debut de récupération d'utilisateur dans le fichier
        $reader->setHeaderOffset(0);

        // Nombre d'utilisateur importé (limit) et a partir de quel utilisateur de la lsite csv on commence
        try {
            $stmt = (new Statement())
                ->offset(0)
                ->limit(10);
        } catch (Exception $e) {
        }

        $records = $stmt->process($reader);

        foreach($records as $row)
        {

            $utilisateur = new Utilisateur();

            $utilisateur->setUsername($row['username']);
            $utilisateur->setNom($row['nom']);
            $utilisateur->setPrenom($row['prenom']);
            $utilisateur->setEmail($row['email']);
            // Remplacement des espaces du format de téléphone fourni //
            $telephone = str_replace( " ", "", $row['telephone']);
            $utilisateur->setTelephone($telephone );
            /////////
            //hasher le mot de passe !!!!???
            ///////////
            $utilisateur->setPassword($row['password']);

            ////////////////////////////////////////
            // Récupération de la date en string, modification en DateTime
            try {
                $date = new DateTime($row['dateCreation']);
            } catch (\Exception $e) {
            }
            $utilisateur->setDateCreation($date);

            $utilisateur->setAdministrateur($row['administrateur']);
            $utilisateur->setActif($row['actif']);
            $utilisateur->setCampus($row['campus']);
            // Récupérer une photo en même temps?? autre fochier ??
            $utilisateur->setNomPhoto("null");

            $em->persist($utilisateur);
        }
        $em->flush();


        return $this->redirectToRoute('administrateur',[]);
    }

}