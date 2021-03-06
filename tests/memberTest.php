<?php

namespace Itb;

use Itb\Member;

class memberTest extends \PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        // Arrange
        $member = new Member();
        $member->setId(1);
        $expectedResult = 1;

        // Act
        $result = $member->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetTitle()
    {
        // Arrange
        $member = new Member();
        $member->setTitle("Title");
        $expectedResult = "Title";

        // Act
        $result = $member->getTitle();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetMemberId()
    {
        // Arrange
        $member = new Member();
        $member->setStudentId("student");
        $expectedResult = "student";

        // Act
        $result = $member->getStudentId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetPassword()
    {
        // Arrange
        $member = new Member();
        $member->setPassword("password");
        $expectedResult = "password";

        // Act
        $result = $member->getPassword();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testProjectId()
    {
        // Arrange
        $member = new Member();
        $member->setProjectId("project");
        $expectedResult = "project";

        // Act
        $result = $member->getProjectId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testStatus()
    {
        // Arrange
        $member = new Member();
        $member->setStatus("status");
        $expectedResult = "status";

        // Act
        $result = $member->getStatus();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testPastPresent()
    {
        // Arrange
        $member = new Member();
        $member->setPastPresent("past");
        $expectedResult = "past";

        // Act
        $result = $member->getPastPresent();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testName()
    {
        // Arrange
        $member = new Member();
        $member->setName("name");
        $expectedResult = "name";

        // Act
        $result = $member->getName();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }
    public function testGetPublication()
    {
        // Arrange
        $member = new Member();
        $member->setPublication("book");
        $expectedResult = "book";

        // Act
        $result = $member->getPublication();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetImage()
    {
        // Arrange
        $member = new Member();
        $member->setImage("picture");
        $expectedResult = "picture";

        // Act
        $result = $member->getImage();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }
}
