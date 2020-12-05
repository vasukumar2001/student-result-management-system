
<!DOCTYPE html>
<html>
<head>
	<title>course detail</title>
	<style >
	.button4 {
	background-color: #e7e7e7; color: black;
}</style>
</head>
<body><center>
	
	<div style="color: white">
		
		<lable>Course:</lable>
		
	
                                               <?php
												$USER_ID=$_SESSION['USER_ID'];
include('includes/config.php');
                                             	 
                                                
                                                $result=mysqli_query($conn,"select c.course from tblcourse as c join registration as r on c.id=r.course WHERE r.id=$USER_ID");
                                                
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                    echo"$row[course]";
                                               
                                                }
                                                
                                                
                                                ?>

                                               
	</div><br>
<?php 
$sql= "SELECT s.id, s.subject, s.subjectcode FROM tblsubject as s join registration as r on s.courseid=r.course WHERE r.id=$USER_ID";

$result=mysqli_query($conn,$sql);


?>
<div class="table-responsive">
    <table border="1"  bordercolor="white" class="table table-dark table-hover">

    
                                                   
                                                
                                                
                                                    <tr>
                                                        <th>id</th>
                                                        <th>subject</th>
                                                        <th>subject code</th>
                                                              
                                                    </tr>
                                                    <?php while($row=mysqli_fetch_assoc($result)){
    ?>
                                                    <tr>
                                                        <td><?php echo($row['id']);?></td>
                                                        <td><?php echo($row['subject']);?></td>
                                                        <td><?php echo($row['subjectcode']);?></td>
                                                                

                                                    </tr>
                                                
        
<?php }?>
</table></div>
    </center>
</body>
</html>