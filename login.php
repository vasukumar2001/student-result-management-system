<?php
session_start();
include('includes/config.php');
$username=$_POST['username'];
$password=$_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row['id'];
        $_SESSION['USER_ID']=$row['id'];
        header("location:adminpage.php");
    }
    
} else {
    echo "<script>alert('Invalid password');</script>";
    
}


mysqli_close($conn);


?>