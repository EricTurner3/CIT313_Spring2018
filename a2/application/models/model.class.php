<?php

abstract class model {

    //This is the logic of the application

    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;

    function __construct()
    {
       //ToDo: Implement __construct() method.
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