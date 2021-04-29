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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>change password</title>
</head>
<body>
<form action="changepass.php" method="post">

<div class="" align="center">
<div class="container">
<div class="panel panel-success"  style="margin-left:25%;margin-right:25%;margin-top:12%">
<div class="panel-heading" style="height:300px" >
<table>
<tr>
<td colspan="2"><center><h3 class="bg-primary text-center font-weight-bold" style="margin-top:5%;width:450px;">Change Password<h3></center></td>
</tr>
<tr>
<td><label>Enter New Password:</label></td>
<td><input type="text" name="n_pass" class="text-center" placeholder="Enter New Password" autocomplete="off" required class="form-control" style="margin-top:;width:250px;"></td>
</tr>
<tr>
<td><label>Enter Confirm Password:</label></td>
<td><input type="text" name="c_pass" class="text-center" placeholder="Enter Confirm Password" autocomplete="off" required class="form-control" style="margin-top:;width:250px;"></td>
</tr>
<tr>
<td><label>Enter Old Password:</label></td>
<td><input type="text" name="o_pass" class="text-center" placeholder="Enter Old Password" autocomplete="off" required class="form-control" style="width:250px;"></td>
</tr>
</table>

<center><input type="submit" name="c_submit" value="change" class="btn btn-success" style="margin-top:2%;width:250px;"></center>
<center><a href="index.php" target="_blank">cancel</a></center>
</div>
</div>
</div>

</div>
</form>
</body>
</html>
<?php
if(isset($_POST['c_submit']))
{
	include('dbcon.php');
	$n_pass=$_POST['n_pass'];
	$c_pass=$_POST['c_pass'];
	$o_pass=$_POST['o_pass'];
	
	$qry="select * from admin where password='$o_pass'";
	$run=mysqli_query($con,$qry);
	$data=mysqli_fetch_assoc($run);
	if($n_pass!=$c_pass)
	{
		?>
		<script>
		alert('new password and confirm password does not match!!!');
		window.open('changepass.php','_self');
		</script>
		<?php
	}
	elseif($o_pass!=$data['password'])
	{
		?>
		<script>
		alert('old password does not match!!!');
		window.open('changepass.php','_self');
		</script>
		<?php
	}
	else
	{
		$query="update admin set password='$n_pass' where password='$o_pass'";
		$change=mysqli_query($con,$query);
			if($change == true)
		{
			
			?>
			<script>
			alert('password  change Successfully');
			</script>
			<?php
		}
	}
}
?>

