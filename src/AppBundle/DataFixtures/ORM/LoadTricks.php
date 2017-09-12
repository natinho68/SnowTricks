<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Trick;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadTricks extends AbstractFixture implements OrderedFixtureInterface{

    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $grabTail = new Trick();
        $grabTail->setName('Grab Tail');
        $grabTail->setDate(new \DateTime('now'));
        $grabTail->setDescription('This is a Grab tail');
        $grabTail->setCategories($this->getReference('categoryGrabTail'));
        $grabTail->setAuthor($this->getReference('admin-user'));
        $grabTail->setSlug('grab-tail');
        // On le persiste
        $manager->persist($grabTail);
        $this->addReference('grab-tail', $grabTail);

        $trick2 = new Trick();
        $trick2->setName('Nose grab');
        $trick2->setDate(new \DateTime('now'));
        $trick2->setDescription('This is a Nose grab');
        $trick2->setCategories($this->getReference('categorySpin'));
        $trick2->setAuthor($this->getReference('admin-user'));
        $trick2->setSlug('nose-grab');
        // On le persiste
        $manager->persist($trick2);

        $trick3 = new Trick();
        $trick3->setName('japan');
        $trick3->setDate(new \DateTime('now'));
        $trick3->setDescription('This is a japan');
        $trick3->setAuthor($this->getReference('admin-user'));
        $trick3->setSlug('japan');
        // On le persiste
        $manager->persist($trick3);
        // On déclenche l'enregistrement de tous les tricks
        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}
