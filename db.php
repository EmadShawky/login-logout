<?php
    $host="localhost";
    $user_name="root";
    $password="";
    $db_name="register_db";
    $connection=mysqli_connect($host,$user_name,$password,$db_name);
if(!$connection) die(mysqli_connect_error());
//else echo "connected";
?>