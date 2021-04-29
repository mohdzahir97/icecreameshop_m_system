<?php

		include('dbcon.php');
		$id=$_REQUEST['sid'];
		$qry="delete from billing_table where cust_id='$id'";
		$run=mysqli_query($con,$qry);
		if($run == true)
		{
		
			?>
			<script>
			alert('Data Deleted Successfully.');
			window.open('viewbill.php','_self');
			</script>
			<?php
		}
?>