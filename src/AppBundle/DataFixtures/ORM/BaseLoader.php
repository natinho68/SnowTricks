<?php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Yaml\Yaml;
abstract class BaseLoader extends AbstractFixture implements ContainerAwareInterface
{
    /**
     * Return the file for the current model.
     */
    abstract function getModelFile();

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getModelFixtures()
    {
        $fixturesPath = __DIR__ . '/fixtures/';
        $fixtures     = Yaml::parse(file_get_contents( $fixturesPath . $this->getModelFile(). '.yml', true));
        return $fixtures;
    }
}