<?php

class controller {
    public $load;
    public $model;

    function __construct()
    {
        $this->load = new load();
        $this->model = new user();
        $this->home();
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

    //This talks to the Model and the Load Helper Class
    function home(){
        //Variable Declarations for Model
        $id = "turnerec";
        $fname = "Eric";
        $lname = "Turner";
        $email = "turnerec@iupui.edu";
        $role = "Admin";

        $data = $this->model->getName($id, $fname, $lname, $email, $role);
        //Pass the view.php as the view and load it with $data
        $this->load->view('view.php', $data);
    }
}