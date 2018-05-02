<?php include('views/elements/header.php');?>

<div class="container">
    <div class="page-header">
        <h1> Edit Profile </h1>
    </div>

    <div class="row">
        <div class="span8">

            <form id ="profile" action="<?php echo BASE_URL?>profile/submit" method="post" onsubmit="editor.post()">
                <label>First Name</label>
                <input type="text" class="span6" name="first_name" value="<?php echo $first_name; ?>" required>
                <br>
                <label>Last Name</label>
                <input type="text" class="span6" name="last_name" value="<?php echo $last_name; ?>" required>
                <br>
                <label>Email</label>
                <input type="email" class="span6" name="email" value="<?php echo $email; ?>" required>
                <br>
                <label>Password (LEAVE BLANK IF YOU DO NOT WISH TO CHANGE)</label>
                <input id="password" type="password" class="span6" name="password">
                <label>Confirm Pasword</label>
                <input id="confirm" type="password" class="span6" name="confirm">
                <br>
                <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
            </form>

            <!-- Don't display form on update only for register tasks -->
            <script>
                <?php
                    echo 'console.log("'.$currentAction.'");';
                if ($currentAction == 'newuser'){
                    echo 'document.getElementById("form").style.display ="block";';
                    echo 'document.getElementById("message").style.display = "none";';
                }
                else{
                    echo 'document.getElementById("form").style.display ="none";';
                    echo 'document.getElementById("message").style.display = "block";';
                }
                ?>
            </script>

        </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>

