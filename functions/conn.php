<?php
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "pdets_1";
		$db = mysqli_connect($hostname, $username, $password, $dbname);
			if (mysqli_connect_errno()) 
			{
			echo 'Error: Could not connect to database. please try again';
			exit;
					}
				
		?>