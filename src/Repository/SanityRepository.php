<?php

namespace App\Repository;

use App\Entity\Sanity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sanity>
 *
 * @method Sanity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sanity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sanity[]    findAll()
 * @method Sanity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SanityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sanity::class);
    }

//    /**
//     * @return Sanity[] Returns an array of Sanity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Sanity
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
