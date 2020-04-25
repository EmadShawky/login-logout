<?php
    require "db.php";
    // fname lname pass cpass image mail phone

    function check($var){
        if (empty($var)) return false;
        $var=trim($var);
        $var=strip_tags($var);
        $var=stripslashes($var);
        return $var;
    }
    //echo check ($_POST['fname']);
    $fname=check($_POST['fname']);
    $lname=check($_POST['lname']);
    $pass=check($_POST['pass']);
    $cpass=check($_POST['cpass']);
    $mail=check($_POST['mail']);

    if(!$fname) $error['fname']="please insert a first name";
    else if(strlen($fname)>20) $error['fname']="too large first name";
    
    if(!$lname) $error['lname']="please insert a last name";
    else if(strlen($lname)>20) $error['lname']="too large last name";
    
    if(!$pass || !$cpass) $error['pass']="insert a valid pass and confirm";
    else if($pass!=$cpass) $error['pass']="password mismatch";
    else if(strlen($pass)>20) $error['pass']="too large password"; 
    else $pass=md5($pass);
    
    if(!filter_var($mail,FILTER_VALIDATE_EMAIL)) $error['mail']="insert a valid email";
    
    
    /*if(empty($error)){
        $sql="INSERT INTO `users`(`fname`, `lname`, `password`, `mail`) VALUES ('$fname','$lname','$pass','$mail')";
        if(mysqli_query($connection,$sql)) echo "registerition completed and your id is".mysqli_insert_id($connection)."<a href='index.php'>click for login</a>";
        //else echo "error";
        else echo mysql_error($connection);*/
        
        if(empty($error)){
        $sql="INSERT INTO `users`(`fname`, `lname`, `password`, `mail`) VALUES ('$fname','$lname','$pass','$mail')";
        if(mysqli_query($connection,$sql)) echo "registerition completed and your id is".mysqli_insert_id($connection)."<a href='index.php'>click for login</a>";
        //else echo "error";
        else echo mysql_error($connection);
    }
    else{
        foreach($error as $e) echo $e."<br>";
    };

    //else{
    //foreach($error as $e){
     //       echo $e."<br>";
     // }
    //};
?>