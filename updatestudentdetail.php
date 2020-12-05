<?php session_start();  ?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<style>
		.button4 {
			background-color: #e7e7e7;
			color: black;
		}
	</style>
</head>


<body>
	<?php
	$USER_ID = $_REQUEST['id'];
	include('includes/config.php');





	$sql = "SELECT * FROM registration where id=$USER_ID";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if (isset($_POST['update'])) {
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$birthdate = $_POST['birthdate'];
		$email = $_POST['email'];
		$mobilenumber = $_POST['mobilenumber'];
		$address = $_POST['address'];
		$course = $_POST['course'];
		$image_path = '';
		if (isset($_FILES['image'])) {
			$errors = array();
			$file_name = $_FILES['image']['name'];

			$file_size = $_FILES['image']['size'];
			$file_tmp = $_FILES['image']['tmp_name'];
			$file_type = $_FILES['image']['type'];
			$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));


			$extensions = array("jpeg", "jpg", "png");

			if (in_array($file_ext, $extensions) === false) {
				$errors[] = "extension not allowed, please choose a JPEG or PNG file.";
			}

			if ($file_size > 2097152) {
				$errors[] = 'File size must be excately 2 MB';
			}

			if (empty($errors) == true) {
				move_uploaded_file($file_tmp, "image/" . $file_name);
				$image_path = "image/" . $file_name;
			} else {
				print_r($errors);
			}
		}

		$sql = "UPDATE registration SET firstname='$firstname', middlename='$middlename',  lastname='$lastname', gender='$gender', birthdate='$birthdate', email='$email',  mobilenumber='$mobilenumber', address='$address', course='$course',image_path='$image_path'where id=$USER_ID";

		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo header("location:adminpage.php");;
		}
	}


	?>
	<div class="col-md-8">
		<form action="#" method="POST" enctype="multipart/form-data">
			<div class="form=group">
				<label for="rollno">roll no:</label>
				<input type="text" class="form-control" id="rollno" name="rollno" value=<?php echo $row['id']; ?>>
			</div><br>
			<div class="form-group">
				<label for="fn">Firstname:</label>
				<input type="text" class="form-control" id="fn" name="firstname" placeholder="enter the firstname." value=<?php echo $row['firstname']; ?>>
			</div><br>
			<div class="form-group">
				<label for="mn">Middlename:</label>
				<input type="text" class="form-control" id="mn" name="middlename" placeholder="enter the middlename." value=<?php echo $row['middlename']; ?>>
			</div><br>
			<div class="form-group">
				<label for="ln">Lastname:</label>
				<input type="text" class="form-control" id="ln" name="lastname" placeholder="enter the lastname." value=<?php echo $row['lastname']; ?>>
			</div><br>
			<div class="form-group">
				<label for="gender">Gender:</label>
				<div class="form-control" id="gender">
				<input type="radio" id="male" name="gender" value="male" checked value=<?php echo $row['gender']; ?>>
				<label for="male">Male</label>
				<input type="radio" id="female" name="gender" value="female" value=<?php echo $row['gender']; ?>>
				<label for="female">Female</label>
				<input type="radio" id="other" name="gender" value="other" value=<?php echo $row['gender']; ?>>
				<label for="other">Other</label></div>
			</div><br>
			<div class="form-group">
				<label for="bod">Birthdate:</label>
				<input type="date" class="form-control" id="bod" name="birthdate" value=<?php echo $row['birthdate']; ?>>
			</div><br>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" class="form-control" id="email" name="email" value=<?php echo $row['email']; ?>>
			</div><br>
			<div class="form-group">
				<label for="mn">Mobile No:</label>
				<input type="text" class="form-control" id="mn" name="mobilenumber" value=<?php echo $row['mobilenumber']; ?>>
			</div><br>
			<div class="form-group">
				<label for="add">Address:</label>
				<textarea name="address" class="form-control" id="add" rows="2" cols="30" placeholder="enter the address."><?php echo $row['address']; ?></textarea>
				<?php $std_course = $row['course']; ?>
			</div><br>
			<div class="form-group">

				<lable for="course">Course:</lable>


				<?php
				include('includes/config.php');

				$result = mysqli_query($conn, "select * from tblcourse");
				//$result=mysqli_query($conn,"select c.course from tblcourse as c join registration as r on c.id=r.course WHERE r.id=$USER_ID");
				echo "<select class='form-control' id='course' name='course'>";
				while ($row = mysqli_fetch_array($result)) {
					if ($std_course == $row['id'])
						echo "<option value='$row[id]' selected>$row[course]</option>";
					else
						echo "<option value='$row[id]'>$row[course]</option>";
				}
				echo "</select>";
				mysqli_close($conn);
				?>

				</select>
			</div><br>

			<div class="form-group"><label for="photos">Photos:</label>
				<input type="file" class="form-control"  name="image" id="image">
			</div>

			<div>
				<input class="btn btn-info" type="submit" name="update" value="update">
			</div>
		</form>

	</div>


</body>

</html>