<?php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\ORM\BaseLoader as BaseLoader;
use AppBundle\Entity\Image as Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class LoadAvatars extends BaseLoader implements OrderedFixtureInterface{
    public function load(ObjectManager $manager)
    {
        $avatar = $this->getModelFixtures();
        foreach ($avatar['Avatar'] as $reference => $columns) {
            foreach ($columns['avatar'] as $item) {
                $avatar = new Image();
                $avatar->setUpdatedAt(new \DateTimeImmutable());
                copy($avatar->getFixturesPath() . $item, $avatar->getFixturesPath() . $item . '-copy.jpg');
                $file = new UploadedFile($avatar->getFixturesPath() . $item . '-copy.jpg', $item, null, null, null, true);
                $avatar->setImageFile($file);
                $manager->persist($avatar);
                $manager->flush();
                $this->addReference('Avatar_' . $reference, $avatar);
            }
        }
    }
    public function getModelFile()
    {
        return 'avatars';
    }
    public function getOrder(){
        return 1;
    }
}