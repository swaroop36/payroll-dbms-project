<?php
include('configall.php');
if (isset($_GET['del'])) {
$empid = $_GET['del'];
$sqll="DELETE FROM employee WHERE Employee_id=$empid;";
$check=mysqli_query($connection, $sqll);
if($check)
{echo"Done dana Done";
header('location: employee.php');
}
else{
echo"Failed";
}
}
?>
