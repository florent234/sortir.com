<?php

namespace App\Repository;

use App\Entity\Csv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Csv|null find($id, $lockMode = null, $lockVersion = null)
 * @method Csv|null findOneBy(array $criteria, array $orderBy = null)
 * @method Csv[]    findAll()
 * @method Csv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CsvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Csv::class);
    }
    
}
