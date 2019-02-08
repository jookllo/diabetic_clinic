<?php 
	
	/* include all required classes    */

    include 'patientDetails.php';
    
    //add patient 
    if(isset($_POST['add_patient'])){
        $PatientDetails = new Patient();
        $PatientDetails->addPatient();
    }

    if(isset($_POST['add_risk'])){
        $PatientDetails = new Patient();
        $PatientDetails->riskFactors();
    }

    if(isset($_POST['add_lifechoices'])){
        $PatientDetails = new Patient();
        $PatientDetails->lifestyleChanges();
    }

    if(isset($_POST['add_self'])){
        $PatientDetails = new Patient();
        $PatientDetails->selfManagement();
    }

    if(isset($_POST['add_visit'])){
        $PatientDetails = new Patient();
        $PatientDetails->patientVisit();
    }

    if(isset($_POST['add_nephropathy'])){
        $PatientDetails = new Patient();
        $PatientDetails->nephropathy();
    }

    if(isset($_POST['add_neuropathy'])){
        $PatientDetails = new Patient();
        $PatientDetails->neuropathy();
    }

    if(isset($_POST['add_retinopathy'])){
        $PatientDetails = new Patient();
        $PatientDetails->retinopathy();
    }

    if(isset($_POST['add_vp'])){
        $PatientDetails = new Patient();
        $PatientDetails->vascularProtection();
    }

    if(isset($_POST['add_lipidt'])){
        $PatientDetails = new Patient();
        $PatientDetails->lipidTargets();
    }

    if(isset($_POST['add_cad'])){
        $PatientDetails = new Patient();
        $PatientDetails->cadAssessment();
    }
    ?>
