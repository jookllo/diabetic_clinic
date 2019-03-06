<?php
	include("conn.php");
	
			$phnum = $_POST['phnum'];
			$smoking = $_POST['smoking'];
			$alcoholIntake = $_POST['alcohol_intake'];

		if (mysqli_query($db,"INSERT INTO lifestyle_changes(phone_num,smoking,alcohol_intake)
			 VALUES ('$phnum', '$smoking','$alcoholIntake')")) 
				echo $db->affected_rows." Detail inserted into database.";
				 else
				echo "An error has occurred. The details were not added.";
					
				?>