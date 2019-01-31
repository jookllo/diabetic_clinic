<?php
	include("conn.php");

		
		$date = $_POST['l_date'];
		$levels = $_POST['lipids'];
		$plans = $_POST['plans'];
		$phnum = $_POST['phnum'];

		if(!$date||!$levels||!$plans||!$phnum){
			echo "Incomplete form input<br/>"."Fill in completely";
		}

		$query = "INSERT INTO lipid_target(ldate,lipid_level,plan,phone_num) VALUES ('".$date."','".$levels."','".$plans."','".$phnum."')";
		$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>
