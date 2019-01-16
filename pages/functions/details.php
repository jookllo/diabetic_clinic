<?php
include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
			
			$name = $_POST['pname'];
			$ksnum = $_POST['ksnum'];
			$diabtype = $_POST['diabetestype'];
			$dob = $_POST['dob'];
			$dodiag = $_POST['dodiag'];
			
			if(!$name||!$ksnum||!$diabtype||!$dob||!$dodiag){
				echo "You have not filled in every form.<br />". "Go back and fill it in Correctly";
			} 
	
	$query = "INSERT INTO patient_details(patient_name,ksnum,diabetestype,dob,dodiagnosis) VALUES
('".$name."', '".$ksnum."', '".$diabtype."', '".$dob."','".$dodiag."')";
$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The Patient was not added.";
}
$db->close();
			
?>
