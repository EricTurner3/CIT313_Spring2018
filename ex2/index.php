<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 1/30/18
 * Time: 8:28 AM
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Classes
include_once('classes/user.class.php');
include_once('classes/registered_user.class.php');
include_once('classes/admin_user.class.php');

//Init
$regUser = new registered_user('Regular User', 'barkerb');
$adminUser = new admin_user('Administrator','turnerec');

$regUser -> first_name = 'Bob';
$regUser -> last_name = 'Barker';
$regUser -> email_address = 'barkerb@iupui.edu';

$adminUser -> first_name = 'Eric';
$adminUser -> last_name = 'Turner';
$adminUser -> email_address = 'turnerec@iupui.edu';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>CIT313 - EX2</title>
    </head>
    <body>
    <h1>CIT 313 - Exercise 2</h1>
    <h3>Object Oriented Programming</h3>
    <?php
        echo '<ul>';
            echo '<li> User Level: ' . $regUser -> user_level . '</li>';
            echo '<li> User ID: ' . $regUser -> user_id . '</li>';
            echo '<li> User Type: ' . $regUser -> user_type . '</li>';
            echo '<li> First Name: '. $regUser -> first_name . '</li>';
            echo '<li> Last Name: ' . $regUser -> last_name . '</li>';
            echo '<li> Email Address: ' . $regUser ->email_address . '</li>';
        echo '</ul>';

        echo '<hr>';

        echo '<ul>';
            echo '<li> User Level: ' . $adminUser -> user_level . '</li>';
            echo '<li> User ID: ' . $adminUser -> user_id . '</li>';
            echo '<li> User Type: ' . $adminUser -> user_type . '</li>';
            echo '<li> First Name: '. $adminUser -> first_name . '</li>';
            echo '<li> Last Name: ' . $adminUser -> last_name . '</li>';
            echo '<li> Email Address: ' . $adminUser ->email_address . '</li>';
        echo '</ul>';
    ?>
    </body>
</html>