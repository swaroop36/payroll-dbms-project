<?php
include('configall.php');
$month=$_POST['month'];
$year=$_POST['year'];
if($month)
{
$sql="SELECT payment.pay_no,payment.emp_id,employee.Name,employee.bank_accno,payment.total_pay FROM `employee` INNER JOIN `payment` WHERE employee.Employee_id=payment.emp_id AND month='$month' AND year='$year';";
$result=mysqli_query($connection,$sql);
}
?>
<!DOCTYPE html>
</html>
<head>
<title>Employee Data</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="S1.CSS">
</head>
<body class="psimg">
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
              <a class="nav-link" href="department.php">DEPARTMENT</a>
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
      <div class="shadow p-3 mb-5 bg-body rounded"><H1>EMPLOYEE DATA</H1></div>
<div class="w3-container">
<table class="table">
<tr><th>Payment no</th>
<th>Employee id</th>
<th>Name</th>
<th>Bank account no</th>
<th>Total salary</th>
<?php while($row=mysqli_fetch_array($result)) {?>
<tr>
<td><?php echo $row['pay_no']; ?></td>
<td><?php echo $row['emp_id']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['bank_accno']; ?></td>
<td><?php echo $row['total_pay']; ?></td>
</tr>
<?php } ?>
</table>
</div>
<body>
</html>