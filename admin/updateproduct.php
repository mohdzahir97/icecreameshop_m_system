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
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<div>
<h4><a href="admindashboard.php" style="float:left;margin-left:5px;color:#fff;font-size:20px;">Back to Dashboard</a></h4>
<h4><a href="logout.php" style="float:right;margin-right:30px;color:#fff;font-size:20px;">Logout</a></h4>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:55px;">Ice Cream Parlour Management System</h1>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">Update Product</h1>
</div>

<div style="margin-left:49px;margin-top:30px;" >
<table border="1">
<tr>
<td><button name="p_manage" disabled ><a href="productmanage.php" style="text-decoration:none;">Back to Manage Product</a></button></td>
</tr>
</table>
</div>

</html>
</body>
<div class="container">
<table align="center">
<form action="updateproduct.php" method="post">
<tr>
<th>Enter Product Name:</th>
<td><input type="text" name="p_name" placeholder="Enter product name" class="form-control" required></td>
<td></td>
<td colspan="1"><input type="submit" name="p_submit" value="search" class="btn btn-success"></td>
<td><a href="productmanage.php" style="text-decoration:none;">cancel</a></td>
</tr>
</form>
</table>

<table align="center" width="80%" border="1" style="margin-top:10px">
	<tr>
	<td colspan="7"><center><h3>Update Product Detail:</h3></center></td>
	</tr>
	<tr>
	<th>No:-</th>
	<th>product_id</th>
	<th>product_name</th>
	<th>product_unit</th>
	<th>product_amount</th>
	<th>Remaining_quantity</th>
	<th>Edit</th>
	</tr>
<?php
if(isset($_POST['p_submit']))
{
	include('dbcon.php');
	$name=$_POST['p_name'];
	$qry="select * from product_detail where p_name LIKE '%$name%'";
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1)
	{
		echo "<tr align='center'><td colspan='7'>no record found</td></tr>";
	}
	else
	{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
		{
			$count++;
			?>
			<tr align="center">
				<td><?php echo "$count";?></td>
				<td><?php echo $data['p_id'];?></td>
				<td><?php echo $data['p_name'];?></td>
				<td><?php echo $data['p_unit'];?></td>
				<td><?php echo $data['p_amount'];?></td>
				<td><?php echo $data['remaining_quantity'];?></td>
				<td><a href="updateproductform.php?sid=<?php echo $data['p_id'];?>">Edit</a></th>
			</tr>

			<?php
		}
	}
}
?>
</table>
</div>