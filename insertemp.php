<?php
include('configall.php');
$empid=$_POST["empid"];
$name=$_POST["name"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$sdate=$_POST["sdate"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$loan=0;
$pfund=0;
$jobtitle=$_POST["jobtitle"];
$address=$_POST["address"];
$depid=$_POST["depid"];
$manid=$_POST["manid"];
$bacc=$_POST["bacc"];
$sql = ($manid==0) ? "INSERT into employee values($empid,'$name','$address','$phone','$email','$sdate','$dob','$gender',$loan,$pfund,'$jobtitle',$depid,null,$bacc);" : "INSERT into employee values($empid,'$name','$address','$phone','$email','$sdate','$dob','$gender',$loan,$pfund,'$jobtitle',$depid,$manid,$bacc);";
if($connection->query($sql)===TRUE)
{
echo "successfully inserted into database";
header('Location: employee.php');
}
else{
echo "somthing is wrong";
}
?>