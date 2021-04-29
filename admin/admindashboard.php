<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header('location: ../index.php');
}
?>
<html>
<head>
<title>icecream management system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="boostrap.css" type="text/css">
</head>
<div>
<body>
<form action="#" method="post">
<div>
<h4><a href="../changepass.php" style="float:left;margin-left:5px;color:#fff;font-size:20px;">Change Password</a></h4>
<h4><a href="logout.php" style="float:right;margin-right:30px;color:#fff;font-size:20px;">Logout</a></h4>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:55px;">Ice Cream Parlour Management System</h1>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">Dashboard</h1>
</div>
<div class="" align="center">

<div class="container">
  <div class="panel panel-success"  style="margin-left:25%;margin-right:25%;margin-top:8%">
    <div class="panel-heading" style="height:370px" >
	
<a href="productmanage.php" id="product">Manage Product</a><br>
<a href="stockmanage.php" id="stock">View Stock</a><br>
<a href="generatebillpage.php" id="bill">Manage bill</a><br>
<a href="viewsale.php" id="bill">View Sale</a><br>
<a href="record.php" id="order">Report</a><br>


    </div>
  </div>
</div>

</div>
</div>
</form>
</body> 
</html>