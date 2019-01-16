<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
		
			$ecg = $_POST['ecg'];
			$secg = $_POST['secg'];
			$other = $_POST['other'];
			$ksnum = $_POST['ksnum'];

			if(!$ecg||!$secg||!$other||!$ksnum){
				echo "Incomplete form input<br/>"."Fill in completely";
			}

			$query = "INSERT INTO cad(ksnum,ecg,secg,other)VALUES ('".$ksnum."','".$ecg."','".$secg."','".$other."')";
			$result = $db->query($query);
		if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>