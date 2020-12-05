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
	<div class="col-md-8">
		<form action="register.php" method="POST" style="color:white" enctype="multipart/form-data">


			<div class="form-group">
				<label for="fn">Firstname:</label>
				<input type="text" class="form-control" id="fn" name="firstname" placeholder="enter the firstname.">
			</div><br>
			<div class="forn-gorup">
				<label for="mn">Middlename:</label>
				<input type="text" class="form-control" id="mn" name="middlename" placeholder="enter the middlename.">
			</div><br>
			<div class="form-group">
				<label for="ln">Lastname:</label>
				<input type="text" class="form-control" id="ln" name="lastname" placeholder="enter the lastname.">
			</div><br>
			<div class="form-group">
				<label for="gender">Gender:</label>
				<div class="form-control">
				<input type="radio" id="male" name="gender" value="male" checked>
				<label for="male">Male</label>
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Female</label>
				<input type="radio" id="other" name="gender" value="other">
				<label for="other">Other</label></div>
			</div><br>
			<div class="form-group">
				<label for="bod">Birthdate:</label>
				<input type="date" class="form-control" id="bod" name="birthdate">
			</div><br>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="abc@gmail.com">
			</div><br>
			<div class="form-group">
				<label for="mn">Mobile No:</label>
				<input type="text"class="form-control" id="mn" name="mobilenumber" placeholder="0000000000">
			</div><br>
			<div class="form-group">
				<label for="add">Address:</label>
				<textarea name="address" class="form-control" id="add" rows="2" cols="30" placeholder="enter the address."></textarea>
			</div><br>
			<div class="form-group">
				<lable for="course">Course:</lable>


				<?php
				include('includes/config.php');

				$result = mysqli_query($conn, "select * from tblcourse");
				echo "<select class='form-control' id='course' name='course'>";
				echo "<option>select</option>";
				while ($row = mysqli_fetch_array($result)) {
					echo "<option
                                                    value='$row[id]'>$row[course]</option>";
				}
				echo "</select>";
				mysqli_close($conn);
				?>

				</select>
			</div><br>
			<div class="form-group">
				<label for="pass">Password:</label>
				<input type="text" class="form-control" id="pass" name="password" placeholder="enter the password.">
			</div><br>
			<div class="form-group"><label>Photos:</label>
				<input type="file" class="form-control" name="image" id="image">
			</div><br>
			<div>
				<input class="btn btn-info" type="submit" name="submit" />
				<input class="btn btn-info" type="reset" name="reset">
			</div>
		</form>
	</div>
</body>

</html>