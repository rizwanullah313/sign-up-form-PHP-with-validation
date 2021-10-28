<?php
include "db_connection.php";

$email=$_POST["email"];
$passw=$_POST["passw"];
session_start();
if(isset($_SESSION['username']))
{
}

$sql = "select * from employee where email = '$email' and passw = '$passw'";
 $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {  
       $_SESSION['username']=$uname;
echo "<script>location.href='welcome.php'</script>";}
else
{
echo "<script>location.href='login.php'</script>";
}
?>