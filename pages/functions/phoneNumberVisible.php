<?php
    
   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdets";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT phone_num FROM patient_details";
$result = $conn->query($sql);

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