 <?php include "includes/session.php" ;
include "includes/dbconfig.php";
// print_r($_SESSION['adminlogin']);
$type="tab";
   include"includes/header.php";
  ?>
  
  <?php 
  



  //to create new
  if(isset($_POST['create'])){
	  
	  $name=$_POST['name'];
	  $url=$_POST['url'];
	  $seotitle=$_POST['seotitle'];
	  $seodesc=$_POST['seodesc'];
	  $status=$_POST['status'];
	  
	  if(!empty($url) && !empty($seotitle)){
	  
	  $sql="insert into $type (name,url,seotitle,seodesc,status) values('$name','$url','$seotitle','$seodesc','$status')";
	  $query=mysql_query($sql);
	  if($query){
		  $success= "createed successfully";
		  //header("location: tab.php");
		  }
		  else{$error= "Can't be created".mysql_error();}
	  }else{ $error="url and seotitle can't be blank";}
	  
	  }
	  
	  
	  //to change
  if(isset($_POST['change'])){
	  
	  $name=$_POST['name'];
	  $url=$_POST['url'];
	  $seotitle=$_POST['seotitle'];
	  $seodesc=$_POST['seodesc'];
	  //$newpass=$_POST['newpass'];
	  $status=$_POST['status'];
	  $id=$_POST['id'];
	  
	  
	  if(!empty($url) && !empty($seotitle)){
		$sql = "UPDATE $type SET name = '$name', url = '$url', seotitle = '$seotitle', seodesc =                         '$seodesc', status = '$status' WHERE id = '$id' ";
		$query=mysql_query($sql);
	   if($query){
		  $success= "changed successfully";
		  }
		  else{$error= "Can't be changed".mysql_error();}
	  }else{ $error="url and seotitle can't be blank";}
	  
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
	$sql="select *from $type where $searchby like '%$searchkey%'";
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