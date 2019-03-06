<?php
	include("conn.php");

			
			$date = $_POST['t_date'];
			$find = $_POST['find'];
			$plan = $_POST['plan'];
			$opt = $_POST['ophth'];
			$phnum = $_POST['phnum'];

			if (mysqli_query($db,"INSERT INTO retinopathy(e_date,report,plan,ophthamologist,phone_num )
			  VALUES ('$date','$find','$plan','$opt','$phnum')")) 
					echo " Details inserted into database.";
 					else 
					echo "An error has occurred. The details were not added.";
			?>