<?php

namespace Itb;

use Itb\Publication;

class publicationTest extends \PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        // Arrange
        $publication = new Publication();
        $publication->setId(1);
        $expectedResult = 1;

        // Act
        $result = $publication->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetAuthorId()
    {
        // Arrange
        $publication = new Publication();
        $publication->setAuthorId("author");
        $expectedResult = "author";

        // Act
        $result = $publication->getAuthorId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }



    public function testGetUrl()
    {
        // Arrange
        $publication = new Publication();
        $publication->setUrl("url");
        $expectedResult = "url";

        // Act
        $result = $publication->getUrl();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testTitle()
    {
        // Arrange
        $publication = new Publication();
        $publication->setTitle("title");
        $expectedResult = "title";

        // Act
        $result = $publication->getTitle();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }
}
