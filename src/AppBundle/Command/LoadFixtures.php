<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\ORM\BaseLoader;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class LoadFixtures extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:load-datas')

            // the short description shown while running "php bin/console list"
            ->setDescription('Load datas fixtures.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to load all fixtures (users, images, tricks, comments) in the db...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $command2 = $this->getContainer()->get('app_bundle.command');
        $command2->getDatas();
        $command2->load();
    }
}
