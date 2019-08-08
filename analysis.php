<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Patient Analysis</title>


     <!-- jQuery -->
    <script src=" vendor/jquery/jquery.min.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src=" vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=" vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src=" dist/js/sb-admin-2.js"></script>
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
					<label><h4>Patient ID
					<?php 
					include "functions/phoneNumberVisible.php";?>
 <script>
           function copyValue() {
				    var dropboxvalue = document.getElementById('dropbox').value;
				    document.getElementById('p_id').value = dropboxvalue;
				    document.getElementById('p_id1').value = dropboxvalue;
				    document.getElementById('p_id2').value = dropboxvalue;
				    document.getElementById('p_id3').value = dropboxvalue;
				} 
    </script></h4>

    <label>Date:</label><input class="form-control" id="date" name="date" type="date"/><br>

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
                                            <form id="partOne" >                
                                    <label>Patient ID<input class="form-control" type="text" name="p_id" id="p_id"/></label><br/>

                                    <input class="form-control" type="hidden" name="add_risks" value="add_risks"/></label>
                                    
                                    <label><input  type="checkbox" class="risk" name="risk[]" value="Hypertension"/>Hypertension</label><br/>
                                                    
                                    <label><input type="checkbox" class="risk" name="risk[]" value="Dyslipidaemia"/>Dyslipidaemia</label><br/>
                                                    
                                    <label><input type="checkbox" class="risk" name="risk[]" value="CKD"/>CKD</label><br/>
                                                    
                                    <label><input type="checkbox" class="risk" name="risk[]" value="Foot disease"/>Foot disease</label><br/>
                                                    
                                    <label><input type="checkbox" class="risk" name="risk[]" value="Coronary Artery Disease"/>Coronary Artery Disease</label><br/>
                                                    
                                    <label><input type="checkbox" class="risk" name="risk[]" value="Erectile dysfunction"/>Erectile Dysfunction</label><br/>

                        <button type="button" class="btn" id="sub21" >Submit</button>
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
                        <form id="partTwo">
                                       
                                    <label>Patient ID</label>
                                    <input class="form-control" type="text" name="p_id" id="p_id1"/><br/>

                                    <input class="form-control" type="hidden" name="addlifestyle_submit" value="addlifestyle_submit"/></label>

                                    <label>Smoking</label>                      
                                        <select class="form-control" id="smoking" name="smoking">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    <br/>

                                    <label>Cessation discussed</label>
                                        <select class="form-control" id="cessation" name="cessation">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>    
                                        </select>
                                    <br/>
                                    <label>Alcohol intake(Units/Week)</label>
                                    <input class="form-control" id="alcohol_intake" name="alcohol_intake" type="number" placeholder="Units/Week"/><br/>

                                    <label>Advise Given</label>
                                    <select class="form-control" id="advise" name="advise">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select><br/>

                            <button class="btn" id="sub22" type="button">Submit</button>
                                 
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
                            <form method="post" id="managementForm" >

                                    <label>Patient ID<input class="form-control" type="text" name="p_id" id="p_id2"/></label><br/>
                                    
                                    <label>Patient Goals<textarea class="form-control" type="text" id="pgoals" name="pgoals" rows="6" cols="50"></textarea></label><br/>
                                    
                                    <label>Height<input class="form-control" type="text" id="height" name="height"size="30"/></label><br/>
                                    
                                    <label>Weight Target<input class="form-control" type="text" id="w_target" name="w_target" size="30"/></label><br/>
                                    
                                    <label>Target BMI<input class="form-control" type="text" id="t_bmi" name="t_bmi" size=" 30"/></label><br/>
                
                        <label>Weight Management Discussed </label>
                            <select class="form-control" id="issue_disscussed" name="issue_disscussed">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                   
                                        <br/>
                    
                                <label>Nutrition education</label>
                                    <select class="form-control" id="n_education" name="n_education">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                <br/>
                    
                            <button class="btn" id="sub23" type="submit">Submit</button>             
                                    </form>
                                </div>
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
                                <form id="visitsForm" method="post">

                <label><b>Patient ID</b><input class="form-control" type="text" name="p_id" id="p_id3"/></label><br/>

                <label><b>BP</b><input class="form-control" type="text" id="bp" name="bp" /></label><br/>
                            
                <label><b>Weight(kg)</b><input class="form-control" type="text" id="weightp" name="weightp" size="30" /></label><br/>
                            
                <label><b>BMI</b><input class="form-control" type="text" id="bmi" name="bmi"/></label><br/>
                            
                <label><b>HBA1c Target</b><input class="form-control" type="text" id="hba1c" name="hba1c"/></label><br/>
                            
                <label><b>Notes(goals,clinical status)</b><textarea class="form-control" type="text" id="notes" name="notes" rows="6" cols="50"></textarea></label><br/>
                            
                <label><b>Hypo-glycaemia</b><input class="form-control" type="text" id="hpgl" name="hpgl" /></label><br/>
                            
                <label><b>DM therapy/CV agents</b><textarea class="form-control" type="text" id="dmtherapy" name="dmtherapy" rows="6" cols="50"></textarea></label><br/>
                    
                <input type="hidden" class="form-control" name="addvisits_submit" value="addvisits_submit"  required/><br/>
                            
                    <button class="btn" id="sub24" type="submit">Submit</button>             
                </form>         
                
            </div>
                        <script type="text/javascript">
            $(document).ready(function() {
                
                    $("#sub21").click(function(){
                        var p_id= $("#p_id").val();
                        //var risks = $("#risks[]").val();

                        if($('#partOne input[type=checkbox]:checked').length < 1) {
                           alert('Please select atleast one xxxx') ;
                           return false;
                        }else if(p_id==''){
                            alert('Please select Patient id')
                            return false;
                         }else{
                            var partOneData =$('#partOne').serialize();
                            $.ajax({
                            url: 'passthrough.php',
                            data: partOneData,
                            dataType:'json',
                            type: 'POST',
                            success:function(data){
                        if(data.response=='1'){
                             alert("Saved successfully");
                            return true;
                        }else{
                         alert("Could not save data");
                          return false;
                                              }
                        }
                    });
                        };
                    });


                    $("#sub22").click(function(){
                       //alert("2");
                         var p_id = $("#p_id").val();
                         var smoking = $("#smoking").val();
                         var alcoholIntake = $("#alcohol_intake").val();

                        if (p_id==""||smoking==""||alcoholIntake=="") {
                            alert("Kindly fill all forms");
                            return false;
                        }else{
                        $.ajax({
                            url: 'passthrough.php',
                            data: { add_lifestyle:1,
                                    p_id:p_id,
                                    alcohol_intake: alcoholIntake,
                                    smoking:smoking,
                                    addlifestyle_submit:'addlifestyle_submit'

                            },
                            type: 'POST',
                            dataType: 'JSON',
                            success:function(data){
                                if(data.response==1){
                                    alert(message);
                                    return false;
                                }else if(data.response==0){
                            alert(data.message);                           
                        
                        }

                       } 
                    });
                    }
                });

                   $("#sub23").click(function(){
                        var p_id = $("#p_id2").val();
                        var pgoals = $("#pgoals").val();
                        var height = $("height").val();
                        var weighTarget = $("w_target").val();
                        var targetBmi = $("t_bmi").val();
                        var weightMD = $("issue_disscussed").val();
                        var nutritionEducation = $("n_education").val();
                        var date = $("date").val();

                        if(p_id==""||pgoals==""||height==""||
                            weighTarget==""||targetBmi==""||weightMD==""||
                            nutritionEducation==""||date==""){
                            alert("Fill in all fields");
                        }

                        $.ajax({
                            url: 'passthrough.php',
                            data: {add_md:1,
                                   p_id:p_id,
                                   pgoals:pgoals,
                                   height:height,
                                   weighTarget:weighTarget,
                                   targetBmi:targetBmi,
                                   weightMD:weightMD,
                                   nutritionEducation:nutritionEducation,
                                   date:date
                            },
                            type: 'POST',
                            dataType: 'json',
                            success:function(data){
                        if(data.response==1){
                            alert(message);
                            return false;
                        }else if(data.response==0){
                            alert(data.message);

                        }
                    }
                })
            });


        $("sub24").click(function(){
                var p_id = $("#p_id3").val();
                var date = $("#ldate").val();
                var bp = $("#bp").val();
                var weight = $("#weightp").val();
                var bmi = $("#bmi").val(); 
                var hba1c = $("#hba1c").val();
                var notes = $("#notes").val();
                var hpgl = $("#hpgl").val();
                var dmtherapy = $("#dmtherapy").val();
                
                if(p_id==""||date==""||bp==""||weight==""||
                    bmi==""||hba1c==""||notes==""||hpgl==""||dmtherapy==""){
                    alert("Fill in the blanks");
                }

                $.ajax({
                    url: 'passthrough.php',
                    data: {add_visits:1,
                           p_id:p_id,
                           date:date,
                           bp:bp,
                           weight:weight,
                           bmi:bmi,
                           hba1c:hba1c,
                           notes:notes,
                           hpgl:hpgl,
                           dmtherapy:dmtherapy
                            },
                    type: 'POST',
                    dataType:'json',
                    success:function(data){
                             if(data.response==1){
                                        alert(message);
                                    return false;
                               }else if(data.response==0){
                                   alert(data.message);
                                       }
                                    }       
                                })
                            });
                   
                });

                 </script>
                                    </div>

                                </div>                            

                            </div>

                        </div>

                         <div class="panel-footer">
                           <?php echo"Today is " . date("d-m-y")?>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

			  		
		
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   
 
</body>

</html>
