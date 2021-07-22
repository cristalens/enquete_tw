<?php

namespace App\Repository;

use App\Entity\Questions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Questions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Questions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Questions[]    findAll()
 * @method Questions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Questions::class);
    }

    // /**
    //  * @return Questions[] Returns an array of Questions objects with their bloc
    //  */
    public function findQuestionByBloc()
    {
        $conn = $this->getEntityManager()->getConnection();
        $stmt = $conn->prepare("
           SELECT q.id, q.question, b.nom_bloc, b.id AS bloc 
           FROM questions q
           JOIN bloc b ON b.id = q.id_bloc
        ");

        $stmt->execute();
        return $stmt->fetchAllAssociative();

        // return $this->createQueryBuilder('q')
        //     ->select('q.question, q.id_bloc, b.nom_bloc')
        //     // ->join('q.id_bloc', 'b')
        //     // ->where('q.id_bloc = 4')
        //     // ->setParameter('val', $value)
        //     // ->orderBy('q.id', 'ASC')
        //     // ->setMaxResults(10)
        //     ->getQuery()
        //     ->getResult();
    }


    // /**
    //  * @return Questions[] Returns an array of Questions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Questions
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
