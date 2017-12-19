
$(document).ready(function(){
$("input[class='not_inv']").attr("disabled","disabled");
$("input[id='button']").attr("disabled","disabled");
  var count=2;

    $("#button").click(function(event){
    	$("#sub").before($("#sub").add("<input type='text' id='hd' class='not_inv' required />"));
      $("input[id='hd']").attr("id", "hdd" + count);
      $("input[id^='hdd']").css("margin-top" , "20px");
     	count++;
      });
//============================================
    $( "#inv_number" ).change(function() 
    {
      $("input[class='not_inv']").val('');
      $("input[class='not_inv']").removeAttr("disabled");
      $("input[id='button']").removeAttr("disabled");
    });
//============================================
});
