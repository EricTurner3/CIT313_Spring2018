<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 1/30/18
 * Time: 8:12 AM
 */

class user
{
    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;
    protected $user_level;

    public function __construct($user_level)
    {
        $this->user_level = $user_level;
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