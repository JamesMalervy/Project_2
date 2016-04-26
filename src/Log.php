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

class Log extends DatabaseTable
{
    private $id;
    private $password;
    private $position;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**********************************************************/
   public function setPassword($password)
    {
        $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
        $this->password = $hashedPassword;
    }

    public static function canFindMatchingUsernameAndPassword($username, $password)
    {
        $user = Log::getOneByUsername($username);
        // var_dump($user);
        //die();
        // if no record has this username, return FALSE
        if(null == $user)
        {
            return false;
        }

        // hashed correct password
        $hashedStoredPassword = $user->getPassword();

        return password_verify($password, $hashedStoredPassword);
    }

    public static function FindingRole($username)
    {
        $user = Login::getOneByUsername($username);

        if(null == $user)
        {
            return false;
        }

        // hashed correct password
        //$hashedStoredPassword = $user->getPassword();

        return $user->getPosition();
    }

    /**
     * if record exists with $username, return User object for that record
     * otherwise return 'null'
     *
     * @param $username
     *
     * @return mixed|null
     */

    public static function getOneByUsername($username)
    {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        $sql = 'SELECT * FROM logins WHERE username=:username';
        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, \PDO::PARAM_STR);
        $statement->setFetchMode(\PDO::FETCH_CLASS, __CLASS__);
        $statement->execute();

        if ($object = $statement->fetch())
        {
            return $object;
        } else {
            return null;
        }
    }
}





