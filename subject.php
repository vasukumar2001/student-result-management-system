<?php
include('includes/config.php');
$courseid=$_POST['course'];
$subject=$_POST['subject'];
$subjectcode=$_POST['subjectcode'];
$sql="INSERT INTO  tblsubject VALUES (null,'$subject','$subjectcode','$courseid')";
if (mysqli_query($conn, $sql)) {
    header("location:adminpage.php");
    
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>