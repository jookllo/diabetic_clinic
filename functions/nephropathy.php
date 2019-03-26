<?php
	include("conn.php");


			$date = $_POST['ndate'];
			$acr = $_POST['acr'];
			$egfr = $_POST['egfr'];
			$phnum = $_POST['phnum'];

			if (mysqli_query($db,"INSERT INTO nephropathy(phone_num,ndate,acr,egfr)
			VALUES ('$phnum','$date','$acr','$egfr')"))
			echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
				 else 
			echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";
				
			?>