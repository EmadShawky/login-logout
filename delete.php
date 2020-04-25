<?php
    require "db.php";
    if ( isset($_GET['id'])){
        $id=$_GET['id'];
       
     }
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div>
            <h2>Do you want to delete this ?!!!</h2>
        </div>
        <form method="post" action="delete_me.php">
        <input type="hidden" name="id" value="<?php echo $id ;?>">
        <input type="submit" value="delete">
        </form>
    </body>
</html>