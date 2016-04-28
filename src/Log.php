<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 04/04/2016
 * Time: 16:49
 */

namespace Itb;

use Mattsmithdev\PdoCrud\DatabaseManager;
use Mattsmithdev\PdoCrud\DatabaseTable;

/**
 * Class Log
 * @package Itb
 */
class Log extends DatabaseTable
{
    /**
     * integer variable
     * @var
     */
    private $id;
    /**
     * password variable
     * @var
     */
    private $password;
    /**
     * position Varaiable
     * @var
     */
    private $position;



    /**
     * get the id
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
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * set the Position
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * get the password
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password
     * set the password
     */
   public function setPassword($password)
    {
        $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
        $this->password = $hashedPassword;
    }


}





