<?php 
include "admin/includes/dbconfig.php";

$title="Csit Activity club";
$desc="the club of csit";

//from tab
if(isset($_GET['url'])){
	$url=$_GET['url'];
	$s="select *from tab where url='$url' and status='1'";
     $q=mysql_query($s);
	 $d=mysql_fetch_array($q);
	 if($d){
		 $title=$d['seotitle'];
		 $desc=$d['seodesc'];
		 }
	}
	
	
	
	
	//from image
if(isset($_GET['image'])){
	$iurl=$_GET['image'];
	$is="select *from news where url='$iurl' and status='1'";
     $iq=mysql_query($is);
	 $imd=mysql_fetch_array($iq);
	 //print_r($imd);
	
	}
	
	
	
	
	
	
	
	
	
	//from page
if(isset($_GET['page'])){
	$url=$_GET['page'];
	$s="select *from news where url='$url' and status='1'";
     $q=mysql_query($s);
	 $d=mysql_fetch_array($q);
	 if($d){
		 $title=$d['title'];
		 $desc=$d['summary'];
		 }
	}
?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?>-<?php echo $desc;?></title>
    <meta name="description" content="<?php echo $desc;?>" />
    
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
	
	
	
	<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/lightbox.min.js"></script>

<link href="css/lightbox.css" rel="stylesheet" />




</head>
<body> 
	<div id="header">
		<div>
			<a href="index.php" id="logo" style="margin-left:30px;"><img src="images/dinesh/mainlogo.png" alt="logo" style="width:250px;"></a>
			<div class="display">
            <ul>
            <?php 

$sql="select *from tab where status=1";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
if($count>0 ){
	while($data=mysql_fetch_array($query)){
	

?>

				<li class="bar <?php echo $type==$data['url']?'current"':'"'; ?>>
                
					<a href="<?php echo $data['url']; ?>.php?url=<?php echo $data['url'];?>" title="<?php echo $data['seotitle'];?>"><?php echo $data['name'];?>  </a>
				</li>
				<?php  }}?>
               
				
                
			</ul>
            </div>
		</div>
	</div>
    
    

  
  
  
  <script language="JavaScript1.1">
<!--

/*
JavaScript Image slideshow:
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free JavaScript here!
*/

var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++){
slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]
}
}

function slideshowlinks(){
for (i=0;i<slideshowlinks.arguments.length;i++)
slidelinks[i]=slideshowlinks.arguments[i]
}

function gotoshow(){
if (!window.winslide||winslide.closed)
winslide=window.open(slidelinks[whichlink])
else
winslide.location=slidelinks[whichlink]
winslide.focus()
}

//-->
</script>