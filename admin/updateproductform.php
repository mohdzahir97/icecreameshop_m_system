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
<?php
include('dbcon.php');
$sid=$_GET['sid'];
$sql="select * from product_detail where p_id='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
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
<div>
<h4><a href="admindashboard.php" style="float:left;margin-left:5px;color:#fff;font-size:20px;">Back to Dashboard</a></h4>
<h4><a href="logout.php" style="float:right;margin-right:30px;color:#fff;font-size:20px;">Logout</a></h4>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:55px;">Ice Cream Parlour Management System</h1>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">Update Product</h1>
</div>
<form action="updateproductdata.php" method="post">

<br>
<table align="center" class="table table-borders" border="1" style="width:60%; height:40%; margin-top:90px;">
<tr>
<th colspan="2" align="center"><center><h3>Update Product Details:</h3></center></th>
</tr>
<tr>
<th align="center">Product Name:</th>
<td>
<select name="p_name" class="form-control" required>
<option><?php echo $data['p_name'];?></option>
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


<tr>
<th align="center">Product Unit:</th>
<td>
<select name="p_unit" class="form-control" required>
<option><?php echo $data['p_unit'];?></option>
<option>Box</option>
<option>Single</option>
</select>
</td>
</tr>
<tr>
<th align="center"> Product Amount:</th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
<td align="center"><input type="text" name="p_amount" value=<?php echo $data['p_amount'];?>  class="form-control" autocomplete="off" required></td>                                       
</tr>
<tr>
<th align="center">Product Quantity:</th>
<td align="center"><input type="text" name="p_quantity" value=<?php echo $data['remaining_quantity'];?> class="form-control" class="text-center" required></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="hidden" name="sid" autocomplete="off" value="<?php echo $data['p_id'];?>">
<input type="submit" name="p_submit" value="submit" class="btn btn-success"><a href="updateproduct.php">cancel</a>
</td>
</tr>
</table>
</form>
</body>
</html>
