<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 2/21/18
 * Time: 1:50 PM
 */

class user extends model{


    //Sets a name for the author to be called and returned


    function __construct()
    {
        parent::__construct();
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

    function getName($id, $first, $last, $email, $role){

        return array (
            'id' => $id,
            'first' => $first,
            'last' => $last,
            'email' => $email,
            'role' => $role
        );
    }
}