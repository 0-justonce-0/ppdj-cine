$(document).ready(function() {
	$("#add").show();
	$("#update").hide();
	$("#a").click(function(){
		$("#update").hide();
		$("#add").show();
	});
	$("#u").click(function(){
		$(':input','#result')
 	 .not(':button, :submit, :reset, :hidden')
  	.val('');
  	$("#number").val('');
		$("#update").show();
		$("#add").hide();
		$("#de").hide();
		$("#up").show();;
	});
});