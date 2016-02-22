<?php  
session_start();
unset($_SESSION['adminlogin']);
setcookie("admincookie",NULL,time()-1);
header("location: login.php");

?>