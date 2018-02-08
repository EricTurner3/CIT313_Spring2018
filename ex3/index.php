<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 1/30/18
 * Time: 8:28 AM
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);



/**************************************************************************
 * Autoload Classes and Display the classes loaded at the top of the page *
 **************************************************************************/
function myClasses($class){
    include_once('classes/'.$class.'.class.php');
    echo '<div class="classes"><ul>';
        echo '<li>'.strtolower($class).'.class.php loaded</li>';
    echo '</ul></div>';
}
spl_autoload_register('myClasses');

/*************************
 * Instantiate Variables *
 *************************/
$regUser = new registered_user('Regular User', 'barkerb');
$adminUser = new admin_user('Administrator','turnerec');

$regUser -> first_name = 'Bob';
$regUser -> last_name = 'Barker';
$regUser -> email_address = 'barkerb@iupui.edu';

$adminUser -> first_name = 'Eric';
$adminUser -> last_name = 'Turner';
$adminUser -> email_address = 'turnerec@iupui.edu';

?>

<!-- Styling for Class Loading Div -->
<style>
    .classes{
        color:green;
    }
</style>

<!-- Start of HTML Doc -->

<!DOCTYPE html>
<html>
    <head>
        <title>CIT313 - EX3</title>
    </head>
    <body>
    <hr class="classes">
    <h1>CIT 313 - Exercise 3</h1>
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
            echo '<li> Administrator Bonus Check: $' . admin_user::bonusCheckCalc(50,100) . '</li>';
        echo '</ul>';

    ?>
    <hr>
    <form method="post" action="results.php">
        <label for="firstname">First Name:</label><br>
        <input type="text" name="firstname" required><br>

        <label for="lastname">Last Name:</label><br>
        <input type="text" name="lastname" required><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br>

        <button type="submit">Submit</button>
    </form>
    </body>
</html>

<!-- Script to hide the classes displayed at the top of page after 2 seconds -->
<script>
    $('.classes').delay(1000).slideUp(1000);
</script>