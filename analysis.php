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
    <link href=" vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=" vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href=" dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=" vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
					include "functions/phoneNumberVisible.php";?>
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

			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Patient Analysis
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">Risk Factors, Comorbidities</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <form method="post">                
                                                    <label>Phone Number<input class="form-control" type="text" name="phnum" id="phnum"/></label><br/>
                                                    <label><input  type="checkbox" id="risk[]" name="risk[]" value="Hypertension"/>Hypertension</label><br/>
                                                    <label><input type="checkbox" id="risk[]" name="risk[]" value="Dyslipidaemia"/>Dyslipidaemia</label><br/>
                                                    <label><input type="checkbox" id="risk[]" name="risk[]" value="CKD"/>CKD</label><br/>
                                                    <label><input type="checkbox" id="risk[]" name="risk[]" value="Foot disease"/>Foot disease</label><br/>
                                                    <label><input type="checkbox" id="risk[]" name="risk[]" value="Coronary Artery Disease"/>Coronary Artery Disease</label><br/>
                                                    <label><input type="checkbox" id="risk[]" name="risk[]" value="Erectile dysfunction"/>Erectile Dysfunction</label><br/>
                                                    <button type="submit" class="btn" id="submit1" name="sub1">Submit</button>
                                                    <p id="result"></p>
            </form>
        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">Lifestyle Changes</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <form action="functions/lifestyle.php" id="lifestyleForm" method="post">
                <label>Phone Number<input class="form-control" type="text" name="phnum" id="phnum1"/></label><br/>
                    <label>Smoking
                        
                    <select class="form-control" id="smoking" name="smoking">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="Cessation discussed">Cessation discussed</option>
                    </select>
                    </label><br/>       
                    <label>Alcohol intake(Units/Week)<input class="form-control" id="alcohol_intake" name="alcohol_intake"type="number" placeholder="Units/Week"/></label><br/>     
                    <button class="btn" id="sub2" type="submit" name="submit">Submit</button>               
                </form>     
            </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">Self Management</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body">
                                            <form method="post" id="managementForm" action="functions/management.php">

                <label>Phone Number<input class="form-control" type="text" name="phnum" id="phnum2"/></label><br/>
                
                    <label>Patient Goals<textarea class="form-control" type="text" id="pgoals" name="pgoals" rows="6" cols="50"></textarea></label><br/>
                
                <label>Height<input class="form-control" type="text" id="height" name="height"size="30"/></label><br/>
                
                <label>Weight Target<input class="form-control" type="text" id="w_target" name="w_target" size="30"/></label><br/>
                
                <label>Target BMI<input class="form-control" type="text" id="t_bmi" name="t_bmi" size=" 30"/></label><br/>
                
    <label>Weight Management Discussed<select class="form-control" id="issue_disscussed" name="issue_disscussed">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select></label><br/>
                    
            <label>Nutrition education<select class="form-control" id="n_education" name="n_education">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select></label><br/>
                    
                    <label>Date:<input class="form-control" id="date" name="date" type="date"/></label><br>
                    
                    <button class="btn" id="sub3" type="submit">Submit</button>             
                </form></div>
                                    </div>
                                </div>

    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed" aria-expanded="false">Visits (every 3 months)</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <form action="functions/visits.php" id="visitsForm" method="post">

                    <label><b>Phone Number</b><input class="form-control" type="text" name="phnum" id="phnum3"/></label><br/>

                    <label><b>Date</b> <input class="form-control" type="date" id="ldate" name="ldate"/></label><br/>
                    
                    <label><b>BP</b><input class="form-control" type="text" id="bp" name="bp" /></label><br/>
                    
                    <label><b>Weight(kg)</b><input class="form-control" type="text" id="weightp" name="weightp" size="30" /></label><br/>
                    
                    <label><b>BMI</b><input class="form-control" type="text" id="bmi" name="bmi"/></label><br/>
                    
                    <label><b>HBA1c Target</b><input class="form-control" type="text" id="hba1c" name="hba1c"/></label><br/>
                    
                    <label><b>Notes(goals,clinical status)</b><textarea class="form-control" type="text" id="notes" name="notes" rows="6" cols="50"></textarea></label><br/>
                    
                    <label><b>Hypo-glycaemia</b><input class="form-control" type="text" id="hpgl" name="hpgl" /></label><br/>
                    
                    <label><b>DM therapy/CV agents</b><input class="form-control" type="text" id="dmtherapy" name="dmtherapy" /></label><br/>
                    
                    <button class="btn" id="sub4" type="submit">Submit</button>             
                </form>         
                
            </div>
                        
                                    </div>

                                </div>                            

                            </div>

                        </div>
                         <div class="panel-footer">
                            Panel Footer
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

			<script src="addpatient.js" type="text/javascript"></script>   		
		
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=" vendor/jquery/jquery.min.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src=" vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=" vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src=" dist/js/sb-admin-2.js"></script>

</body>

</html>
