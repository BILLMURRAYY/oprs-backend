<!DOCTYPE html>
<?php include 'connect.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="adddepart.php">
        <div class="banner">
          <h1>Add Department</h1>
        </div>
        <div class="item">
          <p>DepartmentName</p>
          <div class="name-item">
            <input type="text" name="departname" placeholder="DepartmentName" />
          </div>
        </div>
        <div class="question">
          <p>Level</p>
          <div class="question-answer">
            <div>
              <input type="radio" value="admin" id="checkbox_1" name="level"/>
              <label for="checkbox_1" class="checkbox"><span>Admin</span></label>
            </div>
            <div>
              <input type="radio" value="boss" id="checkbox_2" name="level"/>
              <label for="checkbox_2" class="checkbox"><span>Boss</span></label>
            </div>
            <div>
              <input type="radio" value="staff" id="checkbox_3" name="level"/>
              <label for="checkbox_3" class="checkbox"><span>Staff</span></label>
            </div>
            <div>
              <input type="radio" value="employee" id="checkbox_3" name="level"/>
              <label for="checkbox_3" class="checkbox"><span>Employee</span></label>
            </div>
          </div>
        </div>
        
        <div class="question">
          <p>Flow Report</p>
          <div class="question-answer">
          <?php  
            // $result = $conn->prepare("SELECT * FROM department WHERE level!='admin'");
            // $result->execute(); //
            $result = "SELECT * FROM department WHERE level!='admin'";
            $query = mysqli_query($conn,$result);
            
            // display it
            if ($query !== false) {
                // echo "<br>";
                // echo $result->rowCount();
                // echo "<br>";
                // while($row = $result->fetch()) {
                foreach($query as $row){
                    // echo '- ' . $row['name'] . '_______' . $row['departmentName'] . "<br>";
                    // echo '- ' . $row['departmentName'] . '_______' . $row['level'] . "<br>";
                    // echo "<pre>";
                    // print_r($row);
                    // echo "</pre>";
                
            ?>
            
            <div>
              <input type="checkbox" value="<?php echo $row['departmentName'] ?>"  name="flow_report[]"/>
              <label  class="checkbox"><span><?php echo $row['departmentName'] ?></span></label>
            </div>
            
            <?php } } ?>
            
          </div>
        </div>

        <div class="question">
          <p>Flow Estimate</p>
          <div class="question-answer">
          <?php  
            // $result = $conn->prepare("SELECT * FROM department WHERE level!='admin'");
            // $result->execute(); //
            $result = "SELECT * FROM department WHERE level!='admin'";
            $query = mysqli_query($conn,$result);
            
            // display it
            if ($query !== false) {
                // echo "<br>";
                // echo $result->rowCount();
                // echo "<br>";
                // while($row = $result->fetch()) {
                foreach($query as $row){
                    // echo '- ' . $row['name'] . '_______' . $row['departmentName'] . "<br>";
                    // echo '- ' . $row['departmentName'] . '_______' . $row['level'] . "<br>";
                    // echo "<pre>";
                    // print_r($row);
                    // echo "</pre>";
                
            ?>
            
            <div>
              <input type="checkbox" value="<?php echo $row['departmentName'] ?>"  name="flow_estimate[]"/>
              <label  class="checkbox"><span><?php echo $row['departmentName'] ?></span></label>
            </div>
            
            <?php } } ?>
            
          </div>
        </div>
        
        <br>
        <div class="btn-block">
          <button type="submit" name="submit">Submit</button>
        </div>
      </form>

      <?php
      if(isset($_GET["submit"])){
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
      }
      ?>
</body>
</html>