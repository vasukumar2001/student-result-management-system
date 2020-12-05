<?php

include('includes/config.php');
$course=$_POST['course'];
$coursecode=$_POST['coursecode'];
$sql="INSERT INTO  tblcourse VALUES (null,'$course','$coursecode')";
if (mysqli_query($conn, $sql)) {
    echo header("location:adminpage.php");;
		
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>