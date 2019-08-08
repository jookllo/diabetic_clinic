 							if(p_id==''){
                            alert('Please select Patient id')
                            return false;
                         }else{
                            var partTwoData =$('#partTwo').serialize();
                            $.ajax({
                            url: 'passthrough.php',
                            data: partTwoData,
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
				}

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
				            });
//vascular protection
$("sub34").click(function(){
				var p_id = $("#p_id3").val();
				var statin = $("#statin").val();
				var statin2 = $("#statin2").val();
								
				if(p_id==""||statin==""||statin2=="")
				{
					alert("Fill in the blanks");
				}

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