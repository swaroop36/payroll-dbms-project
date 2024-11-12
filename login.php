<?
session_start();
$_SESSION["flag"] = 0;
$_SESSION["flag1"] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PAYROLL MANAGEMENT SYSTEM</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css">

</head>
<body class="limg">
    <center>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <form method="POST" action="login.php">
        Username : <input class="form-control" type="text" name="username" placeholder="admin"><br><br>
        Password : <input class="form-control" type="password" name="password" placeholder="*****"><br><br>
        <input type="submit" name="submit" value="Login">
        </form>
    </div>
</div>
<?php
session_start();
require('configall.php');
if(isset($_POST['username']) and isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM admin WHERE username='$username' and password='$password'";
$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
$count=mysqli_num_rows($result);
if($count==1)
{
    $_SESSION["flag"] = 1;
    $_SESSION["flag1"] = 1;
$_SESSION['username']=$username;
header ("location:mainhome.php?".SID);
}
else{
$fmsg="Invalid username or password";
echo"<br>Invalid username or password";
}
}
?></center>
</body>
</html>