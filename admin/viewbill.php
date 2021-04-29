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
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">View Bill</h1>
</div>

<div style="margin-left:49px;margin-top:30px;" >
<table border="1">
<tr>
</tr>
</table>
</div>

</html>
</body>
<div class="container">
<table align="center">
<form action="viewbill.php" method="post">
<tr>
<th>Enter Customer Name:</th>
<td><input type="text" name="p_name" placeholder="Enter customer name" class="form-control" required></td>
<td></td>
<td colspan="1"><input type="submit" name="p_submit" value="search" class="btn btn-success"></td>
<td><a href="generatebillpage.php" style="text-decoration:none;">cancel</a></td>
</tr>
</form>
</table>

<table align="center" width="80%" border="1" style="margin-top:10px">
	<tr>
	<td colspan="7"><center><h3>View Bill Detail:</h3></center></td>
	</tr>
	<tr>
	<th><center>No:-</center></th>
	<th><center>Customer_id</center></th>
	<th><center>Customer_name</center></th>
	<th><center>Total_amount</center></th>
	<th><center>Date</center></th>
	<th><center>View</center></th>
	<th><center>Delete</center></th>
	</tr>
<?php
if(isset($_POST['p_submit']))
{
	include('dbcon.php');
	$name=$_POST['p_name'];
	$qry="select * from billing_table where cust_name LIKE '%$name%'";
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
				<td><?php echo $data['cust_id'];?></td>
				<td><?php echo $data['cust_name'];?></td>
				<td><?php echo $data['final_amount'];?></td>
				<td><?php echo $data['date'];?></td>
				<td><a href="viewbillinform.php?sid=<?php echo $data['cust_id'];?>">view</a></th>
				<td><a href="deletebillinform.php?sid=<?php echo $data['cust_id'];?>">delete</a></th>
			</tr>

			<?php
		}
	}
}
?>
</table>
</div>