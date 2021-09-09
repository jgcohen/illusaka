<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Image;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;


class MidgardController extends AbstractController
{

    private $entityManager;

    public function __construct (EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/midgard", name="midgard")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $filter = "midgard";
        $images = $this->entityManager->getRepository(Image::class)->findMidgard($filter);
        
        $images = $paginator->paginate(
            $images,
            $request->query->getInt('page',1),
            9
        );
        
        return $this->render('midgard/index.html.twig', [
            'images' => $images
        ]);
    }
}
