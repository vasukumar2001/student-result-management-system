<?php
include('includes/config.php');

$sql= "SELECT * FROM registration";
$result=mysqli_query($conn,$sql);
?>
<html>
<head>
	
</head>
	<body><center><div class="table-responsive">
	<table border="1" bordercolor="white" class="table table-dark table-hover">
		<tr><th>Photo</th>
			<th>Roll no.</th>
			<th>First name</th>
			<th>middle name</th>

			<th>last name</th>

			
			<th>Email</th>
			<th>Mobilenumber</th>
			
			<th>Course</th>
			<th>result</th>





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
	<?php echo($row['email']);?>
	</td>
	<td>
	<?php echo($row['mobilenumber']);?>
	</td>
	
	<td>
	<?php echo($row['course']);?>
	</td>
	<td>
	<a  class="btn btn-info" href="studentresultview.php?id=<?php echo($row['id']);?>">View</a>
	</td>
	
	
	</tr>
		
<?php }?></table></div>
</center>
</body>
</html>