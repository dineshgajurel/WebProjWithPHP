<?php
$type="aboutus";
 
include "includes/header.php";
?>

	<div id="body">
		<div id="about">
			<h1>Csit Activity Club(CAC) </h1>
           
			<div class="aside">
           <?php 
			$asql="select *from gallery where status='1' and imgtype='aboutus' order by postdate desc";
			$aquery=mysql_query($asql);
			while($adata=mysql_fetch_array($aquery)){
			
			?>
            <img src="admin/images/gallery/<?php echo $adata['picture'];?>" alt="logo" style="width:300px"   />
           <?php }?>
				<div>
					<h2>About Club</h2>
					<p>
						<span>&#8220;The CSIT Activity Club is the club of CSIT students of Patan Multiple Campus in Patan Dhoka, Lalitpur. It founded in 2013.The club is run entirely by CSIT Students with a distinguished board of executives, advisors and general members overseeing club operations. It plans and organizes the overall activities of Computer Science and Information Technology.</span>
					</p>
				
				</div>
				<div>
					<h2>Our Vision</h2>
					<p>
						<span>&#8220;This club is established to link all the students of CSIT faculty, allow them to exchange ideas,creating and raising the practical efficiency to achieve academic goals and
 technical problems. We develop innovative solutions in order to achieve success and self-professional excellence.</span>
					</p>
				</br>
                </br><div>
 <h2>Our Objectives</h2> 
 <ul>
<li><b>To offer workshops and lectures concerned with in Computer Science and Information Technology.</b></li>
<li><b>To make exhibitions and seminars for IT innovation.</b></li>
<li><b>To open up an opportunity for CSIT students to participate in the activities that suit their interests and capabilities.</b></li>
<li><b>To work towards managing the conversations among CSIT students and teachers.</b></li>
</ul>
</br></div>
                </br>
                <div>
<h2>Club Structure</h2>
<h4>Advisors</h4>
<ol>
<li>Arjun Pandey Chettri</li>
<li>Samir Kunwar</li>
<li>Bharat Thapa</li>
<li>Kirshna Gautam</li>
<li>Santosh Ghimire</li>
<li>Deep Raj Sharma</li>
<li>Madan Tiwari</li>
<li>Jeevan Bhattarai</li>
<li>Binod Ghimire</li>
<li>Man Singh Rana</li>
<li>Prakash Bhusal</li>
</ol>
<h4>Members</h4>
<ol>
<li>Rajan Prashad Kalauni</li>
<li>Binaya Bhattarai</li>
<li>Sakar Shrestha</li>
<li>Abhinaya Adhikari</li>
<li>Yojan Shrestha</li>
<li>Arjun Siwakoti</li>
<li>Anup Giri</li>
<li>Sushil Dhakal</li>
<li>Jitendra Nayak</li>
<li>Prakash Kafle</li>
<li>Dinesh Gajurel</li>
<li>Dinesh Shah</li>
<li>Bidur Dhungel</li>
<li>Sushil Singh</li>
<li>Sumesh Shrestha</li>
<li>Nawin Khatiwada</li>
<li>Shree hari Bhandari</li>
<li>Bikram Shrestha</li>
<li>Niraj Acharya</li>
<li>Suzan Neupane</li>
<li>Anish Maharjan</li>
<li>Saru Shrestha</li>
<li>Roshana Giri</li>
<li>Nawin Acharya</li>
<li>Raju Maharjan</li>
<li>Rupak Sanjel</li>
<li>Sajjan Maharjan</li>
<li>Jibraj Neupane</li>
<li>Nawin Chalise</li>
</ol>
<p>
<h3>Contact Information</h3>
Rajen Kalauni: 9849122254<br/>
Sakar Shrestha: 9849672897<br/>
Arjun Sivakoti: 9842685671
</p></div>
				</div>
			</div>
			<div class="sidebar">
				<h2> <a href="getinvolved.php">Be Part of Csit Activity Club(Get Involved)</a></h2>
				<p>
					you can be the part of our clubs.
                    to be the member contact us. 
                    <a href="contact.php?url=contactus" class="first"> <font size="+2" color="#009900">Contact Us??</font> </a>
                    
                    <h2><a href="news.php">Recent Posts and News</a></h2>
                    
                  <ul>
                    <?php 
					$s1="select *from news where status='1' order by postdate desc limit 0,2 ";
					$q1=mysql_query($s1);
					
					
						while($data1=mysql_fetch_array($q1)){
					?>
                    
						<li>
							<a href="page.php?page=<?php echo $data1['url'];?>"> <h3><?php echo $data1['title'];?> </h3></a>
                            <span class="date"><?php echo $data1['postdate']?></span>
                            <a href="page.php?page=<?php echo $data1['url'];?>" class="figure"><img src="admin/images/news/<?php echo $data1['picture'];?>" width="50" alt="<?php echo $data1['title'];?>"></a>
                          
                            <?php echo $data1['summary'];?>
                           
						</li>
                        <p>
                        <footer class="read-more"> <a href="page.php?page=<?php echo $data1['url'];?>"> Read More &raquo;</a></footer>
                        </p>
					
					<?php }?>
					</ul>
				
                
                
              </div>
		</div>
	</div>
<?php include"includes/footer1.php";?>