<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class LoadImages extends AbstractFixture implements OrderedFixtureInterface
{
   // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $imageGrabTail = new Image();
        $imageGrabTail->setTrick($this->getReference('grab-tail'));
        $imageGrabTail->setUpdatedAt(new \DateTimeImmutable());
        copy($imageGrabTail->getFixturesPath() . 'D3_Snow.jpg', $imageGrabTail->getFixturesPath() . 'D3_Snow-copy.jpg');
        $file = new UploadedFile($imageGrabTail->getFixturesPath() . 'D3_Snow-copy.jpg', 'Image1', null, null, null, true);
        $imageGrabTail->setFile($file);
        $manager->persist($imageGrabTail);

        $imageNoseGrab = new Image();
        $imageNoseGrab->setTrick($this->getReference('nose-grab'));
        $imageNoseGrab->setUpdatedAt(new \DateTimeImmutable());
        copy($imageNoseGrab->getFixturesPath() . '73.jpeg', $imageNoseGrab->getFixturesPath() . '73-copy.jpg');
        $file = new UploadedFile($imageNoseGrab->getFixturesPath() . '73-copy.jpg', 'Image2', null, null, null, true);
        $imageNoseGrab->setFile($file);
        $manager->persist($imageNoseGrab);

        $imageJapan = new Image();
        $imageJapan->setTrick($this->getReference('japan'));
        $imageJapan->setUpdatedAt(new \DateTimeImmutable());
        copy($imageJapan->getFixturesPath() . '63.jpeg', $imageJapan->getFixturesPath() . '63-copy.jpeg');
        $file = new UploadedFile($imageJapan->getFixturesPath() . '63-copy.jpeg', 'Image3', null, null, null, true);
        $imageJapan->setFile($file);
        $manager->persist($imageJapan);
        $manager->flush();

    }

    public function getOrder(){
        return 5;
    }
}
