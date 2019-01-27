<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testIfWeGetFirstName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('saurass');

        $this->assertEquals($user->getFirstName(), 'saurass');
    }

    public function testForUserData()
    {
        $user = new \App\Models\User;

        $user->setFirstName('saurass');
        $user->setLastName('sri');

        $userData = $user->getUserData();

        $this->assertArrayHasKey('firstname', $userData);
        $this->assertArrayHasKey('lastname', $userData);

        $this->assertEquals($user->getFullName(), 'saurass sri');
    }
}