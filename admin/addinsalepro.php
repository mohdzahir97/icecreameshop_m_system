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
<link rel="stylesheet" href="" type="text/css">
</head>
  
<body>
<form action="addinsalepro.php" method="post">
<div>
<h4><a href="admindashboard.php" style="float:left;margin-left:5px;color:#fff;font-size:20px;">Back to Dashboard</a></h4>
<h4><a href="logout.php" style="float:right;margin-right:30px;color:#fff;font-size:20px;">Logout</a></h4>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:55px;">Ice Cream Parlour Management System</h1>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">Add Product In Sale</h1>
</div>


<div class="container">
<table align="center" class="table table-border"  border="1" style="width:60%; height:40%; margin-top:60px;">
<tr>
<th colspan="2"><center><h3>Add Product Details:</h3></center></th>
</tr>
<div class="form-group">
<tr>
<th align="center">Product Name:</th>
<td>
<select name="p_name" class="form-control" required>
<option>chocolate_with_ice_cream</option>
<option>oreo_with_ice_cream</option>
<option>chocolate_nuts_with_ice_cream</option>
<option>chocolate_fappichino</option>
<option>vanilla_fappichino</option>
<option>caramal_moca</option>
<option>pineapple_ice_cream</option>
<option>caramal_crunch_ice_cream</option>
<option>vanilla_ice_cream</option>
<option>mango_ice_cream</option>
<option>chocolate_ice_cream</option>
<option>strawberry_ice_cream</option>
</select>
</td>
</tr>
</div>
<tr>
<td colspan="2" align="center"><input type="submit" name="p_submit" value="submit" class="btn btn-success"><a href="viewsale.php">cancel</a></td>
</tr>
</table>
</div>
</form>
</body>
</html>
<?php
if(isset($_POST['p_submit']))
{
	include('dbcon.php');
	
	$p_name=$_POST['p_name'];
	$qryd="select * from sales_table where product_name='$p_name'";
	$runs=mysqli_query($con,$qryd);
	if((empty($datas=mysqli_fetch_assoc($runs))))	
	{
		
		$qry="insert into sales_table(product_name)values('$p_name')";
		$run=mysqli_query($con,$qry);
		if($run == true)
		{
			?>
			<script>
			alert('Data inserted Successfully in sales_table.');
			</script>
			<?php
		}
		
		
	}
	else
	{
		?>
		<script>
		alert('Duplicate Data insertion not allowed in sales_table.');
		</script>
		<?php
		
	}
	
	
	
}
?>