<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gajurel Admin Section</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<!-- jQuery file -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
$('#tabsmenu').tabify();
$(".toggle_container").hide(); 
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
	return false;
});
});
</script>
</head>
<body>
<div id="panelwrap">
  	
	<div class="header">
    <div class="title"><a href="index.php">Admin Pannel</a></div>
    
    <div class="header_right">Welcome <?php echo"Admin"  //include "includes/message.php"?>, <a href="#" class="settings">Settings</a> <a href="logout.php" class="logout">Logout</a> </div>
    
    <div class="menu">
    <ul>
    <li><a href="index.php" <?php echo $type=="index"?'class="selected"':""?>>Main page</a></li>
    <li><a href="users.php" <?php echo $type=="users"?'class="selected"':""?>>users</a></li>
    <li><a href="tab.php" <?php echo $type=="tab"?'class="selected"':""?>>tab</a></li>
    <li><a href="news.php" <?php echo $type=="news"?'class="selected"':""?>>news</a></li>
    <li><a href="gallery.php" <?php echo $type=="gallery"?'class="selected"':""?>>Gallery</a></li>
    <li><a href="#">Options</a></li>
    <li><a href="#">Admin settings</a></li>
    <li><a href="#">Help</a></li>
    </ul>
    </div>
    <?php if($type!=="index"){?>
    </div>
     <div class="submenu">
    <ul>
    <li><a href="?new" >New <?php echo ucfirst($type);?></a></li>
    <li><a href="?all" >View All <?php echo ucfirst($type);?></a></li>
    <li><a href="?search">search  <?php echo ucfirst($type);?></a></li>
    <li><a href="#">edit section</a></li>
    <li><a href="#">templates</a></li>
    </ul>
    </div>          
  
  <?php }?>