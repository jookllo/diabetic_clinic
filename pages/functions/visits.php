<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
		
		$phnum = $_POST['phnum'];
		$date = $_POST['ldate'];
		$bp = $_POST['bp'];
		$weightp = $_POST['weightp'];
		$bmi = $_POST['bmi'];
		$hba = $_POST['hba1c'];
		$notes = $_POST['notes'];
		$hpgl = $_POST['hpgl'];
		$dm = $_POST['dmtherapy'];

		if(!$phnum||!$date||!$bp||!$weightp||!$bmi||!$hba||!$notes||!$hpgl||!$dm){
			echo "Incomplete form input<br/>"."Fill in completely";
		}

		$query = "INSERT INTO visits(phone_num,bp,weight_p,bmi,hba1c,notes,hypo_gly,dm_therapy,visit_date)
		 VALUES ('".$phnum."','".$bp."','".$weightp."','".$bmi."','".$hba."','".$notes."','".$hpgl."','".$dm."','".$date."')";


		$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
?>