<?php

class RegisterController extends Controller{

    public $userObject;

    public function defaultTask(){
        $this->set('currentAction','newuser');
        $this->userObject = new User();
        $this->set('task', 'newuser');

    }

    public function newuser(){
        $this->set('currentAction','newuser');

        $this->userObject = new User();


        //On submit the info will be sent to registered and the form will be hidden on the view
        $this->set('task', 'registered');

    }

    public function registered(){
        $this->set('currentAction','registered');
        $this->userObject = new User();

        $data = array('email'=>$_POST['email'],'password'=>$_POST['password'], 'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name']);

        $result = $this->userObject->addUser($data);

        $this->set('message', $result);

        $this->set('task', 'newuser');
    }



}
