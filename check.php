<?php
$checked = $_GET['options'];
echo "<pre>";
print_r($checked);
echo "</pre>";
foreach ($checked as $value){
    echo $value;
    echo "<br>";
}
// echo $checked[0];
// echo $checked[1];
// echo $checked[2];

// if(isset($checked)){
// for($i=0; $i < count($checked); $i++){
//     echo "Selected " . $checked[$i] . "<br/>";
// }
// }
?>