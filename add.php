<?php
    require "db.php";
?>

<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <div>
            <h2>ADD</h2>
        </div>
        <form method="post" action="add_me.php">
        <input type="hidden" name="id" value="<?php echo $id ;?>">
            <div>
                <label>First Name</label>
                <input type="text" name="fname" placeholder="First Name">
            </div><br>
            <div>
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last Name">
            </div><br>
            <div>
                <label>password</label>
                <input type="password" name="pass" placeholder="password">
            </div><br>
            <div>
                <label>confirm password</label>
                <input type="password" name="cpass" placeholder="confirm password">
            </div><br>
            <div>
                <label>email address</label>
                <input type="email" name="mail" placeholder="email address">
            </div><br>
            
            <input type="submit" value="register">
        </form>
    </body>
</html>
