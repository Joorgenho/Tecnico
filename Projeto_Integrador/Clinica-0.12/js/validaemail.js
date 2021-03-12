$(document).ready(function(){

$("#txtEmailConfirma").on('blur',function(){
	
	var mail1 = $('#txtEmail').val();
	var mail2 = $('#txtEmailConfirma').val();
	
	if(mail1 == mail2) {
	
	} else {
		 $('#txtEmailConfirma').val('');
	}


});


	
});