<?php

namespace App\Repository;

use App\Entity\PricesTicket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PricesTicket|null find($id, $lockMode = null, $lockVersion = null)
 * @method PricesTicket|null findOneBy(array $criteria, array $orderBy = null)
 * @method PricesTicket[]    findAll()
 * @method PricesTicket[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PricesTicketRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PricesTicket::class);
    }

    // /**
    //  * @return PricesTicket[] Returns an array of PricesTicket objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PricesTicket
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
