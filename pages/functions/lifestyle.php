<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
		$phnum = $_POST['phnum'];
			$smoking = $_POST['smoking'];
			$alcoholIntake = $_POST['alcohol_intake'];

			if(!$phnum || !$smoking || !$alcoholIntake){
				echo "Incomplete form input<br/>"."Fill in completely";
			}
		$query = "INSERT INTO lifestyle_changes(phone_num,smoking,alcohol_intake) VALUES ('".$phnum."', '".$smoking."','".$alcoholIntake."')";	
		$result = $db->query($query);
			if ($result) {
				echo $db->affected_rows." Detail inserted into database.";
				} else {
				echo "An error has occurred. The details were not added.";
					}
				$db->close();
	
?>