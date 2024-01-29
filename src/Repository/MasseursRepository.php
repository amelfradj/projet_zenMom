<?php

namespace App\Repository;

use App\Entity\Masseurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Masseurs>
 *
 * @method Masseurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Masseurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Masseurs[]    findAll()
 * @method Masseurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MasseursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Masseurs::class);
    }

//    /**
//     * @return Masseurs[] Returns an array of Masseurs objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Masseurs
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
