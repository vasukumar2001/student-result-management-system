<?php
include('includes/config.php');


$sql= "SELECT * FROM registration ";
$result=mysqli_query($conn,$sql);
?>
<html>
	<body><center><div class="table-responsive">
	<table border="1" bordercolor="white" class="table-dark table-hover">
		<tr><th>Photo</th>
			<th>Roll no.</th>
			<th>First name</th>
			<th>middle name</th>

			<th>last name</th>

			<th>Gender</th>
			<th>Birthdate</th>
			<th>Email</th>
			<th>Mobilenumber</th>
			<th>Address</th>
			<th>Course</th>
			<th>Update</th>
			<th>Delete</th>





		</tr>
<?php while($row=mysqli_fetch_assoc($result)){
	?>
	
	<tr>
		<td>
  <image class="circle" height="80" width="80"src=<?php echo $row['image_path']; ?>>
	</image>
	</td>
		<td>
	<?php echo($row['id']);?>
	</td>
	<td>
	<?php echo($row['firstname']);?>
	</td>
	
	
	<td>
	<?php echo($row['middlename']);?>
	</td>

	<td>
	<?php echo($row['lastname']);?>
	</td>
	<td>
	<?php echo($row['gender']);?>
	</td>
	<td>
	<?php echo($row['birthdate']);?>
	</td>
	<td>
	<?php echo($row['email']);?>
	</td>
	<td>
	<?php echo($row['mobilenumber']);?>
	</td>
	<td>
	<?php echo($row['address']);?>
	</td>
	<td>
  <?php

							echo($row['course']);					
                                           
                                                
                                                ?>
	</td>
	<td>
	<a class="btn btn-info" href="update.php?id=<?php echo($row['id']);?>">Update</a>
	</td>
	<td>
	<a class="btn btn-info" href="delete.php?id=<?php echo($row['id']);?>">delete</a>
	</td>
	
	</tr>
		
<?php }?></table></div>
</center>
</body>
</html>