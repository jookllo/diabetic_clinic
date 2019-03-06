<?php
	include("conn.php");

			$pgoals = $_POST['pgoals'];
			$height = $_POST['height'];
			$weight = $_POST['w_target'];
			$tbmi = $_POST['t_bmi'];
			$discuss = $_POST['issue_disscussed'];
			$nutrition = $_POST['n_education'];
			$date = $_POST['date'];
			$phnum = $_POST['phnum'];
			;
			
			if (mysqli_query($db, "INSERT INTO self_management(patient_goals,height,weight_target,bmi_target,weight_management,nutrition_education,dodiscussion,phone_num) VALUES 
			('$pgoals','$height','$weight','$tbmi','$discuss','$nutrition','$date','$phnum')")) 
			echo " Details inserted into database.";
			 else 
			echo "An error has occurred. The details were not added.";
				?>