<?php

		include('dbcon.php');
		$id=$_REQUEST['sid'];
		$qry="delete from product_detail where p_id='$id'";
		$run=mysqli_query($con,$qry);
		if($run == true)
		{
		
			?>
			<script>
			alert('Data Deleted Successfully.');
			window.open('stockmanage.php','_self');
			</script>
			<?php
		}
?>