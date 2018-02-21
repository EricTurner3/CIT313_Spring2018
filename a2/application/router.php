<?php

/*Helper class which instantiates the Controller class
require_once 'application/load.class.php';
require_once 'application/models/model.class.php';
require_once 'application/controllers/controller.class.php';
*/

/**************************************************************************
 * Autoload Classes and Display the classes loaded at the top of the page *
 **************************************************************************/
function myClasses($class){
    //Directories
    $applicationDir = 'application/';
    $controllersDir = 'application/controllers/';
    $modelsDir = 'application/models/';
    $classExtension = '.class.php';


    //Load all of the classes without throwing errors
    if(file_exists($applicationDir . $class . $classExtension)){
        include_once($applicationDir . $class . $classExtension);
    }
    else if (file_exists($controllersDir . $class . $classExtension)){
        include_once($controllersDir . $class . $classExtension);
    }
    else if (file_exists($modelsDir . $class . $classExtension)){
        include_once($modelsDir . $class . $classExtension);
    }
    else{
        trigger_error($class . " not found!");
    }



}
spl_autoload_register('myClasses');

    new controller();
?>