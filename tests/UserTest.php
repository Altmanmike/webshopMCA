<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetId()
    {
        $user = new User(); 
        $user->setId(1);               
        $this->assertNotNull($user->getId());
    }

    public function testGetEmail()
    {
        $user = new User();
        $user->setEmail('test@test.fr');
        $this->assertEquals('test@test.fr', $user->getEmail());
    }

    public function testGetRoles()
    {
        $user = new User();
        $user->setRoles(['ROLE_USER']);
        $this->assertEquals(['ROLE_USER'], $user->getRoles());
    }

    public function testGetPassword()
    {
        $user = new User();
        $user->setPassword('$2y$13$I1xCDVr2x/qmyl.sUN4gL.1QCns2ZrsHB4jh1WbzKGOni8H/1CFj6');
        $this->assertEquals('$2y$13$I1xCDVr2x/qmyl.sUN4gL.1QCns2ZrsHB4jh1WbzKGOni8H/1CFj6', $user->getPassword());
    }
}