<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Patient Details</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

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
                   
                  <br />
                  <br /> 
				
			
			<div class="panel panel-primary">
                        <div class="panel-heading">
                            Patient details
                        </div>
                        <div class="panel-body">
                            <form id="patientForm" action="functions/details.php" method="post">
                <label>Patient Name:</label>
        <input class="form-control" type="text" name="pname" id="pname" size="50" required><br>
                
                <label>Phone Number</label>
        <input class="form-control" type="number" name="phnum" id="phnum"required><br/>
                
                <label>Diabetes Type:</label> 
                    <select id="diabetestype"name="diabetestype" class="form-control">
                        <option value="Type 1">Type 1</option>
                        <option value="Type 2">Type 2</option>
                    </select>
                <br/>
                
                <label>Date of Birth</label>
        <input class="form-control" name="dob" id="dob" type="date"  required><br/>
                
                <label>Date of Diagnosis</label>
        <input class="form-control" name="dodiag" id="dodiag"type="number"  min="1900" max="2019" required/><br/>
            
      <button type="submit" id="sub" class="btn">Submit</button>
        
        </form>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
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

   

</body>

</html>
