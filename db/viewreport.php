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
    <?php
    $id_report = $_GET['id_report'];
    $sendName = $_GET['sendName'];
    $idmembersend = $_GET['id_member_send'];
    echo "<br>";
    echo "id_report : " . $id_report;
    echo "<br>";
    echo "sendName : " . $sendName;
    echo "<br>";
    echo "ID member send : " . $idmembersend;

    ?>
    <h1>View Report</h1>

    <?php 
        $id_report = explode(",",$id_report);
        // echo "<per>";
        // print_r ($id_report);
        // echo "</per>";
        foreach($id_report as $value){
            $result = "SELECT * FROM report WHERE id =$value";
            $query = mysqli_query($conn, $result);
            $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
            echo "<pre>";
            print_R($rows);
            echo "</pre>";

        }
    ?>
</body>

</html>