
<?php
if ( isset( $_GET['submit'] ) ){
	require "functions/conn.php";
 // Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$id = $_GET['pa_id'];



$getpatid = "SELECT p_id FROM patient_details WHERE phone_num = '$id'";
$num = $db->query($getpatid);
$pid = mysqli_fetch_assoc($num);
$x = $pid['p_id'];



	
$sql = "SELECT * FROM patient_details
		
INNER JOIN cad
ON patient_details.p_id = cad.p_id

INNER JOIN lifestyle_changes
ON patient_details.p_id = lifestyle_changes.p_id

   INNER JOIN lipid_target
ON patient_details.p_id = lipid_target.p_id

INNER JOIN nephropathy
ON patient_details.p_id = nephropathy.p_id

INNER JOIN neuropathy
ON patient_details.p_id = neuropathy.p_id

INNER JOIN retinopathy
 ON patient_details.p_id = retinopathy.p_id

INNER JOIN risk_factors
ON patient_details.p_id = risk_factors.p_id

INNER JOIN self_management
 ON patient_details.p_id = self_management.p_id

INNER JOIN visits
ON patient_details.p_id = visits.p_id

INNER JOIN vascular_protection
ON patient_details.p_id = vascular_protection.p_id
 AND vascular_protection.p_id ='$x'";


		
$result = $db->query($sql);

if ($result->num_rows > 0) {
    
             while($row = mysqli_fetch_assoc($result)){
				 echo 'cad<br/>';
				 echo $row['ecg']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				 echo $row['secg']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				 echo $row['other']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				 echo 'lifestyle<br/>';
				 echo $row['smoking']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				 echo $row['alcohol_intake']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				echo 'targets<br/>';
				echo $row['lipid_level']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['plan']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['ldate']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				echo 'nephropathy<br>';
				echo $row['acr']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['egfr']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['ndate']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				echo 'neuropathy<br/>';
				echo $row['find_date']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['find']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				echo 'patient_details<br/>';
				echo $row['patient_name']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['phone_num']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['diabetes_type']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['dod']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['dodiagnosis']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				echo 'retinopathy<br/>';
				echo $row['report']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['plan']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['opthamologist']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['e_date']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				echo 'risks<br/>';
				echo $row['risk_factor']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				echo 'management<br/>';
				echo $row['patient_goals']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['height']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['weight_target']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['bmi_target']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['weight_management']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['nutrition_education']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['dodiscussion']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				echo 'vascular<br/>';
				echo $row['opt1']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['opt2']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";

				echo 'visits<br>';
				echo $row['weight_p']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['bmi']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['hba1c']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['notes']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['hypo_gly']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['dm_therapy']."&nbsp"."&nbsp"."&nbsp"."&nbsp";
				echo $row['visit_date']."&nbsp"."&nbsp"."&nbsp"."&nbsp<br/><br/>";


					echo "<button id='printbutton'  onclick='window.print();' >print</button>";
             }
             

} else {
	
    echo "0 results<br/>";
}
}else {

echo "error";}
?>
