<?php

use PHPUnit\Framework\TestCase;

require_once('password-generator.php');

class PasswordGeneratorTest extends TestCase
{

    public function testGeneratePassword()
    {
        $password = generatePassword();
        $this->assertGreaterThanOrEqual(8, strlen($password));
        $this->assertLessThanOrEqual(16, strlen($password));
        $this->assertMatchesRegularExpression('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!@#$%^&*()\-_=+\[\]{}|;:,.<>?]).{8,16}$/', $password);
    }

}