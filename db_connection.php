<?php
$servername = "localhost";
$user = "root";
$database = "emp";
$password = "";

// create connection with database

$conn = new mysqli($servername, $user, $password);
$db = mysqli_select_db($conn, $database);


?>