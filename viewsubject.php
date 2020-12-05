<?php
include('includes/config.php');


$sql= "SELECT * FROM tblsubject";

$result=mysqli_query($conn,$sql);


?>
<html>
	<body><center>
          <div class="table-responsive">          
                
	<table border="1"  bordercolor="white" class="table table-dark table-hover">


                                                   
                                                
                                                
                                                	<tr>
                                                		<th>id</th>
                                                		<th>subject</th>
                                                		<th>subject code</th>
                                                                <th>course id</th>
                                                              
                                                	</tr>
                                                	<?php while($row=mysqli_fetch_assoc($result)){
	?>
                                                	<tr>
                                                		<td><?php echo($row['id']);?></td>
                                                		<td><?php echo($row['subject']);?></td>
                                                		<td><?php echo($row['subjectcode']);?></td>
                                                                <td><?php echo($row['courseid']);?></td>

                                                	</tr>
                                                
		
<?php }?>
</table></div></center>
</body>
</html>