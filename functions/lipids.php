<?php
	include("conn.php");
		
		$date = $_POST['l_date'];
		$levels = $_POST['lipids'];
		$plans = $_POST['plans'];
		$phnum = $_POST['phnum'];

		if (mysqli_query($db, "INSERT INTO lipid_target(ldate,lipid_level,plan,phone_num) VALUES 
		('$date','$levels','$plans','$phnum')")) 
			echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
			 else
			echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";
			?>
