<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request): Response
    {

        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            

            $mail = new Mail();
            $prenom = $form->get('prenom')->getData();
            $nom = $form->get('nom')->getData();
            $content = $form->get('content')->getData();
            $email = $form->get('email')->getData();

            $content = "Bonjour, vous avez un message de: ".$prenom." ".$nom."<br/>".$content."<br/> repondre à l'adresse ".$email; 
            $mail-> send("Vous avez un nouveau message",$content);
           
        }
        return $this->render('contact/index.html.twig', [
            'form' =>$form ->createView()
        ]);
    }
}
