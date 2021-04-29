<?php

 $tamount1=""; 
 $quantity1="";
 $amount1="";
if(isset($_POST['b_submit']))
{
	$select1=$_POST['select1'];
	if(!($select1=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='chocolate_with_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$typecast1=(int)$data['remaining_quantity']-2;
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
			if($quantity1>$data['remaining_quantity'])
			{	
			
				?>
				<script>
				alert('chocolate_with_ice_cream purchase quantity greater than stock');
				window.open('generatebill.php','_self');
				</script>
				<?php
				
			}
			else
			{
				$custname=$_POST['cust'];
				$select1=$_POST['select1'];
				$quantity1=$_POST['txt'];
				$amount1=$_POST['txt2'];
				$tamount1=$quantity1*$amount1;
				
				$insert="insert into billing_table(cust_name,chocolate_with_ice_cream,quantity_p1,amount_p1,final_amount)values('$custname','$select1','$quantity1','$amount1','$tamount1')";
				$res=mysqli_query($con,$insert);
				
				
				
				$rquantity1=$run1-$quantity1;
				$updqueryp1="update product_datail set remaining_quantity='$rquantity1' where p_name='chocolate_with_ice_cream'";
				$run2=mysqli_query($con,$updqueryp1);
		
				$salesquantity="select sales_quantity from sales_table where product_name='chocolate_with_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				$rsalesquantity1=$run3+$quantity1;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='chocolate_with_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				
				
			}
			
			
			
		}
	
	}	
	
}
?> 
<?php
echo $tamount1;
echo "*******";
echo $quantity1;
echo "*******";
echo $amount1;
echo "******";
echo $select1;
?>