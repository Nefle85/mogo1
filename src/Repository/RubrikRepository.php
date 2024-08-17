<?php

namespace App\Repository;

use App\Entity\Rubrik;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rubrik>
 */
class RubrikRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rubrik::class);
    }


    public function findByRubrik(Rubrik $rubrik): array //AJOUT BY LEV lev 170824
            {
            return $this->createQueryBuilder('p')
            ->andWhere('p.rubrik = :rubrik')
            ->setParameter('rubrik', $rubrik)
            ->getQuery()
            ->getResult();
        }

    //    /**
    //     * @return Rubrik[] Returns an array of Rubrik objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Rubrik
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
