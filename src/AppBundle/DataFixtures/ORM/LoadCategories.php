<?php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\ORM\BaseLoader as BaseLoader;
use AppBundle\Entity\Category as Category;

class LoadCategories extends BaseLoader implements OrderedFixtureInterface
{


    function load(ObjectManager $manager)
    {
        $category = $this->getModelFixtures();
        foreach ($category['Category'] as $reference => $columns)
        {

            $category = new Category();
            $category->setName($columns['name']);

            {
                $manager->persist($category);
                $manager->flush();

                $this->addReference('Category_'. $reference, $category);
            }

        }

    }


    public function getModelFile()
    {
        return 'categories';
    }


    public function getOrder()
    {
        return 3;
    }
}