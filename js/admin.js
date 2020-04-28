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

pwdValidation = () => {
	var x = document.forms["user-pwd"]["password"].value;
	var y = document.forms["user-pwd"]["repassword"].value;
	var valid = 1;
	if(x != y) {
		alert("Password not match");
		valid = 0;
	}
	if(valid == 0) {
		return false;
	} else {
		return true;
	}
}
