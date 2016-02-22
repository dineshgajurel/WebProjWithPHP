<?php 
$type="gallery";
include "includes/header.php";

?>


	<div id="body">
    
    
    <?php 
if(!isset($_GET['image'])){
	
	?>

		<div id="newsblog">
			<div class="aside" style="color:#360">
        
                
				
                
                <ul>
                <?php
				$sq="select *from gallery where status='1' order by postdate desc ";
				$qu=mysql_query($sq);
				
				
				
				
				 while($d1=mysql_fetch_array($qu)){
					 
					 ?>
                
					<li style="height:200px;">
						<h2><?php echo $d1['title'];?></h2>
                        
						<span class="date"><?php echo $d1['postdate'];?></span>
                         <a href="admin/images/gallery/<?php echo $d1['picture'];?>" style="height:500px; width:500px;" data-lightbox="roadtrip" title="<?php echo $d1['title'];?>">
                       
                     <img src="admin/images/gallery/<?php echo $d1['picture'];?>" style="width:200px; height:100px;" alt="<?php echo $d1['title'];?>"></a>
                       <p>
                        <?php echo $d1['summary'];?>
                        </p>
					
					</li>
                   
                    <?php }?>
					</ul>
                    
                     </div>
                    
                     
                     
                     
                     
                     
   <?php 
} else{
	
	?>







<div id="newsblog">
			<div class="aside" style="color:#360">
        
                
				
                
                <ul>
               
                
					<li style="height:200px;">
						<h2><?php echo $imd['title'];?></h2>
                        
						<span class="date"><?php echo $imd['postdate'];?></span>
                         <a href="admin/images/gallery/<?php echo $imd['picture'];?>" data-lightbox="roadtrip" title="<?php echo $imd['title'];?>">
                       
                     <img src="admin/images/gallery/<?php echo $imd['picture'];?>" style="width:200px; height:100px;" alt="<?php echo$imd['title'];?>"></a>
                       <p>
                        <?php echo $imd['summary'];?>
                        </p>
					
					</li>
                   
                   
					</ul>
                    
                     </div>
                    
                     






<?php }?>


                     
                     
                     
                     
                     
			
            
            
            <div class="sidebar">
				<div>
					<h2>Recent photos</h2>
					<ul>
                    <?php 
					$s1="select *from gallery where status='1' order by postdate desc limit 0,1";
					$q1=mysql_query($s1);
					
					
						while($data1=mysql_fetch_array($q1)){
					?>
                    
						<li>
                        <span class="date"> <?php echo $data1['postdate'];?></span>
							<a href=""> <h3><?php echo $data1['title'];?> </h3></a>
                            
                            <a href="" class="figure"><img src="admin/images/gallery/<?php echo $data1['picture'];?>" width="50" alt="<?php echo $data1['title'];?>"></a>
                            
                          
                            <?php echo $data1['summary'];?>
                           
						</li>
					
					<?php }?>
					</ul>
				</div>
				
			</div>
            
            
            
            
            
            
             <div class="sidebar" >
				<div>
					<h2>Popular photos </h2>
					<ul>
                    <?php 
					$s1="select *from gallery where status='1' order by hits desc limit 0,1";
					$q1=mysql_query($s1);
					
					
						while($data1=mysql_fetch_array($q1)){
					?>
                    
						<li>
                         <span class="date"> <?php echo $data1['postdate'];?></span>
							<a href=""> <h3><?php echo $data1['title'];?> </h3></a>
                            <a href="" class="figure"><img src="admin/images/gallery/<?php echo $data1['picture'];?>" width="50" alt="<?php echo $data1['title'];?>"></a>
                          
                            <?php echo $data1['summary'];?>
                           
						</li>
					
					<?php }?>
					</ul>
				</div>
				
			</div>
            
            
            
            
            
            
		</div>
	</div>
<?php include"includes/footer1.php";?>