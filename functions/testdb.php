<?php
    include_once('conn.php');

    $name = $_POST['pname'];
    $age = $_POST['age'];

    if(mysqli_query($db,"INSERT INTO usera VALUES('$name','$age')"))
    echo "Successfully added";
    else
        echo "Failed";
?>