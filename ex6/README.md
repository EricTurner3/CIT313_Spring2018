Exercise 6 - Framework Housecleaning
==========

This exercise added on to Exercise 5


```
 /root 
    ﹂/application
         ﹂/controllers
            ﹂controller.class.php
            ﹂managepostscontroller.class.php
            ﹂blogcontroller.class.php
            ﹂logincontroller.class.php
            ﹂memberscontroller.class.php
            ﹂registercontroller.class.php
         ﹂/models
            ﹂category.php
            ﹂model.php
            ﹂post.php
            ﹂user.php
         ﹂load.php
         ﹂router.php
    ﹂/views
         ﹂/elements
            ﹂footer.php
            ﹂header.php
         ﹂/404  
            ﹂index.php
         ﹂/blog
            ﹂index.php
            ﹂post.php         
         ﹂/home
            ﹂index.php
         ﹂/login
            ﹂index.php
         ﹂/manageposts
            ﹂add.php
            ﹂edit.php
            ﹂index.php
         ﹂/members
            ﹂index.php
            ﹂profile.php
         ﹂/register
            ﹂index.php
    ﹂index.php
    ﹂README.md

```
This assignment has the following:
- All views in their own subdirectories
- Fixed issue where posts couldn't be added because uID wasn't being passed in the view, controller or model.
- Fixed issue where the categories didn't display on add post page.

