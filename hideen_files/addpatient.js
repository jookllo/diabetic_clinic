$("add_patient").click(function(){
  $.post($("#add-patient").attr("action"), $("#add-patient :input").serializeArray(),
   function(info){$("#result").html(info);})
    });

  $("#add-patient").submit(function(){
    return false;
  });

