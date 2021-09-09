<?php

namespace App\Repository;

use App\Classe\Search;
use App\Entity\Image;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Image|null find($id, $lockMode = null, $lockVersion = null)
 * @method Image|null findOneBy(array $criteria, array $orderBy = null)
 * @method Image[]    findAll()
 * @method Image[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Image::class);
    }


    public function findWithSearch(Search $search)
    {
        
        return $this->createQueryBuilder('i')
            ->andWhere('i.category = :val')
            ->setParameter('val', "$search->string")
            ->getQuery()
            ->getResult();
            
    }

    public function findMidgard($filter)
    {
        
        return $this->createQueryBuilder('i')
            ->andWhere('i.category = :val')
            ->setParameter('val', $filter)
            ->getQuery()
            ->getResult();
            
    }


    // public function findWithSearch(Search $search)
    // {
    //     return $this->createQueryBuilder('p')
    //         ->innerJoin("p.image", "h")
    //         ->where("h.category=:category")
    //         ->setParameter('category', $search)
    //         ->orderBy('p.id', 'ASC')
    //         ->setMaxResults(100)
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }





    // public function findOneBySomeField($search): ?Image
    // {
    //     return $this->createQueryBuilder('i')
    //         ->andWhere('i.category = :val')
    //         ->setParameter('val', $search)
    //         ->getQuery()
    //         ->getOneOrNullResult()
    //     ;
    // }

}
