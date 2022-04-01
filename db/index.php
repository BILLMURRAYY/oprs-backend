<!DOCTYPE html>
<?php include 'connect.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> 
    

</head>
<body>
<!-- <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
        </tbody>
    </table> -->
    
<?php
    // $result = $conn->query("SELECT member.name,department.departmentName FROM member join department on department.id = member.id_department");
    // $result = $conn->query("SELECT * FROM department");

    $result = $conn->prepare("SELECT * FROM department");
    $result->execute(); //
    
    // display it
    if ($result !== false) {
        echo "<br>";
        echo $result->rowCount();
        echo "<br>";
        // while($row = $result->fetch()) {
        foreach($result as $row){
            // echo '- ' . $row['name'] . '_______' . $row['departmentName'] . "<br>";
            echo '- ' . $row['departmentName'] . '_______' . $row['level'] . "<br>";
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
        }
    }

?>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>