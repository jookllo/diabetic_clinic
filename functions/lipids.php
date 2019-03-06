<?php
	include("conn.php");
		
		$date = $_POST['l_date'];
		$levels = $_POST['lipids'];
		$plans = $_POST['plans'];
		$phnum = $_POST['phnum'];

		if (mysqli_query($db, "INSERT INTO lipid_target(ldate,lipid_level,plan,phone_num) VALUES 
		('$date','$levels','$plans','$phnum')")) 
			echo " Details inserted into database.";
			 else
			echo "An error has occurred. The details were not added.";
			?>
