<?php

namespace App\Repository;

use App\Entity\WinePairing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WinePairing|null find($id, $lockMode = null, $lockVersion = null)
 * @method WinePairing|null findOneBy(array $criteria, array $orderBy = null)
 * @method WinePairing[]    findAll()
 * @method WinePairing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WinePairingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WinePairing::class);
    }

    // /**
    //  * @return WinePairing[] Returns an array of WinePairing objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WinePairing
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
