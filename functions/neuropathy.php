<?php
	include("conn.php");

		
		$date = $_POST['neudate'];
		$finds = $_POST['finds'];
		$phnum = $_POST['phnum'];

		if (mysqli_query($db,"INSERT INTO neuropathy(find_date,finds,phone_num)
					 VALUES('$date','$finds','$phnum')")) 
						echo " Details inserted into database.";
 						else 
				echo "An error has occurred. The details were not added.";

	
?>