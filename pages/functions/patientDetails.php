<?php 

include 'conn.php';
	
	class PatientDetails
	{
		var $db = null;
		function __construct()
		{
			$this->db = new Database();
        }
        //Add new patient 
        public function addPatient(){
            $name = $_POST['pname'];
			$phnum = $_POST['phnum'];
			$diabtype = $_POST['diabetestype'];
			$dob = $_POST['dob'];
			$dodiag = $_POST['dodiag'];
			
            $sql =  "INSERT INTO patient_details(phone_num,patient_num,diabetes_type,dob,dodiagnosis) VALUES
            ($phnum,$name,$diabtype,$dob,$dodiag)";

            if($this->db->setData($sql)){
                $ret['response']=0;
                $ret['message']="Patient added Successfully";
                    }else{
                $ret['response']=1;
                $ret['message']="Error adding Patient";
                    }

                echo json_encode($ret);
        }

        //update current patients details
        public function updatePatientDetails(){

            } 
            
            //Input risk factors
        public function riskFactors(){
            $phonenum = $_POST['phnum'];
            $risk = implode(',', $_POST['risk']);
            
            $sql = "INSERT INTO risk_factors(phone_num,risk_factor)
             VALUES ($phonenum,$risk)";	
        
            if($this->db->setData($sql)){
                $ret['response']=0;
                $ret['message']="Risks added Successfully";
                    }else{
                $ret['response']=1;
                $ret['message']="Error adding risks";
                    }

                echo json_encode($ret);
       
             } 

             //Lifestyle changes to be input
        public function lifestyleChanges(){

                 $phnum = $_POST['phnum'];
			        $smoking = $_POST['smoking'];
			        $alcoholIntake = $_POST['alcohol_intake'];

                    $sql = "INSERT INTO lifestyle_changes(phone_num,smoking,alcohol_intake)
                     VALUES ($phnum,$smoking,$alcoholIntake)";	
        
                if($this->db->setData($sql)){
                 $ret['response']=0;
                    $ret['message']="Lifestyle details added Successfully";
                     }else{
                 $ret['response']=1;
                 $ret['message']="Error adding lifestyle details";
                        }

                    echo json_encode($ret);
                 }
                 
                 //self management details to be added
        public function selfManagement(){
                $pgoals = $_POST['pgoals'];
			    $height = $_POST['height'];
			    $weight = $_POST['w_target'];
			    $tbmi = $_POST['t_bmi'];
			    $discuss = $_POST['issue_disscussed'];
			    $nutrition = $_POST['n_education'];
			    $date = $_POST['date'];
                $phnum = $_POST['phnum'];
            
                $sql = "INSERT INTO self_management(patient_goals,height,weight_target,bmi_target,weight_management,nutrition_education,dodiscussion,phone_num)
                    VALUES ($pgoals,$height,$weight,$tbmi,$discuss,$nutrition,$date,$phnum)";
        
            if($this->db->setData($sql)){
                $ret['response']=0;
                $ret['message']="Self Management details added Successfully";
                    }else{
                $ret['response']=1;
                $ret['message']="Error adding self management details";
                    }

                echo json_encode($ret);
        
            }

            //adding patients visits details into the database
        public function patientVisit(){

                $phnum = $_POST['phnum'];
		        $date = $_POST['ldate'];
		        $bp = $_POST['bp'];
		        $weightp = $_POST['weightp'];
		        $bmi = $_POST['bmi'];
		        $hba = $_POST['hba1c'];
		        $notes = $_POST['notes'];
		        $hpgl = $_POST['hpgl'];
                $dm = $_POST['dmtherapy'];
            
                $sql = "INSERT INTO visits(phone_num,bp,weight_p,bmi,hba1c,notes,hypo_gly,dm_therapy,visit_date)
                    VALUES ($phnum,$bp,$weightp,$bmi,$hba,$notes,$hpgl,$dm,$date)";

                if($this->db->setData($sql)){
                    $ret['response']=0;
                    $ret['message']="Visit details added Successfully";
                        }else{
                    $ret['response']=1;
                    $ret['message']="Error adding visit details";
                        }

                    echo json_encode($ret);
                }
        //onwards the functions are in the tables place
                //add nephropathy into the database
        public function nephropathy(){
            $date = $_POST['ndate'];
			$acr = $_POST['acr'];
			$egfr = $_POST['egfr'];
            $phnum = $_POST['phnum'];
            
            $sql = "INSERT INTO nephropathy(phone_num,ndate,acr,egfr)
            VALUES ($phnum,$date,$acr,$egfr)";

            if($this->db->setData($sql)){
                $ret['response']=0;
                $ret['message']="Visit details added Successfully";
                    }else{
                $ret['response']=1;
                $ret['message']="Error adding visit details";
                }

                echo json_encode($ret);

                }

        public function neuropathy(){

            $date = $_POST['neudate'];
            $finds = $_POST['finds'];
            $phnum = $_POST['phnum'];
    
            $sql = "INSERT INTO neuropathy(find_date,finds,phone_num) 
            VALUES($date,$finds,$phnum)";

            if($this->db->setData($sql)){
                    $ret['response']=0;
                    $ret['message']="Test details added Successfully";
                        }else{
                    $ret['response']=1;
                    $ret['message']="Error adding test details";
                }

                echo json_encode($ret);

            }

        public function retinopathy(){

            $date = $_POST['t_date'];
			$find = $_POST['find'];
			$plan = $_POST['plan'];
			$opt = $_POST['ophth'];
            $phnum = $_POST['phnum'];

            $sql = "INSERT INTO retinopathy(e_date,report,plan,ophthamologist,phone_num )
            VALUES ($date,$find,$plan,$opt,$phnum)";

            if($this->db->setData($sql)){
                $ret['response']=0;
                $ret['message']="Test details added Successfully";
                    }else{
                $ret['response']=1;
                $ret['message']="Error adding test details";
            }

            echo json_encode($ret);


        }

        public function vascularProtection(){

            $statin = $_POST['statin'];
			$statin2 = $_POST['statin2'];
			$phnum = $_POST['phnum'];

            $sql = "INSERT INTO vascular_protection(opt1,opt2,phone_num) 
            VALUES ($statin,$statin2,$phnum)";

            if($this->db->setData($sql)){
                $ret['response']=0;
                $ret['message']="Test details added Successfully";
                    }else{
                $ret['response']=1;
                $ret['message']="Error adding test details";
            }

            echo json_encode($ret);


        }

        public function lipidTargets(){

            $date = $_POST['l_date'];
		    $levels = $_POST['lipids'];
		    $plans = $_POST['plans'];
		    $phnum = $_POST['phnum'];

            $sql = "INSERT INTO lipid_target(ldate,lipid_level,plan,phone_num) 
            VALUES ($date,$levels,$plans,$phnum)";
		

            if($this->db->setData($sql)){
                $ret['response']=0;
                $ret['message']="Test details added Successfully";
                    }else{
                $ret['response']=1;
                $ret['message']="Error adding test details";
            }

            echo json_encode($ret);


        }

        public function cadAssessment(){

            $ecg = $_POST['ecg'];
			$secg = $_POST['secg'];
			$other = $_POST['other'];
            $phnum = $_POST['phnum'];
            
            $sql = "INSERT INTO cad(phone_num,ecg,secg,other)
            VALUES ($phnum,$ecg,$secg,$other)";
			

            if($this->db->setData($sql)){
                $ret['response']=0;
                $ret['message']="Test details added Successfully";
                    }else{
                $ret['response']=1;
                $ret['message']="Error adding test details";
            }

            echo json_encode($ret);


        }

    }
        ?>