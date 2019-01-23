<?php
require 'functions/conn.php';



$sql = "select visits.phone_num, visits.visit_date, patient_details.patient_num from visits, patient_details where visits.phone_num = patient_details.phone_num  group by visit_date";



$result = $db->query($sql);

if ($result-> num_rows > 0){
    while ($row = mysqli_fetch_array($result)){
        echo "<table >";
        echo "<tr>";
        echo "<th>phone number</th>";
        echo "<th>visit date</th>";
        echo "<th>name</th>";
        echo "</tr>";
        
        echo "<td>".$row['phone_num']."</td>";
        echo "<td>".$row['visit_date']."</td>";
        echo "<td>".$row['patient_num']."</td>";

        echo "</table>";
        //git work

    }
}

?>