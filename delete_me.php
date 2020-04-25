<?php
    require "db.php";
    if(isset($_POST)){
        $id=$_POST['id'];
       $sql=" DELETE FROM users WHERE id=$id";
       if(mysqli_query($connection,$sql)){
        header("location:index.php?status=deleted successfully");
       }
       else{ header("location:index.php?status=deleted error");}
    }
       
?>