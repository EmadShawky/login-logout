<?php
    require "db.php";
?>

<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
        <div>
            <h2>Login form</h2>
            <form action="login.php" method="post">
                <div>
                    <label>EMail</label>
                    <input name="email" placeholder="Email" type="email">
                    
                </div><br>
                <div>2
                    <label>Password</label>
                    <input name="password" placeholder="password" type="password" >
                </div><br>
                <div>
                    <input type="checkbox" name="remember"/>  
                    <label for="remember-me">Remember me</label> 
                </div><br>
                <div>
                    <input type="submit" name="login" value="Log In">
                    <span>or <a href="">New user</a></span>
                </div>
            </form>
        </div>
    </body>
</html>