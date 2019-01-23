<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
		
		$date = $_POST['l_date'];
		$levels = $_POST['lipids'];
		$plans = $_POST['plans'];
		$ksnum = $_POST['ksnum'];

		if(!$date||!$levels||!$plans||!$ksnum){
			echo "Incomplete form input<br/>"."Fill in completely";
		}

		$query = "INSERT INTO lipid_target(ldate,lipid_level,plan,ksnum) VALUES ('".$date."','".$levels."','".$plans."','".$ksnum."')";
		$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>
