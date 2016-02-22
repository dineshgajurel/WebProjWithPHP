<?php
session_start();
include "includes/dbconfig.php";
if(isset($_POST['login'])){
$username="username";
$password="passsword";
$sql="select *from users where username='$username' and password='$password' and status='1'";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);

if(!$data){
	if(isset($_POST['rem'])){
		$time=time()+60*60*60;
		setcookie("admincookie",$username,$time);
		}
	
	
		$_SESSION['adminlogin']= $username;
	header("location: index.php");
	//$success="Welcome $username";
}
	else{$error="Invalid username and password";}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panelo - Free Admin Template</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="loginpanelwrap">
  	<?php include "includes/message.php"?>
	<div class="loginheader">
    
    <div class="logintitle"><a href="login.php">login to continue!!!!!</a></div>
    </div>

     <form action="" method="post">
    <div class="loginform">
        
        <div class="loginform_row">
        <label>Username:</label>
        <input type="text" class="loginform_input" name="username" placeholder="Give your username" id="username" />
        </div>
        <div class="loginform_row">
        <label>Password:</label>
        <input type="password" class="loginform_input" name="password" placeholder="Give your Valid password" id="password" />
        </div>
        <div class="loginform_row">
          <label for="rem">
             <input type="checkbox" name="rem" id="rem" />
            Rememberme 
          </label>
          <input name="login" type="submit" class="loginform_submit" id="login" value="Login" />
      </div> 
        <div class="clear"></div>
    </div>
     </form>
 

</div>

    	
</body>
</html>