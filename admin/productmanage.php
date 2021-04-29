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
<body>
<form action="admindashboard.php" method="post">
<div>
<h4><a href="admindashboard.php" style="float:left;margin-left:5px;color:#fff;font-size:20px;">Back to Dashboard</a></h4>
<h4><a href="logout.php" style="float:right;margin-right:30px;color:#fff;font-size:20px;">Logout</a></h4>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:55px;">Ice Cream Parlour Management System</h1>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">Product Manage</h1>
</div>

<div class="" align="center">

<div class="container">
  <div class="panel panel-success"  style="margin-left:25%;margin-right:25%;margin-top:8%">
    <div class="panel-heading" style="height:300px" >
	
<a href="addproduct.php" id="add">Add Product Details</a>
<a href="updateproduct.php" id="update">Update Product Details</a>
<a href="deleteproduct.php" id="delete">Delete Product Details</a><br><br>
<a href="admindashboard.php" style="font-size:25px">cancel</a>
</div>
  </div>
</div>

</div>
</form>
</body> 
</html>

