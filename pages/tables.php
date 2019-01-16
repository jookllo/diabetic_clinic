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
        <?php include'navbar.php' ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Diabetic Complication Screening</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                
                
            
            <button class="accordion">Nephropathy</button>
            <div class="panel">     
            <form action="functions/oneof.php" method="post" class="form-container">
                <label>Date<input type="date" name="ndate"/></label><br/>
                <label>ACR<input type="text" name="acr"/></label><br/>
                <label>eGFR<input type="text" name="egfr"></label><br/>
                <label>KS Number<input type="number" name="ksnum"size="39" required/></label><br/>
                <button type="submit" >Submit</button>
            </form>
            </div>
           
            <button class="accordion">Neuropathy</button>
            <div class="panel">     
            <form action="functions/twoof.php" method="post" class="form-container">
                <p>Check feet for lesions and
                sensation(10g monofilament or 128Hz
                tuning fork)Check for Pain, ED, GI symptoms</p>
                <label>Date<input type="date" name="neudate"></label><br/>
                <label>Findings<input type="text" name="finds" size="30"></label><br/>
                <label>KS Number<input type="number" name="ksnum"size="39" required/></label><br/>
                <button type="submit">Submit</button>
            </form>
        </div>

        
        <button class="accordion">Retinopathy</button>
            <div class="panel">     
            <form action="functions/threeof.php" method="post" class="form-container">
                <h2>Eye Exam:</h2>
               <label>Date<input type="date" name="t_date"></label><br/>
                <label>Findings<input type="text" name="find" size="30"/></label><br/>
                <label>Plan<input type="text" name="plan" size="30"></label><br/>
                <label>Ophthalmologist:<input type="text" name="ophth"></label><br/>
                <label>KS Number<input type="number" name="ksnum"size="39" required/></label><br/>
                <button type="submit">Submit</button>
                    </form>
                </div>


        <button class="accordion">Vascular protection</button>
            <div class="panel">     
            <form action="functions/fourof.php" method="post" class="form-container">
                
            <label>
                <p>Statin if > 40yrs or 30yrs with DM > 15yrs or end organ</p>
                <select name="statin">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
            </label>
            <br/>
            <label>
                <p>ACEi/ARB if >55yrs OR end organ damage (even in absence of HTN)</p>
                <select name="statin2">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select><br/>
             </label><br/>
            <label>KS Number<input type="number" name="ksnum"size="39" required/></label><br/>
            <button type="submit">Submit</button>
            </form>
        </div>

         <button class="accordion">Lipid Targets:</button>
            <div class="panel">     
            <form action="functions/fiveof.php" method="post" class="form-container">
                <label>Date<input type="date" name="l_date"/></label><br/>
                <label>Lipid Levels<input type="text" name="lipids" size="30"/></label><br/>
                <label>Plans<input type="text" name="plans"/></label><br/>
                <label>KS Number<input type="number" name="ksnum"size="39" required/></label><br/>
            <button type="submit">Submit</button>
        </form>
    </div>

      <button class="accordion">CAD assessment</button>
            <div class="panel">     
            <form action="functions/sixof.php" method="post" class="form-container">
                <label>ECG<input type="text" name="ecg" size="30"/></label><br/>
                <label>Stress ECG<input type="text" name="secg" size="30"/></label><br/>
                <label>Other<input type="text" name="other" size="30"/></label><br/>
                <label>KS Number<input type="number" name="ksnum"size="39" required/></label><br/>
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
