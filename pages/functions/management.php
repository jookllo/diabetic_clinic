<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
			$pgoals = $_POST['pgoals'];
			$height = $_POST['height'];
			$weight = $_POST['w_target'];
			$tbmi = $_POST['t_bmi'];
			$discuss = $_POST['issue_disscussed'];
			$nutrition = $_POST['n_education'];
			$date = $_POST['date'];
			$ksnum = $_POST['ksnum'];
			if(!$pgoals||!$height||!$weight||!$tbmi||!$discuss||!$nutrition||!$date){
				echo "Error, input all the details kindly<br/>"."Kindly put all the details";
			}
			$query = "INSERT INTO self_management(patient_goals,height,weight_target,bmi_target,weight_mngment,nutrition_education,dodiscussion,ksnum) VALUES ('".$pgoals."','".$height."','".$weight."','".$tbmi."','".$discuss."','".$nutrition."','".$date."','".$ksnum."')";
			$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
		
		?>