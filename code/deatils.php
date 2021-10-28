<!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
</head>
<body>

<h2>All Records</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>email</td>
    <td>Images</td>
    <td>Desc</td>
  </tr>

<?php

include "db_connection.php";

$records = mysqli_query($conn,"select * from data"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['emailid']; ?></td>
    <td><img src="<?php echo $data['pic']; ?>" width="100" height="100"></td>
        <td><?php echo $data['descr']; ?></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($conn);  // close connection ?>

</body>
</html>