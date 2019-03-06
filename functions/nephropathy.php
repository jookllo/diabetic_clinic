<?php
	include("conn.php");


			$date = $_POST['ndate'];
			$acr = $_POST['acr'];
			$egfr = $_POST['egfr'];
			$phnum = $_POST['phnum'];

			if (mysqli_query($db,"INSERT INTO nephropathy(phone_num,ndate,acr,egfr)
			VALUES ('$phnum','$date','$acr','$egfr')"))
			echo " Details inserted into database.";
				 else 
			echo "An error has occurred. The details were not added.";
				
			?>