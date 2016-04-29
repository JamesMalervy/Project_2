<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 11/04/2016
 * Time: 17:08
 */

namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseTable;

/**
 * Class Student
 * @package Itb
 * extends database
 */
class Student  extends DatabaseTable
{
    /**
     * id variable
     * @var
     */
    private $id;
    /**
     * student number
     * @var
     */

    /**
     * image
     * @var
     */
    private $image;


    /**
     * student number
     * @var string
     */
    private $studentNumber;
    /**
     * supervisor
     * @var
     */
    private $supervisor;
    /**
     * project
     * @var
     */
    private $project;
    /**
     * status
     * @var
     */
    private $status;
    /**
     * grade
     * @var
     */
    private $grade;
    /**
     * name
     * @var
     */
    private $name;

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
     * get student number
     * @return mixed
     */
    public function getStudentNumber()
    {
        return $this->studentNumber;
    }

    /**
     * set student number
     * @param mixed $studentNumber
     */
    public function setStudentNumber($studentNumber)
    {
        $this->studentNumber = $studentNumber;
    }

    /**
     * set suopervisor
     * @return mixed
     */
    public function getSupervisor()
    {
        return $this->supervisor;
    }

    /**
     * set supervisor
     * @param mixed $supervisor
     */
    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
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
     * set project
     * @param mixed $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * get status
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * set status
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * get grade
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * set grade
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
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
     * set image
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * set image
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}
