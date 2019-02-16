<?php
	include("conn.php");
	
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