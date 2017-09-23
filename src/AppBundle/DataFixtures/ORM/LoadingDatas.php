<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Category;
use Symfony\Component\Yaml\Yaml;
use AppBundle\Entity\Trick;
use AppBundle\Entity\Image;
use AppBundle\Entity\Video;
use AppBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use FOS\UserBundle\Model\UserManager;
use UserBundle\Entity\User;


class LoadingDatas {


    private $em;
    private $fos;


    public function __construct(EntityManagerInterface $em, $fos)
    {
        $this->em = $em;
        $this->fos = $fos;
    }

    public function getDatas($file)
    {
        $fixturesPath = __DIR__ . '/fixtures/';
        $fixtures = Yaml::parse(file_get_contents( $fixturesPath .  $file .'.yml', true));
        return $fixtures;
    }

    public function loadAvatars()
    {
        $avatar = $this->getDatas('avatars');
        foreach ($avatar['Avatar'] as $reference => $columns) {
            foreach ($columns['avatar'] as $item) {
                $avatar = new Image();
                $avatar->setUpdatedAt(new \DateTimeImmutable());
                copy($avatar->getFixturesPath() . $item, $avatar->getFixturesPath() . $item . '-copy.jpg');
                $file = new UploadedFile($avatar->getFixturesPath() . $item . '-copy.jpg', $item, null, null, null, true);
                $avatar->setImageFile($file);
                $this->em->persist($avatar);
                $this->em->flush();
            }
        }
    }

    public function loadUsers()
    {

        $user = $this->getDatas('users');
        foreach ($user['User'] as $reference => $columns)
        {
            $userManager = $this->fos;
            $user = $userManager->createUser();
            $user->setEmail($columns['email']);
            $user->setUsername($columns['username']);
            $user->setPlainPassword($columns['password']);
            $user->setEnabled(true);
            $avatar = 'AppBundle\Entity\Image';
            $setAvatar = $this->em->find($avatar, $columns['avatar']);
            $user->setProfilePic($setAvatar);
            $user->setRoles(array('ROLE_USER'));
            $userManager->updateUser($user);
        }
        $this->em->flush();
    }

    public function loadCategories()
    {

        $category = $this->getDatas('categories');
        foreach ($category['Category'] as $reference => $columns) {
            $category = new Category();
            $category->setName($columns['name']);
            $this->em->persist($category);

        }
        $this->em->flush();
    }

    public function loadTricks()
    {
        $trick = $this->getDatas('tricks');
        foreach ($trick['Trick'] as $reference => $columns)
        {
            $trick = new Trick();
            $trick->setName($columns['name']);
            $trick->setDate(new \DateTime('now'));
            $trick->setDescription($columns['description']);
            $cat = 'AppBundle\Entity\Category';
            $setCat = $this->em->find($cat, $columns['category']);
            $trick->setCategories($setCat);
            $user = 'UserBundle\Entity\User';
            $setUser = $this->em->find($user, $columns['author']);
            $trick->setAuthor($setUser);
            $trick->setSlug($columns['slug']);
            $this->em->persist($trick);
        }
        $this->em->flush();
    }

    public function loadVideos()
    {
        $video = $this->getDatas('videos');
        foreach ($video['Video'] as $reference => $columns) {
            $video = new Video();
            $trick = 'AppBundle\Entity\Trick';
            $setTrick = $this->em->find($trick, $columns['trick']);
            $video->setTrick($setTrick);
            $video->setVideoUrl($columns['url']);
            $this->em->persist($video);
        }
        $this->em->flush();
    }

    public function loadImages()
    {
        $image = $this->getDatas('images');

        foreach ($image['Image'] as $reference => $columns) {
            foreach ($columns['image'] as $item) {
                $image = new Image();
                $trick = 'AppBundle\Entity\Trick';
                $setTrick = $this->em->find($trick,$columns['trick']);
                $image->setTrick($setTrick);
                $image->setUpdatedAt(new \DateTimeImmutable());
                copy($image->getFixturesPath() . $item, $image->getFixturesPath() . $item . '-copy.jpg');
                $file = new UploadedFile($image->getFixturesPath() . $item . '-copy.jpg', $item, null, null, null, true);
                $image->setImageFile($file);
                $this->em->persist($image);
                $this->em->flush();
            }
        }
    }

    public function loadComments()
    {
        $comment = $this->getDatas('comments');
        foreach ($comment['Comment'] as $reference => $columns) {
            $comment = new Comment();
            $trick = 'AppBundle\Entity\Trick';
            $setTrick = $this->em->find($trick, $columns['trick']);
            $comment->setTrick($setTrick);
            $comment->setDate(new \DateTime('now'));
            $user = 'UserBundle\Entity\User';
            $setUser = $this->em->find($user, $columns['user']);
            $comment->setAuthor($setUser);
            $comment->setContent($columns['content']);
            $this->em->persist($comment);
        }

        $this->em->flush();
    }
}
