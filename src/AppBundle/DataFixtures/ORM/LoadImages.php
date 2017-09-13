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
        $imageGrabTail1 = new Image();
        $imageGrabTail1->setTrick($this->getReference('grab-tail'));
        $imageGrabTail1->setUpdatedAt(new \DateTimeImmutable());
        copy($imageGrabTail1->getFixturesPath() . 'grabtail1.jpg', $imageGrabTail1->getFixturesPath() . 'grabtail1-copy.jpg');
        $file = new UploadedFile($imageGrabTail1->getFixturesPath() . 'grabtail1-copy.jpg', 'grabtail1', null, null, null, true);
        $imageGrabTail1->setFile($file);
        $manager->persist($imageGrabTail1);

        $imageGrabTail2 = new Image();
        $imageGrabTail2->setTrick($this->getReference('grab-tail'));
        $imageGrabTail2->setUpdatedAt(new \DateTimeImmutable());
        copy($imageGrabTail2->getFixturesPath() . 'grabtail2.jpg', $imageGrabTail2->getFixturesPath() . 'grabtail2-copy.jpg');
        $file = new UploadedFile($imageGrabTail2->getFixturesPath() . 'grabtail2-copy.jpg', 'grabtail2', null, null, null, true);
        $imageGrabTail2->setFile($file);
        $manager->persist($imageGrabTail2);

        $imageGrabTail3 = new Image();
        $imageGrabTail3->setTrick($this->getReference('grab-tail'));
        $imageGrabTail3->setUpdatedAt(new \DateTimeImmutable());
        copy($imageGrabTail3->getFixturesPath() . 'grabtail3.jpg', $imageGrabTail3->getFixturesPath() . 'grabtail3-copy.jpg');
        $file = new UploadedFile($imageGrabTail3->getFixturesPath() . 'grabtail3-copy.jpg', 'grabtail3', null, null, null, true);
        $imageGrabTail3->setFile($file);
        $manager->persist($imageGrabTail3);

        $imageNoseGrab1 = new Image();
        $imageNoseGrab1->setTrick($this->getReference('nose-grab'));
        $imageNoseGrab1->setUpdatedAt(new \DateTimeImmutable());
        copy($imageNoseGrab1->getFixturesPath() . 'nosegrab1.jpg', $imageNoseGrab1->getFixturesPath() . 'nosegrab1-copy.jpg');
        $file = new UploadedFile($imageNoseGrab1->getFixturesPath() . 'nosegrab1-copy.jpg', 'nosegrab1', null, null, null, true);
        $imageNoseGrab1->setFile($file);
        $manager->persist($imageNoseGrab1);

        $imageNoseGrab2 = new Image();
        $imageNoseGrab2->setTrick($this->getReference('nose-grab'));
        $imageNoseGrab2->setUpdatedAt(new \DateTimeImmutable());
        copy($imageNoseGrab2->getFixturesPath() . 'nosegrab2.jpg', $imageNoseGrab2->getFixturesPath() . 'nosegrab2-copy.jpg');
        $file = new UploadedFile($imageNoseGrab2->getFixturesPath() . 'nosegrab2-copy.jpg', 'nosegrab2', null, null, null, true);
        $imageNoseGrab2->setFile($file);
        $manager->persist($imageNoseGrab2);

        $imageNoseGrab3 = new Image();
        $imageNoseGrab3->setTrick($this->getReference('nose-grab'));
        $imageNoseGrab3->setUpdatedAt(new \DateTimeImmutable());
        copy($imageNoseGrab3->getFixturesPath() . 'nosegrab3.jpg', $imageNoseGrab3->getFixturesPath() . 'nosegrab3-copy.jpg');
        $file = new UploadedFile($imageNoseGrab3->getFixturesPath() . 'nosegrab3-copy.jpg', 'nosegrab3', null, null, null, true);
        $imageNoseGrab3->setFile($file);
        $manager->persist($imageNoseGrab3);



        $imageJapan1 = new Image();
        $imageJapan1->setTrick($this->getReference('japan'));
        $imageJapan1->setUpdatedAt(new \DateTimeImmutable());
        copy($imageJapan1->getFixturesPath() . 'japan1.jpg', $imageJapan1->getFixturesPath() . 'japan1-copy.jpg');
        $file = new UploadedFile($imageJapan1->getFixturesPath() . 'japan1-copy.jpg', 'japan1', null, null, null, true);
        $imageJapan1->setFile($file);
        $manager->persist($imageJapan1);

        $imageJapan2 = new Image();
        $imageJapan2->setTrick($this->getReference('japan'));
        $imageJapan2->setUpdatedAt(new \DateTimeImmutable());
        copy($imageJapan2->getFixturesPath() . 'japan2.jpg', $imageJapan2->getFixturesPath() . 'japan2-copy.jpg');
        $file = new UploadedFile($imageJapan2->getFixturesPath() . 'japan2-copy.jpg', 'japan2', null, null, null, true);
        $imageJapan2->setFile($file);
        $manager->persist($imageJapan2);


        $manager->flush();

    }

    public function getOrder(){
        return 5;
    }
}
