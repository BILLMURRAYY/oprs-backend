<?php
ini_set('display_errors',1);
error_reporting(~0);
// prepare database connection variables
$db_host = 'localhost';
$db_name = 'testmember';
$db_user = 'root';
$db_pass = '';

// connect
// try {
//     // If you change db server system, change this too!
//     $conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
//     $conn->exec("set names utf8");


//     echo "Connected to database";
// }
// catch (PDOException $e) {
//     echo $e->getMessage();
// }

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
mysqli_set_charset($conn,"utf8");
if(mysqli_connect_errno()){
    echo "Database Connect Failed : " . mysqli_connect_error();
}else{
    echo "Database Connected";
}
?>