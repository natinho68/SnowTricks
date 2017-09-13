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

        $videoJapan = new Video();
        $videoJapan->setTrick($this->getReference('japan'));
        $videoJapan->setVideoUrl('<iframe width="560" height="315" src="https://www.youtube.com/embed/vxBfXyQ_MB4" frameborder="0" allowfullscreen></iframe>');
        $manager->persist($videoJapan);

        $videoNoseGrab = new Video();
        $videoNoseGrab->setTrick($this->getReference('nose-grab'));
        $videoNoseGrab->setVideoUrl('<iframe width="560" height="315" src="https://www.youtube.com/embed/M-W7Pmo-YMY" frameborder="0" allowfullscreen></iframe>');
        $manager->persist($videoNoseGrab);


        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
