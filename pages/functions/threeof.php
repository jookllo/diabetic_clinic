<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
			
			$date = $_POST['t_date'];
			$find = $_POST['find'];
			$plan = $_POST['plan'];
			$opt = $_POST['ophth'];
			$ksnum = $_POST['ksnum'];

			 if (!$date||!$find||!$plan||!$opt||!$ksnum){
			 	echo "Incomplete form input<br/>"."Fill in completely";
			 }
			  $query = "INSERT INTO retinopathy(e_date,report,plan,ophthalmologist,ksnum) VALUES ('".$date."','".$find."','".$plan."','".$opt."','".$ksnum."')";
			  $result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>