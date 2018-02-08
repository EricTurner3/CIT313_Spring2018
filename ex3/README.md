Exercise 3 - OOP Part 2
==========

This exercise for PHP was over Object Oriented Programming.
It includes the following files:


``````
 /root   
    ﹂/classes
         ﹂admin_user.class.php
         ﹂registered_user.class.php
         ﹂user.class.php
    ﹂/css
         ﹂loadingdots.css
    ﹂index.php
    ﹂results.php
    ﹂README.md

``````
This exercise builds off of Exercise 2 and has the following changes:

- user.class.php is now an <i>abstract</i> class
- All classes in the <i>classes</i> folder are now autoloaded with the 
  <b>spl_autoload_register</b> magic method
- There is a new static method <i>bonusCheckCalc()</i> which displays
the amount of bonus an administrative user gets over a regular user. This
is displayed on the index.php page at the bottom of the admin
info
- A registration form has been added and the results of that form are displayed on<i>results.php</i>
- JQuery and CSS have been added to animate hide and show certain
elements when they are actually needed
