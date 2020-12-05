

<?php 
	$USER_ID=$_SESSION['USER_ID'];
include('includes/config.php');
	
if(isset($_POST["submit"])){

$sql = "SELECT * FROM registration where id=$USER_ID";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
if($_POST["old"]==$row['password']){
	$new=$_POST['new'];
	$sql="UPDATE registration set password='$new' where id=$USER_ID" ;
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('new password is insert')</script>";
		

	}
	else{
		echo"<script>alert('old password is incorrect')</script>";
		
	}
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-8">
<form action="#" method="POST">
	
	<div class="form-group">
				<label for="op">Old Password:</label>
				<input type="password" id="op" class="form-control" name="old">
			</div><br>
			<div class="form-group">
			<label for="np">New Password:</label>
			<input type="password" class="form-control" id="np" name="new">
			</div>
			<br>
	<input  class="btn btn-info" type="submit" name="submit" value="submit">
</form></div>
</body>
</html>

