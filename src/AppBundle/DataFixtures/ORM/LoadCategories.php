<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AppBundle\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadCategories extends AbstractFixture implements OrderedFixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $categoryGrab = new Category();
        $categoryGrab->setName('Grab Tail');
        $manager->persist($categoryGrab);
        $manager->flush();
        $this->addReference('categoryGrabTail', $categoryGrab);

        $categorySpin = new Category();
        $categorySpin->setName('Spin');
        $manager->persist($categorySpin);
        $manager->flush();
        $this->addReference('categorySpin', $categorySpin);

        $categoryFlips = new Category();
        $categoryFlips->setName('Flips and Inverted Rotations');
        $manager->persist($categoryFlips);
        $manager->flush();
        $this->addReference('categoryFlips', $categoryFlips);

        $categoryStraight = new Category();
        $categoryStraight->setName('Straight airs');
        $manager->persist($categoryStraight);
        $manager->flush();
        $this->addReference('categoryStraight', $categoryStraight);

        $categorySlide = new Category();
        $categorySlide->setName('Slides');
        $manager->persist($categorySlide);
        $manager->flush();
        $this->addReference('categorySlides', $categorySlide);

    }

        public function getOrder()
    {
        return 2;
    }


}
