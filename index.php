<?php
    require "db.php";

    session_start ();
    /*if(!isset($_SESSION["user_name"]))
        {
        header("location:index.php");
        };*/

        // if(isset($_COOKIE["remember"]) && $_COOKIE["remember"] !=""){
        //     echo $_COOKIE["remember"];
        //      //$_SESSION["user"]=$_COOKIE["remember"];
        //  }

         if(!isset($_SESSION["user"]) || !isset($_COOKIE["remember"])){
            $_SESSION["user"]=$_COOKIE["remember"];         
            header("location:login_form.php");
    }
    $id=$_SESSION["user"];
    $sql="SELECT * FROM `users` WHERE `id`='$id'";
    $z=mysqli_query($connection,$sql);
    
    

    if($rows=mysqli_fetch_array($z)){ 
        
         echo "hello ".$rows["fname"];
       // echo '<pre>';
       // print_r($rows);
       // echo '</pre>';
    }
    

    $sql2="SELECT id, fname, lname, password, mail FROM `users`";
    $q=mysqli_query($connection,$sql2);
    $data = [];


    if(mysqli_num_rows($q)>0){

        
         while($rows2=mysqli_fetch_assoc($q)){
                $data[] = [
                            'id' => $rows2["id"],
                            //'Name' => $rows2["fname"]. " " . $rows2["lname"],
                            'fname' => $rows2["fname"],
                            'lname' =>$rows2["lname"],
                            'password' => $rows2["password"],
                            'mail' => $rows2["mail"]
                          ];
            }
        
    }
    else{
        echo "0 results";
        $data = '0';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
                color: #588c7e;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
            }
            th{
                background-color: #588c7e;
                color: white;
            }
            tr:nth-child(even) {background-color: #f2f2f2}
        </style>
    </head>
    <body>

             <?php 
                 if(isset($_GET['status'])){
                        
                 
             ?>
             <h1><?php echo $_GET['status'];?></h1>
             <?php
                }
             ?>


            <?php if (isset($_SESSION['message'])): ?>
            <div class="msg">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                ?>
	</div>
<?php endif ?>
        <form id="my_form" action="logout.php" method="get">
        <div align="right">  
            <br/>
            <!-- <h3><a href="javascript:{document.getElementById('my_form').submit();}">logout</a></h3> -->
            <button type="submit">Logout</button>
        </div>
        </form><br>
        <a href="<?php echo 'add.php'?>">ADD</a>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
                <?php 
                    if($data != '0'){
                        for($i = 0; $i<count($data);$i++){
                        
                                         ?>
                                         <tr>
                                            <td><?php echo $data[$i]['id']; ?></td>
                                            <td><?php echo $data[$i]['fname']. ' ' .$data[$i]['lname']; ?></td>
                                            <td><?php echo $data[$i]['password']; ?></td>
                                            <td><?php echo $data[$i]['mail']; ?></td>
                                            <td><a href="<?php echo 'edit.php?id='.$data[$i]['id'];?>">Edit</a> <a href="<?php echo 'delete.php?id='.$data[$i]['id'] ?>" type="button" >Delete</a></td>
                                            
                                        <tr>  
                                        <?php 
                        }
                    }
                ?> 
        </table>
        
    </body>
</html>