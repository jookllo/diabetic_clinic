<?php
	include("conn.php");
session_start();
		$db = mysqli_connect($servername,$username,$password,$dbname);
		if(!$db) {
			die("Connection failed: ".mysqli_connect_error());}
		
		$date = $_POST['neudate'];
		$finds = $_POST['finds'];
		$phnum = $_POST['phnum'];

		if(!$date||!$finds||!$phnum){
			echo "Incomplete form input<br/>"."Fill in completely";
		}

		$query = "INSERT INTO neuropathy(find_date,finds,phone_num) VALUES('".$date."','".$finds."','".$phnum."')";

		
		$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>