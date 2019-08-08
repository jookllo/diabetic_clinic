<?php
	class Database{

			var $db = null;
			var $last_id = null;

			function __construct()
			{
				$this->db = $this->connect();
			}

			public function connect()
			{
				$servername = "localhost:8088";
				$username = "root";
				$password = "";
				$db_in_use = "pdets";

				$db = new mysqli($servername,$username,$password,$db_in_use);

				if($db->connect_error){
					die("Conection failed:" . $db->connect_error);
				}

				return $db;

			}

			public function getData($sql){

				$rows = NULL;
				$db = $this->connect();
				$result = mysqli_query($db,$sql);
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$rows[] =$row;
					}
			mysqli_close($db);
			return($rows);
					}

			public function setData($sql){
				$db = $this->connect();
				$result = mysqli_query($db,$sql);
				$last_id = mysqli_insert_id($db);
				mysqli_close($db);

			}	

			public function close_link(){

				mysqli_close($this->$db);
			
			}

				}
		
?>