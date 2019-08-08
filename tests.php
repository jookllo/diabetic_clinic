<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diabetic Complication Screening</title>

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
    document.getElementById('p_id4').value = dropboxvalue;
    document.getElementById('p_id5').value = dropboxvalue;
    } 
    

</script>
 
</h4>
<label>Date:</label><input class="form-control" id="ndate" type="date" name="ndate" /><br/></label>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" class="collapsed">Renal Assessment</a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                             <h2><span id="result"></span></h2>
   
           <form >
                <label>Patient ID<input type="text" name="p_id" id="p_id" class="form-control" required/></label><br/>
                <input class="form-control" type="hidden" name="add_nephropathy" value="add_nephropathy"/>
                <label>ACR<input type="text" name="acr" id="acr" class="form-control" required/></label><br/>
                <label>eGFR<input type="text" name="egfr" id="egfr" class="form-control" required></label><br/>
                
                <button class="btn" name="add_nephropathy" id="sub31" type="button">Submit</button>
            </form>
        </div>
                                    </div>
                                </div>
           
            <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" class="collapsed" aria-expanded="false">Nerve Function</a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                             <form >
                <p>Check feet for lesions and
                sensation(10g monofilament or 128Hz
                tuning fork)Check for Pain, ED, GI symptoms</p>
                <label>Patient ID<input type="text" name="p_id" id="p_id1" class="form-control" required/></label><br/>
                <input class="form-control" type="hidden"name="add_neuropathy" value="add_neuropathy"/>
                
                <label>Findings<input type="text" class="form-control" id="finds" name="finds" size="30" required></label><br/>
                
                <button class="btn"  id="sub32" type="button">Submit</button>
            </form>     
            </div>
            </div>
                                </div>

        
       <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" class="collapsed" aria-expanded="false">Eye Assessment</a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                              <form class="form-container">
                <h2>Eye Exam:</h2>
                <label>Patient ID<input type="text" name="p_id" class="form-control" id="p_id2" required/></label><br/>
                <input class="form-control" type="hidden"name="add_retinopathy"  value="add_retinopathy" />
                
                <label>Findings<input type="text" name="find" id="find" class="form-control" size="30" required/></label><br/>
                <label>Plan<input type="text" name="plan" id="plan" class="form-control" size="30" required></label><br/>
                <label>Ophthalmologist:<input type="text" name="ophth" id="ophth" class="form-control" required></label><br/>
                <button class="btn" id="sub33" type="button">Submit</button>
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
                                              <form class="form-container">
            <label>Patient ID<input class="form-control" type="text" name="p_id" id="p_id3" required/></label><br/>  
            <input class="form-control" type="hidden" name="add_vp" value="add_vp" />              
            <label>
                <p>Statin if > 40yrs or 30yrs with DM > 15yrs or end organ</p>
                <select class="form-control" id="statin" name="statin">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
            </label>
            <br/>
            <label>
                <p>ACEi/ARB if >55yrs OR end organ damage (even in absence of HTN)</p>
                <select class="form-control" id="statin2" name="statin2">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select><br/>
             </label><br/>
            <button class="btn" id="sub34" type="button">Submit</button>
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
        <form class="form-container">
                <label>Patient ID<input class="form-control" type="text" name="p_id" id="p_id4" required/></label><br/>        
                <input class="form-control" type="hidden" name="add_lipids" value="add_lipids" /> 
                <label>Lipid Levels<input class="form-control" type="text" name="lipids" id="lipids" size="30" required/></label><br/>
                
                <label>Plans<input class="form-control" type="text" name="plans" id="plans" required/></label><br/>
                
            <button class="btn" id="sub35" type="button">Submit</button>
        
        </form>
                                        </div>
                                    
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
                            <form class="form-container">
                                <label>Patient ID<input class="form-control" type="text" name="p_id" id="p_id5" required/></label><br/>
                                <input class="form-control" type="hidden" name="add_cad" value="add_cad" />
                                <label>ECG<input class="form-control" type="text" id="ecg" name="ecg" size="30" required/></label><br/>
                                
                                <label>Stress ECG<input class="form-control" type="text" name="secg" id="secg" size="30" required/></label><br/>
                                
                                <label>Other<input class="form-control" type="text" name="other" id="other" size="30" required/></label><br/>
               
                <button class="btn" id="sub36" type="button">Submit</button>
            
            </form>

        </div>
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
    
        <script type="text/javascript">
            $(document).ready(function($) {

                $("#sub31").click(function(){
                                        
                                        var p_id = $("#p_id").val();
                                        var date = $("ndate").val();
                                        var acr = $("#acr").val();
                                        var egfr = $("#egfr").val();
                                        
                                        if(date==""||acr==""||egfr==""||p_id==""){
                                            alert("Fill in all fields");
                                        }else{

                                        $.ajax({
                                            url: 'passthrough.php',
                                            data: {
                                                   add_nephropathy:1,
                                                   p_id:p_id,
                                                   acr:acr,
                                                   egfr:egfr,
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
                                }
                            });

                $("sub32").click(function(){

                                var p_id = $("#p_id1").val();
                                var date = $("#neudate").val();
                                var finds = $("#finds").val();
                                
                                
                                if(p_id==""||date==""||finds=="")
                                {
                                    alert("Fill in the blanks");
                                }

                                $.ajax({
                                    url: 'passthrough.php',
                                    data: {
                                           add_neuropathy:1,
                                           p_id:p_id,
                                           date:date,
                                           finds:finds
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
                //retinopathy
                $("sub33").click(function(){

                                var p_id = $("#p_id2").val();
                                var date = $("#t_date").val();
                                var find = $("#find").val();
                                var plan = $("#plan").val();
                                var opt = $("#ophth").val();
                                
                                if(p_id==""||date==""||find==""||plan==""||opt=="")
                                {
                                    alert("Fill in the blanks");
                                }else{

                                $.ajax({
                                    url: 'passthrough.php',
                                    data: {
                                           add_retinopathy:1,
                                           p_id:p_id,
                                           date:date,
                                           find:find,
                                           plan:plan,
                                           opt:opt
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
                                            }
                                        });
                //vascular protection
                $("sub34").click(function(){

                                var p_id = $("#p_id3").val();
                                var statin = $("#statin").val();
                                var statin2 = $("#statin2").val();
                                                
                                if(p_id==""||statin==""||statin2=="")
                                {
                                    alert("Fill in the blanks");
                                }else{
                                $.ajax({
                                    url: 'passthrough.php',
                                    data: {
                                           add_vp:1,
                                           p_id:p_id,
                                           statin:statin,
                                           statin2:statin2
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
                                     }
                               });
                //lipid targets
                $("sub35").click(function(){

                                var p_id = $("#p_id4").val();
                                var date = $("#l_date").val();
                                var levels = $("#lipids").val();
                                var plans =$("#plans").val();
                                
                                
                                if(p_id==""||date==""||levels==""||plans=="")
                                {
                                    alert("Fill in the blanks");
                                }

                                $.ajax({
                                    url: 'passthrough.php',
                                    data: {
                                           add_lipids:1,
                                           p_id:p_id,
                                           date:date,
                                           levels:levels,
                                           plans:plans
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

                $("sub36").click(function(){

                                var p_id=$("#p_id5").val();
                                var ecg = $("#ecg").val();
                                var secg = $("#secg").val();
                                var other = $("#other").val();
                                                
                                if(p_id==""||ecg==""||secg==""||other=="")
                                {
                                    alert("Fill in the blanks");
                                }

                                $.ajax({
                                    url: 'passthrough.php',
                                    data: {
                                           add_cad:1,
                                           p_id:p_id,
                                           ecg:ecg,
                                           secg:secg,
                                           other:other
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
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

</body>

</html>
