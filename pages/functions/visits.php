<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
		
		$ksnum = $_POST['ksnum'];
		$date = $_POST['ldate'];
		$bp = $_POST['bp'];
		$weight = $_POST['weight'];
		$bmi = $_POST['bmi'];
		$hba = $_POST['hba1c'];
		$notes = $_POST['notes'];
		$hpgl = $_POST['hpgl'];
		$dm = $_POST['dmtherapy'];

		if(!$ksnum||!$date||!$bp||!$weight||!$bmi||!$hba||!$notes||!$hpgl||!$dm){
			echo "Incomplete form input<br/>"."Fill in completely";
		}

		$query = "INSERT INTO visits(visit_date,bp,weight,bmi,hba1c,notes,hypo_gly,dm_therapy,ksnum ) VALUES ('".$date."','".$bp."','".$weight."','".$bmi."','".$hba."','".$notes."','".$hpgl."','".$dm."','".$ksnum."')";


		$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
?>