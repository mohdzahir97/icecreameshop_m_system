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
 
  $tamount4="";
 $quantity4="";
 $amount4="";
 $select4="";
  $tamount5="";
 $quantity5="";
 $amount5="";
 $select5="";
 
  $tamount6="";
 $quantity6="";
 $amount6="";
 $select6="";
 
  $tamount7="";
 $quantity7="";
 $amount7="";
 $select7="";
 
 
  $tamount8="";
 $quantity8="";
 $amount8="";
 $select8="";
 
  $tamount9="";
 $quantity9="";
 $amount9="";
 $select9="";
 
  $tamount10="";
 $quantity10="";
 $amount10="";
 $select10="";
 
 
  $tamount11="";
 $quantity11="";
 $amount11="";
 $select11="";
 
  $tamount12="";
 $quantity12="";
 $amount12="";
 $select12="";
 
if(isset($_POST['b_submit']))
{
	$custname=$_POST['cust'];
	$none=$_POST['select1'];
	$none1=$_POST['select2'];
	$none2=$_POST['select3'];
	$none3=$_POST['select4'];
	$none4=$_POST['select5'];
	$none5=$_POST['select6'];
	$none6=$_POST['select7'];
	$none7=$_POST['select8'];
	$none8=$_POST['select9'];
	$none9=$_POST['select10'];
	$none10=$_POST['select11'];
	$none11=$_POST['select12'];
	
	
	
	
	
	
	
	
	
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
				
				$q1=$_POST['txt'];
				
				if(!($q1 > $check))
				{	
			
						
					$custname=$_POST['cust'];
					$select1=$_POST['select1'];
					$quantity1=$_POST['txt'];
					$amount1=$_POST['txt2'];
					(int)$tamount1=(int)$quantity1*(int)$amount1;
					
				
					(int)$rquantity1=(int)$data['remaining_quantity'] - (int)$quantity1;
					$updqueryp1="update product_detail set remaining_quantity='$rquantity1' where p_name='chocolate_with_ice_cream'";
					$run2=mysqli_query($con,$updqueryp1);
		
					$salesquantity="select sales_quantity from sales_table where product_name='chocolate_with_ice_cream'";
					$run3=mysqli_query($con,$salesquantity);
					$data2=mysqli_fetch_assoc($run3);
					(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity1;
				
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
				
				$q2=$_POST['txt3'];
				
				if(!($q2 > $check))
				{	
								
				$custname=$_POST['cust'];
				$select2=$_POST['select2'];
				$quantity2=$_POST['txt3'];
				$amount2=$_POST['txt4'];
				(int)$tamount2=(int)$quantity2*(int)$amount2;
				
				
				
				(int)$rquantity2=(int)$data['remaining_quantity'] - (int)$quantity2;
				$updqueryp2="update product_detail set remaining_quantity='$rquantity2' where p_name='oreo_with_ice_cream'";
				$run2=mysqli_query($con,$updqueryp2);
		
				$salesquantity="select sales_quantity from sales_table where product_name='oreo_with_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity2;
				
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
				
				$q3=$_POST['txt5'];
				
				if(!($q3 > $check))
				{	
			
				$tamount3='0';		
				$custname=$_POST['cust'];
				$select3=$_POST['select3'];
				$quantity3=$_POST['txt5'];
				$amount3=$_POST['txt6'];
				(int)$tamount3=(int)$quantity3*(int)$amount3;
				
				
				
				(int)$rquantity3=(int)$data['remaining_quantity'] - (int)$quantity3;
				$updqueryp3="update product_detail set remaining_quantity='$rquantity3' where p_name='chocolate_nuts_with_ice_cream'";
				$run2=mysqli_query($con,$updqueryp3);
		
				$salesquantity="select sales_quantity from sales_table where product_name='chocolate_nuts_with_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity3;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='chocolate_nuts_with_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	
	}	
	
	if(!($none3=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='chocolate_fappichino'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$q4=$_POST['txt7'];
				
				if(!($q4 > $check))
				{	
					
				$custname=$_POST['cust'];
				$select4=$_POST['select4'];
				$quantity4=$_POST['txt7'];
				$amount4=$_POST['txt8'];
				(int)$tamount4=(int)$quantity4*(int)$amount4;
				
				(int)$rquantity4=(int)$data['remaining_quantity'] - (int)$quantity4;
				$updqueryp4="update product_detail set remaining_quantity='$rquantity4' where p_name='chocolate_fappichino'";
				$run2=mysqli_query($con,$updqueryp4);
		
				$salesquantity="select sales_quantity from sales_table where product_name='chocolate_fappichino'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity4;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='chocolate_fappichino'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	}
	
	if(!($none4=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='vanilla_fappichino'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$q5=$_POST['txt9'];
				
				if(!($q5 > $check))
				{	
					
				$custname=$_POST['cust'];
				$select5=$_POST['select5'];
				$quantity5=$_POST['txt9'];
				$amount5=$_POST['txt10'];
				(int)$tamount5=(int)$quantity5*(int)$amount5;
				
				(int)$rquantity5=(int)$data['remaining_quantity'] - (int)$quantity5;
				$updqueryp5="update product_detail set remaining_quantity='$rquantity5' where p_name='vanilla_fappichino'";
				$run2=mysqli_query($con,$updqueryp5);
		
				$salesquantity="select sales_quantity from sales_table where product_name='vanilla_fappichino'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity5;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='vanilla_fappichino'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	}
	
	
	if(!($none5=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='caramal_moca'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$q6=$_POST['txt11'];
				
				if(!($q6 > $check))
				{	
					
				$custname=$_POST['cust'];
				$select6=$_POST['select6'];
				$quantity6=$_POST['txt11'];
				$amount6=$_POST['txt12'];
				(int)$tamount6=(int)$quantity6*(int)$amount6;
				
				(int)$rquantity6=(int)$data['remaining_quantity'] - (int)$quantity6;
				$updqueryp6="update product_detail set remaining_quantity='$rquantity6' where p_name='caramal_moca'";
				$run2=mysqli_query($con,$updqueryp6);
		
				$salesquantity="select sales_quantity from sales_table where product_name='caramal_moca'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity6;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='caramal_moca'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	}
	
	
	if(!($none6=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='pineapple_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$q7=$_POST['txt13'];
				
				if(!($q7 > $check))
				{	
					
				$custname=$_POST['cust'];
				$select7=$_POST['select7'];
				$quantity7=$_POST['txt13'];
				$amount7=$_POST['txt14'];
				(int)$tamount7=(int)$quantity7*(int)$amount7;
				
				(int)$rquantity7=(int)$data['remaining_quantity'] - (int)$quantity7;
				$updqueryp7="update product_detail set remaining_quantity='$rquantity7' where p_name='pineapple_ice_cream'";
				$run2=mysqli_query($con,$updqueryp7);
		
				$salesquantity="select sales_quantity from sales_table where product_name='pineapple_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity7;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='pineapple_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	}
	
	
	
	
	if(!($none7=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='caramal_crunch_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$q8=$_POST['txt15'];
				
				if(!($q8 > $check))
				{	
					
				$custname=$_POST['cust'];
				$select8=$_POST['select8'];
				$quantity8=$_POST['txt15'];
				$amount8=$_POST['txt16'];
				(int)$tamount8=(int)$quantity8*(int)$amount8;
				
				(int)$rquantity8=(int)$data['remaining_quantity'] - (int)$quantity8;
				$updqueryp8="update product_detail set remaining_quantity='$rquantity8' where p_name='caramal_crunch_ice_cream'";
				$run2=mysqli_query($con,$updqueryp8);
		
				$salesquantity="select sales_quantity from sales_table where product_name='caramal_crunch_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity8;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='caramal_crunch_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	}
	
	
	

	if(!($none8=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='vanilla_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$q9=$_POST['txt17'];
				
				if(!($q9 > $check))
				{	
					
				$custname=$_POST['cust'];
				$select9=$_POST['select9'];
				$quantity9=$_POST['txt17'];
				$amount9=$_POST['txt18'];
				(int)$tamount9=(int)$quantity9*(int)$amount9;
				
				(int)$rquantity9=(int)$data['remaining_quantity'] - (int)$quantity9;
				$updqueryp9="update product_detail set remaining_quantity='$rquantity9' where p_name='vanilla_ice_cream'";
				$run2=mysqli_query($con,$updqueryp9);
		
				$salesquantity="select sales_quantity from sales_table where product_name='vanilla_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity9;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='vanilla_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	}
	
	
	if(!($none9=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='mango_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$q10=$_POST['txt19'];
				
				if(!($q10 > $check))
				{	
					
				$custname=$_POST['cust'];
				$select10=$_POST['select10'];
				$quantity10=$_POST['txt19'];
				$amount10=$_POST['txt20'];
				(int)$tamount10=(int)$quantity10*(int)$amount10;
				
				(int)$rquantity10=(int)$data['remaining_quantity'] - (int)$quantity10;
				$updqueryp10="update product_detail set remaining_quantity='$rquantity10' where p_name='mango_ice_cream'";
				$run2=mysqli_query($con,$updqueryp10);
		
				$salesquantity="select sales_quantity from sales_table where product_name='mango_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity10;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='mango_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	}

	if(!($none10=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='chocolate_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$q11=$_POST['txt21'];
				
				if(!($q11 > $check))
				{	
					
				$custname=$_POST['cust'];
				$select11=$_POST['select11'];
				$quantity11=$_POST['txt21'];
				$amount11=$_POST['txt22'];
				(int)$tamount11=(int)$quantity11*(int)$amount11;
				
				(int)$rquantity11=(int)$data['remaining_quantity'] - (int)$quantity11;
				$updqueryp11="update product_detail set remaining_quantity='$rquantity11' where p_name='chocolate_ice_cream'";
				$run2=mysqli_query($con,$updqueryp11);
		
				$salesquantity="select sales_quantity from sales_table where product_name='chocolate_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity11;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='chocolate_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	}

	
	if(!($none11=="none"))
	{
		include('dbcon.php');
		
		$qry1="select remaining_quantity from product_detail where p_name='strawberry_ice_cream'";
		$run1=mysqli_query($con,$qry1);
		$data=mysqli_fetch_assoc($run1);
		$check=(int)$data['remaining_quantity'];
		$row=mysqli_num_rows($run1);
		if(!($row < 1))	
		{
			
			
			if(!($data['remaining_quantity']=="0"))	
			{
				
				$q12=$_POST['txt23'];
				
				if(!($q12 > $check))
				{	
					
				$custname=$_POST['cust'];
				$select12=$_POST['select12'];
				$quantity12=$_POST['txt23'];
				$amount12=$_POST['txt24'];
				(int)$tamount12=(int)$quantity12*(int)$amount12;
				
				(int)$rquantity12=(int)$data['remaining_quantity'] - (int)$quantity12;
				$updqueryp12="update product_detail set remaining_quantity='$rquantity12' where p_name='strawberry_ice_cream'";
				$run2=mysqli_query($con,$updqueryp12);
		
				$salesquantity="select sales_quantity from sales_table where product_name='strawberry_ice_cream'";
				$run3=mysqli_query($con,$salesquantity);
				$data2=mysqli_fetch_assoc($run3);
				(int)$rsalesquantity1=(int)$data2['sales_quantity']+(int)$quantity12;
				
				$updquerys1="update sales_table set sales_quantity='$rsalesquantity1' where product_name='strawberry_ice_cream'";
				$run4=mysqli_query($con,$updquerys1);
				
				
				}
			
			}
		}
	}

	(int)$finalamount=(int)$tamount1+(int)$tamount2+(int)$tamount3+(int)$tamount4+(int)$tamount5+(int)$tamount6+(int)$tamount7+(int)$tamount8+(int)$tamount9+(int)$tamount10+(int)$tamount11+(int)$tamount12;
	
	
	$insertbill="insert into billing_table(cust_name,chocolate_with_ice_cream,quantity_p1,amount_p1,oreo_with_ice_cream,quantity_p2,amount_p2,chocolate_nuts_with_ice,quantity_p3,amount_p3,chocolate_fappichino,quantity_p4,amount_p4,vanilla_fappichino,quantity_p5,amount_p5,caramal_moca,quantity_p6,amount_p6,pineapple_ice_cream,quantity_p7,amount_p7,caramal_crunch_ice_cream,quantity_p8,amount_p8,vanilla_ice_cream,quantity_p9,amount_p9,mango_ice_cream,quantity_p10,amount_p10,chocolate_ice_cream,quantity_p11,amount_p11,strawberry_ice_cream,quantity_p12,amount_p12,final_amount)values('$custname','$select1','$quantity1','$amount1','$select2','$quantity2','$amount2','$select3','$quantity3','$amount3','$select4','$quantity4','$amount4','$select5','$quantity5','$amount5','$select6','$quantity6','$amount6','$select7','$quantity7','$amount7','$select8','$quantity8','$amount8','$select9','$quantity9','$amount9','$select10','$quantity10','$amount10','$select11','$quantity11','$amount11','$select12','$quantity12','$amount12','$finalamount')";
	$res=mysqli_query($con,$insertbill);			
				
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

echo "*********";
echo $tamount4;
echo "*";
echo $quantity4;
echo "*";
echo $amount4;
echo "*";
echo $select4;

echo "*********";
echo $tamount5;
echo "*";
echo $quantity5;
echo "*";
echo $amount5;
echo "*";
echo $select5;

echo "*********";
echo $tamount6;
echo "*";
echo $quantity6;
echo "*";
echo $amount6;
echo "*";
echo $select6;

echo "*********";
echo $tamount7;
echo "*";
echo $quantity7;
echo "*";
echo $amount7;
echo "*";
echo $select7;

echo "*********";
echo $tamount8;
echo "*";
echo $quantity8;
echo "*";
echo $amount8;
echo "*";
echo $select8;


echo "*********";
echo $tamount9;
echo "*";
echo $quantity9;
echo "*";
echo $amount9;
echo "*";
echo $select9;

echo "*********";
echo $tamount10;
echo "*";
echo $quantity10;
echo "*";
echo $amount10;
echo "*";
echo $select10;


echo "*********";
echo $tamount11;
echo "*";
echo $quantity11;
echo "*";
echo $amount11;
echo "*";
echo $select11;

echo "*********";
echo $tamount12;
echo "*";
echo $quantity12;
echo "*";
echo $amount12;
echo "*";
echo $select12;

echo"final amount is:";
echo $finalamount;
?>