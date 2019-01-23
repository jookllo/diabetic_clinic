<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
			
			$statin = $_POST['statin'];
			$statin2 = $_POST['statin2'];
			$ksnum = $_POST['ksnum'];

			if(!$statin||!$statin2||!$ksnum){
				echo "Incomplete form input<br/>"."Fill in completely";
			}

			$query = "INSERT INTO vascular_protection(opt1,opt2,ksnum) VALUES ('".$statin."','".$statin2."','".$ksnum."')";
			$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>

