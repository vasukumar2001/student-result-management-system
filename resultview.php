
<!DOCTYPE html>
<html>
<head>
  <title></title>
   
  <style >
    
  .button4 {
  background-color: #e7e7e7; color: black;
}
.rounded img{
  border-radius: 50%;
  border:3px solid #ff675b;;
  color: white;
}
</style>
</head>
<body id="result">


  
 
        <?php 
  $USER_ID=$_SESSION['USER_ID'];
include('includes/config.php');
  


    

    $sql = "SELECT * FROM registration where id=$USER_ID";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if(isset($_POST['update'])){
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $birthdate=$_POST['birthdate'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['mobilenumber'];
    $address=$_POST['address'];
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
    
    
  }
    
    ?>  
    <center>
<div>
  <div class="rounded">

  <image class="circle" height="80" width="80"src=<?php echo $row['image_path']; ?>>
       </div><br> 
  <?php echo" Name: $row[firstname] $row[middlename] $row[lastname]<br>";?>
  <?php echo" Roll no.: $row[id]<br>";?>
  <?php
                        $USER_ID=$_SESSION['USER_ID'];
include('includes/config.php');
                                               
                                                
                                                $result=mysqli_query($conn,"select c.course, c.coursecode from tblcourse as c join registration as r on c.id=r.course WHERE r.id=$USER_ID");
                                                
                                                while($row=mysqli_fetch_array($result))
                                                {
    
                                                    echo"Course: $row[course]<br>";
                                                    echo"Course code: $row[coursecode]<br>";

                                                
                                                }
                                                
                                                
                                                ?>



</div><br>
<div>
 <button class="btn btn-info" onclick="window.location.href='viewresult.php'">
     view result</button>

</div>

  </center>
</body>
</html>

