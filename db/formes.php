<!DOCTYPE html>
<?php include 'connect.php'; ?>
<?php
if (empty(PDO::getAvailableDrivers())) {
  throw new PDOException("PDO does not support any driver.");
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <div class="main-block">
    <form action="" method="get">
      <h1>Seminar Evaluation Form</h1>
      <p>W3docs provides free learning materials for programming languages like HTML, CSS, Java Script, PHP etc.</p>
      <hr>
      <!-- <div class="personal-details">
          <div>
            <label>Name<span class="required">*</span></label>
            <input  class="first-name" type="text" name="name" placeholder="First" required/>
            <input type="text" name="name" placeholder="Last" required/>
          </div>
          <div>
            <label>Seminar Title:<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="name" required/>
          </div>
        </div> -->
      <div class="question-block">
        <p class="question">Send To<span class="required">*</span></p>
        <h3>Department</h3>
        <div class="answer">
          <div>
            <select name="selcet1" id="select1" class="select2" data-placeholder="Select a State">
              <option>เลือก</option>
              <?php
              $departname = 'หัวหน้าคณบดี';
              $result = "SELECT flow_estimate FROM department WHERE departmentName = '$departname'";
              // WHERE departmentName= $departname
              $query = mysqli_query($conn, $result);
              // mysqli_data_seek($query,0);
              $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
              // echo   display_data($query);
              //  $query = explode(",",$query);
              echo "<pre>";
              print_r($row);
              echo "</pre>";
              // if ($query !== false) {
              // while($row = mysqli_fetch_all($query)) {
              //   echo "id: " . $row["flow_estimate"]. " - Name: " 

              foreach ($row as $rows) {
                print_r(explode(",", $rows['flow_estimate']));
                $value = explode(",", $rows['flow_estimate']);
                foreach ($value as $values) {
              ?>

                  <option value="<?php echo $values ?>"><?php echo $values ?></option>



                  <!-- <input type="checkbox" value="<?php echo $values ?>" id="rOne" name="how-hear"  />
              <label for="rOne" class="radio"><?php echo $values ?></label> -->


              <?php
                }
              }

              ?>
            </select>
          </div>

        </div>
        <div class="answer">
          <h3>User</h3>
          <?php
          $result = "SELECT flow_estimate FROM department WHERE departmentName = '$departname'";
          // WHERE departmentName= $departname
          $query = mysqli_query($conn, $result);
          // mysqli_data_seek($query,0);
          $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
          // echo   display_data($query);
          //  $query = explode(",",$query);
          // echo "<pre>";
          // print_r($row);
          // echo "</pre>";

          ?>
          <div>
              <script>alert('Selected value: ' + a);</script>
            <select name="selcet2" id="select2" class="select2" data-placeholder="Select a State">
              <option value="<script>document.write('ggez');</script>"><script>document.write('ggez');</script></option>
              <option>เลือก</option>
            </select>  
              <!-- <input type="checkbox" value="รอง2" id="rOne" name="how-hear" />
              <label for="rOne" class="radio">รอง2</label> -->
          </div>

        </div>
      </div>
      <!-- <div class="question-block">
          <p class="question">What is your overall assessment of the seminar?</p>
          <div class="answer">
            <div>
              <input type="radio" value="none" id="radioOne" name="assessment" />
              <label for="radioOne" class="radio">Very Unsatisfied</label>
            </div>
            
          </div>
        </div> -->
      <div class="statements-block">
        <p>How much do you agree with the following statements regarding the seminar?<span class="required">*</span></p>
        <table>
          <thead>
            <tr>
              <th class="first-col"></th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="first-col">K1</td>
              <td><input type="radio" value="1" name="K1" required /></td>
              <td><input type="radio" value="2" name="K1" required /></td>
              <td><input type="radio" value="3" name="K1" required /></td>
              <td><input type="radio" value="4" name="K1" required /></td>
              <td><input type="radio" value="5" name="K1" required /></td>
            </tr>
            <tr>
              <td class="first-col">K2</td>
              <td><input type="radio" value="1" name="K2" required /></td>
              <td><input type="radio" value="2" name="K2" required /></td>
              <td><input type="radio" value="3" name="K2" required /></td>
              <td><input type="radio" value="4" name="K2" required /></td>
              <td><input type="radio" value="5" name="K2" required /></td>
            </tr>
            <tr>
              <td class="first-col">K3</td>
              <td><input type="radio" value="1" name="K3" required /></td>
              <td><input type="radio" value="2" name="K3" required /></td>
              <td><input type="radio" value="3" name="K3" required /></td>
              <td><input type="radio" value="4" name="K3" required /></td>
              <td><input type="radio" value="5" name="K3" required /></td>
            </tr>
            <tr>
              <td class="first-col">M1</td>
              <td><input type="radio" value="1" name="M1" required /></td>
              <td><input type="radio" value="2" name="M1" required /></td>
              <td><input type="radio" value="3" name="M1" required /></td>
              <td><input type="radio" value="4" name="M1" required /></td>
              <td><input type="radio" value="5" name="M1" required /></td>
            </tr>
            <tr>
              <td class="first-col">M2</td>
              <td><input type="radio" value="1" name="M2" required /></td>
              <td><input type="radio" value="2" name="M2" required /></td>
              <td><input type="radio" value="3" name="M2" required /></td>
              <td><input type="radio" value="4" name="M2" required /></td>
              <td><input type="radio" value="5" name="M2" required /></td>
            </tr>
            <tr>
              <td class="first-col">M3</td>
              <td><input type="radio" value="1" name="M3" required /></td>
              <td><input type="radio" value="2" name="M3" required /></td>
              <td><input type="radio" value="3" name="M3" required /></td>
              <td><input type="radio" value="4" name="M3" required /></td>
              <td><input type="radio" value="5" name="M3" required /></td>
            </tr>
            <tr>
              <td class="first-col">U1</td>
              <td><input type="radio" value="1" name="U1" required /></td>
              <td><input type="radio" value="2" name="U1" required /></td>
              <td><input type="radio" value="3" name="U1" required /></td>
              <td><input type="radio" value="4" name="U1" required /></td>
              <td><input type="radio" value="5" name="U1" required /></td>
            </tr>
            <tr>
              <td class="first-col">U2</td>
              <td><input type="radio" value="1" name="U2" required /></td>
              <td><input type="radio" value="2" name="U2" required /></td>
              <td><input type="radio" value="3" name="U2" required /></td>
              <td><input type="radio" value="4" name="U2" required /></td>
              <td><input type="radio" value="5" name="U2" required /></td>
            </tr>
            <tr>
              <td class="first-col">U3</td>
              <td><input type="radio" value="1" name="U3" required /></td>
              <td><input type="radio" value="2" name="U3" required /></td>
              <td><input type="radio" value="3" name="U3" required /></td>
              <td><input type="radio" value="4" name="U3" required /></td>
              <td><input type="radio" value="5" name="U3" required /></td>
            </tr>
            <tr>
              <td class="first-col">T1</td>
              <td><input type="radio" value="1" name="T1" required /></td>
              <td><input type="radio" value="2" name="T1" required /></td>
              <td><input type="radio" value="3" name="T1" required /></td>
              <td><input type="radio" value="4" name="T1" required /></td>
              <td><input type="radio" value="5" name="T1" required /></td>
            </tr>
            <tr>
              <td class="first-col">T2</td>
              <td><input type="radio" value="1" name="T2" required /></td>
              <td><input type="radio" value="2" name="T2" required /></td>
              <td><input type="radio" value="3" name="T2" required /></td>
              <td><input type="radio" value="4" name="T2" required /></td>
              <td><input type="radio" value="5" name="T2" required /></td>
            </tr>
            <tr>
              <td class="first-col">T3</td>
              <td><input type="radio" value="1" name="T3" required /></td>
              <td><input type="radio" value="2" name="T3" required /></td>
              <td><input type="radio" value="3" name="T3" required /></td>
              <td><input type="radio" value="4" name="T3" required /></td>
              <td><input type="radio" value="5" name="T3" required /></td>
            </tr>
            <tr>
              <td class="first-col">N1</td>
              <td><input type="radio" value="1" name="N1" required /></td>
              <td><input type="radio" value="2" name="N1" required /></td>
              <td><input type="radio" value="3" name="N1" required /></td>
              <td><input type="radio" value="4" name="N1" required /></td>
              <td><input type="radio" value="5" name="N1" required /></td>
            </tr>
            <tr>
              <td class="first-col">N2</td>
              <td><input type="radio" value="1" name="N2" required /></td>
              <td><input type="radio" value="2" name="N2" required /></td>
              <td><input type="radio" value="3" name="N2" required /></td>
              <td><input type="radio" value="4" name="N2" required /></td>
              <td><input type="radio" value="5" name="N2" required /></td>
            </tr>
            <tr>
              <td class="first-col">N3</td>
              <td><input type="radio" value="1" name="N3" required /></td>
              <td><input type="radio" value="2" name="N3" required /></td>
              <td><input type="radio" value="3" name="N3" required /></td>
              <td><input type="radio" value="4" name="N3" required /></td>
              <td><input type="radio" value="5" name="N3" required /></td>
            </tr>
            <tr>
              <td class="first-col">B1</td>
              <td><input type="radio" value="1" name="B1" required /></td>
              <td><input type="radio" value="2" name="B1" required /></td>
              <td><input type="radio" value="3" name="B1" required /></td>
              <td><input type="radio" value="4" name="B1" required /></td>
              <td><input type="radio" value="5" name="B1" required /></td>
            </tr>
            <tr>
              <td class="first-col">B2</td>
              <td><input type="radio" value="1" name="B2" required /></td>
              <td><input type="radio" value="2" name="B2" required /></td>
              <td><input type="radio" value="3" name="B2" required /></td>
              <td><input type="radio" value="4" name="B2" required /></td>
              <td><input type="radio" value="5" name="B2" required /></td>
            </tr>
            <tr>
              <td class="first-col">B3</td>
              <td><input type="radio" value="1" name="B3" required /></td>
              <td><input type="radio" value="2" name="B3" required /></td>
              <td><input type="radio" value="3" name="B3" required /></td>
              <td><input type="radio" value="4" name="B3" required /></td>
              <td><input type="radio" value="5" name="B3" required /></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="question-block">
        <p class="question">Do you have further comments or suggestions?<span class="required">*</span><small>And thank you again for filling out the seminar evaluation form</small></p>
        <div class="answer">
          <textarea rows="5" required></textarea>
        </div>
      </div>
      <div class="btn-block">
        <button type="submit" href="/" name="submit">Send</button>
      </div>
    </form>
  </div>

  <?php
  if (isset($_GET["submit"])) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
  }
  ?>
  <script>
    $("#select1").change(function() {
      const a ='BILL';
      <?php 
      $a = 4;
      
      ?>
      // alert('Selected value: ' + a);
      window.b = $(this).val();
      // alert('Selected value: ' + <?php echo $a; ?>);
      alert('Selected value: ' + $(this).val());

      // return b;
    });
  </script>
</body>

</html>