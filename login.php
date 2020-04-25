<?php
    session_start ( );
    require "db.php";

    if(!isset($_SESSION["register"]))
            {
            header("location:index.php");
            };


            $email=$_POST['email'];
            $password=md5($_POST['password']);
            
            $emai=mysqli_real_escape_string($connection,$email);
            $password=mysqli_real_escape_string($connection,$password);

            $sql="SELECT * FROM `users` WHERE `mail`='$email' AND `password`='$password'";
            
            $run=mysqli_query($connection,$sql);
            
            if($rows=mysqli_fetch_array($run)){ 
                
                $_SESSION["user"] = $rows["id"];
                if(isset($_POST["remember"])){
                    $cookie_name = "remember";
                    $cookie_value = $rows["id"];
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                } 
            }
            header("location:index.php");
        
?>