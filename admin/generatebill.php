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
<title>generatebill</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div>
<h4><a href="admindashboard.php" style="float:left;margin-left:5px;color:#fff;font-size:20px;">Back to Dashboard</a></h4>
<h4><a href="logout.php" style="float:right;margin-right:30px;color:#fff;font-size:20px;">Logout</a></h4>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:55px;">Ice Cream Parlour Management System</h1>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">Generate Bill</h1>
</div>
<form action="bill.php" method="post">
<table align="center"   border="" style="width:%; margin-top:px;">

<tr>
<td colspan="5"><center><h3>Generate Bill</h3></center></td>
</tr>
<tr>
<td colspan="5" ><center><b>Customer Name:</b><input type="text" name="cust" placeholder="enter customer name" class="text-center" required></center></td>
</tr>
<tr>
<td>
1.<input type="checkbox"  name="select1" value="chocolate with ice cream">
chocolate with ice cream
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt" min="1" max="10" style="width:150px"; class="text-center"></center></td>

</tr>
<tr>
<td>
2.<input type="checkbox" name="select2" value="oreo with ice cream">
Oreo with ice cream
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt3" min="1" max="10" style="width:150px"; class="text-center"><center></td>
</tr>

<tr>
<td>
3.<input type="checkbox" name="select3" value="chocolate Nuts with ice cream">
chocolate Nuts with ice cream
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt5"  min="1" max="10" style="width:150px"; class="text-center"></center></td>
</tr>

<tr>
<td>
4.<input type="checkbox" name="select4" value="chocolate Fappichino" >
chocolate Fappichino
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt7"  min="1" max="10" style="width:150px"; class="text-center"></center></td>
</tr>

<tr>
<td>
5.<input type="checkbox" name="select5" value="Vanilla Fappichino">
Vanilla Fappichino
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt9"  min="1" max="10" style="width:150px"; class="text-center"></center></td>
</tr>


<tr>
<td>
6.<input type="checkbox" name="select6" value="Caramal Moca">
Caramal Moca
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt11"  min="1" max="10" style="width:150px"; class="text-center"></center></td>
</tr>

<tr>
<td>
7.<input type="checkbox"  name="select7" value="Pineapple ice cream">
Pineapple ice cream
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt13"  min="1" max="10" style="width:150px"; class="text-center" ></center></td>
</tr>

<tr>
<td>
8.<input type="checkbox" name="select8" value="Caramal crunch ice cream">
Caramal crunch ice cream
Caramal crunch ice cream
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt15"  min="1" max="10" style="width:150px"; class="text-center"></center></td>
</tr>

<tr>
<td>
9.<input type="checkbox" name="select9" value="Vanilla ice cream">
Vanilla ice cream
</td>
<td></center><input type="number" placeholder="enter quantity" name="txt17"  min="1" max="10" style="width:150px"; class="text-center"></center></td>
</tr>


<tr>
<td>
10.<input type="checkbox" name="select10" value="Mango ice cream">
Mango ice cream
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt19"  min="1" max="10" style="width:150px"; class="text-center"></center></td>
</tr>

<tr>
<td>
11.<input type="checkbox"  name="select11" value="Chocolate ice cream">
Chocolate ice cream
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt21"  min="1" max="10" style="width:150px"; class="text-center"></center></td>
</tr>



<tr>
<td>
12.<input type="checkbox" name="select12" value="Strawberry ice cream">
Strawberry ice cream
</select>
</td>
<td><center><input type="number" placeholder="enter quantity" name="txt23"  min="1" max="10" style="width:150px"; class="text-center"></center></td>
</tr>
<tr>
<td colspan="6" ><center><input type="submit" name="b_submit" value="submit" class="btn btn-success"><a href="generatebillpage.php">cancel</a></center></td>
</tr>
</table>
</form>
</body>
</html>