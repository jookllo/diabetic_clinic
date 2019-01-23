<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Patient Analysis</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'navbar.php' ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Patient Analysis Setup</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					<center>
					<label><h4>Phone number
					<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT phone_num FROM patient_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	 echo " <select name='pa_id' id='dropbox' onchange='copyValue()'>";
	 echo"<option></option>"; 
             while($row = $result->fetch_assoc()){
                echo "<option value='".$row[phone_num]."'>".$row['phone_num']."</option>";
             }
             //show ksnum list as options
             echo " </select>";

} else {
    echo "0 results<br/>";
}

echo "";
?><br/>
 <script>
           function copyValue() {
    var dropboxvalue = document.getElementById('dropbox').value;
    document.getElementById('phnum').value = dropboxvalue;
    document.getElementById('phnum1').value = dropboxvalue;
    document.getElementById('phnum2').value = dropboxvalue;
    document.getElementById('phnum3').value = dropboxvalue;
    } 
    </script></h4>

					</label>
					</center>
			
				  <button class="accordion">Risk Factors, Comorbidities</button>
			<div class="panel">
				<form action="functions/risks.php" method="post">
				<label>Phone Number<input type="text" name="phnum" id="phnum"></label><br/>
				<label><input type="checkbox" name="risk[]" value="Hypertension">Hypertension</label><br/>
				<label><input type="checkbox" name="risk[]" value="Dyslipidaemia"/>Dyslipidaemia</label><br/>
				<label><input type="checkbox" name="risk[]" value="CKD"/>CKD</label><br/>
				<label><input type="checkbox" name="risk[]" value="Foot disease"/>Foot disease</label><br/>
				<label><input type="checkbox" name="risk[]" value="Coronary Artery Disease"/>Coronary Artery Disease</label><br/>
				<label><input type="checkbox" name="risk" value="Erectile dysfunction"/>Erectile Dysfunction</label><br/>
				<button type="submit">Submit</button>
			</form>
			</div>


		<button class="accordion">Lifestyle Changes</button>
			<div class="panel">
				<form action="functions/lifestyle.php" method="post">
				<label>Phone Number<input type="text" name="phnum" id="phnum1"></label><br/>
					<label>Smoking
						
					<select name="smoking">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Cessation discussed">Cessation discussed</option>
					</select>
					</label><br/>		
					<label>Alcohol intake<input name="alcohol_intake"type="number"/>Units/Week</label>		
					<button type="submit">Submit</button>				
				</form>			
			</div>

		<button class="accordion">Self Management</button>
			<div class="panel">
				<form action="functions/management.php" method="post">
				<label>Phone Number<input type="text" name="phnum" id="phnum2"></label><br/>
					<label>Patient Goals<input type="text" name="pgoals" size="35"/></label><br/>
				<label>Height<input type="text" name="height"size="30"/></label><br/>
				<label>Weight Target<input type="text"  name="w_target" size="30"/></label><br/>
				<label>Target BMI<input type="text" name="t_bmi" size=" 30"/></label><br/>
				<label>Weight Management Discussed<select name="issue_disscussed">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select></label><br/>
					<label>Nutrition education<select name="n_education">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select></label><br/>
					<label>Date:<input name="date"type="date"/></label><br>
					<button type="submit">Submit</button>				
				</form>			
			</div>
		
		<button class="accordion">Visits (every 3 months)</button>
			<div class="panel">
				<form action="functions/visits.php" method="post">
				<label>Phone Number<input type="text" name="phnum" id="phnum3"></label><br/>
					<label><b>Date</b> <input type="date" name="ldate"/></label><br/>
					<label><b>BP</b><input type="text" name="bp" /></label><br/>
					<label><b>Weight(kg)</b><input type="text" name="weightp" size="30" /></label><br/>
					<label>BMI<input type="text" name="bmi"></label><br/>
					<label><b>HBA1c Target</b><input name="hba1c" type="text"/></label><br/>
					<label><b>Notes(goals,clinical status)</b><input type="text" name="notes" /></label><br/>
					<label><b>Hypo-glycaemia</b><input type="text" name="hpgl" /></label><br/>
					<label><b>DM therapy/CV agents</b><input type="text" name="dmtherapy" /></label>
					<button type="submit">Submit</button>				
				</form>			
			</div>	
				
		<script>
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.display === "block") {
			      panel.style.display = "none";
			    } else {
			      panel.style.display = "block";
			    }
			  });
			}
			</script>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
