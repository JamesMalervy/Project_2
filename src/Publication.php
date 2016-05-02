<?php
/**
 * publication class
 */
/**
 * Created by PhpStorm.
 * User: James
 * Date: 23/03/2016
 * Time: 15:55
 */

namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseTable;

/**
 * Class Publication
 * @package Itb
 * extends database
 */
class Publication extends DatabaseTable
{
    /**
     * id variable
     * @var
     */
    private $id;
    /**
     * title variable
     * @var
     */
    private $title;
    /**
     * author id
     * @var
     */
    private $authorId;
    /**
     * url
     * @var
     */
    private $url;
    /**
     * get id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * set id
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * get title
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * set title
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * get author
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * set author
     * @param mixed $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * get url
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * set url
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
