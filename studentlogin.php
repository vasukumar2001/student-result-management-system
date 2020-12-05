<?php
session_start();
include('includes/config.php');
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row['id'];
        $_SESSION['USER_ID']=$row['id'];
        header("location:studentpage.php");
    }
    
} else {
    echo "<script>alert('Invalid password');</script>";

}


mysqli_close($conn);






?>