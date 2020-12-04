<?php


class AuthTest extends \PHPUnit\Framework\TestCase
{
    public function testLogin()
    {
        $auth = new \app\services\Auth();
        $login = 'user';
        $this->assertTrue($auth->login($login));
    }
}