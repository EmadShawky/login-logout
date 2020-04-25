<?php
    require "db.php";
    if ( isset($_GET['id'])){
        $id=$_GET['id'];
        $sql = "SELECT * FROM users WHERE id=$id ";
        $edit=mysqli_query($connection,$sql);
        if(mysqli_num_rows($edit)>0){

            while($rows2=mysqli_fetch_assoc($edit)){
                   $fname=$rows2['fname'];
                   $lname=$rows2['lname'];
                   $password=$rows2['password'];
                   $mail=$rows2['mail'];
       }}
       else{
           echo "0 results";
           $data = '0';
       }
     }
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div>
            <h2>Edit</h2>
        </div>
        <form method="post" action="update.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ;?>">
            <div>
                <label>First Name</label>
                <input type="text" name="fname" placeholder="First Name" value="<?php echo $fname; ?>">
            </div><br>
            <div>
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>">
            </div><br>
            <div>
                <label>password</label>
                <input type="password" name="password" placeholder="password" value="<?php echo $password; ?>">
            </div><br>
            <div>
                <label>email address</label>
                <input type="email" name="mail" placeholder="email address" value="<?php echo $mail; ?>">
            </div><br>
            
            <input type="submit" value="update">
        </form>
    </body>
</html>