<?php
	include("conn.php");

			$statin = $_POST['statin'];
			$statin2 = $_POST['statin2'];
			$phnum = $_POST['phnum'];

			if (mysqli_querty($db,"INSERT INTO vascular_protection(opt1,opt2,phone_num) 
				VALUES ('$statin','$statin2','$phnum')")) 
					echo " Details inserted into database.";
						else 
					echo "An error has occurred. The details were not added.";
?>

