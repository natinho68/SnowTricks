<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\DataFixtures\ORM\BaseLoader as BaseLoader;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUsers extends BaseLoader implements OrderedFixtureInterface, ContainerAwareInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = $this->getModelFixtures();

        foreach ($user['User'] as $reference => $columns)
        {
            $userManager = $this->container->get('fos_user.user_manager');
            $user = $userManager->createUser();
            $user->setEmail($columns['email']);
            $user->setUsername($columns['username']);
            $user->setProfilePic($this->getReference('Avatar_'.$columns['avatar']));
            $user->setPlainPassword($columns['password']);
            $user->setEnabled(true);
            $user->setRoles(array('ROLE_USER'));
            $this->addReference('User_'. $reference, $user);
            $userManager->updateUser($user);
        }

    }

    public function getModelFile()
    {
        return 'users';
    }

    /**
     * Sets the container.
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Get the order of this fixture
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }

}