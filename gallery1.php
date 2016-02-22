<?php 
$type="gallery";
include"includes/header.php";
?>




<?php 
if(!isset($_GET['image'])){
	
	?>

	<div id="body">
    
 
   
     <?php 
	$s="select *from gallery where status='1' order by postdate desc";
	$q=mysql_query($s);
	$count=mysql_num_rows($q);
	$sn = 1;
	while($d=mysql_fetch_array($q)){
	?>
		
        
    <div id="campaigns" >    
			<div class="header" style="width:300px; height:300px;" >
				<div>
					<h2><?php echo $d['title'];?></h2>
					<p>
						<?php echo $d['summary'];?>
                       
					</p>
				</div>
                
                 <a href="admin/images/gallery/<?php echo $d['picture'];?>" data-lightbox="roadtrip" title="<?php echo $d['title'];?>">
                 
                
				<img src="admin/images/gallery/<?php echo $d['picture'];?>" alt="<?php echo $d['title'];?>" width="200px">
                Postdate:  <?php echo $d['postdate'];?>
               </a>
			</div>
			
		</div>	 
	
        <?php }?>
        
        
        
        
       
       
	</div>
	


<?php 
} else{
	
	?>







<div id="body">
    
 
   
		
        
    <div id="campaigns" >    
			<div class="header" style="width:300px; height:300px;" >
				<div>
					<h2><?php echo $imd['title'];?></h2>
					<p>
						<?php echo $imd['summary'];?>
                       
					</p>
				</div>
                
                 <a href="admin/images/news/<?php echo $imd['picture'];?>" data-lightbox="roadtrip" title="<?php echo $imd['title'];?>">
                 
                
				<img src="admin/images/news/<?php echo $imd['picture'];?>" alt="<?php echo $imd['title'];?>" width="200px">
                Postdate:  <?php echo $imd['postdate'];?>
               </a>
			</div>
			
		</div>	 
	
        
        
         
        
       
       
	</div>
	








<?php }?>




<?php 
include"includes/footer1.php";
?>