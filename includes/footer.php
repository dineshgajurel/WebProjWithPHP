
<?php
			if(isset($_POST['send'])){

			
			
			
				$success="mail sent successfully";
				
				$error="mail not sent";	
					}
			
			
			
			
			
			?>
             
			

	<div id="footer">
    <?php include "admin/includes/message.php";?>
		<div>
			<form action="" method="post">
				<h2>Send A Message</h2>
				<label for="name"><span>Your Name:</span>
					<input name="name" type="text" required id="name">
				</label>
                <label for="phone no"><span>Phone No:</span>
					<input name="phone" type="varchar" required id="phone">
				</label>
				<label for="email"><span>Email Address:</span>
					<input name="email" type="text" required id="email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{2,}[.][a-zA-Z]{2,}" title="oie boko email rakh na">
				</label>
				<label for="message"><span class="message">Message:</span>
					<textarea required name="message" id="message" cols="30" rows="10"></textarea>
				</label>
                
                <label for="captcha"><span>Captcha:</span>
				
                  <img src="captcha/captcha.php" id="captcha" /><br/>
<a href="#" onclick="
    document.getElementById('captcha').src='captcha/captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();return false;"
    id="change-image">Change This?</a><br/><br/>
					<input name="captcha" type="text" required id="captcha">
    </label>
                
				<input name="send" type="submit" class="send" id="send" value="Send">
		      <input name="reset" type="reset" class="send" id="reset" value="reset" />
			</form>
           
           
           
            <div>
            
           				<h2>Contact Details</h2>
				<ul>
					<li>
						<b>Location</b>
						<span>:</span>
						<p>
							Patan Multiple Campus,Patan Dhoka,Lalitpur
					  </p>
					</li>
					<li>
						<b>Phone</b>
						<span>:</span>
						<p>
                            Office: 0144444444444444444</br>
							Dinesh gajurel:984900000000000</br>
                            Dinesh shah :9843</br>
                            Abhinay Adhikary:9840000
                            
					  </p>
					</li>
					<li>
						<b>Email</b>
						<span>:</span>
						<p>
							<a href="http://google.com/gajureldns" class="email" target="_blank">itsmedineshg@gmail.com</a>
						</p>
					</li>
					<li>
						<b>Social</b>
						<span>:</span>
						<div>
							<a href="http://facebook.com/gajureldns" id="facebook" target="_blank">facebook</a>
							<a href="http://twitter.com/gajureldns" id="twitter" target="_blank">twitter</a>
							<a href="http://google.com/gajureldns" id="googleplus" target="_blank">google&#43;</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
	</div>
</body>
</html>
<hr/>
<hr/>