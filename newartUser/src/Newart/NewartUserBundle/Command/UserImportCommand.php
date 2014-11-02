<?php

namespace Newart\NewartUserBundle\Command;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\EntityManager;
use Newart\NewartUserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class UserImportCommand
 *
 * @package Newart\NewartUserBundle
 */
class UserImportCommand extends ContainerAwareCommand
{
    // Nos constantes pour ne pas utiliser trop de chiffre dans le code
    const USER_ID = 0;
    const USER_ACCOUNT_ID = 1;
    const USER_COVER_PICTURE_ID = 2;
    const USER_FIRST_NAME = 3;
    const USER_LAST_NAME = 4;
    const USER_BIRTHDAY = 5;
    const USER_CATEGORY= 6;
    const USER_BIOGRAPHY= 7;
    const USER_PHONE= 8;
    const USER_COUNTRY= 9;
    const USER_FEATURING_DATE = 10;


    /**
     * {@inherit}
     */
    protected function configure()
    {
        $this
            ->setName('newart:user:import')
            ->setDescription('Import Users from previous website')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ouvre le csv en mode lecture seul
        $fp = fopen(__DIR__.'/../Resources/csv/user.csv', 'r');

        // importation des fonctions permettant de d'executer les requêtes
        /** @var Registry $registry */
        $registry = $this->getContainer()->get('doctrine');

        $i = 1;
        while (false !== $user = fgetcsv($fp, ',')) {
            /** @var User $currentUser */
            $currentUser = new User();
            $currentUser->setAccountId($user[self::USER_ACCOUNT_ID]);
            $currentUser->setBiography($user[self::USER_BIOGRAPHY]);
            $birthday = new \DateTime();
            $birthday->createFromFormat('d-m-Y H:m:s', $user[self::USER_BIRTHDAY]);
            $currentUser->setBirthday($birthday);
            $currentUser->setCategory($user[self::USER_CATEGORY]);
            $currentUser->setCountry($user[self::USER_COUNTRY]);
            $currentUser->setCoverPictureId($user[self::USER_COVER_PICTURE_ID]);
            $featuringDate = new \DateTime();
            $featuringDate->createFromFormat('d-m-Y H:m:s', $user[self::USER_FEATURING_DATE]);
            $currentUser->setFeaturingDate($featuringDate);
            $currentUser->setFirstName($user[self::USER_FIRST_NAME]);
            $currentUser->setLastName($user[self::USER_LAST_NAME]);
            $currentUser->setPhone($user[self::USER_PHONE]);

            $registry->getManager()->persist($currentUser);
            $registry->getManager()->flush();

            if ($this->isVerbose($input))
                $output->writeln('User create'.$user[self::USER_ID]);

            $i++;
        }
    }

    private function isVerbose(InputInterface $input)
    {
        if ($input->getOption('verbose'))
            return true;
        else
            return false;
    }
} 