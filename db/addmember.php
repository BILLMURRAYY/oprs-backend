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
<form method="get" action="addmember.php">
        <div class="banner">
          <h1>Add Member</h1>
        </div>
        <div class="item">
          <p>Name</p>
          <div class="name-item">
            <input type="text" name="fname" placeholder="First" />
            <input type="text" name="lname" placeholder="Last" />
          </div>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="email" name="email"/>
        </div>
        <div class="item">
          <p>Password</p>
          <input type="password" name="language"/>
        </div>
        <div class="item">
          <p>Phone</p>
          <input type="text" name="phone" placeholder="### ### ####"/>
        </div>
        
        <div class="question">
          <p>Department</p>
          <div class="question-answer">
            
            <?php  
            // $result = $conn->prepare("SELECT * FROM department");
            // $result->execute(); //
            $result = "SELECT * FROM department";
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
              <input type="checkbox" value="<?php echo $row['departmentName'] ?>"  name="departmentName[]"/>
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
        


        // if(!empty($_GET["options"])){
        //     // !echo 1
        //     foreach($_GET["options"] as $options){
        //         echo '<p>'.$options.'</p>';
        //     }
        //     // !echo 2
        //     // $options = implode(",", $_GET["options"]);
        //     // echo $options;
        // }else{
        //     echo "<label class='text-danger'>* Please Select Atleast one Programming language</label>";
        // }
        
    }
      ?>
</body>
</html>