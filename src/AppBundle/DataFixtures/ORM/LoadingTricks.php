<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Category;
use Symfony\Component\Yaml\Yaml;
use AppBundle\Entity\Trick;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use FOS\UserBundle\Model\UserManager;
use UserBundle\Entity\User;


class LoadingTricks {


    private $em;
    private $fos;


    public function __construct(EntityManagerInterface $em, $fos)
    {
        $this->em = $em;
        $this->fos = $fos;
    }

    public function getDatas()
    {
        $fixturesPath = __DIR__ . '/fixtures/';
        $fixtures = Yaml::parse(file_get_contents( $fixturesPath .  'tricks.yml', true));
        return $fixtures;
    }

    public function load()
    {
        $trick = $this->getDatas();
        foreach ($trick['Trick'] as $reference => $columns) {

            $trick = new Trick();
            $trick->setName($columns['name']);
            $trick->setDate(new \DateTime('now'));
            $trick->setDescription($columns['description']);
            $category = new Category();
            $categories = $category->setName($columns['category']);
            $trick->setCategories($categories);
            $user = $this->fos->createUser();
            $user->setEmail($columns['email']);
            $user->setUsername($columns['author']);
            $user->setPlainPassword($columns['password']);
            $user->setEnabled(true);
            $user->setRoles(array('ROLE_USER'));
            $this->fos->updateUser($user);
            $trick->setAuthor($user);
            $trick->setSlug($columns['slug']);

            {
                $this->em->persist($trick);
                $this->em->flush();

            }

        }
    }


}
