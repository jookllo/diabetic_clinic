<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}

			$date = $_POST['ndate'];
			$acr = $_POST['acr'];
			$egfr = $_POST['egfr'];
			$phnum = $_POST['phnum'];

			if(!$date||!$acr||!$egfr||!$phnum){
				echo "Incomplete form input<br/>"."Fill in completely";
			}

			$query = "INSERT INTO nephropathy(phone_num,ndate,acr,egfr)
			 VALUES ('".$phnum."','".$date."','".$acr."','".$egfr."')";

			$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>