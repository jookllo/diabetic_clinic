<?php
    
   
include "conn.php";

$sql = "SELECT phone_num FROM patient_details";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	 echo " <select class='form-control' name='pa_id' id='dropbox' onchange='copyValue()'>";
	 echo"<option></option>"; 
             while($row = $result->fetch_assoc()){
                echo "<option value='".$row[phone_num]."'>".$row['phone_num']."</option>";
             }
             //show ksnum list as options
             echo " </select>";

} else {
    echo "0 results<br/>";
}

echo "";
echo "<br/>";
?>