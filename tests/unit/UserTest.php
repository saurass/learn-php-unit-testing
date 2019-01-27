<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
    public $user;

    public function setUp()
    {
        $this->user = new \App\Models\User;
    }

    public function testIfWeGetFirstName()
    {
        $this->user->setFirstName('saurass');

        $this->assertEquals($this->user->getFirstName(), 'saurass');
    }

    public function testForUserData()
    {
        $this->user->setFirstName('saurass');
        $this->user->setLastName('sri');

        $userData = $this->user->getUserData();

        $this->assertArrayHasKey('firstname', $userData);
        $this->assertArrayHasKey('lastname', $userData);

        $this->assertEquals($this->user->getFullName(), 'saurass sri');
    }
}