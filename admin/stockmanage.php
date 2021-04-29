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
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">View Stock</h1>
</div>
</html>
</body>
<br>
<br>
<br>
<table align="center">
<form action="stockmanage.php" method="post">
<tr>
<th>Check Product Stock:</th>
<td><input type="submit" name="p_submit" value="Check Stck" class="btn btn-success"></td>
<td><a href="admindashboard.php">cancel</a>
</td>
</tr>
</form>
</table>

<table align="center" width="80%" border="1" style="margin-top:10px">
	<tr>
	<th>No:-</th>
	<th>product_id</th>
	<th>product_name</th>
	<th>product_unit</th>
	<th>product_amount</th>
	<th>Remaining_quantity</th>
	<th>delete</th>
	</tr>
<?php
if(isset($_POST['p_submit']))
{
	include('dbcon.php');
	
	$qry="select * from product_detail";
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1)
	{
		echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
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
				<td><a href="deletestock.php?sid=<?php echo $data['p_id'];?>">Delete</a></th>
			</tr>

			<?php
		}
	}
}
?>
</table>
