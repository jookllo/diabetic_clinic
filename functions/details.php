<?php
include("conn.php");

				
			$name = $_POST['pname'];
			$phnum = $_POST['phnum'];
			$diabtype = $_POST['diabetestype'];
			$dob = $_POST['dob'];
			$dodiag = $_POST['dodiag'];
			
			if(!$name||!$phnum||!$diabtype||!$dob||!$dodiag){
				echo "You have not filled in every form.<br />". "Go back and fill it in Correctly";
			} 
	
	$query = "INSERT INTO patient_details(phone_num,patient_num,diabetes_type,dob,dodiagnosis) VALUES
('".$phnum."', '".$name."', '".$diabtype."', '".$dob."','".$dodiag."')";
$result = $db->query($query);
if ($result) {
echo " Details inserted into database.";
} else {
echo "An error has occurred. The Patient was not added.";
}
$db->close();
			
?>
