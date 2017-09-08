<?php

namespace AppBundle\Manager;
use Doctrine\ORM\EntityManager;

class Manager
{

    /**
     *
     * @var EntityManager
     */
    protected $em;

    public function __construct(EntityManager $entityManager)
    {

        $this->em = $entityManager;
    }

    public function persist($entity)
    {
        $this->em->persist($entity);
    }

    public function flush()
    {
        $this->em->flush();
    }

}
