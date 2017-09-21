<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\ORM\BaseLoader as BaseLoader;
use AppBundle\Entity\Image as Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class LoadImages extends BaseLoader implements OrderedFixtureInterface{

    public function load(ObjectManager $manager)
    {
        $image = $this->getModelFixtures();

        foreach ($image['Image'] as $reference => $columns) {
            foreach ($columns['image'] as $item) {
                $image = new Image();
                $image->setTrick($this->getReference('Trick_' . $columns['trick']));
                $image->setUpdatedAt(new \DateTimeImmutable());
                copy($image->getFixturesPath() . $item, $image->getFixturesPath() . $item . '-copy.jpg');
                $file = new UploadedFile($image->getFixturesPath() . $item . '-copy.jpg', $item, null, null, null, true);
                $image->setImageFile($file);
                $manager->persist($image);
                $manager->flush();

            }
        }

    }


    public function getModelFile()
    {
        return 'images';
    }

    public function getOrder(){
        return 6;
    }
}
