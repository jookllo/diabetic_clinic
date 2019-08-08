<?php
		include 'vendor/database.php';

		class PatientDetails
		{
			var $db = null;

			function __construct()
			{
				$this->db = new Database();
			}


			function patid($n)
				{ 
    
				    $generated_string = ""; 
				      
				    
				    $domain = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
				      
				    
				    $len = strlen($domain); 
				      
				    
				    for ($i = 0; $i < $n; $i++) { 
				        
				        $index = rand(0, $len - 1);         
				        
				        $generated_string = $generated_string . $domain[$index]; 
				    } 
				      
				    
				    return $generated_string; 
			} 

			public function addPatient()
			{
				
			//$n = patid(6); 

           //open the db lets see 
				$ret = array();
				//$p_id = $n;
				$pname = $_POST['pname'];
				$phnum = $_POST['phnum'];
				$diabetestype =$_POST['diabetestype'];
				$dob = $_POST['dob'];
				$dodiag =$_POST['dodiag'];

				$sql="INSERT INTO patient_details(p_id,phone_num,patient_name,diabetes_type,dod,dodiagnosis) VALUES ('z','$phnum','$pname','$diabetestype','$dob','$dodiag')";				

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Patient addedd successfully";
				}else{
					$ret['response']=1;
					$ret['message']="Eror adding patient";
					}
					echo json_encode($ret);
				}

			public function showPatients(){
				$sql="SELECT * FROM patient_details";
				$patient= $this->db->getData($sql);
				return $patients;				
			}
				
			public function updatePatient()
			{
				$ret = array();

				$pname = $_POST['pname'];
				$phnum = $_POST['phnum'];
				$diabetestype =$_POST['diabetestype'];
				$dob = $_POST['dob'];
				$dodiag =$_POST['dodiag'];

				$sql = "UPDATE `patient_details` SET `p_id`=$p_id `patient_name`='$pname',`phone_num`='$phnum',`diabetes_type`='$diabetestype',`dod`='$dob',`dodiagnosis`='$dodiagnosis' WHERE id='$user_id'";
			// echo $sql;
				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="User Updated Successfully";
				}else{
					$ret['response']=1;
					$ret['message']="Error Updating User";
			}

			echo json_encode($ret);
			}

			public function editPatient()
			{}	
			
			public function addCad()
			{
				$ret = array();

				$ecg = $_POST['ecg'];
				$secg = $_POST['secg'];
				$other = $_POST['other'];
				$p_id = $_POST['p_id'];

				$sql ="INSERT INTO cad(p_id,ecg,secg,other)VALUES ('$p_id','$ecg','$secg','$other')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding details";
					}
					echo json_encode($ret);
			}

			public function addLifestyle()
			{
				$ret = array();

				$p_id = $_POST['p_id'];
				$smoking = $_POST['smoking'];
				$alcohol_intake = $_POST['alcohol_intake'];

				$sql ="INSERT INTO lifestyle_changes(p_id,smoking,alcohol_intake) VALUES ('$p_id', '$smoking','$alcohol_intake')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding Details";
					}
					echo json_encode($ret);
			}

			public function addLipids()
			{
				$ret = array();

				$date = $_POST['l_date'];
				$levels = $_POST['lipids'];
				$plans = $_POST['plans'];
				$p_id = $_POST['p_id'];

				$sql = "INSERT INTO lipid_target(ldate,lipid_level,plan,p_id) VALUES ('$date','$levels','$plans','$p_id')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding Details";
					}
					echo json_encode($ret);
			}

			public function addManagementDetails()
			{
				$ret = array();

				$pgoals = $_POST['pgoals'];
				$height = $_POST['height'];
				$weight = $_POST['w_target'];
				$tbmi = $_POST['t_bmi'];
				$discuss = $_POST['issue_disscussed'];
				$nutrition = $_POST['n_education'];
				$date = $_POST['date'];
				$p_id = $_POST['p_id'];

				$sql = "INSERT INTO self_management(patient_goals,height,weight_target,bmi_target,weight_management,nutrition_education,dodiscussion,p_id) VALUES ('$pgoals','$height','$weight','$tbmi','$discuss','$nutrition','$date','$p_id')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding Details";
					}
					echo json_encode($ret);
			}

			public function addNephropathy()
			{
				$ret = array();

				$date = $_POST['ndate'];
				$acr = $_POST['acr'];
				$egfr = $_POST['egfr'];
				$p_id = $_POST['p_id'];

				$sql = "INSERT INTO nephropathy(p_id,ndate,acr,egfr) VALUES ('$p_id','$date','$acr','$egfr')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding Details";
					}
					echo json_encode($ret);
			}

			public function addNeuropathy()
			{
				$ret = array();

				$date = $_POST['neudate'];
				$finds = $_POST['finds'];
				$p_id = $_POST['p_id'];

				$sql = "INSERT INTO neuropathy(find_date,finds,p_id) VALUES('$date','$finds','$p_id')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding Details";
					}
					echo json_encode($ret);
			}

			public function addRetinopathy()
			{
				$ret = array();

				$date = $_POST['t_date'];
				$find = $_POST['find'];
				$plan = $_POST['plan'];
				$opt = $_POST['ophth'];
				$p_id = $_POST['p_id'];

				$sql = "INSERT INTO retinopathy(e_date,report,plan,ophthamologist,p_id ) VALUES ('$date','$find','$plan','$opt','$p_id')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding Details";
					}
					echo json_encode($ret);
			}
			
			public function addRisks()
			{
				$ret = array();

				$p_id = $_POST['p_id'];
				$risk = implode(',', $_POST['risk']);

				$sql = "INSERT INTO risk_factors(p_id,risk_factor) VALUES ('$p_id', '$risk')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding Details";
					}
					echo json_encode($ret);
			}

			public function addVascularProtection()
			{
				$ret = error();

				$statin = $_POST['statin'];
				$statin2 = $_POST['statin2'];
				$p_id = $_POST['p_id'];

				$sql = "INSERT INTO vascular_protection(opt1,opt2,p_id) VALUES ('$statin','$statin2','$p_id')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding Details";
					}
					echo json_encode($ret);
			}

			public function addVisits()
			{
				$ret = error();

				$p_id = $_POST['p_id'];
				$date = $_POST['ldate'];
				$bp = $_POST['bp'];
				$weightp = $_POST['weightp'];
				$bmi = $_POST['bmi'];
				$hba = $_POST['hba1c'];
				$notes = $_POST['notes'];
				$hpgl = $_POST['hpgl'];
				$dm = $_POST['dmtherapy'];

				$sql = "INSERT INTO visits(p_id,bp,weight_p,bmi,hba1c,notes,hypo_gly,dm_therapy,visit_date)VALUES ('$p_id','$bp','$weightp','$bmi','$hba','$notes','$hpgl','$dm','$date')";

				if($this->db->setData($sql)){
					$ret['response']=0;
					$ret['message']="Details addedd successfully";
				}else{
						$ret['response']=1;
						$ret['message']="Eror adding Details";
					}
					echo json_encode($ret);
			}
		}
				
					
?>