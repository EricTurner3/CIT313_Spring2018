<?php

//This class takes the view file and loads it with the data to be rendered.
class load {
    function view($filename, $data=null){
        if(is_array($data)){
            extract($data);
        }
        include 'views/' . $filename;
    }
}