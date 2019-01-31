<?php
	include("conn.php");

			
			$date = $_POST['t_date'];
			$find = $_POST['find'];
			$plan = $_POST['plan'];
			$opt = $_POST['ophth'];
			$phnum = $_POST['phnum'];

			 if (!$date||!$find||!$plan||!$opt||!$phnum){
			 	echo "Incomplete form input<br/>"."Fill in completely";
			 }
			  $query = "INSERT INTO retinopathy(e_date,report,plan,ophthamologist,phone_num )
			   VALUES ('".$date."','".$find."','".$plan."','".$opt."','".$phnum."')";
			  $result = $db->query($query);
if ($result) {
echo $db->affected_rows." Details inserted into database.";
} else {
echo "An error has occurred. The details were not added.";
}
$db->close();
	
?>