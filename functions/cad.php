<?php
	include("conn.php");

	if(isset($_POST['submit'])){
		
			$ecg = $_POST['ecg'];
			$secg = $_POST['secg'];
			$other = $_POST['other'];
			$phnum = $_POST['phnum'];

	
			
		if (mysqli_query($db,"INSERT INTO cad(phone_num,ecg,secg,other)VALUES ('$phnum','$ecg','$secg','$other')"))
					echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
				 else 
			echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";
                               	}
?>