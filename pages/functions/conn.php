<?php
	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "p_ksh";
		$db = mysqli_connect($servername, $username, $password, $dbname);
			if (mysqli_connect_errno()) 
			{
			echo 'Error: Could not connect to database. please try again';
			exit;
					}
		?>