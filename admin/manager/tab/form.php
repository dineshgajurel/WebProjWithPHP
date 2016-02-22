<div id="tab1" class="tabcontent">
        <h3> <?php echo isset($editdata)?"change : ".$editdata['name']:"Create New $type" ;?></h3>
        <div class="form">
        <form action="tab.php" method="post">
            
            <div class="form_row">
              <p>
                <label>Name:</label>
                <input type="text" class="form_input" name="name" placeholder="Give the name for tab" id="name" value="<?php echo isset($editdata)?$editdata['name']:""; ?>" />
              </p>
              <p>
                <label>url:</label>
                <input type="text" class="form_input" name="url" placeholder="Give the name for url" id="url" value="<?php echo isset($editdata)?$editdata['url']:""; ?>" />
              </p>
              <p>
                <label>seotitle:</label>
                <input type="text" class="form_input" name="seotitle" placeholder="Give the name for seotitle" id="seotitle" value="<?php echo isset($editdata)?$editdata['seotitle']:""; ?>" />
              </p>
            
                <label>seodesc:</label>
                <input type="text" class="form_input" name="seodesc" placeholder="Give the name for seodesc" id="seodesc"  value="<?php echo isset($editdata)?$editdata['seodesc']:""; ?>"/>
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
   