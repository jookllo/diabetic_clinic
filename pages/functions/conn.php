<?php
	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "patient_details";
		$db = mysqli_connect($servername, $username, $password, $dbname);
			if (mysqli_connect_errno()) 
			{
			echo 'Error: Could not connect to database. please try again';
			exit;
					}
		?>