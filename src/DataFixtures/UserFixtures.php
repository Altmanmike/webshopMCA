<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function __construct(private UserRepository $repo) {}

    public function load(ObjectManager $manager): void
    {
        // Génération d'une DataFixtures de fausses données d'utilisateurs via FakerPHP
        $faker = Factory::create('fr_FR');

        $user = new User();
        $user->setEmail('test@test.fr');
        $user->setRoles(["ROLE_USER"]);
        $user->setPassword('$2y$13$I1xCDVr2x/qmyl.sUN4gL.1QCns2ZrsHB4jh1WbzKGOni8H/1CFj6'); 
        
        $manager->persist($user); 


        for($i=1; $i < 49; $i++)
        {
            $user = new User();
            $user->setEmail($faker->email());
            $user->setRoles(["ROLE_USER"]);
            $user->setPassword(substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',10)),0,25));       

            $manager->persist($user);        
        }  
        
        $manager->flush();   
    }
}
