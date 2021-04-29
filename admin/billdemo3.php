<?php
 $tamount1=""; 
 $quantity1="";
 $amount1="";
 $select1="";
  $tamount2="";
 $quantity2="";
 $amount2="";
  $select2="";
  $tamount3="";
 $quantity3="";
 $amount3="";
 $select3="";
if(isset($_POST['b_submit']))
{
	$none=$_POST['select1'];
	$none1=$_POST['select2'];
	$none2=$_POST['select3'];
	$custname=$_POST['cust'];
	$none=$_POST['select1'];
	
	if(!($none=="none"))
	{
		include('dbcon.php');
		$qry1="select remaining_quantity from product_detail where p_name='chocolate_with_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if($row < 1)	
		{
			?>
			<script>
			alert('chocolate_with_ice_cream not avail....');
			window.open('generatebill.php','_self');
			</script>
			<?php
		}
		if($data['remaining_quantity']=="0")	
		{
			?>
			<script>
			alert('chocolate_with_ice_cream not avail....');
			window.open('generatebill.php','_self');
			</script>
			<?php
		}
		else
		{
			$quantity1=$_POST['txt'];
				
			if($quantity1 > $check)
			{	
			
				?>
				<script>
				alert('chocolate_with_ice_cream purchase quantity greater than stock');
				window.open('generatebill.php','_self');
				</script>
				<?php
				
			}	
		}
	
	}
	$none1=$_POST['select2'];
	if(!($none1=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='oreo_with_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if($row < 1)	
		{
			
			
			?>
			<script>
			alert(' oreo_with_ice_cream not avail....');
			window.open('generatebill.php','_self');
			</script>
			<?php
		}
		if($data['remaining_quantity']=="0")	
		{
			
			
			?>
			<script>
			alert('oreo_with_ice_cream not avail....');
			window.open('generatebill.php','_self');
			</script>
			<?php
		}
		else
		{
			$quantity2=$_POST['txt3'];
				
			if($quantity2 > $check)
			{	
			
				?>
				<script>
				alert('oreo_with_ice_cream purchase quantity greater than stock');
				window.open('generatebill.php','_self');
				</script>
				<?php
				
			}
			
			
			
		}
	
	}
	$none2=$_POST['select3'];
	if(!($none2=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='chocolate_nuts_with_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if($row < 1)	
		{
			
			
			?>
			<script>
			alert(' chocolate_nuts_with_ice_cream not avail....');
			window.open('generatebill.php','_self');
			</script>
			<?php
		}
		if($data['remaining_quantity']=="0")	
		{
			
			
			?>
			<script>
			alert('chocolate_nuts_with_ice_cream not avail....');
			window.open('generatebill.php','_self');
			</script>
			<?php
		}
		else
		{
			$quantity3=$_POST['txt5'];
				
			if($quantity3 > $check)
			{	
			
				?>
				<script>
				alert('chocolate_nuts_with_ice_cream purchase quantity greater than stock');
				window.open('generatebill.php','_self');
				</script>
				<?php
				
			}
			
			
			
		}
	
	}
	if(!($none=="none"))
	{
		include('dbcon.php');
		$qry1="select remaining_quantity from product_detail where p_name='chocolate_with_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$quantity1=$_POST['txt'];
				
				if(!($quantity1 > $check))
				{	
			
						
					$custname=$_POST['cust'];
					$select1=$_POST['select1'];
					$quantity1=$_POST['txt'];
					$amount1=$_POST['txt2'];
					 $tamount1=$quantity1*$amount1;
					
					
					$insertcustname="insert into billing_table(cust_name)values('$custname')";
					$custnameinsertres=mysqli_query($con,$insertcustname);
						
					$insert="update billing_table set chocolate_with_ice_cream='$select1',quantity_p1='$quantity1',amount_p1='$amount1',final_amount='$tamount1' where cust_name='$custname'";
					$res=mysqli_query($con,$insert);
				
				
				
					$rquantity1=(int)$data['remaining_quantity'] - $quantity1;
					$updqueryp1="update product_detail set remaining_quantity='$rquantity1' where p_name='chocolate_with_ice_cream'";
					$run2=mysqli_query($con,$updqueryp1);
		
					$salesquantity="select sales_quantity from sales_table where product_name='chocolate_with_ice_cream'";
					$run3=mysqli_query($con,$salesquantity);
					$data2=mysqli_fetch_assoc($run3);
					$rsalesquantity1=(int)$data2['sales_quantity']+$quantity1;
				
					$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='chocolate_with_ice_cream'";
					$run4=mysqli_query($con,$updquerys1);
				
				
				
				}	
			}
			
			
		}
	
	}
	if(!($none1=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='oreo_with_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
			$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$quantity2=$_POST['txt3'];
				
				if(!($quantity2 > $check))
				{	
								
				$custname=$_POST['cust'];
				$select2=$_POST['select2'];
				$quantity2=$_POST['txt3'];
				$amount2=$_POST['txt4'];
				$tamount2=$quantity2*$amount2;
				
				
				$insert="update billing_table set oreo_with_ice_cream='$select2',quantity_p2='$quantity2',amount_p2='$amount2',final_amount='$tamount2' where cust_name='$custname'";
				$res=mysqli_query($con,$insert);
				
				
				
				$rquantity2=(int)$data['remaining_quantity'] - $quantity2;
				$updqueryp2="update product_detail set remaining_quantity='$rquantity2' where p_name='oreo_with_ice_cream'";
				$run2=mysqli_query($con,$updqueryp2);
		
				$salesquantity="select sales_quantity from sales_table where product_name='oreo_with_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				$rsalesquantity1=(int)$data2['sales_quantity']+$quantity2;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='oreo_with_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
					
			
			}
			
		}
	
	}
	if(!($none2=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='chocolate_nuts_with_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$quantity3=$_POST['txt5'];
				
				if(!($quantity3 > $check))
				{	
			
				$tamount3='0';		
				$custname=$_POST['cust'];
				$select3=$_POST['select3'];
				$quantity3=$_POST['txt5'];
				$amount3=$_POST['txt6'];
				$tamount3=$quantity3*$amount3;
				
				
				$insert="update billing_table set chocolate_nuts_with_ice='$select3',quantity_p3='$quantity3',amount_p3='$amount3',final_amount='$tamount3' where cust_name='$custname'";
				$res=mysqli_query($con,$insert);
				
				
				
				$rquantity3=(int)$data['remaining_quantity'] - $quantity3;
				$updqueryp3="update product_detail set remaining_quantity='$rquantity3' where p_name='chocolate_nuts_with_ice_cream'";
				$run2=mysqli_query($con,$updqueryp3);
		
				$salesquantity="select sales_quantity from sales_table where product_name='chocolate_nuts_with_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				$rsalesquantity1=(int)$data2['sales_quantity']+$quantity3;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='chocolate_nuts_with_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	
	}	
}
?> 
<?php
echo $tamount1;
echo "*";
echo $quantity1;
echo "*";
echo $amount1;
echo "*";
echo $select1;

echo "***************";
echo $tamount2;
echo "*";
echo $quantity2;
echo "*";
echo $amount2;
echo "*";
echo $select2;
echo "***************";
echo $tamount3;
echo "*";
echo $quantity3;
echo "*";
echo $amount3;
echo "*";
echo $select3;
?>