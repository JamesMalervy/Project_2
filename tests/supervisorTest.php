<?php

namespace Itb;

use Itb\Supervisor;

class supervisorTest extends \PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        // Arrange
        $supervisor = new Supervisor();
        $supervisor->setId(1);
        $expectedResult = 1;

        // Act
        $result = $supervisor->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetStudentId()
    {
        // Arrange
        $supervisor = new Supervisor();
        $supervisor->setStudentId("student");
        $expectedResult = "student";

        // Act
        $result = $supervisor->getStudentId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetProject()
    {
        // Arrange
        $supervisor = new Supervisor();
        $supervisor->setProject("GameGraphics");
        $expectedResult = "GameGraphics";

        // Act
        $result = $supervisor->getProject();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetStatus()
    {
        // Arrange
        $supervisor = new Supervisor();
        $supervisor->setStatus("status");
        $expectedResult = "status";

        // Act
        $result = $supervisor->getStatus();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetPastPresent()
    {
        // Arrange
        $supervisor = new Supervisor();
        $supervisor->setPastPresent("GameGraphics");
        $expectedResult = "GameGraphics";

        // Act
        $result = $supervisor->getPastPresent();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }






    public function testGetName()
    {
        // Arrange
        $supervisor = new Supervisor();
        $supervisor->setName("title");
        $expectedResult = "title";

        // Act
        $result = $supervisor->getName();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }
    public function testGetPublication()
    {
        // Arrange
        $supervisor = new Supervisor();
        $supervisor->setPublication("publications");
        $expectedResult = "publications";

        // Act
        $result = $supervisor->getPublication();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }
}
