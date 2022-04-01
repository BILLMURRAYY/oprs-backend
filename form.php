<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="form.php" > <!-- action="check.php" -->
    <input type="checkbox" name="options[]" value="1"/> Politics<br/>
    <input type="checkbox" name="options[]" value="2"/> Movies<br/>
    <input type="checkbox" name="options[]" value="3"/> World<br/>
    <input type="submit" name="submit" value="Go!" />
</form>
<?php
// if ($_GET) {
    // echo '<pre>';
    // echo htmlspecialchars(print_r($_GET, true));
    // echo '</pre>';

    // echo $_GET['options'][0];

    // $options = $_GET["options"]; //? set value

    // $options = implode(",", $_GET['options']);
    // echo $options; //? 1,2,3

    // foreach($options as $value) {
    //     echo "$value";
    // } //? 123

//     $checked = $_GET['options'];
//     for($i=0; $i < count($checked); $i++){
//         echo "Selected " . $checked[$i] . "<br/>";
//     }
// }

if(isset($_GET["submit"])){
    if(!empty($_GET["options"])){
        // !echo 1
        foreach($_GET["options"] as $options){
            echo '<p>'.$options.'</p>';
        }
        // !echo 2
        // $options = implode(",", $_GET["options"]);
        // echo $options;
    }else{
        echo "<label class='text-danger'>* Please Select Atleast one Programming language</label>";
    }
    
}





// if(isset($_POST["submit"])){
//     $for_query = '';
//     if(!empty($_POST["language"])){
//         foreach($_POST["language"] as $language){
//             $for_query .= $language . ', ';
//         }
//         $for_query = substr($for_query, 0, -2);
//         $query = "INSERT INTO tbl_language (name) VALUES ('$for_query')";
//         if(mysqli_query($connect, $query)){
//             echo '<h3>You have select following language</h3>';
//             echo '<label class="text-success">' . $for_query . '</label>';
//         }
//     }else{
//         echo "<label class='text-danger'>* Please Select Atleast one Programming language</label>";
//     }
// }
?>

</body>
</html>