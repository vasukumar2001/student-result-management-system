<!DOCTYPE html>
<html>

<head>
  <title>create subject</title>
  <style>
    .button4 {
      background-color: #e7e7e7;
      color: black;
    }
  </style>
</head>

<body>
  <div class="col-md-8">
    <form action="subject.php" method="POST">
      <div class="form-group">
        <lable for="course"><b>Course:</b></lable>


        <?php
        include('includes/config.php');

        $result = mysqli_query($conn, "select * from tblcourse");
        echo "<select class='form-control' id='course' name='course'>";
        echo "<option>select</option>";
        while ($row = mysqli_fetch_array($result)) {
          echo "<option
                                                    value='$row[id]'>$row[course]</option>";
        }
        echo "</select>";
        mysqli_close($conn);
        ?>

        </select>
      </div><br>
      <div class="form-group">
        <label for="sub">Subject:</label>

        <input type="text" class="form-control" id="sub" name="subject">
      </div><br>
      <div class="form-group">
        <label for="sc">Subject Code:</label>

        <input type="text" class="form-control" id="sc" name="subjectcode">
      </div><br>
      <div>
        <input class="btn btn-info" type="submit" name="submit" value="submit">
      </div>
    </form>
  </div>
</body>

</html>