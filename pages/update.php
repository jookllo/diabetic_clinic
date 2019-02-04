<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
                        <h1 class="page-header">Add or Edit Patient Deatils</h1>
                    </div>
                    <!-- /.col-lg-12 -->
               
                    <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <br/>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Diabetes Type</th>
                                        <th>Date of Birth</th>
                                        <th>Date of Diagnosis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <th><input class='form-control' type='text' name='pname' value='<?php echo $pname?>'  placeholder='Patient name'required></th>
                                    <th><input  class='form-control' name='diabetestype' value='<?php echo $diabetes_type?>' placeholder='Diabetes type'required></th>
                                    <th><input  class='form-control' type='date' name='dob' value='<?php echo $dob?>' placeholder='Date of Birth'required></th>
                                    <th><input class='form-control' type='text' value="<?php echo $dodiagnosis?>" name='dodiag' size='50' placeholder='Date of Diagnosis'required></th>
                                    <th><a href='functions/update.php?edit=<?php echo $row[p_id];?>' class='btn btn-primary'>Update</a>
                                </tr>

                            <?php 
                                include"functions/conn.php";
                                $result = mysqli_query($db,"select * from patient_details");                          
                                while($row= mysqli_fetch_array($result)){
                                   echo" <tbody>";
                                    
                                        echo"<tr>";
                                            echo"<th>".$row['patient_num']."</th>";
                                            echo"<th>".$row['diabetes_type']."</th>";
                                            echo"<th>".$row['dob']."</th>";
                                            echo"<th>".$row['dodiagnosis']."</th>";
                                            echo"<th><a href='functions/update.php?edit=<?php echo $row[p_id];?>' class='btn btn-primary'>Edit</a>";

                                        echo"</tr>";
                                    echo"</tbody>";
                                    
                                 }  
                                 
                                    ?> 
                                 </table>
                                            
                </div>
                <!-- /.row -->
                <?php
                                 echo"";
                                 echo"";
                                 echo"";                                
                                 echo"";?>
                                 
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
