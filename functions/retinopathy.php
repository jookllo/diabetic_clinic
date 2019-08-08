<?php
	include("conn.php");

			
			$date = $_POST['t_date'];
			$find = $_POST['find'];
			$plan = $_POST['plan'];
			$opt = $_POST['ophth'];
			$phnum = $_POST['phnum'];

			if (mysqli_query($db,"INSERT INTO retinopathy(e_date,report,plan,ophthamologist,phone_num )
			  VALUES ('$date','$find','$plan','$opt','$phnum')")) 
					echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
 					else 
					echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";
			?>