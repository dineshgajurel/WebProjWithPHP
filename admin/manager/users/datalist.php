<?php
if(!isset($searchkey)){
$sql="select *from $type ";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
}
else{
$count=mysql_num_rows($query);
	}
?>
<?php

if($count>0){

?>

<table id="rounded-corner">
    <thead>
    	<tr>
            <th>sn</th>
        	<th>id</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Email</th>
            <th>Postdate</th>
            <th>status</th>
            
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
 
       <?php
	   $sn = 1;
       while($row = mysql_fetch_array($query)){
	   ?>
   
    <tbody>
    	<tr class="odd">
            <td><?php echo $sn++?></td>
        	<td><?php echo $row['id']?></td>
            <td><?php echo $row['fullname']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['postdate']?></td>
            <td><?php echo $row['status']?></td>
           
            <td><a href="?edit&id=<?php echo $row['id']?>"><img src="images/edit.png" alt="" title="" border="0"  onclick="return confirm('Do you really want to change this item?')"/></a></td>
            <td><a href="?delete&id=<?php echo $row['id']?>"><img src="images/trash.gif" alt="" title="" border="0" onclick="return confirm('Do you really want to delete this item?')" /></a></td>
        </tr>
     <?php
	   }
}else{
    
	?>
        <tfoot>
    	<tr>
        	<td colspan="12"> <font size="+1" color="#009900">No Records.</td>
        </tr>
    </tfoot>  <?php
    }
	?>
    </tbody>
</table>