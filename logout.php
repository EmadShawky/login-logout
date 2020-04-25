<?php
session_start();
unset($_SESSION["user"]);
setcookie("remember", "", time() - (86400 * 30), "/"); //ده مسار اللي بتشتغل فية الكوكيز اللي هو السلاش
header("location:login_form.php");
?>
 