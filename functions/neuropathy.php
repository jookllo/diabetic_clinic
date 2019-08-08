<?php
	include("conn.php");

		
		$date = $_POST['neudate'];
		$finds = $_POST['finds'];
		$phnum = $_POST['phnum'];

		if (mysqli_query($db,"INSERT INTO neuropathy(find_date,finds,phone_num)
					 VALUES('$date','$finds','$phnum')")) 
						echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
 						else 
				echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";

	
?>