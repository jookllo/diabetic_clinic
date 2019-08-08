<?php
	
	include 'patient.php'; //lets test again

	if(isset($_POST['addpatient_submit'])){
		echo json_encode(['message'=>'successfully']);
		$patient = new PatientDetails();
		$patient->addPatient();
	}	

	if(isset($_POST['update_patient'])){
		$patient = new PatientDetails();
		$patient->updatePatient();
	}

	if(isset($_POST['edit_patient'])){
		$patient = new PatientDetails();
		$patient->editPatient();
	}

	if(isset($_POST['add_cad'])){
		echo json_encode(['message'=>'successfully']);
		$patient = new PatientDetails();
		$patient->addCad();
	}

	if(isset($_POST['addlifestyle_submit'])){
		echo json_encode(['message'=>'successfully']);
		$patient = new PatientDetails();
		$patient->addLifestyle();
	}

	if(isset($_POST['add_lipids'])){
		$patient = new PatientDetails();
		$patient->addLipids();
	}

	if(isset($_POST['add_md'])){
		$patient = new PatientDetails();
		$patient->addManagementDetails();
	}

	if(isset($_POST['add_nephropathy'])){
		$patient = new PatientDetails();
		$patient->addNephropathy();
	}

	if(isset($_POST['add_neuropathy'])){
		$patient = new PatientDetails();
		$patient->addNeuropathy();
	}

	if(isset($_POST['add_retinopathy'])){
		$patient = new PatientDetails();
		$patient->addRetinopathy();
	}

	if(isset($_POST['add_risks'])){
		$patient = new PatientDetails();
		$patient->addRisks();
	}

	if(isset($_POST['add_vp'])){
		$patient = new PatientDetails();
		$patient->addVacularProtection();
	}

	if(isset($_POST['add_visits'])){
		$patient = new PatientDetails();
		$patient->addVisits();
	}
?>

