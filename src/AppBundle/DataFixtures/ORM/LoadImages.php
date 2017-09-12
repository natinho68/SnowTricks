<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class LoadImages //extends AbstractFixture implements OrderedFixtureInterface
{
   // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  /*  public function load(ObjectManager $manager)
    {
        $imageGrabTail = new Image();
        $imageGrabTail->setTrick($this->getReference('grab-tail'));
        $imageGrabTail->setUpdatedAt(new \DateTimeImmutable());
        $file = new UploadedFile($imageGrabTail->getUploadDir() . '/63.jpeg', 'Image1', null, null, null);
        $imageGrabTail->setFile($file);
        $manager->persist($imageGrabTail);
        $manager->flush();

    }

    public function getOrder(){
        return 5;
    } */
}
