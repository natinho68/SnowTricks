<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Trick;

class LoadTricks implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $trick1 = new Trick();
        $trick1->setName('Grab Tail');
        $trick1->setDate(new \DateTime('now'));
        $trick1->setDescription('This is a Grab tail');
        $trick1->setAuthor('nathan');
        $trick1->setSlug('grab-tail');
        // On le persiste
        $manager->persist($trick1);

        $trick2 = new Trick();
        $trick2->setName('Nose grab');
        $trick2->setDate(new \DateTime('now'));
        $trick2->setDescription('This is a Nose grab');
        $trick2->setAuthor('joanna');
        $trick2->setSlug('nose-grab');
        // On le persiste
        $manager->persist($trick2);

        $trick3 = new Trick();
        $trick3->setName('japan');
        $trick3->setDate(new \DateTime('now'));
        $trick3->setDescription('This is a japan');
        $trick3->setAuthor('henri');
        $trick3->setSlug('japan');
        // On le persiste
        $manager->persist($trick3);
        // On déclenche l'enregistrement de tous les tricks
        $manager->flush();
    }
}