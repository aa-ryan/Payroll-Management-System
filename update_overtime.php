<?php
	
		require("db.php");
		
		@$id 	 = $_POST['ot_id'];
		@$otrate = $_POST['rate'];


		$sql = mysql_query("UPDATE overtime SET rate ='$otrate' WHERE ot_id ='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('Overtime rate successfully changed...');
		            window.location.href='home_salary.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successful!"; 
		}
 ?>
