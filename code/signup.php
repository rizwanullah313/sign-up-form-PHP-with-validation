<?php
include "db_connection.php";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$passw = $_POST["password"];
$confp = $_POST["con_password"];

if($_POST["password"]!=$_POST["con_password"])
{
     echo "Oops! Password did not match! Try again. ";
}
else
{
$query = "INSERT INTO `employee`(`fname`, `lname`, `email`, `passw`, `confp`) VALUES ('$fname', '$lname', '$email', '$passw', '$confp')";

$run = mysqli_query($conn, $query);

if($run==True)
{
	echo "Record Inserted Successfully";
}
else
{
	echo "Error";
}
}

?>