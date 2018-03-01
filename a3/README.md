Assignment 3 - MVC Pro Framework
==========

This Assignment was the creation of a MVC (Model, View, Controller)


```
 /root 
    ﹂/application
         ﹂/controllers
            ﹂controller.class.php
            ﹂addpostcontroller.class.php
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
            ﹂admin_footer.php
            ﹂admin_header.php
            ﹂footer.php
            ﹂header.php
         ﹂404.php
         ﹂addpost.php
         ﹂blog.php
         ﹂home.php
         ﹂login.php
         ﹂members.php
         ﹂register.php
    ﹂index.php
    ﹂README.md

```
This assignment has the following:

**Custom Touches**
- Set error reporting **OFF** in index.php for submission to have the presentation be cleaner
- Added Links to the Navbar on created content for convenience
- Added Edit Blog and return hyperlinks in the blog on posts for convenience

**Assignment Requirements**
- Modified Post Model to grab date, uID & category ID
- **BONUS:** Grabbed the Value of the category, and name of user for display on blog.php
- Added fields for date and a dropdown for category (**BONUS:** dropdown uses new custom Category model to retrieve Category name)
- Modified Post model to submit those new fields to the database
- Added a new function and task called update to the Post model
- Created a register.php view, registercontroller.php controller, logincontroller.php and a Users model for registration and login usage.
- Created a members.php view and memberscontroller.php controller to display all users of the site and allow each user to have a profile
