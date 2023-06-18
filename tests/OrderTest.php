<?php

namespace App\Tests\Entity;

use App\Entity\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testGetId()
    {
        $order = new Order();
        $order->setId(1); 
        $this->assertNotNull($order->getId());
    }

    public function testGetDate()
    {
        $order = new Order();
        $order->setDate(new \DateTimeImmutable('2023-04-01'));
        $this->assertEquals(new \DateTimeImmutable('2023-04-01'), $order->getDate());
    }

    public function testGetProduits()
    {
        $order = new Order();
        $order->setProduits(json_decode('[{"idProduit": 1, "qte": 5}]', true));
        $this->assertEquals([["idProduit" => 1, "qte" => 5]], $order->getProduits());
    }

    public function testGetNomClient()
    {
        $order = new Order();
        $order->setNomClient('testnom');
        $this->assertEquals('testnom', $order->getNomClient());
    }

    public function testGetPrenomClient()
    {
        $order = new Order();
        $order->setPrenomClient('testprenom');
        $this->assertEquals('testprenom', $order->getPrenomClient());
    }

    public function testGetAdresseClient()
    {
        $order = new Order();
        $order->setAdresseClient('123 avenue du test 69009 Lyon 9');
        $this->assertEquals('123 avenue du test 69009 Lyon 9', $order->getAdresseClient());
    }

    public function testGetTelClient()
    {
        $order = new Order();
        $order->setTelClient(612345679);
        $this->assertEquals(612345679, $order->getTelClient());
    }
}