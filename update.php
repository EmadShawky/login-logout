<?php
    require "db.php";
    if(isset($_POST)){
        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $password=$_POST['password'];
        $mail=$_POST['mail'];

        $sql="UPDATE users SET fname='$fname', lname='$lname', password='$password', mail='$mail'  WHERE id=$id ";
        if(mysqli_query($connection,$sql)){header("location:index.php?status=updated successfully");}
    else {header("location:index.php?status=error update");}
    }
?>