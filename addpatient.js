$document.jQuery(document).ready(function(e) {
	$("#sub").click(function(){
		 $.post( $("#patientForm").attr("action"),
		    $("#patientForm :input").serializeArray(),function(info){ $("#result").html(info); } );
		      clearInput();
		});

		$("#patientForm").submit(function(){
		  return false;
		});

		function clearInput(){
		  $("#patientForm :input").each(function(){
		    $(this).val(' ');
		  });
		}

			$("#submit1").click(function(){
				var phone_num = $("#phnum").val();
				var risk = ("#risk[]").val();

				$.ajax({
					type:"POST",
					data:(phone_num:phone_num,risk:risk),
					url:"functions/risk.php",
					success: function(result){
						alert(result);
					}
				});
			});
	
});
			
			




