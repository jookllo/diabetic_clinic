<?php
	include("conn.php");
		
			if(isset){
			$phnum1 = $_POST['phnum'];
			$smoking = $_POST['smoking'];
			$alcoholIntake = $_POST['alcohol_intake'];


		if (mysqli_query($db,"INSERT INTO lifestyle_changes(phone_num,smoking,alcohol_intake)
			 VALUES ('$phnum1', '$smoking','$alcoholIntake')")) 
				echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
				 else
				echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";
                  
                  exit();             	
}

					
				?>