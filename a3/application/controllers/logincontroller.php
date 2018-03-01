<?php

class LoginController extends Controller{


    public $userObject;

    public function do_login(){
        $this->userObject = new User();


    }



}