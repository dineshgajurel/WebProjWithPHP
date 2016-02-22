<div id="tab1" class="tabcontent">
        <h3> <?php echo isset($editdata)?"change : ".$editdata['fullname']:"Create New $type" ;?></h3>
        <div class="form">
        <form action="users.php" method="post">
            
            <div class="form_row">
              <p>
                <label>Name:</label>
                <input type="text" class="form_input" name="fullname" placeholder="Give your fullname" id="fullname" value="<?php echo isset($editdata)?$editdata['fullname']:""; ?>" />
              </p>
              <p>
                <label>Username:</label>
                <input type="text" class="form_input" name="username" placeholder="Give your username" id="username" value="<?php echo isset($editdata)?$editdata['username']:""; ?>" />
              </p>
              <p>
                <label>Password:</label>
                <input type="password" class="form_input" name="password" placeholder="Give your password" id="password" value="<?php echo isset($editdata)?$editdata['password']:""; ?>" />
              </p>
              <?php 
			  if(isset($editdata)){
			  ?>
              <p>
                <label>current password:</label>
                <input type="password" class="form_input" name="newpass" placeholder="Give your newpass" id="newpass" value="" />
              </p>
              <?php
			  }
			  ?>
              <p>
                <label>Email:</label>
                <input type="text" class="form_input" name="email" placeholder="Give your email" id="email"  value="<?php echo isset($editdata)?$editdata['email']:""; ?>"/>
              </p>
              <form id="form1" name="form1" method="post" action="">
                <p>Status
              :
                  <label for="status"></label>
                  <select name="status" id="status">
                  
                  <?php 
				  $active='selected="selected"';
				  $inactive='';
				  if(isset($editdata)){
					  if($editdata['status']=="0"){
					   $active='';
				  $inactive='selected="selected"';
					  }
					  }
				  ?>
                  
                    <option value="1"<?php echo $active;?> >Active</option>
                    <option value="0"<?php echo $inactive;?>>Inactive</option>
                  </select>
                </p>
                <?php 
				if(isset($editdata)){
				
				?>
                 <p>
                  <input type="submit" name="change" id="change" value="change" />
                  <input type="hidden" name="id" value="<?php echo $editdata['id'];?>" />
                </p>
                <?php 
				}else{
				?>
                 <p>
                  <input type="submit" name="create" id="create" value="create" />
                </p>
                <?php 
				}
				
				?>
               
              </form>
              
              
            </div>
            <div class="form_row"></div>
            <div class="clear"></div>
        </div>
   