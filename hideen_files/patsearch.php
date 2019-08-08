<?php
	if  (isset($_POST['search']))	{
				
				include 'functions/conn.php';    
					
					$search = $_POST ['search'];
					$sql = $db -> query("SELECT * FROM patient_details
		
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
               AND vascular_protection.phone_num=0794618395 ");
               $numRow = mysqli_num_rows($sql);
               if($numRow > 0){
                
                while ($rows = mysqli_fetch_assoc($sql)){

while ($rows = mysqli_fetch_assoc($sql)){
  
  echo $rows['finds'];
}
}
}
}else{
    echo"patient is not registered to the system";
}
              
?>
