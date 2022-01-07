<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
        $conn = mysqli_connect("localhost","root","","php-crud") or die("connection failed");
        $stu_id = $_GET['id']; //url theke id anar jonno //ekhne id er vitr 1 aca
        $sql = "SELECT * FROM student WHERE sid = {$stu_id}"; //write query //id dhore data anbe
        $result = mysqli_query($conn , $sql) or die("Query Unsuccessful.");  //run query

        if(mysqli_num_rows($result) > 0){ //result er vitr single value asle tokhn table show korbe
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname'] ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress'] ?>"/>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone'] ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
            $sql1 = "SELECT * FROM studentclass";
            $result1 = mysqli_query($conn , $sql1) or die("Query Unsuccessful.");  //run query

            if(mysqli_num_rows($result1) > 0){ //result er vitr single value asle tokhn table show korbe
                echo'<select name="sclass">';
                while($row1 = mysqli_fetch_assoc($result1)){
                    if($row['sclass'] == $row1['cid']){ //rpw 1 for class and row 2 for student table
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                    echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                }
          echo"</select>";
            }
          ?>
      </div>
      
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
        }  //for while

    }// for id
    
    ?>
</div>
</div>
</body>
</html>
