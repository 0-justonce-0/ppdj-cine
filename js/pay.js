$(document).ready(function() {
	$('.payment-part').hide();
	$('.method').click(function() {
		$('.payment-info').show();
	});
	$('.back-to-seatb').click(function() {
		$('.payment-part').hide();
		$('.booking-part').show();
	});
});

const isNum = (e) => {
	var char = String.fromCharCode(e.which);
	if(!(/[0-9]/.test(char))) {
		e.prevebtDefault();
	}
}

function validateForm() {
	let x = document.forms["myForm2"]["cardNum"].value;
	let valid = 1;
	if(x == null || x == "" || x.length != 16) {
		alert("Card number is required");
		valid = 0;
	}
	let y = document.forms["myForm2"]["cardExp"].value;
	if(y == null || y == "") {
		alert("Card expire is required");
		valid = 0;
	}
	let z = document.forms["myForm2"]["cardCCV"].value;
	if(z == null || z == "" || z.length != 3) {
		alert("Card CCV is invalid");
		valid = 0;
	}
	return (valid == 0) ? false:true;
}

$(document).ready(function() {
            $('.booknow').click(function() {
                var price = 220;
                var numSeat = text.length;
                var total = price*numSeat;
                $('.price-here').val(total);
            });
        });