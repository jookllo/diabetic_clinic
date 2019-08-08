<?php
	require "functions/dbconfig.php";
    

    $name = mysqli_real_escape_string($db, $_REQUEST['name']);
    $date = mysqli_real_escape_string($db, $_REQUEST['date']);
    $pnum = mysqli_real_escape_string($db, $_REQUEST['pnum']);
    $des = mysqli_real_escape_string($db, $_REQUEST['dapt']);
    $time = mysqli_real_escape_string($db, $_REQUEST['time']);
    
$sql="INSERT INTO `events`(`patname`, `aptype`, `date`, `time`,`phone_num`) VALUES ('$name','$des','$date','$time','$pnum')";

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);

 

?>