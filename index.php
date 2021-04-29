<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindashboard.php');
}
?>
<html>
<head>
<title>loginform</title>
<link rel="stylesheet" href="bootstrap.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>               
<body>
<div class="login-box"> 

 
<form action="index.php" method="post">
   
<div class="" align="center">
<div class="container">
<div class="panel panel-success"  style="margin-left:25%;margin-right:25%;margin-top:12%">
<div class="panel-heading" style="height:300px" >

<div class="">
<h1 class="bg-primary text-center font-weight-bold" style="margin-top:5%;width:250px;">AdminLogin</h1>
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" class="text-center" placeholder="Username" name="uname" value="" autocomplete="off" class="form-control" style="margin-top:5%;width:250px;">
</div>

<div class="">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" class="text-center" placeholder="Password" name="upass" value="" autocomplete="off" class="form-control"style="margin-top:5%;width:250px;">
</div>

<input  type="submit" name="submit" value="Login" class="btn btn-success"style="margin-top:5%;width:250px;">

</div>
</div>
</div>
</div>

</div>
</form>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['submit']))
{ 
		$username=$_POST['uname'];
		$password=$_POST['upass'];
		if(($username=="" && $password=="" ))
		{
			?>
			<script>
			alert('please enter Username and Password!!!');
			window.open('index.php','_self');
			</script>
			<?php
		}
		else
		{
			$qry="select * from admin where username='$username' AND password='$password'";
			$run=mysqli_query($con,$qry);
			$row=mysqli_num_rows($run);
			if($row <1)
			{
				?>
				<script>
				alert('Username and Password not macth!!!');
				window.open('index.php','_self');
				</script>
				<?php
			}
			else
			{
	
			
				$data=mysqli_fetch_assoc($run);
				$id=$data['id'];
				session_start();
				$_SESSION['uid']=$id;
				header('location:admin/admindashboard.php');
			}
		}
		
}
?>