<?php
    
   
include "conn.php";

$sql = "SELECT p_id FROM patient_details WHERE status= '0'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	 echo " <select class='form-control' name='pa_id' id='dropbox' onchange='copyValue()'>";
	 echo"<option></option>"; 
             while($row = $result->fetch_assoc()){
                echo "<option value='".$row['p_id']."'>".$row['p_id']."</option>";
               
             }
             //show ksnum list as options
             echo " </select>";
             echo "<br/>";
             
             
             

} else {
    echo "0 results<br/>";
}

echo "";
echo "<br/>";
?>