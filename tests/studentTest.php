<?php

namespace Itb;

use Itb\Student;

class studentTest extends \PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        // Arrange
        $student = new Student();
        $student->setId(1);
        $expectedResult = 1;

        // Act
        $result = $student->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetSuperVisor()
    {
        // Arrange
        $student = new Student();
        $student->setSuperVisor("Supervisor");
        $expectedResult = "Supervisor";

        // Act
        $result = $student->getSuperVisor();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetProject()
    {
        // Arrange
        $student = new Student();
        $student->setProject("GameGraphics");
        $expectedResult = "GameGraphics";

        // Act
        $result = $student->getProject();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetStudentNumber()
    {
        // Arrange
        $student = new Student();
        $student->setStudentNumber("GameGraphics");
        $expectedResult = "GameGraphics";

        // Act
        $result = $student->getStudentNumber();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetGrade()
    {
        // Arrange
        $student = new Student();
        $student->setGrade("grades");
        $expectedResult = "grades";

        // Act
        $result = $student->getGrade();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetStatus()
    {
        // Arrange
        $student = new Student();
        $student->setStatus("status");
        $expectedResult = "status";

        // Act
        $result = $student->getStatus();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function testGetName()
    {
        // Arrange
        $student = new Student();
        $student->setName("title");
        $expectedResult = "title";

        // Act
        $result = $student->getName();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }
    public function testGetPublication()
    {
        // Arrange
        $student = new Student();
        $student->setPublication("book");
        $expectedResult = "book";

        // Act
        $result = $student->getPublication();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetImage()
    {
        // Arrange
        $student = new Student();
        $student->setImage("picture");
        $expectedResult = "picture";

        // Act
        $result = $student->getImage();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }
}
