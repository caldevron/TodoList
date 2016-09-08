<?php

namespace tests;

use App\Model\User;
use PHPUnit\Framework\TestCase;

class UserTest extends Testcase
{

    /** @test */
    public function createUser()
    {
        $user = new User([1, 'Björn']);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('1', $user->getId());
        $this->assertEquals('Björn', $user->getName());
    }
}
