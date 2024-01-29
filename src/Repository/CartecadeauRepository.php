<?php

namespace App\Repository;

use App\Entity\Cartecadeau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cartecadeau>
 *
 * @method Cartecadeau|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cartecadeau|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cartecadeau[]    findAll()
 * @method Cartecadeau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartecadeauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cartecadeau::class);
    }

//    /**
//     * @return Cartecadeau[] Returns an array of Cartecadeau objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Cartecadeau
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
