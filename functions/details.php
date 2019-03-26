<?php
include_once("conn.php");

				
			$name = $_POST['pname'];
			$phnum = $_POST['phnum'];
			$diabtype = $_POST['diabetestype'];
			$dob = $_POST['dob'];
			$dodiag = $_POST['dodiag'];
			
		
if (mysqli_query($db,"INSERT INTO patient_details(phone_num,patient_num,diabetes_type,dob,dodiagnosis) VALUES
('$phnum','$name','$diabtype','$dob','$dodiag')")) 
echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
 else 
echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";
                     
			
?>
