<?php
if(!isset($searchkey)){
$sql="select *from $type order by postdate desc ";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
}
else{
$count=mysql_num_rows($query);
	}

if($count>0){

?>

<table id="rounded-corner">
    <thead>
    	<tr>
            <th>sn</th>
        	<th>id</th>
            <th>title</th>
            <th>url</th>
            <th>summary</th>
            <th>imgtype</th>
           
            <th>picture</th>
            <th>Postdate</th>
            <th>hits</th>
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
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['url']?></td>
            <td><?php echo $row['summary']?></td>
             <td><?php echo $row['imgtype']?></td>
            
            <td><img src="images/gallery/<?php echo $row['picture'];?>" alt="" title="" width="50" /></td>
            <td><?php echo $row['postdate']?></td>
            <td><?php echo $row['hits']?></td>
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