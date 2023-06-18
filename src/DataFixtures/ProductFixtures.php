<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function __construct(private ProductRepository $repo) {}

    public function load(ObjectManager $manager): void
    {
        $product1 = new Product();
        $product1->setNom('Machine a cafe 1');
        $product1->setDescription('Ceci est la description de la machine 1 cette description est juste un exemple permettant de voir la place que prend la description dans l\'application');
        $product1->setPrix(99);
        $product1->setQteStock(900);
        //$product1->setImage('');   
  
        $manager->persist($product1);


        $product2 = new Product();
        $product2->setNom('Machine a cafe 2');
        $product2->setDescription('Ceci est la description de la machine 2 elle est plus courte');
        $product2->setPrix(20);
        $product2->setQteStock(100);
        $product2->setImage('https://revendeur.dev-integration-altman-69.fr/public/assets/img/scene.glb');  

        $manager->persist($product2);


        $product3 = new Product();
        $product3->setNom('Machine a cafe 3');
        $product3->setDescription('Ceci est la description de la machine 3');
        $product3->setPrix(200);
        $product3->setQteStock(500);
        $product3->setImage('NULL');  

        $manager->persist($product3);


        $product4 = new Product();
        $product4->setNom('Machine a cafe 4');
        $product4->setDescription('Ceci est la description de la machine 4');
        $product4->setPrix(1200);
        $product4->setQteStock(100);
        $product4->setImage('https://revendeur.dev-integration-altman-69.fr/public/assets/img/scene.glb');  

        $manager->persist($product4);


        $product5 = new Product();
        $product5->setNom('Machine a cafe 5');
        $product5->setDescription('Ceci est la description de la machine 5');
        $product5->setPrix(120);
        $product5->setQteStock(10);
        $product5->setImage('https://revendeur.dev-integration-altman-69.fr/public/assets/img/scene.glb');  

        $manager->persist($product5);


        $product6 = new Product();
        $product6->setNom('string');
        $product6->setDescription('string');
        $product6->setPrix(0);
        $product6->setQteStock(0);
        $product6->setImage('string'); 

        $manager->persist($product6);
        

        $manager->flush();   
    }
}
