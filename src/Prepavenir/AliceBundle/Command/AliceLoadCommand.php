<?php

namespace Prepavenir\AliceBundle\Command;

use Doctrine\ORM\Tools\SchemaTool;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AliceLoadCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('alice:load') // Nom de la commande
            ->setDescription('Charge les fichiers de fixture Alice') // Description de la commande
            ->addArgument('fixturePath', InputArgument::REQUIRED, 'Chemin vers le fichier YAML')
            ->addOption('drop', null, InputOption::VALUE_NONE, 'Supprime les tables précédentes')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // vaut le chemin vers le fichier YAML (sans la racine permettant d'écrire le chemin absolu)
        $fixturePath = $input->getArgument('fixturePath');

        // vaut le chemin de la racine du projet 'kernel.root_dir' + 1 remontée de dossier '/../'
        $projectPath = $this->getContainer()->getParameter('kernel.root_dir').  '/../';
        // vaut le chemin absolu vers le fichier YAML
        $fixturePath = $projectPath . $fixturePath;

        // // TEST //
        if (!file_exists($fixturePath)){
            $output->writeln('Erreur : le chemin spécifié est introuvable');
            return;
        }

        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        if ($input->getOption('drop')) {
            $tool = new SchemaTool($em);
            $metadatas = $em->getMetadataFactory()->getAllMetadata();
            $tool->dropSchema($metadatas);
            $tool->createSchema($metadatas);
        }

        $objects = \Nelmio\Alice\Fixtures::load($fixturePath, $em, [
            'locale' => 'fr_FR',   // Option 'langue'
            'seed' => time(),       // Option pour le 'random'
        ]);

        $output->writeln('Objet insérés :' . count($objects));
    }

}
