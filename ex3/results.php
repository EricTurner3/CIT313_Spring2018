<script  src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 2/8/18
 * Time: 9:16 AM
 */

/**************************************************************************
 * Autoload Classes and Display the classes loaded at the top of the page *
 **************************************************************************/
function myClasses($class){
    include_once('classes/'.$class.'.class.php');
}
spl_autoload_register('myClasses');

/*****************************
 * Retrieve Values from Form *
 *****************************/
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];


?>

<!DOCTYPE html>
<html>
    <head>
        <title>CIT313 - EX3</title>
        <link rel="stylesheet" type="text/css" href="css/loadingdots.css">
    </head>
    <body>
        <h1>CIT 313 - Exercise 3</h1>
        <h3>Object Oriented Programming - Results</h3>

        <!-- Display the values of the form back out to HTML-->

        <h4>Form Input:</h4>
        <ul>
            <li>First Name: <?php  echo $firstname ?></li>
            <li>Last Name: <?php  echo $lastname ?></li>
            <li>Email: <?php  echo $email ?></li>
        </ul>
        <hr>
        <h4>Register User Results</h4>
        <p class="fadeOut" style="color:goldenrod">Registering User <?php $firstname . ' ' .$lastname?> <div class="fadeOut spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></p>
        <?php
            $newuser = new registered_user('Regular User', 'newuser');
            $newuser -> first_name = $firstname;
            $newuser -> last_name = $lastname;
            $newuser -> email_address = $email;


            if($newuser instanceof registered_user){
                echo '<p class="fadeIn" style="display:none; color:green;">Success! '.$firstname . ' ' .$lastname . ' is now a Registered User</p>';
            }
            else{
                echo '<p class="fadeIn" style="display:none; color:red;">ERROR: '.$firstname . ' ' .$lastname . ' is NOT a Registered User';
            }
        ?>
        <a href="index.php"><< Return to Index.php</a>
    </body>
</html>

<script>
    $('.classes').delay(1000).slideUp(1000);
    $('.fadeOut').delay(1000).fadeOut(1000);
    $('.fadeIn').delay(2000).fadeIn(1000);
</script>