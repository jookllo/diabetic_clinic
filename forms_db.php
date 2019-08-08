
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
				 echo '
				 <style>
				 table.GeneratedTable {
					width: 80%;
					background-color: #ffffff;
					border-collapse: collapse;
					border-width: 2px;
					border-color: #000000;
					border-style: solid;
					color: #000000;
				  }
				  
				  table.GeneratedTable td, table.GeneratedTable th {
					border-width: 2px;
					border-color: #000000;
					border-style: solid;
					padding: 3px;
				  }
				  
				  table.GeneratedTable thead {
					background-color: #ffffff;
				  }</style>';
				  echo'
				 <table class="GeneratedTable">
				 <thead>
				   <tr>
					 <th colspan="2">Name</th>
					 <th colspan="2">Phone Number</th>
					 <th>Diabetes type</th>
					 <th colspan="2">Date of Birth</th>
					 <th>Date of Diagnosis</th>
				   </tr>
				 </thead>
				 <tbody>
				   <tr>';
					 echo'<td colspan="2">'.$row['patient_name'].'</td>';
					 echo'<td colspan="2">'.$row['phone_num'].'</td>';
					 echo'<td>'.$row['diabetes_type'].'</td>';
					 echo'<td colspan="2">'.$row['dod'].'</td>';
					 echo'<td>'.$row['dodiagnosis'].'</td>'.
				   '</tr>';
				   echo'<tr>
					 <th colspan="4">Risk factors,comorbidities</th>
					 <th colspan="4">Self Management</th>
				</tr>';
				   echo'<tr>
					 <td colspan="4" rowspan="3">'.$row['risk_factor'].'</td>';
					echo '<td colspan="4" rowspan="2">Patient goals:'.$row['patient_goals'].'</td>
				   </tr>';
				   
				   echo'<tr></tr>';
				   echo'<tr>
					 
					 <td>Height:'.$row['height'].'</td>';
					 echo'<td colspan="2">Weight Target:'.$row['weight_target'].'</td>';
					 echo'<td>Target BMI:' .$row['bmi_target'].'</td>';
				   echo'</tr>';
				   echo'<tr>
					 <th colspan="4">Lifestyle Changes</th>';
					echo' <td colspan="4">Weight Management Discussed:'.$row['weight_management'].'</td>
				   </tr>';
				   echo'<tr>
					 <td colspan="4">Smoking:'.$row['smoking'].'</td>';
					 echo'<td colspan="4">Education on complicaitons;'.$row['nutrition_education'].'</td>
				   </tr>';
				   echo'<tr>
					 <td colspan="3">Alcohol intake:'.$row['alcohol_intake'].' Units/week</td>';
					echo' <td>Advise given:'.$row['advice'].'</td>';
					 echo'<td colspan="3">Nutrition education:'.$row['nutrition_education'].'</td>';
					 echo'<td>Date:'.$row['dodiscussion'].'</td>
				   </tr>';
				   echo'<tr>
					 <th colspan="8">Visits(Every 3 months)</th>
					 
				   </tr>';
				   echo'<tr>
					 <th>Date</th>
					 <th>BP</th>
					 <th>Wt(Kg)</th>
					 <th>BMI</th>
					 <th>HBA1c Target___</th>
					 <th>Notes (goals, clinical status)</th>
					 <th>Hypo-glycaemia</th>
					 <th>DM therapy/ CV agents(ACEi/ARB/Statin /ASA as indicated)</th>
				   </tr>';
				   echo'<tr>';
					 echo'<td>'.$row['visit_date'].'</td>';
					 echo'<td>'.$row['dm_therapy'].'</td>';
					 echo'<td>'.$row['weight_p'].'</td>';
					 echo'<td>'.$row['bmi'].'</td>';
					 echo'<td>'.$row['hba1c'].'</td>';
					 echo'<td>'.$row['notes'].'</td>';
					 echo'<td>'.$row['hypo_gly'].'</td>';
					 echo'<td>'.$row['dm_therapy'].'</td>';
				   echo'</tr>';
				   echo'<tr>
					 <th colspan="8">Review home glucose monitoring: Target pre-meal 4-7mmol/L, 2 hours post meal 5-10mmol/L</th>
				   </tr>';
				  echo' <tr>
					 <th colspan="8">Screen for diabetic complications annually or as indicated</th>
				   </tr>';
				   echo'<tr>
					 <th colspan="3">Nephropathy</th>
					 <th colspan="3">Neuropathy</th>
					 <th colspan="2">Retinopathy</th>
				   </tr>';
				   echo'<tr>';
					 echo'<td>Date:'.$row['ndate'].'</td>';
					 echo'<td>ACR:'.$row['acr'].'</td>';
					 echo'<td>eGFR:'.$row['egfr'].'</td>';
					 echo'<td colspan="3" rowspan="2">Check feet for lesions and sensation(10g monofilament or
							 128Hz tuning fork)
							   Check for Pain, ED, GI symptoms</td>';
					 echo'<td colspan="2">Eye exam:'.$row['report'].'</td>
				   </tr>';
				   '<tr>
					 <td></td>
					 <td></td>
					 <td></td>';
					 '<td>Date:'.$row['find_date'].'</td>';
					'<td>Findings:'.$row['find'].'</td>
					 
				   </tr>';
				   echo'<tr>
					 <td></td>
					 ';
					 echo'<td colspan="2">Date:'.$row['find_date'].'</td>';
					 echo'<td>Findings:'.$row['find'].'</td>';
					 echo'<td colspan="2">Plan:'.$row['plan'].'</td>
					</tr>';
				   echo'<tr>
					 <td colspan="6"></td>
					 <td colspan="2">Ophthalmologist:'.$row['opthamologist'].'</td>
				   </tr>';
				   echo'<tr>
					 <th colspan="3">Vascular protection</th>
					 <th colspan="3">Lipid Targets:</th>
					 <th colspan="2">CAD assessment</th>
				   </tr>';
				   echo'<tr>';
					 echo'<td colspan="3">Statin if >40yrs or 30yrs with DM >15yrs or
						 end organ damage:</td>';
					 echo'<th>Date</th>
					 <th>Lipid level</th>
					 <th>Plan</th>';
					 echo'<td colspan="2">ECG:'.$row['ecg'].'</td>
				   </tr>';
				   echo'<tr>
					 <td colspan="3">ACEi/ARB if >55yrs OR end organ damage:</td>';
					 echo'<td>'.$row['lipid_level'].'</td>';
					 echo'<td>'.$row['plan'].'</td>';
					 echo'<td>'.$row['ldate'].'</td>';
					 echo'<td colspan="2">Stress ECG:'.$row['secg'].'</td>
				   </tr>';
				  echo' <tr>
					 <td colspan="6"></td>
					 <td colspan="2">Other:'.$row['other'].'</td>
				   </tr>
				 </tbody>
				 </table>';
				 
				 echo '<br/><br/><br/>';
			   echo'<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			   <script type="text/javascript">
				 google.charts.load("current", {"packages":["bar"]});
				 google.charts.setOnLoadCallback(drawChart);
		   
				 function drawChart() {
				   var data = google.visualization.arrayToDataTable([
					 ["patient","Target weight", "Current weight"],
					 ["'.$row['patient_name'].'", '.$row['weight_target'].', '.$row['weight_p'].']
				   ]);
		   
				   var options = {
					 chart: {
					   title: "PATIENT WEIGHT"
					 }
				   };
		   
				   var chart = new google.charts.Bar(document.getElementById("columnchart_material"));
		   
				   chart.draw(data, google.charts.Bar.convertOptions(options));
				 }
				 </script>';
				 echo'<div id="columnchart_material" style="width: 800px; height: 500px;"></div>';

				 echo '<br/><br/><br/>';
			   echo'<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			   <script type="text/javascript">
				 google.charts.load("current", {"packages":["bar"]});
				 google.charts.setOnLoadCallback(drawChart);
		   
				 function drawChart() {
				   var data = google.visualization.arrayToDataTable([
					 ["patient","Target BMI", "Current BMI"],
					 ["'.$row['patient_name'].'", '.$row['bmi_target'].', '.$row['bmi'].']
				   ]);
		   
				   var options = {
					 chart: {
					   title: "PATIENT BMI"
					 }
				   };
		   
				   var chart = new google.charts.Bar(document.getElementById("BMI_CHART"));
		   
				   chart.draw(data, google.charts.Bar.convertOptions(options));
				 }
				 </script>';
				 echo'<div id="BMI_CHART" style="width: 800px; height: 500px;"></div>';

			    
				

				
				


					echo "<button id='printbutton'  onclick='window.print();' >print</button>";
             }
             

} else {
	
    echo "0 results<br/>";
}
}else {

echo "error";}
?>

