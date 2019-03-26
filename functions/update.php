<?php

include "conn.php";

$pname = '';
$dob = '';
$diabetes_type= '';
$dodiagnosis = '';   

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $db->query('SELECT * FROM patient_details WHERE p_id=$id') or die ("error");
    if(count($result)==1){
        $row = $result->fetch_array();
        $pname = $row['patient_num'];
        $diabetes_type= $row['diabetes_type'];
        $dob = $row['dob'];
        $dodiagnosis = $row['dodiagnosis'];
    }
}
?>
