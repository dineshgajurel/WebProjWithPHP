 <?php include "includes/session.php" ;
include "includes/dbconfig.php";
// print_r($_SESSION['adminlogin']);
$type="news";
   include"includes/header.php";
  ?>
  
  <?php 
  
$ppath="images/news/";


  //to create new
  if(isset($_POST['create'])){
	  
	  $title= mysql_real_escape_string($_POST['title']);
	  $url= mysql_real_escape_string($_POST['url']);
	  $summary= mysql_real_escape_string($_POST['summary']);
	  $detail= mysql_real_escape_string($_POST['detail']);
	  $status= mysql_real_escape_string($_POST['status']);
	  

	   $picture=$_FILES['picture'];
	  // print_r($picture);
	  $pic="";
	  if(!empty($picture['name'])){
		  $move=move_uploaded_file($picture['tmp_name'],$ppath.$picture['name']);
		  if($move){
			  
			  $pic=$picture['name'];
			  }
		  
		  } 
	  
	  if(!empty($title) && !empty($url)){
	  
	  $sql="insert into $type (title,url,summary,detail,picture,status) values('$title','$url','$summary','$detail','$pic','$status')";
	  $query=mysql_query($sql);
	  if($query){
		  $success= "createed successfully";
		  //header("location: tab.php");
		  }
		  else{$error= "Can't be created".mysql_error();}
	  }else{ $error="url and title can't be blank";}
	  
	  }
	  
	  
	  //to change
  if(isset($_POST['change'])){
	  
	  $title= mysql_real_escape_string($_POST['title']);
	  $url= mysql_real_escape_string($_POST['url']);
	   $summary= mysql_real_escape_string($_POST['summary']);
	  $detail= mysql_real_escape_string($_POST['detail']);
	  $picture=$_FILES['picture'];
	  $pic=$_POST['oldpic'];
	   
	  // print_r($picture);
	  
	  if(!empty($picture['name'])){
		  $move=move_uploaded_file($picture['tmp_name'],$ppath.$picture['name']);
		  if($move){
			  
			  $pic=$picture['name'];
			  }
		  } 
	  //$newpass=$_POST['newpass'];
	  $status=$_POST['status'];
	  $id=$_POST['id'];
	  
	  
	  if(!empty($url) && !empty($title)){
		$sql = "UPDATE $type SET title = '$title', url = '$url', summary= '$summary', detail = '$detail', picture =                         '$pic', status = '$status' WHERE id = '$id' ";
		$query=mysql_query($sql);
	   if($query){
		  $success= "changed successfully";
		  }
		  else{$error= "Can't be changed".mysql_error();}
	  }else{ $error="url and title can't be blank";}
	  
	  }
 
	
	  
	   //to delete 
	  if(isset($_GET['delete'])){
		  $id=$_GET['id'];
		  $sql="delete from $type where id=$id";
		  $query=mysql_query($sql);
		  if($query){
			  
			  $success="data deleted successfully";
			  }else{
				    $error=" Can't be deleted ";
				  
				  }
		  }
		  
		    
	  //to get data for editing
if(isset($_GET['edit'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM $type WHERE id = '$id'";
	$query = mysql_query($sql);
	$editdata = mysql_fetch_array($query);
	
}

//to search
if(isset($_POST['search'])){
	
	$searchby=$_POST['searchby'];
	$searchkey=$_POST['searchkey'];
	$sql="select *from $type where $searchby like '%$searchkey%' order by postdate desc";
	$query = mysql_query($sql);
		  
	}
		  
		  
		  
		  
  ?>
                     
    <div class="center_content">  
 
    <div id="right_wrap"></div><!-- end of right content-->
                     
        <?php include"includes/message.php"; ?>            
                 
    <?php if(isset($_GET['new'])|| isset($_GET['edit'])){
		
		include "manager/$type/form.php";
		}
	else{include "manager/$type/search.php";
	//echo $success;
	include "manager/$type/datalist.php";
	}
	
	?>
    
    
    <div class="clear"></div>
    </div> <!--end of center_content-->
    
  <?php include"includes/footer.php";
  ?>