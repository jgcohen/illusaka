<?php

namespace App\Controller;

use App\Entity\Image;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ImageType;
use Symfony\Component\HttpFoundation\Request;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;


class AdminController extends AbstractController
{

    private $entityManager;

    public function __construct (EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/admin/{id}", name="admin")
     */
    public function index(int $id,Request $request): Response
    {

        $profil = $this->entityManager->getRepository(User::class)->find($id);
        if($profil){
        $image = new Image();
        $form = $this->createForm(ImageType::class,$image);
        $form->handleRequest($request);
        $directory = "../public/assets/uploads/pictures";

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->getData();
            $image->setCreatedAt(new DateTimeImmutable('now'));
            $file = $form['url']->getData();

            if ($file) {

                $newFilename = "assets/uploads/pictures/" . uniqid() . $file->getClientOriginalName();
                $file->move($directory, $newFilename);


                $image->setUrl($newFilename);
            }
            $this->entityManager->persist($image);
            $this->entityManager->flush();
        }
        return $this->render('admin/index.html.twig',[
            'form' => $form->createView(),
            'current_id' => $id,
        ]);
    } else {
        return $this->render('home/index.html.twig');
    }
}
}
