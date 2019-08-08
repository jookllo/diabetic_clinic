<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update or Edit Details</title>

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
                        <h1 class="page-header">Edit or Delete Patient Deatils</h1>
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
                            <script type="text/javascript">
               function copyValue() {
    var patient_id = document.getElementById('p_id').value;
    var name = document.getElementById('patient_name').value;
    var phone_num = document.getElementById('phone_num').value;
    var diabetes_type = document.getElementById('diabetes_type').value;
    var dob = document.getElementById('dod').value;
    var dodiagnosis = document.getElementById('dodiagnosis').value;
    document.getElementById('edit_pid').value = patient_id;
    document.getElementById('edit_pname').value = name;
    document.getElementById('edit_diabetestype').value = phone_num;
    document.getElementById('edit_phnum').value = diabetes_type;
    document.getElementById('edit_dob').value = dob;
    document.getElementById('edit_dodiag').value = dodiagnosis;
    } 
                            
                                
                            </script>
                             
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Patient ID</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Diabetes Type</th>
                                        <th>Date of Birth</th>
                                        <th>Date of Diagnosis</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <th></th>
                                    <th><input class='form-control' type='text' id='edit_pname' value=''  placeholder='Patient name'required></th>
                                    <th><input class='form-control' type='text' id='edit_phnum' value=''  placeholder='Phone number'required></th>
                                    <th><input  class='form-control' id='edit_diabetestype' value='' placeholder='Diabetes type'required></th>
                                    <th><input  class='form-control' type='date' id='edit_dob' value='' placeholder='Date of Birth'required></th>
                                    <th><input class='form-control' type='text' value="" id='edit_dodiag' size='50' placeholder='Date of Diagnosis'required></th>
                                    <th colspan="2"><button type="button" id='update' class='btn btn-primary'>Update Record</button></th>
                                    <input type="hidden" id="patient_id">    
                                </tr>

                            <?php 
                                include"functions/conn.php";
                                $result = mysqli_query($db,"select * from patient_details where `status`='0'");                          
                                while($row= mysqli_fetch_array($result)){
                                   echo" <tbody>";
                                    
                                        echo"<tr>";
                                            echo"<th class='PID' id='p_id'>".$row['p_id']."</th>";
                                            echo"<th id='patient_name'>".$row['patient_name']."</th>";
                                            echo"<th id='phone_num'>".$row['phone_num']."</th>";
                                            echo"<th id='diabetes_type'>".$row['diabetes_type']."</th>";
                                            echo"<th id='dod'>".$row['dod']."</th>";
                                            echo"<th id='dodiagnosis'>".$row['dodiagnosis']."</th>";
                                            echo"<th><button  data-pid=".$row['p_id']." type='submit' class='btn btn-primary edit'>Edit</button></th>";
                                            echo "<th><button data-pid=".$row['p_id']." class='btn btn-danger delete'>Delete</button></th>";

                                        echo"</tr>";
                                    echo"</tbody>";
                                    
                                 }  
                                 
                                    ?> 
                                 </table>
                                            
                </div>
                <!-- /.row -->
                <script type="text/javascript">
                     $(document).ready(function() {
                        $(".edit").click(function(){
                            var id = $(this).attr('data-pid');
                             $('#patient_id').val(id);
                            $.getJSON('getPatientRecord.php?id='+id+'&action=getdata',function(resp){
                                $('#edit_pname').val(resp.patient_name);
                                $('#edit_phnum').val(resp.phone_num);
                                $('#edit_diabetestype').val(resp.diabetes_type);
                                $('#edit_dob').val(resp.dod);
                                $('#edit_dodiag').val(resp.dodiagnosis);
                               });
                        });

                         $(".delete").click(function(){
                            var id = $(this).attr('data-pid');                            
                            $.getJSON('updatePatientRecord.php?id='+id+'&action=delete',function(resp){
                                alert('Patient successfully deactivated');
                                 window.location.href="";
                               });
                        })


                         $("#update").click(function(){
                            var id = $('#patient_id').val();
                            data={
                                patient_name:$('#edit_pname').val(),
                                phone_num:$('#edit_phnum').val(),
                                diabetes_type:$('#edit_diabetestype').val(),
                                dod:$('#edit_dob').val(),
                                dodiagnosis:$('#edit_dodiag').val()
                            }

                            $.post('updatePatientRecord.php?id='+id+'&action=update',data,function(resp){
                                
                               }).done(function(){
                                window.location.href="";
                               });
                        })
                     });
                </script>
               </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   

</body>

</html>
