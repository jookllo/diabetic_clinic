<?php
				include("conn.php");
						
				if(isset($_POST['sub1'])){
						$phonenum = $_POST['phnum'];
						$risk = implode(',', $_POST['risk']);
					
					if (mysqli_query($db,"INSERT INTO risk_factors(phone_num,risk_factor) 
							VALUES ('$phonenum', '$risk')"))
						echo "<div class='alert alert-success alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                Details inserted into database.</div>";
							else 
						echo "<div class='alert alert-danger alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                               An error has occurred. The Patient was not added.</div>";}
		?>