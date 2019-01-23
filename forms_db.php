
<?php

	require  "forms.php";
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diabetes";

$id = filter_input(INPUT_POST,'pa_id');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
$sql = "SELECT * FROM patient_details
		
		INNER JOIN cad
	    ON patient_details.phone_num = cad.phone_num
		
		INNER JOIN lifestyle_changes
		ON patient_details.phone_num = lifestyle_changes.phone_num
		
		INNER JOIN lipid_target
	 ON patient_details.phone_num = lipid_target.phone_num
		
		INNER JOIN nephropathy
        ON patient_details.phone_num = nephropathy.phone_num
		
		INNER JOIN neuropathy
		ON patient_details.phone_num = neuropathy.phone_num
		
		INNER JOIN retinopathy
		 ON patient_details.phone_num = retinopathy.phone_num
		
		INNER JOIN risk_factors
		ON patient_details.phone_num = risk_factors.phone_num
		
		INNER JOIN visits
		ON patient_details.phone_num = visits.phone_num
		
		INNER JOIN self_management
		 ON patient_details.phone_num = self_management.phone_num
		
		INNER JOIN vascular_protection
		ON patient_details.phone_num = vascular_protection.phone_num
         AND vascular_protection.phone_num = '$id'";
		
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
             while($row = $result->fetch_assoc()){
               echo "patient exists";
             }
             

} else {
    echo "0 results<br/>";
}

echo "";
?>
