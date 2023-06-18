<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testGetId()
    {
        $product = new Product();  
        $product->setId(1);       
        $this->assertNotNull($product->getId());
    }

    public function testGetNom()
    {
        $product = new Product();
        $product->setNom('Machine a cafe 1');
        $this->assertEquals('Machine a cafe 1', $product->getNom());
    }

    public function testGetDescription()
    {
        $product = new Product();
        $product->setDescription('Ceci est la description de la machine a cafe numero 1');
        $this->assertEquals('Ceci est la description de la machine a cafe numero 1', $product->getDescription());
    }

    public function testGetPrix()
    {
        $product = new Product();
        $product->setPrix(99);
        $this->assertEquals(99, $product->getPrix());
    }

    public function testGetQteStock()
    {
        $product = new Product();
        $product->setQteStock(900);
        $this->assertEquals(900, $product->getQteStock());
    }

    public function testGetImage()
    {
        $product = new Product();
        $product->setImage('https://revendeur.dev-integration-altman-69.fr/public/assets/img/scene.glb');
        $this->assertEquals('https://revendeur.dev-integration-altman-69.fr/public/assets/img/scene.glb', $product->getImage());
    }
}