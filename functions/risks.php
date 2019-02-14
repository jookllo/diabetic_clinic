<?php
	include("conn.php");
			
			$phonenum = $_POST['phnum'];
			$risk = implode(',', $_POST['risk']);

			if(!$phonenum || !$risk){
				echo "Incomplete form input<br/>"."Fill in completely";
			}
		$query = "INSERT INTO risk_factors(phone_num,risk_factor) VALUES ('".$phonenum."', '".$risk."')";	
		$result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>