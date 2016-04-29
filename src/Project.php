<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 01/04/2016
 * Time: 23:40
 */

namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseTable;

/**
 * extends database
 * Class Project
 * @package Itb
 */
class Project extends DatabaseTable
{
    /**
     * id variable
     * @var
     */
    private $id;
    /**
     * supervisor varaiable
     * @var
     */
    private $supervisor;
    /**
     * group variable
     * @var
     */
    private $group;
    /**
     * status variable
     * @var
     */
    private $status;
    /**
     * title varaible
     * @var
     */
    private $title;
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
     * get supervisor
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
     * get the group
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * set the group
     * @param mixed $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
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
     * get the title
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * set the title
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
