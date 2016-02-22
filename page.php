<?php 
$type="news";
include "includes/header.php";

?>
  
    <?php 
$hits=$d['hits'];
$hits++;
$shits="update news set hits='$hits' where url='$url'";
$qhits=mysql_query($shits);
?>

</div>
<div align="center">
Total No. of Views=<?php echo $hits;?>
</div>
    





	<div id="body">
		<div id="newsblog">
			<div class="aside">
           
				<div>
					<h2><?php echo $d['title'];?></a></h2>
                    <span class="date"><?php echo $d['postdate']?></span>
                    <h5><?php echo $d['summary'];?></h5>
                    
					 <a href="gallery.php?image=<?php echo $d['url'];?>"class="figure"><img src="admin/images/news/<?php echo $d['picture'];?>" width="200px" alt="<?php echo $d['title'];?>"></a>
                    <p align="right">
                    <?php echo $d['detail'];?>
                    </p>
					
				</div>
                
                
                
				
                
              
                    
                     </div>
			
            
            
            <div class="sidebar">
				<div>
					<h2>Recent Post & news</h2>
					<ul>
                    <?php 
					$s1="select *from news where status='1' order by postdate desc limit 0,1";
					$q1=mysql_query($s1);
					
					
						while($data1=mysql_fetch_array($q1)){
					?>
                    
						<li>
                        <span class="date"><?php echo $data1['postdate']?></span>
							<a href="news.php"> <h3><?php echo $data1['title'];?> </h3></a>
                            <a href="news.php" class="figure"><img src="admin/images/news/<?php echo $data1['picture'];?>" width="50" alt="<?php echo $data1['title'];?>"></a>
                          
                            <?php echo $data1['summary'];?>
                           
						</li>
					<p>
                    <footer class="read-more"><a href="page.php?page=<?php echo $data1['url'];?>"><b>Read More &raquo;</b></a></footer>
                    </p>
					<?php }?>
					</ul>
				</div>
				
			</div>
            
            
            
            
            
            
             <div class="sidebar" >
				<div>
					<h2>Popular News</h2>
					<ul>
                    <?php 
					$s1="select *from news where status='1' order by hits desc limit 0,1";
					$q1=mysql_query($s1);
					
					
						while($data1=mysql_fetch_array($q1)){
					?>
                    
						<li>
                        <span class="date"><?php echo $data1['postdate']?></span>
							<a href="news.php"> <h3><?php echo $data1['title'];?> </h3></a>
                            <a href="news.php" class="figure"><img src="admin/images/news/<?php echo $data1['picture'];?>" width="50" alt="<?php echo $data1['title'];?>"></a>
                          
                            <?php echo $data1['summary'];?>
                           
						</li>
					<p>
                    <footer class="read-more"><a href="page.php?page=<?php echo $data1['url'];?>">Read More &raquo;</a></footer>
                    </p>
					<?php }?>
					</ul>
				</div>
				
			</div>
            
            
            
            
            
            
		</div>
	</div>
    
    
  
    
    
<?php include"includes/footer1.php";?>














