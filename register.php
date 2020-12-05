<?php
include('includes/config.php');
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$birthdate=$_POST['birthdate'];
$email=$_POST['email'];
$mobilenumber=$_POST['mobilenumber'];
$address=$_POST['address'];
$course=$_POST['course'];
$password=$_POST['password'];
$image_path='';
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];

      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"image/".$file_name);
         $image_path="image/".$file_name;
      }else{
         print_r($errors);
      }
   }



$sql = "INSERT INTO registration
 VALUES (null,'$firstname','$middlename', '$lastname', '$gender','$birthdate','$email','$mobilenumber','$address','$course','$password','$image_path')";

if (mysqli_query($conn, $sql)) {
      echo header("location:adminpage.php");;
     
        
          
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>