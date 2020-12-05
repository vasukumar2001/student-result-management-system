<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="css/pdf.css" />
    <script src="js/pdf.js"></script>
    <script src="js/html2pdf.bundle.js"></script>
<link rel="stylesheet" href="css/bootstrap1.min.css">
  <script src="js/jquery1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<style >

	.button4 {
	background-color: #e7e7e7; color: black;
}
.rounded img{
	border-radius: 50%;
	border:3px solid #ff675b;;
	color: white;
}
body {
    padding: 50px;
    text-align: center;
  }

  table {
    width: 100%;
    margin: 40px auto;
    table-layout: auto;
  }

  .fixed {
    table-layout: fixed;
  }

  table,
  td,
  th {
    border-collapse: collapse;
  }

  th,
  td {
    padding: 1px;
    border: solid 1px;
    text-align: center;
  }
</style>
</head>
<body>

<div id="result">
	
 
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
		

    ?>	<div class="table-responsive">
<table  border="1"  bordercolor="white" class="table-success table-hover">
  <b> 
<tr>
<td>
	<div class="rounded">
  <image class="circle" height="80" width="80"src=<?php echo $row['image_path']; ?>>
      </image> </div></td> 
	<td><?php echo" Name: $row[firstname] $row[middlename] $row[lastname]<br>";?></td>
	<td><?php echo" Roll no.: $row[id]<br>";?></td>
	<?php
												$USER_ID=$_SESSION['USER_ID'];
include('includes/config.php');
                                             	
                                                
                                                $result=mysqli_query($conn,"select c.course, c.coursecode from tblcourse as c join registration as r on c.id=r.course WHERE r.id=$USER_ID");
                                                
                                                while($row=mysqli_fetch_array($result))
                                                {
  		                                            
                                                    echo"<td>Course: $row[course]</td>";
                                                    echo"<td>Course code: $row[coursecode]</td> ";

                                               	
                                                }
                                                
                                                
                                                ?>
</tr></b>
</table></div>
<div class="table-responsive">
<table  border="1"  bordercolor="white" class="table table-dark table-hover">
  
          <tr>
            <th>Subject code</th>
            <th>Subject</th>
            <th>mark</th>
          </tr>
        
        
          <?php
                        $USER_ID=$_SESSION['USER_ID'];
include('includes/config.php');
                                              
                                                
                                                $result=mysqli_query($conn,"select s.Subjectcode, s.subject, m.mark from tblsubject as s join registration as r on s.courseid=r.course join mark as m on m.subjectid=s.id WHERE  r.id=$USER_ID and m.rollno=$USER_ID");
                                             $total_mark=0;
                                             $counter=0;
                                                while($row=mysqli_fetch_array($result))
                                                {
    
                                                    echo"<tr>";
                                                    echo "<td>$row[Subjectcode]</td>";
                                                    echo "<td>$row[subject]</td>";
                                                    echo "<td>".$row['mark']." /100</td>";
echo"</tr>";
                                                     $total_mark+=(int)$row['mark'];
                                                    $counter+=1;
                                                   
                                                
                                                 
                        
                                                 }
                                                  echo"<tr><td></td><td></td>"; 

                                                  echo"<td>Obtain marks : ".$total_mark."/".$counter*100;
                                                     echo"</td></tr>";
                                                 echo"<tr><td></td><td></td>"; 

                                                  echo"<td>Percentage :".$total_mark/$counter;
                                                     echo"</td></tr>";
                                                  //echo   "Obtain marks : ".$total_mark."/".$counter*100;
                                                 //echo "Percentage :".$total_mark/$counter;
                                                    
                                                  
                                                
                                                  
                                                
                                                
                                                
                                               
                                                ?>
                                                
                                                
        

 </table></div></div>
 <div class="table-responsive">
<table class="table table-dark table-hover">
 <tr>
  
  <td>Download PDF</td><td>
 <button  id="download" class="btn btn-success"> Download</button>                  
     </td></tr>   

 </table></div>

 
    </body>
</html>
