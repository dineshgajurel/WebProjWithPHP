<div id="tab1" class="tabcontent">
        <h3> <?php echo isset($editdata)?"change : ".$editdata['title']:"Create New $type" ;?></h3>
        <div class="form">
        <form action="gallery.php" method="post" enctype="multipart/form-data">
            
            <div class="form_row">
              <p>&nbsp;</p>
              <p>Image type:
                <label for="imgtype"></label>
                <select name="imgtype" id="imgtype">
                  <option value="normal">normal</option>
                  <option value="home">home</option>
                  <option value="aboutus">aboutus</option>
                  <option value="csit">csit</option>
                  <option value="getinvolved">getinvolved</option>
                </select>
              </p>
              <p>
                <label>title:</label>
                <input type="text" class="form_input" name="title" placeholder="Give the title" id="title" value="<?php echo isset($editdata)?$editdata['title']:""; ?>" />
          </p>
              <p>
                <label>url:</label>
                <input type="text" class="form_input" name="url" placeholder="Give the name for url" id="url" value="<?php echo isset($editdata)?$editdata['url']:""; ?>" />
              </p>
               <p>
                <label>summary:</label>
                <input type="text" class="form_input" name="summary" placeholder="Give the name for summary" id="url" value="<?php echo isset($editdata)?$editdata['summary']:""; ?>" />
              </p>
              <p>
                <label>picture:</label>
                <input type="file" class="form_input" name="picture" placeholder="Give the picture" id="picture" />
                
                <?php
        if(isset($editdata)){
			
			if(file_exists($ppath.$editdata['picture']) && !empty($editdata['picture'])){
		?>
        	<img src="<?php echo $ppath.$editdata['picture']; ?>" width="120" />
            <?php
			}
			?>
            <input type="hidden" name="oldpic" value="<?php echo $editdata['picture'];?>"  />
        <?php
		}
		?>
                
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
   