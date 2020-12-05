<!DOCTYPE html>
<html>
<head>
	<title>add result</title>
</head>
<body>
	<form method="POST">
	<div>
		
		<lable><b>Course:</b></lable>
		
	
                                                <?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "rs";

// Create connection
                                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                // Check connection
                                                if (!$conn) {
                                                    die("Connection failed: " . mysqli_connect_error());
                                                }
                                                $result=mysqli_query($conn,"select * from tblcourse");
                                                echo"<select name='course'>";
                                                echo"<option>select</option>";
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                    echo"<option
                                                    value='$row[id]'>$row[course]</option>";
                                                }
                                                echo "</select>";
                                                
                                                ?>

                                                </select>
<input type="submit" name="submit">
                                            
                                            </div><br>
                                            </form>
                                            <?php
                                           $SubjectNames=array();
                                            $courseid;
                                            if(isset($_POST['submit'])){
                                            	$courseid=$_POST['course'];

?>
                                            
	
<div>
	<form method="POST" action="c.php">
		<input type="hidden" name="courseid" value=<?php echo $_POST['course']?>>
		

		
	<table border="1">
		<tr>
			<td>rollno.</td>
			<td>name</td>
			
				<?php
                                                     $result=mysqli_query($conn,'select subject, id from  tblsubject where courseid='.$_POST['course']);
                                                        
                                              
                                                while($row=mysqli_fetch_array($result))
                                                {	
                                                	echo"<td>$row[subject]</td>";
                                                 $SubjectNames[]=$row['id'];


                                                }
                                            	
			
			
		echo "</tr>";
		echo	"<tr>";
		
			
			$result=mysqli_query($conn,'select id,firstname,middlename,lastname from  registration  where course='.$_POST['course']);
                                                     
                                                    

			 while($row = mysqli_fetch_array($result))
                                                {
                                                	echo"<tr>";
                                                    echo"<td><input type='hidden' name='roll[]' value='$row[id]'>  $row[id]</td>";
                                                    echo"<td>$row[firstname] $row[middlename] $row[lastname] </td>";
                                                    foreach ($SubjectNames as $sub) {
                                                        $name='sub_'.$sub.'[]';
                                                    echo"<td><input type='text' name='$name'
                                                     placeholder='enter mark'></td>";
    
                                                    }
                                                    
                                                  

                                                   
                                                }?>
		</tr>
	</table>

	<input type="submit" name="add" value="Add">


<?php
}
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
	
<?php 

  if(isset($_POST['add'])){

 $result=mysqli_query($conn,'select id from  tblsubject where courseid='.$_POST['courseid']);
                                                        
                                              
                                                while($row=mysqli_fetch_array($result))
                                                {   
                                                   
                                                 $SubjectNames[]=$row['id'];


                                                }


    //phpAlert(count($SubjectNames));
	
    foreach($SubjectNames as $sub){
       $name="sub_".$sub;
//phpAlert(count($_POST[$name]).$name);
$sql=array();
		for($i=0;$i<count($_POST[$name]);$i++){
		
			$sql[]= '(null,'.$_POST['roll'][$i].','.$_POST['courseid'].','.$sub.','.$_POST[$name][$i].')';
            //echo $sql[$i];
            	}
    //echo $sql;
	$query='INSERT INTO mark VALUES '.implode(',', $sql);

	$result=mysqli_query($conn,$query);
}}

	 ?>
</form></div>

</body>
</html>