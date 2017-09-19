<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\ORM\BaseLoader as BaseLoader;
use AppBundle\Entity\Comment as Comment;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class LoadComments extends BaseLoader implements OrderedFixtureInterface{

    public function load(ObjectManager $manager)
    {

        $comment = $this->getModelFixtures();
        foreach ($comment['Comment'] as $reference => $columns)
        {

            $comment = new Comment();
            $comment->setTrick($this->getReference('Trick_' . $columns['trick']));
            $comment->setDate(new \DateTime('now'));
            $comment->setAuthor($this->getReference('User_' . $columns['user']));
            $comment->setContent($columns['content']);

            {
                $manager->persist($comment);
                $manager->flush();

                $this->addReference('Trick_'. $reference, $comment);
            }

        }

    }



    public function getModelFile()
    {
        return 'comments';
    }

    public function getOrder(){
        return 7;
    }
}
