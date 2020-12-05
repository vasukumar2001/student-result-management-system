<?php 

$conn=mysqli_connect("localhost","root","","srms");
$id=$_REQUEST['id'];
$sql="DELETE FROM registration where id=$id";
if(mysqli_query($conn,$sql)){
		echo"<script>alert('student detail is delete')</script>";
	
}
?>