<?php
/**
 * class for supervisor
 */
/**
 * Created by PhpStorm.
 * User: James
 * Date: 01/05/2016
 * Time: 14:51
 */

namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseTable;

/**
 * Class Supervisor
 * @package Itb
 */
class Supervisor extends DatabaseTable
{
    /**
     * id variable
     * @var
     */
    private $id;
    /**
     * student variable
     * @var
     */
    private $studentId;
    /**
     * project variable
     * @var
     */
    private $project;
    /**
     * status
     * @var
     */
    private $status;
    /**
     * past or present
     * @var
     */
    private $pastPresent;
    /**
     * past present
     * @var
     */
    private $name;
    /**
     * variable for publications
     * @var
     */
    private $publication;
    /**
     * image
     * @var
     */
  //  private $image;

    /**
     * get the id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * set the id
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * get student id
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * set the student id
     * @param mixed $studentId
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }

    /**
     * get the project
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * set the project
     * @param mixed $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * get the status
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * set the status
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * get past present
     * @return mixed
     */
    public function getPastPresent()
    {
        return $this->pastPresent;
    }

    /**
     * set past present
     * @param mixed $pastPresent
     */
    public function setPastPresent($pastPresent)
    {
        $this->pastPresent = $pastPresent;
    }

    /**
     * get name
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * set name
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * get the publication
     * @return mixed
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * set the publication
     * @param mixed $publication
     * not shown on coverage
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    }

    /**
     * get image
     * @return mixed
     */
/*    public function getImage()
    {
        return $this->image;
    }

    /**
     * set image
     * @param mixed $image
     */
 /*   public function setImage($image)
    {
        $this->image = $image;
    } */
}
