<?php
include('includes/config.php');


$sql= "SELECT * FROM tblcourse";

$result=mysqli_query($conn,$sql);


?>
<html>
	<body><center>
                <div class="table-responsive">
	<table border="1"  bordercolor="white" class="table table-dark table-hover">

	
                                                   
                                                
                                                
                                                	<tr>
                                                		<th>id</th>
                                                		<th>course</th>
                                                		<th>course code</th>
                                                              
                                                	</tr>
                                                	<?php while($row=mysqli_fetch_assoc($result)){
	?>
                                                	<tr>
                                                		<td><?php echo($row['id']);?></td>
                                                		<td><?php echo($row['course']);?></td>
                                                		<td><?php echo($row['coursecode']);?></td>
                                                                

                                                	</tr>
                                                
		
<?php }?>
</table></div></center>
</body>
</html>