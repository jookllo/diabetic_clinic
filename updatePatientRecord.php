<?php
	
$pid = $_GET['id'];
$action = $_GET['action'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdets_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($action=='update'){



				$pname = $_POST['patient_name'];
				$phnum = $_POST['phone_num'];
				$diabetestype =$_POST['diabetes_type'];
				$dob = $_POST['dod'];
				$dodiag =$_POST['dodiagnosis'];

$sql = "UPDATE `patient_details` SET  `patient_name`='$pname',`phone_num`='$phnum',`diabetes_type`='$diabetestype',`dod`='$dob',`dodiagnosis`='$dodiagnosis' WHERE p_id='$pid'";
			
$query = $conn->query($sql);

if ($query) {
    // output data of each row
   echo json_encode(['message'=>'Successfully Saved']);
} else {
    echo json_encode(['message'=>'No asdata']);
}

}else if($action=='delete'){

$sql = "UPDATE `patient_details` SET  `status`='1' WHERE p_id='$pid'";
			
$query = $conn->query($sql);

if ($query) {
    // output data of each row
   echo json_encode(['message'=>'Successfully Saved']);
} else {
    echo json_encode(['message'=>'No asdata']);
}
}




$conn->close();

?>