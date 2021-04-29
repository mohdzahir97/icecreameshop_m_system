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
$sql="select * from billing_table where cust_id='$sid'";
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

<form action="viewbillasrecord.php" method="post">
<div>
<h4><a href="admindashboard.php" style="float:left;margin-left:5px;color:#fff;font-size:20px;">Back to Dashboard</a></h4>
<h4><a href="logout.php" style="float:right;margin-right:30px;color:#fff;font-size:20px;">Logout</a></h4>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:55px;">Ice Cream Parlour Management System</h1>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">Print Bill As Record</h1>
</div>
</form>
<div class="container">
<table border="1" align="center" style="width:500px;margin-top:5%" id="table">
<tr>
<td colspan="5">Bill NO:<?php echo $data['cust_id'];?><center><h4> Bill</h4></center></td>
</tr>
<tr>
<td class="text-center" colspan="4"><center><b>Customer Name:</b><?php echo $data['cust_name'];?>--<b>Date:</b><?php echo $data['date']; ?></center></td>
</tr>
<tr>
<th><center>Product Name</center></th>
<th><center>Quantity<center></th>
<th><center>Product Price</center></th>
<th><center>Amount</center></th>

</tr>
<tr>
<td class="text-center"><center><?php echo $data['chocolate_with_ice_cream'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p1'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p1'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p1'];?></center></td>
</tr>
<tr>
<td class="text-center"><center><?php echo $data['oreo_with_ice_cream'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p2'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p2'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p2'];?></center></td>

</tr>


<tr>
<td class="text-center"><center><?php echo $data['chocolate_nuts_with_ice'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p3'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p3'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p3'];?></center></td>

</tr>



<tr>
<td class="text-center"><center><?php echo $data['chocolate_fappichino'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p4'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p4'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p4'];?></center></td>

</tr>



<tr>
<td class="text-center"><center><?php echo $data['vanilla_fappichino'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p5'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p5'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p5'];?></center></td>

</tr>

<tr>
<td class="text-center"><center><?php echo $data['caramal_moca'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p6'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p6'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p6'];?></center></td>

</tr>

<tr>
<td class="text-center"><center><?php echo $data['pineapple_ice_cream'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p7'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p7'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p7'];?></center></td>

</tr>

<tr>
<td class="text-center"><center><?php echo $data['caramal_crunch_ice_cream'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p8'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p8'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p8'];?></center></td>

</tr>


<tr>
<td class="text-center"><center><?php echo $data['vanilla_ice_cream'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p9'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p9'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p9'];?></center></td>

</tr>

<tr>
<td class="text-center"><center><?php echo $data['mango_ice_cream'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p10'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p10'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p10'];?></center></td>

</tr>


<tr>
<td class="text-center"><center><?php echo $data['chocolate_ice_cream'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p11'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p11'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p11'];?></center></td>

</tr>


<tr>
<td class="text-center"><center><?php echo $data['strawberry_ice_cream'];?></center></td>
<td class="text-center"><center><?php echo $data['quantity_p12'];?></center></td>
<td class="text-center"><center><?php echo $data['amount_p12'];?></center></td>
<td class="text-center"><center><?php echo $data['tamount_p12'];?></center></td>

</tr>

<tr>
<th colspan="2"><center>Total Product:</center></th>
<th colspan="2"><center>Total Amount:</center></th>
</tr>

<tr>
<td colspan="2" class="text-center"><center><?php echo $data['total_product'];?></center></td>
<td colspan="2" class="text-center"><center><?php echo $data['final_amount'];?></center></td>
</tr>
</table>

<center><p><button id="btn1" class="btn btn-success">print</button><a href="record.php">cancel</a></p></center>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('#btn1').click(function (){
	var printme=document.getElementById('table');
	var wme=window.open("","","width=900,height=700");
	wme.document.write(printme.outerHTML);
	wme.document.close();
	wme.focus();
	wme.print();
	wme.close();
});
</script>

</body>
</html>