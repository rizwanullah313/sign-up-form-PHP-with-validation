<?php
include "db_connection.php";

if(isset($_POST['submit'])){
foreach ($_FILES['myImages']['tmp_name'] as $key => $image){
$imgeName = $_FILES['myImages']['name'][$key];
$imgeName = $_FILES['myImages']['tmp_name'][$key];

$directory = 'images/';

$result = move_uploaded_file($imgaeTmpName, $directory, $imageName);
}
if($result){
echo "image inserted successfully";	
}
}


?>