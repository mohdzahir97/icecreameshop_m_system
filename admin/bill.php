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
 $custname="";
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
 $totalproduct="";
  $finalamount="";
  $date="";
 
if(isset($_POST['b_submit']))
{
	$custname=$_POST['cust'];
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['select1']))
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
					$queryp1="select p_amount from product_detail where p_name='chocolate_with_ice_cream'";
					$runp1=mysqli_query($con,$queryp1);
					$datap1=mysqli_fetch_assoc($runp1);
					$amount1=$datap1['p_amount'];
			
			
					(int)$tamount1=(int)$quantity1*(int)$datap1['p_amount'];
					
				
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
	if(isset($_POST['select2']))
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
				
					
					$queryp2="select p_amount from product_detail where p_name='oreo_with_ice_cream'";
					$runp2=mysqli_query($con,$queryp2);
					$datap2=mysqli_fetch_assoc($runp2);
					$amount2=$datap2['p_amount'];
					(int)$tamount2=(int)$quantity2*(int)$datap2['p_amount'];
				
				
				
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
	if(isset($_POST['select3']))
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
				
					$queryp3="select p_amount from product_detail where p_name='chocolate_nuts_with_ice_cream'";
					$runp3=mysqli_query($con,$queryp3);
					$datap3=mysqli_fetch_assoc($runp3);
					$amount3=$datap3['p_amount'];
					
					(int)$tamount3=(int)$quantity3*(int)$datap3['p_amount'];
	
				
				
				
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
	
	if(isset($_POST['select4']))
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
				
					$queryp4="select p_amount from product_detail where p_name='chocolate_fappichino'";
					$runp4=mysqli_query($con,$queryp4);
					$datap4=mysqli_fetch_assoc($runp4);
					$amount4=$datap4['p_amount'];
					(int)$tamount4=(int)$quantity4*(int)$datap4['p_amount'];
		
				
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
	
	if(isset($_POST['select5']))
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
				
					$queryp5="select p_amount from product_detail where p_name='vanilla_fappichino'";
					$runp5=mysqli_query($con,$queryp5);
					$datap5=mysqli_fetch_assoc($runp5);
					$amount5=$datap5['p_amount'];
					(int)$tamount5=(int)$quantity5*(int)$datap5['p_amount'];
				
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
	
	
	if(isset($_POST['select6']))
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
				
					$queryp6="select p_amount from product_detail where p_name='caramal_moca'";
					$runp6=mysqli_query($con,$queryp6);
					$datap6=mysqli_fetch_assoc($runp6);
					$amount6=$datap6['p_amount'];
					(int)$tamount6=(int)$quantity6*(int)$datap6['p_amount'];
				
				
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
	
	
	if(isset($_POST['select7']))
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
				
				
					$queryp7="select p_amount from product_detail where p_name='pineapple_ice_cream'";
					$runp7=mysqli_query($con,$queryp7);
					$datap7=mysqli_fetch_assoc($runp7);
					$amount7=$datap7['p_amount'];
					(int)$tamount7=(int)$quantity7*(int)$datap7['p_amount'];
			
				
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
	
	
	
	
	if(isset($_POST['select8']))
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
				
				
					$queryp8="select p_amount from product_detail where p_name='caramal_crunch_ice_cream'";
					$runp8=mysqli_query($con,$queryp8);
					$datap8=mysqli_fetch_assoc($runp8);
					$amount8=$datap8['p_amount'];
					(int)$tamount8=(int)$quantity8*(int)$datap8['p_amount'];
				
				
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
	
	
	

	if(isset($_POST['select9']))
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
				
					$queryp9="select p_amount from product_detail where p_name='vanilla_ice_cream'";
					$runp9=mysqli_query($con,$queryp9);
					$datap9=mysqli_fetch_assoc($runp9);
					$amount9=$datap9['p_amount'];
					(int)$tamount9=(int)$quantity9*(int)$datap9['p_amount'];
				
				
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
	
	
	if(isset($_POST['select10']))
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
				
					$queryp10="select p_amount from product_detail where p_name='mango_ice_cream'";
					$runp10=mysqli_query($con,$queryp10);
					$datap10=mysqli_fetch_assoc($runp10);
					$amount10=$datap10['p_amount'];
					(int)$tamount10=(int)$quantity10*(int)$datap10['p_amount'];
				
				
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

	if(isset($_POST['select11']))
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
				
					$queryp11="select p_amount from product_detail where p_name='chocolate_ice_cream'";
					$runp11=mysqli_query($con,$queryp11);
					$datap11=mysqli_fetch_assoc($runp11);
					$amount11=$datap11['p_amount'];
					(int)$tamount11=(int)$quantity11*(int)$datap11['p_amount'];
				
				
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

	
	if(isset($_POST['select12']))
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
				
					$queryp12="select p_amount from product_detail where p_name='strawberry_ice_cream'";
					$runp12=mysqli_query($con,$queryp12);
					$datap12=mysqli_fetch_assoc($runp12);
					$amount12=$datap12['p_amount'];
					(int)$tamount12=(int)$quantity12*(int)$datap12['p_amount'];
				
				
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
	include('dbcon.php');
	(int)$totalproduct=(int)$quantity1+(int)$quantity2+(int)$quantity3+(int)$quantity4+(int)$quantity5+(int)$quantity6+(int)$quantity7+(int)$quantity8+(int)$quantity9+(int)$quantity10+(int)$quantity11+(int)$quantity12;
	date_default_timezone_set("Asia/kolkata");
	$date=date("y-m-d");
	$insertbill="insert into billing_table(cust_name,chocolate_with_ice_cream,quantity_p1,amount_p1,tamount_p1,oreo_with_ice_cream,quantity_p2,amount_p2,tamount_p2,chocolate_nuts_with_ice,quantity_p3,amount_p3,tamount_p3,chocolate_fappichino,quantity_p4,amount_p4,tamount_p4,vanilla_fappichino,quantity_p5,amount_p5,tamount_p5,caramal_moca,quantity_p6,amount_p6,tamount_p6,pineapple_ice_cream,quantity_p7,amount_p7,tamount_p7,caramal_crunch_ice_cream,quantity_p8,amount_p8,tamount_p8,vanilla_ice_cream,quantity_p9,amount_p9,tamount_p9,mango_ice_cream,quantity_p10,amount_p10,tamount_p10,chocolate_ice_cream,quantity_p11,amount_p11,tamount_p11,strawberry_ice_cream,quantity_p12,amount_p12,tamount_p12,total_product,final_amount,date)values('$custname','$select1','$quantity1','$amount1','$tamount1','$select2','$quantity2','$amount2','$tamount2','$select3','$quantity3','$amount3','$tamount3','$select4','$quantity4','$amount4','$tamount4','$select5','$quantity5','$amount5','$tamount5','$select6','$quantity6','$amount6','$tamount6','$select7','$quantity7','$amount7','$tamount7','$select8','$quantity8','$amount8','$tamount8','$select9','$quantity9','$amount9','$tamount9','$select10','$quantity10','$amount10','$tamount10','$select11','$quantity11','$amount11','$tamount11','$select12','$quantity12','$amount12','$tamount12','$totalproduct','$finalamount','$date')";
	$res=mysqli_query($con,$insertbill);	
}	
?>
<html>
<head>
<title>bill_page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<form action="bill.php" method="post">
<div>
<h4><a href="admindashboard.php" style="float:left;margin-left:5px;color:#fff;font-size:20px;">Back to Dashboard</a></h4>
<h4><a href="logout.php" style="float:right;margin-right:30px;color:#fff;font-size:20px;">Logout</a></h4>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:55px;">Ice Cream Parlour Management System</h1>
<h1 class="bg-primary text-center font-weight-bold" style="font-size:30px;">Print Bill Page</h1>
</div>
</form>
<div class="container">

<table  align="center" style="width:500px;margin-top:5%" id="table">
<tr>
<td colspan="5"><center><h4>Mahenoor Ice Creme parlour <br>Bill Receipt</h4></center></td>
</tr>
<tr>
<td class="text-center" colspan="4"><center><b>Customer Name:</b><?php echo "$custname";?>-<b>Date:</b><?php echo "$date" ?></center></td>
</tr>
<tr>
<th><center>Product Name</center></th>
<th><center>Quantity<center></th>
<th><center>Product Price</center></th>
<th><center>Amount</center></th>
</tr>
<tr>
<td class="text-center"><center><?php echo "$select1";?></center></td>
<td  class="text-center"><center><?php echo " $quantity1";?></center></td>
<td  class="text-center"><center><?php echo "$amount1";?></center></td>
<td  class="text-center"><center><?php echo " $tamount1";?></center></td>
</tr>


<tr>
<td  class="text-center"><center><?php echo "$select2";?></center></td>
<td  class="text-center"><center><?php echo " $quantity2";?></center></td>
<td  class="text-center"><center><?php echo "$amount2";?></center></td>
<td  class="text-center"><center><?php echo "$tamount2";?></center></td>
</tr>



<tr>
<td class="text-center"><center><?php echo "$select3";?></center></td>
<td  class="text-center"><center><?php echo " $quantity3";?></center></td>
<td class="text-center"><center><?php echo "$amount3";?></center></td>
<td class="text-center"><center><?php echo " $tamount3";?></center></td>
</tr>



<tr>
<td class="text-center"><center><?php echo "$select4";?></center></td>
<td class="text-center"><center><?php echo " $quantity4";?></center></td>
<td class="text-center"><center><?php echo "$amount4";?></center></td>
<td class="text-center"><center><?php echo " $tamount4";?></center></td>
</tr>


<tr>
<td class="text-center"><center><?php echo "$select5";?></center></td>
<td class="text-center"><center><?php echo " $quantity5";?></center></td>
<td class="text-center"><center><?php echo "$amount5";?></center></td>
<td class="text-center"><center><?php echo " $tamount5";?></center></td>
</tr>



<tr>
<td class="text-center"><center><?php echo "$select6";?></center></td>
<td class="text-center"><center><?php echo " $quantity6";?></center></td>
<td class="text-center"><center><?php echo "$amount6";?></center></td>
<td class="text-center"><center><?php echo " $tamount6";?></center></td>
</tr>



<tr>
<td class="text-center"><center><?php echo "$select7";?></center></td>
<td class="text-center"><center><?php echo " $quantity7";?></center></td>
<td class="text-center"><center><?php echo "$amount7";?></center></td>
<td class="text-center"><center><?php echo " $tamount7";?></center></td>
</tr>
<tr>
<td class="text-center"><center><?php echo "$select8";?></center></td>
<td class="text-center"><center><?php echo " $quantity8";?></center></td>
<td class="text-center"><center><?php echo "$amount8";?></center></td>
<td class="text-center"><center><?php echo " $tamount8";?></center></td>
</tr>
<tr>
<td class="text-center"><center><?php echo "$select9";?></center></td>
<td class="text-center"><center><?php echo " $quantity9";?></center></td>
<td class="text-center"><center><?php echo "$amount9";?></center></td>
<td class="text-center"><center><?php echo " $tamount9";?></center></td>
</tr>
<tr>
<td class="text-center"><center><?php echo "$select10";?></center></td>
<td class="text-center"><center><?php echo " $quantity10";?></center></td>
<td class="text-center"><center><?php echo "$amount10";?></center></td>
<td class="text-center"><center><?php echo " $tamount10";?></center></td>
</tr>
<tr>
<td class="text-center"><center><?php echo "$select11";?></center></td>
<td class="text-center"><center><?php echo " $quantity11";?></center></td>
<td class="text-center"><center><?php echo "$amount11";?></center></td>
<td class="text-center"><center><?php echo " $tamount11";?></center></td>
</tr>
<tr>
<td class="text-center"><center><?php echo "$select12";?></center></td>
<td class="text-center"><center><?php echo " $quantity12";?></center></td>
<td class="text-center"><center><?php echo "$amount12";?></center></td>
<td class="text-center"><center><?php echo " $tamount12";?></center></td>
</tr>
<tr>
<th colspan="2"><center>Total Product:</center></th>
<th colspan="2"><center>Total Amount:</center></th>
</tr>
<tr>
<td colspan="2" class="text-center"><center><?php echo "$totalproduct";?></center></td>
<td colspan="2" class="text-center"><center><?php echo "$finalamount";?></center></td>
</tr>
</table>

<center><p><button id="btn1" class="btn btn-success">print</button><a href="generatebill.php">cancel</a></p></center>
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
 
