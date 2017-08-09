<?php

namespace AppBundle\Repository;

/**
 * CommentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCommentsTrick($trickId)
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c')
            ->where('c.trick = :trick_id')
            ->addOrderBy('c.created')
            ->setParameter('trick_id', $trickId);

        return $qb->getQuery()
            ->getResult();
    }

}
