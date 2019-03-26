<?php
	include("conn.php");

		
		$phnum = $_POST['phnum'];
		$date = $_POST['ldate'];
		$bp = $_POST['bp'];
		$weightp = $_POST['weightp'];
		$bmi = $_POST['bmi'];
		$hba = $_POST['hba1c'];
		$notes = $_POST['notes'];
		$hpgl = $_POST['hpgl'];
		$dm = $_POST['dmtherapy'];

		if (mysqli_query($db,"INSERT INTO visits(phone_num,bp,weight_p,bmi,hba1c,notes,hypo_gly,dm_therapy,visit_date)
		VALUES ('$phnum','$bp','$weightp','$bmi','$hba','$notes','$hpgl','$dm','$date')")) 
		echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
		 else 
		echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";
		
		?>