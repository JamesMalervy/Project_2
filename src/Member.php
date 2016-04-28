<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 30/03/2016
 * Time: 15:52
 */

namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseTable;

/**
 * Class Member
 * @package Itb
 * extends the database
 */
class Member extends DatabaseTable
{
    /**
     * @var
     * store id
     */
    private $id;
    /**
     * @var
     * title variable
     */
    private $title;
    /**
     * student id
     * @var
     */
    private $studentId;
   // private $supervisorId;
    /**
     * @var
     * password variable
     */
    private $password;
    /**
     * @var
     * the project id
     */
    private $projectId;
    /**
     * @var
     * status variable
     */
    private $status;
    /**
     * @var
     * past of present project
     */
    private $pastPresent;
    /**
     * @var
     * variable name
     */
    private $name;



    /**
     * @return mixed
     * get passt or presnt
     */
    public function getPastPresent()
    {
        return $this->pastPresent;
    }

    /**
     * @param mixed $pastPresent
     * set the past or present
     */
    public function setPastPresent($pastPresent)
    {
        $this->pastPresent = $pastPresent;
    }

    /**
     * @return mixed
     * get the name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * set the name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     * get the status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * return status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * @param mixed $title
     * set the title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixedadmin.html.twig
     * get the id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * set hte id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     * set student
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @param mixed $studentId
     * set the student
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }


   /* public function getSupervisorId()
    {
        return $this->supervisorId;
    }


    public function setSupervisorId($supervisorId)
    {
        $this->supervisorId = $supervisorId;
    }*/

    /**
     * @return mixed
     * get password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * set the password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     * get the project id
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param mixed $projectId
     * set the project id
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

}