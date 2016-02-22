<?php 
$type="csit";  

include "includes/header.php";
?>
	<div id="body">
		<div id="campaigns">
			<div class="header">
				<div>
					<h2>
                    
                    Bsc.Csit(Bachelor of science in computer science and IT)</br>
                    <a href="http://Bsccsit.com"  target="_blank"><font size="+1" color="#009900">Learn more</font></a>
                    
                    
                    </h2>
				  <p>
                   
						This is the Four years semester based program launched by the<a href="http://tribhuvan-university.edu.np" target="_blank"> <font size="+2" color="#00FF33"> TU </font></a>   in the replacement of Bsc.computer science(3yrs).</br>
                 
                          <li><font size="+0.5" color="#0066CC">
                            looking for the sullabus,Notew,Ebooks,Old questions and Solutions???/??????
                          </li>See below</font>
                         </p>
                    
                 
				</div>
                
                 <?php 
			$csql="select *from gallery where status='1' and imgtype='csit'";
			$cquery=mysql_query($csql);
			while($cdata=mysql_fetch_array($cquery)){
			
			?>
				<img src="admin/images/gallery/<?php echo $cdata['picture'];?>" width="200px" alt="Image">
                
                <?php }?>
			</div>
           
			<div class="body">
				<div>
					<h2><font color="#009900">Syllabus</font></h2></br>
					<ul>
						<li>
							<h2>For First year</h2>
                        <font size="+1" color="#00CC33">((::Sorry, currently not available, But we are working for this, just for you.<br/>
                        wants to know <a href="aboutus.php">more about us?????</a> </font>
                        </li>
						<li>
							For second year<br />
                             hr <aef="aboutus.php">We are working fo this</a> 
						</li>
						<li>
							for third year<br />
                            <a href="aboutus.php">We are working fo this</a> 
						</li>
						<li>
							for fourth year<br />
                           <a href="aboutus.php">We are working fo this</a> 
						</li>
					</ul>
				</div>
				<div>
					<h2><font color="#009900">Notes and Ebooks</font></h2></br>
					<p>
						  <font size="+1" color="#00CC33">((::Sorry, currently not available, But we are working for this, just for you.<br/>
                        wants to know <a href="aboutus.php">more about us?????</a> </font>
					</p>
				</div>
				<div>
					<h2><font color="#009900">Old questions and Solutions</font></h2><br/>
					<p>
					  <font size="+1" color="#00CC33">((::Sorry, currently not available, But we are working for this, just for you.<br/>
                        wants to know <a href="aboutus.php">more about us?????</a> </font></a> </li>
					</p>
				</div>
			</div>
			<div class="footer">
				<p>
					You want to join with us????<br />
                Wants to be the part of our club.<a href="aboutus.php">(Csit Activity Club)</a> </p>
				<a href="getinvolved.php">Get Involved</a>
			</div>
		</div>
	</div>
<?php include"includes/footer1.php";?>