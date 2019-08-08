<?php
	include("conn.php");

			$statin = $_POST['statin'];
			$statin2 = $_POST['statin2'];
			$phnum = $_POST['phnum'];

			if (mysqli_querty($db,"INSERT INTO vascular_protection(opt1,opt2,phone_num) 
				VALUES ('$statin','$statin2','$phnum')")) 
					echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
						else 
					echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";
?>

