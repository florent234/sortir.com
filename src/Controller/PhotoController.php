<?php


namespace App\Controller;


use App\Entity\Photo;
use App\Form\PhotoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/photo")
 */
class PhotoController extends AbstractController
{

    /**
     * @Route("/",name="photo_afficher")
     *
     */
    public function afficherPhoto(){

        $photoRepo = $this->getDoctrine()->getRepository(Photo::class);
        $photos = $photoRepo->findAll();

        return $this->render("photo/photos.html.twig",["photos"=>$photos]);
    }
    /**
     * @Route("/creation", name="photo_creation");
     */
    public function creation(EntityManagerInterface $em,
                             Request $request){

        $photo = new Photo();

        $formPhoto = $this->createForm(PhotoType::class, $photo);
        $formPhoto->handleRequest($request);

        if(isset($_POST['submit']) && $formPhoto->isSubmitted() && $formPhoto->isValid()){

            $file = $photo->getCodePhoto();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_photo'),$fileName);
            $photo->setCodePhoto($fileName);

            $em->persist($photo);
            $em->flush();

            return $this->redirectToRoute('administrateur',[]);
        }

        return $this->render('photo/photo_creation.html.twig',  ["formPhoto"=>$formPhoto->createView()]);
    }

    /**
     * @Route("/modifier/{id}", name="photo_modifier", requirements={"id": "\d+" });
     */
    public function modifier($id, EntityManagerInterface $em,
                             Request $request){

        $photoRepo = $this->getDoctrine()->getRepository(Photo::class);
        $photo = $photoRepo->find($id);

        $photoNouveau = new Photo();
        $photoNouveau->setPhotoId($photo->getPhotoId());
        $photoNouveau->setNomPhoto($photo->getNomPhoto());



       $formPhoto = $this->createForm(PhotoType::class, $photoNouveau);
       $formPhoto->handleRequest($request);
      //  if(isset($_POST['submit']) && $formPhoto->isSubmitted() && $formPhoto->isValid()){
/*

        if(isset($_FILES['image'])){
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

            $extensions= array("jpeg","jpg","png");

            if(in_array($file_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }

            if($file_size > 2097152){
                $errors[]='File size must be excately 2 MB';
            }

            if(empty($errors)==true){
                move_uploaded_file($file_tmp,"images/".$file_name);
                echo "Success";
            }else{
                print_r($errors);
            }
        }    */

        if( $formPhoto->isSubmitted() && $formPhoto->isValid()){

            $file =$photoNouveau->getCodePhoto();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_photo'),$fileName);
            $photo->setCodePhoto($fileName);

            $em->persist($photo);
            $em->flush();

            return $this->redirectToRoute('photo_afficher',[]);
        }

        //return $this->render('photo/photo_modifier.html.twig', ["formPhoto"=>$formPhoto->createView()]);
        return $this->render('photo/photo_modifier.html.twig', ["formPhoto"=>$formPhoto->createView(),"photo"=>$photo]);
    }

}