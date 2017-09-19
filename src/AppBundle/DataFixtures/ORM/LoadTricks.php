<?php

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\ORM\BaseLoader as BaseLoader;
use AppBundle\Entity\Trick as Trick;

class LoadTricks extends BaseLoader implements OrderedFixtureInterface{


    public function load(ObjectManager $manager)
    {

        $trick = $this->getModelFixtures();
        foreach ($trick['Trick'] as $reference => $columns)
        {

            $trick = new Trick();
            $trick->setName($columns['name']);
            $trick->setDate(new \DateTime('now'));
            $trick->setDescription($columns['description']);
            $trick->setCategories($this->getReference('Category_' . $columns['category']));
            $trick->setAuthor($this->getReference('User_' . $columns['author']));
            $trick->setSlug($columns['slug']);

            {
                $manager->persist($trick);
                $manager->flush();

                $this->addReference('Trick_'. $reference, $trick);
            }

        }

    }

    public function getModelFile()
    {
        return 'tricks';
    }

    public function getOrder()
    {
        return 4;
    }
}
