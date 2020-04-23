$(document).ready(function() {
	$("#update").hide();
	$("#add").show();
	$("#delete").hide();
	
	$("#ad").click(function(){
	var username = document.getElementById("user").value;	
	var password = document.getElementById("pass").value;	
	var fname = document.getElementById("first").value;	
	var mname = document.getElementById("middle").value;	
	var lname = document.getElementById("last").value;	
	var email = document.getElementById("mail").value;	
	var gender = document.getElementById("gder").value;	
	var bday = document.getElementById("bday").value;	
	var phone = document.getElementById("pnumber").value;	

	
	
	xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                
                if(content != "0")
                {
             	   alert(content);
             	   
             	  }
             	   else
             	   {	
             	   alert("New cunstomer added!");
             	   $(':input','#addf')
 		 .not(':button, :submit, :reset, :hidden')
  		.val('');
             	   }
            }
        }
        
        xmlhttp.open("GET","admin-add.php?username="+username+"&pwd1="+password+"&fname="+fname+"&mname="+mname+"&lname="+lname+"&email="+email+"&gender="+gender+"&birthday="+bday+"&phone="+phone,true);
        xmlhttp.send();      
        
	});


	$("#up").click(function(){
		var username = document.getElementById("user").value;	
		var password = document.getElementById("pass").value;	
		var fname = document.getElementById("first").value;	
		var mname = document.getElementById("middle").value;	
		var lname = document.getElementById("last").value;	
		var email = document.getElementById("mail").value;	
		var gender = document.getElementById("gder").value;	
		var bday = document.getElementById("bday").value;	
		var phone = document.getElementById("pnumber").value;	

	xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                
                if(content != "0")
                {
             	   alert(content);
             	   
             	  }
             	   else
             	   {	
             	   alert("Flight updated!");
             	   $(':input','#result')
 		 .not(':button, :submit, :reset, :hidden')
  		.val('');
             	   }
            }
        }
        
		xmlhttp.open("GET","admin-update.php?username="+username+"&pwd1="+password+"&fname="+fname+"&mname="+mname+"&lname="+lname+"&email="+email+"&gender="+gender+"&birthday="+bday+"&phone="+phone,true);
        xmlhttp.send();      
        
	});


	$("#de").click(function(){
		var username = document.getElementById("user").value;		
		xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                
             	 	alert(content);
            }
        }
        
        xmlhttp.open("GET","admin-delete.php?username="+username,true);
        xmlhttp.send();      
        $(':input','#result')
 	 .not(':button, :submit, :reset, :hidden')
  	.val('');
	});
	
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
	$("#d").click(function(){
		$("#number").val('');
		$(':input','#result')
 	 .not(':button, :submit, :reset, :hidden')
  	.val('');
		$("#update").show();
		$("#add").hide();
		$("#de").show();
		$("#up").hide();
	});
});