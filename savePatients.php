<?php
	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdets_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$generated_string = ""; 
				      
				    
				    $domain = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
				      
				    
				    $len = strlen($domain); 
				      
				    
				    for ($i = 0; $i < 10; $i++) { 
				        
				        $index = rand(0, $len - 1);         
				        
				        $generated_string = $generated_string . $domain[$index]; 
				    } 
				      
				    
				     


				$p_id = $generated_string;
				$pname = $_POST['pname'];
				$phnum = $_POST['phnum'];
				$diabetestype =$_POST['diabetestype'];
				$dob = $_POST['dob'];
				$dodiag =$_POST['dodiag'];

				$sql="INSERT INTO patient_details(p_id,phone_num,patient_name,diabetes_type,dod,dodiagnosis) VALUES ('$p_id','$phnum','$pname','$diabetestype','$dob','$dodiag')";				

$query = $conn->query($sql);

if ($query) {
    // output data of each row
   echo json_encode(['message'=>'1']);
} else {
  echo mysqli_error($conn); 
}