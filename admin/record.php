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
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">Report</h1>
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
<table align="center" >
<form action="record.php" method="post">
<tr>
<th><b>Check Bill Report With Date:</b></th>
<td><input type="date" name="txtstartdate" placeholder="Enter start date" class="form-control" required></td>
<td><input type="date" name="txtenddate" placeholder="Enter end date" class="form-control" required></td>

<td></td>
<td colspan="1"><input type="submit" name="p_submit" value="search" class="btn btn-success"></td>

<td><a href="admindashboard.php" style="text-decoration:none;">cancel</a></td>
</tr>
</form>
</table>

<?php
if(isset($_POST['p_submit']))
{
	include('dbcon.php');
	$txtstartdate=$_POST['txtstartdate'];
	$txtenddate=$_POST['txtenddate'];
	?>
	
<table align="center" width="80%" border="1" style="margin-top:10px" id="table2">
	<tr>
	<td colspan="6"><center><h3>View Bill Detail:</h3></center></td>
	</tr>

	<tr>
	<td colspan="6"><center>Date:<?php echo $txtstartdate?><b>To</b><?php echo $txtenddate?></center></td>
	</tr>
		<tr>
	<th><center>No:-</center></th>
	<th><center>Customer_id</center></th>
	<th><center>Customer_name</center></th>
	<th><center>Total_amount</center></th>
	<th><center>Date</center></th>
	<th><center>View</center></th>
	</tr>
	<?php
	$qry="select * from billing_table where date Between '$txtstartdate' AND '$txtenddate'";
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
				<td><a href="viewbillasrecord.php?sid=<?php echo $data['cust_id'];?>">view</a></th>
			</tr>

			<?php
		}
	}
}
?>
</table>

<center><p><button id="btn2" class="btn btn-success">print</button></p></center>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('#btn2').click(function (){
	var printme=document.getElementById('table2');
	var wme=window.open("","","width=900,height=700");
	wme.document.write(printme.outerHTML);
	wme.document.close();
	wme.focus();
	wme.print();
	wme.close();
});
</script>
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

</html>
</body>
<br>
<br>
<br>
<div class="container">
<table align="center">
<table align="center">
<form action="record.php" method="post">
<tr>
<td><b>Check Sales Report With Date:</b></td>
<td><input type="date" name="txtstartdate1" placeholder="Enter start date" class="form-control" required></td>
<td><input type="date" name="txtenddate1" placeholder="Enter end date" class="form-control" required ></td>
<td>
<select name="p_name" class="form-control" required>
<option >chocolate_with_ice_cream</option>
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
<td><input type="submit" name="p_submit11" value="Check Sale" class="btn btn-success"></td>
<td><a href="admindashboard.php">cancel</a>
</td>
</tr>
</form>
</table>
</div>
<div class="container">

<?php
if(isset($_POST['p_submit11']))
{
	include('dbcon.php');
	$p_name=$_POST['p_name'];
	
		
		$txtstartdate1="";
		$txtenddate1="";
	?>
		<table align="center" width="80%" border="1" style="margin-top:10px" id="table1">
	<tr>
	<th><center><h3>Product Sale Detail</h3></center></th>
	</tr>
	<tr>
	<th><center>product_sale_quantity_with_date</center></th>
	</tr>
	<?php

		
		
	if($p_name=="chocolate_with_ice_cream")
	{
		$p_name=$_POST['p_name'];
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p1) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	if($p_name=="oreo_with_ice_cream")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p2) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	
	if($p_name=="chocolate_nuts_with_ice_cream")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p3) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	
	if($p_name=="chocolate_fappichino")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p4) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	
	if($p_name=="vanilla_fappichino")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p5) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	
	if($p_name=="caramal_moca")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p6) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	
	if($p_name=="pineapple_ice_cream")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p7) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
			
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	
	if($p_name=="caramal_crunch_ice_cream")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p8) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	
	if($p_name=="vanilla_ice_cream")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p9) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	
	
	if($p_name=="mango_ice_cream")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p10) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}
	
	
	if($p_name=="chocolate_ice_cream")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p11) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>
				<?php
		}
	}
		
	if($p_name=="strawberry_ice_cream")
	{
		
		$txtstartdate1=$_POST['txtstartdate1'];
		$txtenddate1=$_POST['txtenddate1'];
	
		$qry="select sum(quantity_p12) as dt from billing_table where date Between '$txtstartdate1' AND '$txtenddate1'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr align='center'><td colspan='6'>no record found</td></tr>";
		}
		else
		{
			while($data=mysqli_fetch_array($run))
			{
				$r1=$data['dt'];
			
			}
				?>
				
				<tr align="center">
					<td><center><?php echo 	$p_name ?><br><b>Date:</b><?php echo $txtstartdate1 ?> <b>To</b> <?php echo $txtenddate1 ?><br>Sale Quantity:<?php echo $r1;?></center></td>
				</tr>

				<?php
		}
	}


	
}
?>
</table>
<center><p><button id="btn1" class="btn btn-success">print</button></p></center>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('#btn1').click(function (){
	var printme=document.getElementById('table1');
	var wme=window.open("","","width=900,height=700");
	wme.document.write(printme.outerHTML);
	wme.document.close();
	wme.focus();
	wme.print();
	wme.close();
});
</script>