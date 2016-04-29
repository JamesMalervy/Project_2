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
     *store id
     * @var
     */
    private $id;
    /**
     * title variable
     * @var
     *
     */
    private $title;
    /**
     * student id
     * @var
     */
    private $studentId;
   // private $supervisorId;
    /**
     * password variable
     * @var
     *
     */
    private $password;
    /**
     * the project id
     * @var
     *
     */
    private $projectId;
    /**
     * status variable
     * @var
     *
     */
    private $status;
    /**
     * past of present project
     * @var
     *
     */
    private $pastPresent;
    /**
     * variable name
     * @var
     *
     */
    private $name;



    /**
     * get passt or presnt
     * @return mixed
     *
     */
    public function getPastPresent()
    {
        return $this->pastPresent;
    }

    /**
     * set the past or present
     * @param mixed $pastPresent
     *
     */
    public function setPastPresent($pastPresent)
    {
        $this->pastPresent = $pastPresent;
    }

    /**
     * get the name
     * @return mixed
     *
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * set the name
     * @param mixed $name
     *
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *  get the status
     * @return mixed
     *
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *  return status
     * @param mixed $status
     *
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
     * set the title
     * @param mixed $title
     *
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * get the id
     * @return mixedadmin.html.twig
     *
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * get the id
     * @param mixed $id
     * set hte id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * set student
     * @return mixed
     *
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * set the student
     * @param mixed $studentId
     *
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
     * get password
     * @return mixed
     *
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * set the password
     * @param mixed $password
     *
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * get the project id
     * @return mixed
     *
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     *  set the project id
     * @param mixed $projectId
     *
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
}
