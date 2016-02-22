

<?php 
$type="index";

include "includes/header.php";
?>

<div id="body">

	
    
    	<div class="header">
        
       		<div>
            <?php 
			$hsql="select *from gallery where status='1' and imgtype='home'";
			$hquery=mysql_query($hsql);
			while($hdata=mysql_fetch_array($hquery)){
			
			?>
				<img src="admin/images/gallery/<?php echo $hdata['picture'];?>" alt="Image"  style="width:200px">
                
                <?php }?>
				<div id="tagline">
					<h1>CAC </h1>
					<h3><font size="+2">(Csit Activity Club)</font></h3>
				</div>
                
                
               
                
				<div class="section">
					<h2>What  is   CAC  (Csit Activity Club)??</h2>
                    <p>
                   <span>&#8220;The CSIT Activity Club is the club of CSIT students of Patan Multiple Campus in Patan Dhoka, Lalitpur. It founded in 2013.The club is run entirely by CSIT Students with a distinguished board of executives, advisors and general members overseeing club operations. It plans and organizes the overall activities of Computer Science and Information Technology.</span>
                    
                    </p>
					
					<a href="aboutus.php" class="first">Learn More About Us</a>
					
				</div>
			</div>
		</div>
        
        
        
        
        
        
        
        
        
        
        
        
		<div class="body">
			<div>
				<div class="figure">
					<a href="csit.php"><img src="images/dinesh/csit/1.jpg" width="700px" alt="Image"></a>
					<h2><a href="csit.php">Bsc.csit</a></h2>
				</div>
                
               
				<div class="news">
					<h2>News &amp; Blog</h2>
					
                     
            <?php 
		$sql="select *from news where status='1' order by postdate desc limit 2";
		$query=mysql_query($sql);
		$count=mysql_num_rows($query);
		if($count>0){
			while($data=mysql_fetch_array($query)){	
			
			
			?>     <ul>
						<li>
							<span class="date"><?php echo $data['postdate']?></span>
							<h3><a href="page.php?page=<?php echo $data['url'];?>"<?php echo $data['title']?></a></h3>
							<p>
								<?php echo $data['summary']?>
                                
							</p>
                            <a href="page.php?page=<?php echo $data['url'];?>" class="figure"><img src="admin/images/news/<?php echo $data['picture'];?>" width="50px" alt="<?php echo $data['title'];?>"></a>
                            <p>
                    <footer class="read-more"><a href="page.php?page=<?php echo $data['url'];?>">Read More &raquo;</a></footer>
                    </p>
						</li>
                        
                        </ul>
                        <?php }}?>
					
					
					<span class="link"><a href="news.php">Go To News</a></span>
				</div>
                
                
                
				<div class="help">
					<h2>How To Be a part of club</h2>
					<a href="getinvolved.php"><img src="images/finger.jpg" alt="Image"></a>
					<h2>You can join with us </h2>
					<p>We are waiting for your coordination and support</p>
					<p>Csit Activity Club(CAC)</p>
					<span class="link"><a href="getinvolved.php">Get Involved</a></span>
				</div>
			</div>
		</div>
</div>
    
<?php include"includes/footer1.php";?>