<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
			
			$phonenum = $_POST['phone_num'];
			$risk = implode(',', $_POST['risk']);

			if(!$phonenum || !$risk){
				echo "Incomplete form input<br/>"."Fill in completely";
			}
		$query = "INSERT INTO risk_factors(phone_num,risk_factor) VALUES ('".$ksnum."', '".$risk."')";	
		$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>