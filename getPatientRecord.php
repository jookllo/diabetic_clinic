<?php 
$pid = $_GET['id'];
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

$sql = "SELECT * FROM patient_details WHERE p_id='$pid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(['message'=>'No asdata']);
}
$conn->close();
