<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 1/30/18
 * Time: 9:13 AM
 */

class admin_user extends user
{
    public function __construct($user_level, $user_id)
    {
        parent::__construct($user_level);
        $this->user_type = 2;
        $this->user_id = $user_id;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}