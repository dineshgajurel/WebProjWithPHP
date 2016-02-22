<?php
//starting session
session_start();


if(isset($_COOKIE['admincookie'])){
	$_SESSION['adminlogin'] = $_COOKIE['admincookie'];
}
if(!isset($_SESSION['adminlogin'])){
	header("location: login.php");
	
}