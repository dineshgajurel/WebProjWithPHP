<?php 
$type="news";
include "includes/header.php";

?>
	<div id="body">
		<div id="newsblog">
			<div class="aside" style="color:#360">
        
                
				
                
                <ul>
                <?php
				$sq="select *from news where status='1' order by postdate desc ";
				$qu=mysql_query($sq);
				
				
				
				
				 while($d1=mysql_fetch_array($qu)){
					 
					 ?>
                
					<li style="height:200px;">
						<h2><a href="page.php?page=<?php echo $d1['url'];?>"><?php echo $d1['title'];?></a></h2>
                         <p>
                        <?php echo $d1['summary'];?>
                        </p>
						<span class="date"><?php echo $d1['postdate'];?></span>
                       
                        <a href="page.php?page=<?php echo $d1['url'];?>" class="figure"><img src="admin/images/news/<?php echo $d1['picture'];?>" style="width:100px; height:50px;" alt="<?php echo $d1['title'];?>"></a>
						<p>
                       <p> <?php echo substr($d1['detail'],0,50);?>........</p>
							<footer class="read-more"><a href="page.php?page=<?php echo $d1['url'];?>"><b><font color="#003399">Read More &raquo;</font></b></a></footer>
						</p>
					</li>
                   
                    <?php }?>
					</ul>
                    
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
                        <span class="date"> <?php echo $data1['postdate'];?></span>
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
                         <span class="date"> <?php echo $data1['postdate'];?></span>
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
            
            
            
            
            
            
		</div>
	</div>
<?php include"includes/footer1.php";?>