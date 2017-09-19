<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\ORM\BaseLoader as BaseLoader;
use AppBundle\Entity\Video as Video;

class LoadVideos extends BaseLoader implements OrderedFixtureInterface{


    public function load(ObjectManager $manager)
    {
        $video = $this->getModelFixtures();
        foreach ($video['Video'] as $reference => $columns)
        {

            $video = new Video();
            $video->setTrick($this->getReference('Trick_' . $columns['trick']));
            $video->setVideoUrl($columns['url']);

            {
                $manager->persist($video);
                $manager->flush();

            }

        }

    }

    public function getModelFile()
    {
        return 'videos';
    }

    public function getOrder()
    {
        return 5;
    }
}
