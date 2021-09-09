<?php

namespace App\Controller;

use App\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class TutosController extends AbstractController
{

    private $entityManager;

    public function __construct (EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/tutos", name="tutos")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {

        $filter = "tuto";
        $images = $this->entityManager->getRepository(Image::class)->findMidgard($filter);
        
        $images = $paginator->paginate(
            $images,
            $request->query->getInt('page',1),
            9
        );
        return $this->render('tutos/index.html.twig', [
            'images' => $images
        ]);
    }
}
