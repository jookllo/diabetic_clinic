<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diabetic Complication Screening</title>

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
        <?php include'navbar.php' ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Diabetic Complication Screening</h1>
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
    document.getElementById('phnum4').value = dropboxvalue;
    document.getElementById('phnum5').value = dropboxvalue;
    } 
    

</script>
</h4></label>
</center>

          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Patient Tests
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">  
           <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" class="collapsed">Nephropathy</a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                             <h2><span id="result"></span></h2>
   
           <form action="functions/nephropathy.php" method="post" class="form-container">
                <label>Date<input class="form-control" type="date" name="ndate"  required/></label><br/>
                <label>ACR<input type="text" name="acr" class="form-control" required/></label><br/>
                <label>eGFR<input type="text" name="egfr" class="form-control" required></label><br/>
                <label>Phone Number<input type="text" name="phnum" class="form-control" id="phnum" required/></label><br/>
                <button class="btn" type="submit">Submit</button>
            </form>
        </div>
                                    </div>
                                </div>
           
            <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" class="collapsed" aria-expanded="false">Neuropathy</a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                             <form action="functions/neuropathy.php" method="post" class="form-container">
                <p>Check feet for lesions and
                sensation(10g monofilament or 128Hz
                tuning fork)Check for Pain, ED, GI symptoms</p>
                <label>Date<input class="form-control" type="date" name="neudate" required></label><br/>
                <label>Findings<input type="text" class="form-control" name="finds" size="30" required></label><br/>
                <label>Phone Number<input type="text" name="phnum" class="form-control" id="phnum1" required/></label><br/>
                <button class="btn" type="submit">Submit</button>
            </form>     
            </div>
            </div>
                                </div>

        
       <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" class="collapsed" aria-expanded="false">Retinopathy</a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                              <form action="functions/retinopathy.php" method="post" class="form-container">
                <h2>Eye Exam:</h2>
               <label>Date<input type="date" class="form-control" name="t_date" required></label><br/>
                <label>Findings<input type="text" name="find" class="form-control" size="30" required/></label><br/>
                <label>Plan<input type="text" name="plan" class="form-control" size="30" required></label><br/>
                <label>Ophthalmologist:<input type="text" name="ophth" class="form-control" required></label><br/>
                <label>Phone Number<input type="text" name="phnum" class="form-control" id="phnum2" required/></label><br/>
                <button class="btn" type="submit">Submit</button>
                    </form>    
            </div>
                                    </div>
                                </div>


        <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine" class="collapsed" aria-expanded="false">Vascular protection</a>
                                        </h4>
                                    </div>
                                    <div id="collapseNine" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                              <form action="functions/vascular_protection.php" method="post" class="form-container">
                
            <label>
                <p>Statin if > 40yrs or 30yrs with DM > 15yrs or end organ</p>
                <select class="form-control" name="statin">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
            </label>
            <br/>
            <label>
                <p>ACEi/ARB if >55yrs OR end organ damage (even in absence of HTN)</p>
                <select class="form-control" name="statin2">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select><br/>
             </label><br/>
            <label>Phone Number<input class="form-control" type="text" name="phnum" id="phnum3" required/></label><br/>
            <button class="btn" type="submit">Submit</button>
            </form>    
            </div>
        </div>
    </div>

         <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen" class="collapsed" aria-expanded="false">Lipid Targets:</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTen" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body">
                                            <form action="functions/lipids.php" method="post" class="form-container">
                <label>Date<input class="form-control" type="date" name="l_date" required/></label><br/>
                <label>Lipid Levels<input class="form-control" type="text" name="lipids" size="30" required/></label><br/>
                <label>Plans<input class="form-control" type="text" name="plans" required/></label><br/>
                <label>Phone Number<input class="form-control" type="text" name="phnum" id="phnum4" required/></label><br/>
            <button class="btn" type="submit">Submit</button>
        </form></div>
                                    </div>
                                </div>

      <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">CAD assessment</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body">
                                            <form action="functions/cad.php" method="post" class="form-container">
                <label>ECG<input class="form-control" type="text" name="ecg" size="30" required/></label><br/>
                <label>Stress ECG<input class="form-control" type="text" name="secg" size="30" required/></label><br/>
                <label>Other<input class="form-control" type="text" name="other" size="30" required/></label><br/>
               <label>Phone Number<input class="form-control" type="text" name="phnum" id="phnum5" required/></label><br/>
                <button class="btn" type="submit">Submit</button>
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
