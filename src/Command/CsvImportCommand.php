<?php

namespace App\Command;

use App\Entity\Utilisateur;
use DateTime;
use League\Csv\Exception;
use League\Csv\Reader;
use League\Csv\Statement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;


class CsvImportCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();

        $this->em = $em;
    }

    protected function configure()
    {
        $this->setName('csv:import')
            ->setDescription('Import d\'un fichier CSV');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Tentative d\'import du fichier');

        $reader = Reader::createFromPath('%kernel.root_dir%/../src/Data/data.csv');
        /// Debut de récupération d'utilisateur dans le fichier
        $reader->setHeaderOffset(0);

        // Nombre d'utilisateur importé (limit) et a partir de quel utilisateur de la lsite csv on commence
        try {
            $stmt = (new Statement())
                ->offset(0)
                ->limit(10);
        } catch (Exception $e) {
        }

        $records = $stmt->process($reader);

        // Affichage d'une bar de progression dans le terminal//
        $io->progressStart(iterator_count($records));

        foreach($records as $row)
        {

            $utilisateur = new Utilisateur();

             $utilisateur->setUsername($row['username']);
             $utilisateur->setNom($row['nom']);
             $utilisateur->setPrenom($row['prenom']);
             $utilisateur->setEmail($row['email']);
             // Remplacement des espaces du format de téléphone fourni //
             $telephone = str_replace( " ", "", $row['telephone']);
             $utilisateur->setTelephone($telephone );
             /////////
             //hasher le mot de passe !!!!???
            ///////////
             $utilisateur->setPassword($row['password']);

             // Avancement de la bar de recherche/////
             $io->progressAdvance();
             ////////////////////////////////////////
            ///
             // Récupération de la date en string, modification en DateTime
            try {
                $date = new DateTime($row['dateCreation']);
            } catch (\Exception $e) {
            }
             $utilisateur->setDateCreation($date);

             $utilisateur->setAdministrateur($row['administrateur']);
             $utilisateur->setActif($row['actif']);
             $utilisateur->setCampus($row['campus']);
             // Récupérer une photo en même temps?? autre fochier ??
             $utilisateur->setNomPhoto("null");

            $this->em->persist($utilisateur);
        }
        $this->em->flush();
        $io->progressFinish();

        $io->success('Fichier téléchargé avec succes');

        return 200;
    }
}