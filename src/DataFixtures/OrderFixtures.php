<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Order;
use App\Repository\OrderRepository;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OrderFixtures extends Fixture
{
    public function __construct(private OrderRepository $repo) {}

    public function load(ObjectManager $manager): void
    {
        $order1 = new Order();
        $order1->setDate(new DateTimeImmutable('2023-04-01'));      
        $order1->setProduits([['idProduit' => 1, 'qte' => 5]]);
        $order1->setNomClient('testnom'); 
        $order1->setPrenomClient('testprenom');
        $order1->setAdresseClient('123 avenue du test 69009 Lyon 9'); 
        $order1->setTelClient('612345679'); 

        $manager->persist($order1);


        $order2 = new Order();
        $order2->setDate(new DateTimeImmutable('2023-04-01'));
        $order2->setProduits([['idProduit' => 4, 'qte' => 6],['idProduit' => 1, 'qte' => 5]]);
        $order2->setNomClient('testnom2'); 
        $order2->setPrenomClient('testprenom2');
        $order2->setAdresseClient('456 avenue du test2 69009 Lyon 9'); 
        $order2->setTelClient('600000019');

        $manager->persist($order2);


        $order3 = new Order();
        $order3->setDate(new DateTimeImmutable('2023-04-01'));
        $order3->setProduits([['idProduit' => 5, 'qte' => 10],['idProduit' => 4, 'qte' => 6],['idProduit' => 1, 'qte' => 5]]);
        $order3->setNomClient('testnom3'); 
        $order3->setPrenomClient('testprenom3');
        $order3->setAdresseClient('789 avenue du test3 69009 Lyon 9'); 
        $order3->setTelClient('600000001');

        $manager->persist($order3);

        
        $manager->flush();   
    }
}