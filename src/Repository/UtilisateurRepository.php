<?php

namespace App\Repository;

use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @method Utilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilisateur[]    findAll()
 * @method Utilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }


    public function findByUserName($UserName)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->andWhere('u.username = $UserName');
        $query=$qb->getQuery();
        // return $query->getResult();
        ;
    }

    public function findByUserMail($mailSaisie)
    {
        return $this->createQueryBuilder('u')
                ->where("u.email = :email")
            ->setParameter('email', $mailSaisie)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }


}
