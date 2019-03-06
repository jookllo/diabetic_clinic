<?php
include_once("conn.php");

				
			$name = $_POST['pname'];
			$phnum = $_POST['phnum'];
			$diabtype = $_POST['diabetestype'];
			$dob = $_POST['dob'];
			$dodiag = $_POST['dodiag'];
			
		
if (mysqli_query($db,"INSERT INTO patient_details(phone_num,patient_num,diabetes_type,dob,dodiagnosis) VALUES
('$phnum','$name','$diabtype','$dob','$dodiag')")) 
echo "Details inserted into database.";
 else 
echo "An error has occurred. The Patient was not added.";


			
?>
