<?php
<<<<<<< HEAD
	
	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "pdets";
		$db = mysqli_connect($servername, $username, $password, $dbname);
			if (mysqli_connect_errno()) 
			{
			echo 'Error: Could not connect to database. please try again';
			exit;
					}
					
=======
	class Database{
						var $last_id = null;
						var $conn = null;		
				
				
						function __construct()
						{
							$this->conn = $this->connect();
						}
				
						public function connect(){
							$servername = "localhost";
							$username = "root";
							$password = "";
							$database = 'pdets';
							// Create connection
							//global $conn;
							$conn = new mysqli($servername, $username, $password,$database);
							// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 
							
							return $conn;
						}
				
						public function getData($sql){	 //to fetch any data			
							$rows = NULL;	
							$conn = $this->connect();
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
								$rows[] =$row;
							}
							mysqli_close($conn);
							return($rows);
						}
				
						public function setData($sql){ //to insert any data			
							$conn = $this->connect();
							$result = mysqli_query($conn,$sql);
							$last_id = mysqli_insert_id($conn);			
							mysqli_close($conn);
							return $last_id;
						}
				
						public function close_link(){			
							mysqli_close($this->$conn);
						}
				
				
						public function base_url(){
							$host  = $_SERVER['HTTP_HOST'];
							$host_upper = strtoupper($host);
							$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
							$baseurl = "http://" . $host . $path . "/";
							return $baseurl;
						}
					}
				
				
				
							
>>>>>>> df6d779c5416e854539c3e39d329a15c1b1db52c
					
		?>