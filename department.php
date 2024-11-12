<?php
include('configall.php');
$sql="SELECT * FROM department;";
$result=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html>
<title>Department Data</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viaewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="S1.css">
<body class="dimg" style="margin: auto;">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="mainhome.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/payroll-dbms-project/department.php">DEPARTMENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="employee.php">EMPLOYEE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="setsalary.html">SET SALARY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="setpayment.html">SET PAYMENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payslip.html">PAY SLIP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payhistory.html">PAYMENT HISTORY</a>
      </li>
    </ul>
  </div>
</nav>

    <centre>
    <div class="shadow p-3 mb-5 bg-body rounded"><H1>DEPARTMENT DATA</H1></div>
    <div class="w3-container">
<a class="btn btn-primary btn-sm" href="adddepts.html" class="w3-button w3-blue w3-right">Add Department <span class="w3-text-red">+</span></a>
<table class="table">
<tr><th>Department id</th><th>Department Name</th><th colspan="2">Action</th></tr>
<?php while($row=mysqli_fetch_array($result)) {?>
<tr>
<td><?php echo $row['Depart_id']; ?></td>
<td><?php echo $row['Depart_name']; ?></td>
<td><a href="deldepts.php?del=<?php echo $row['Depart_id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
</tr>
<?php } ?>
</table>
</div>

</body>

</html>