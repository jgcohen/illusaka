<?php

namespace App\Controller;

use App\Classe\Search;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Image;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class GalerieController extends AbstractController
{

    private $entityManager;

    public function __construct (EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/galerie", name="galerie")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {   
        $images =$this->entityManager->getRepository(Image::class)->findAll();

        $images = $paginator->paginate(
            $images,
            $request->query->getInt('page',1),
            9
        );

        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $images = $this->entityManager->getRepository(Image::class)->findWithSearch($search);
            
           
        }
        
        return $this->render('galerie/index.html.twig',[
            'images' => $images,
            'form' =>$form->createView()
        ]);
    }

    /**
     * @Route("/illustration/{id}", name="illustration")
     */
    public function illustration( $id)
    {   
        $image = $this->entityManager->getRepository(Image::class)->find($id);
        return $this->render('single/image.html.twig',[
            'image' => $image,
        ]);
    }
}
