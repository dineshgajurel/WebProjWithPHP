<?php 
$type="news";
include "includes/header.php";

?>
	<div id="body">
		<div id="newsblog">
			<div class="aside">
            
            <?php 
		$sql="select *from news where status=1 order by postdate desc limit 0,1 ";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		if($count>0){
			while($data=mysql_fetch_array($query)){	
			
			
			?>
				<div>
					<h2><a href="news.php"><?php echo $data['title'];?></a></h2>
                    <h5><?php echo $data['summary'];?></h5>
                    
					<span class="date"><?php echo $data['postdate']?></span> <a href="news.php" class="figure"><img src="admin/images/news/<?php echo $data['picture'];?>" width="100px" alt="<?php echo $data['title'];?>"></a>
					<p>
							<footer class="read-more"><a href="page.php?page=<?php echo $data['url'];?>">Read More &raquo;</a></footer>
						</p>
				</div>
                
                <?php  }}?>
                
				
                
                <ul>
                <?php
				$sq="select *from news where status='1' order by postdate desc limit 1,10";
				$qu=mysql_query($sq);
				
				
				
				
				 while($d1=mysql_fetch_array($qu)){
					 
					 ?>
                
					<li>
						<h2><a href="news.php"><?php echo $d1['title'];?></a></h2>
                         <p>
                        <?php echo $d1['summary'];?>
                        </p>
						<span class="date"><?php echo $d1['postdate'];?></span>
                       
                        <a href="news.php" class="figure"><img src="admin/images/news/<?php echo $d1['picture'];?>" width="100px" alt="<?php echo $d1['title'];?>"></a>
						<p>
							<footer class="read-more"><a href="page.php?page=<?php echo $d1['url'];?>">Read More &raquo;</a></footer>
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