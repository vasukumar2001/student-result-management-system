<?php
if (isset($_POST["submit"])) {
	$conn = mysqli_connect("localhost", "root", "", "srms");


	$sql = "SELECT password FROM admin";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if ($_POST["old"] == $row['password']) {
		$new = $_POST['new'];
		$sql = "UPDATE admin set password='$new' ";
		if (mysqli_query($conn, $sql)) {
			echo "<script>alert('new password is change')</script>";
		} else {
			echo "<script>alert('old password is incorrect')</script>";
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>change password</title>
	<style>
		.button4 {
			background-color: #e7e7e7;
			color: black;
		}
	</style>
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

			<input class="btn btn-info" type="submit" name="submit" value="submit">
		</form>
	</div>
</body>

</html>