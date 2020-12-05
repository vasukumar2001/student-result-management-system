<?php
include('includes/config.php');
$username=$_POST['username'];
$password=$_POST['password'];


$sql = "INSERT INTO admin
 VALUES (null,'$username','$password')";

if (mysqli_query($conn, $sql)) {
      echo header("location:index.html");;
     
        
          
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>