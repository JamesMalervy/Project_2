<?php

namespace Itb;
use Itb\Log;



class logTest extends \PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        // Arrange
        $log = new Log();
        $log->setId(1);
        $expectedResult = 1;

        // Act
        $result = $log->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function testGetPassword()
    {
        // Arrange
        $log = new Log();
        $password = "password";
        $expectedResult = $password;

        $log->setPassword( $expectedResult);

        // Act
        $result = $log->getPassword();
        $bool = password_verify("password", $result);
        // Assert
        $this->assertTrue($bool);
    }

    public function testGetPosition()
    {
        // Arrange
        $log = new Log();
        $log->setPosition("level");
        $expectedResult = "level";

        // Act
        $result = $log->getPosition();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


}
