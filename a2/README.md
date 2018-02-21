Assignment 2 - MVC Framework
==========

This Assignment was the creation of a MVC (Model, View, Controller)


```
 /root 
    ﹂/application
         ﹂/controllers
            ﹂controller.class.php
         ﹂/models
            ﹂model.class.php
            ﹂user.class.php
         ﹂load.class.php
         ﹂router.php
    ﹂/views
         ﹂view.php
    ﹂index.php
    ﹂README.md

```
This assignment has the following:

- Completed framework from the video 2 tutorial lesson
- Separation of application classes into **controllers** and **models**
- Added Autoloader in **router.php**
    - Autoloader has mechanism to prevent errors using file_exists()
- Modified Model Class to abstract
- Created User class to extend Model
- Output User class into unordered list in **view.php**