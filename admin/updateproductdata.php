<?php

	if(isset($_POST['p_submit']))
	{
		include('dbcon.php');
		
		$p_name=$_POST['p_name'];
		$p_unit=$_POST['p_unit'];
		$p_amount=$_POST['p_amount'];
		$p_quantity=$_POST['p_quantity'];
		$sid=$_POST['sid'];
		$qry="update product_detail set p_name='$p_name',p_unit='$p_unit',p_amount='$p_amount',remaining_quantity='$p_quantity' where p_id='$sid'";
		$run=mysqli_query($con,$qry);
		if($run == true)
		{
		
			?>
			<script>
			alert('Data Updated Suceesfully.');
			window.open('updateproductform.php?sid=<?php echo $sid;?>','_self');
			</script>
			<?php
		}
	}
?>