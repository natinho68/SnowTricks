<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Video;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadVideos extends AbstractFixture implements OrderedFixtureInterface{

    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $videoGrabTail = new Video();
        $videoGrabTail->setTrick($this->getReference('grab-tail'));
        $videoGrabTail->setVideoUrl('<iframe width="560" height="315" src="https://www.youtube.com/embed/id8VKl9RVQw" frameborder="0" allowfullscreen></iframe>');
        $manager->persist($videoGrabTail);
        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
