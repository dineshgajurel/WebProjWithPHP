<?php 
$type="getinvolved";
include "includes/header.php";


?>
	<div id="body">
		<div id="getinvolved">
			<div>
				<div class="aside">
					<div>
						<h1>How Can You Be the Part of</h1> <h1>Csit Activity Club(CAC)??</h1>
						   
                           
                           
                           
                         <p>
                         <font size="+1" color="#3333CC">
                          There are some easy procedures to join with us
                            <ul>
                            <li>
                           <a href="contact.php"><font size="+1" color="#009900"> "contact us"</font> </a>and get the registration form </li>
                           <li>
                            Submit it
                            </li>
                             <li>
                             Take your first weekly meeting 
                            </li>
                             <li>
                             Then you will be the general members of the<a href="aboutus.php"> Csit Activity Club(CAC)</a> </li>                             <li>
                             <font size="+2" color="#339900">
                             <strong>
                             But to be the special member, you should contact with <a href="contact.php">Executives Members.</a>                            </strong>
                             </font>
                             </li>
                            </ul>
                          </font>  
						</p>
					</div>
					<div>
						<p>
                       <strong><a href="aboutus.php"> About us</a></strong> </br>The CSIT Activity Club is the club of CSIT students of Patan Multiple Campus in Patan Dhoka, Lalitpur. It founded in 2013.The club is run entirely by CSIT Students with a distinguished board of executives, advisors and general members overseeing club operations. It plans and organizes the overall activities of Computer Science and Information Technology. </p>
						<div>
                         <?php 
			$gsql="select *from gallery where status='1' and imgtype='getinvolved'";
			$gquery=mysql_query($gsql);
			while($gdata=mysql_fetch_array($gquery)){
			
			?>
                        
							<img src="admin/images/gallery/<?php echo $gdata['picture'];?>" width="300px" alt="Image">
                            
                            <?php }?>
							<p>
								YOu can be the parts of our club easily.
                                To do so you should fill up the membership registration form.
							</p>
						</div>
					</div>
				</div>
				<div class="sidebar">
					<div>
						<a href="csit.php?url=csit"><img src="images/dinesh/csit/1.jpg" width="500px" alt="Image"></a>
						<h2><a href="csit.php?url=csit">BSc.csit</a></h2>
					</div>
					<div>
						<h2>News &amp; Blog</h2>
                        
                        <?php 
						$sq="select * from news where status=1 order by postdate desc limit 1";
						$qu=mysql_query($sq);
						while($d=mysql_fetch_array($qu)){
						?>
						<span class="date"><?php echo $d['postdate'];?></span>
						<h3><a href="page.php?page=<?php echo $d['url'];?>"><?php echo $d['title'];?></a></h3>
						<p>
							<?php echo $d['summary'];?>
						</p>
                        <a href="page.php?page=<?php echo $d['url'];?>" class="figure"><img src="admin/images/news/<?php echo $d['picture'];?>" width="200px" height="100" alt="<?php echo $d['title'];?>" ></a>
                        <?php }?>
						<span class="link"><a href="news.php">Go To News</a></span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<?php include"includes/footer1.php";?>