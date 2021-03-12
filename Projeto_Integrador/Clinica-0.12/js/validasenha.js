$(document).ready(function(){

$("#txtSenhaConfirma").on('blur',function(){
	
	var senha1 = $('#txtSenha').val();
	var senha2 = $('#txtSenhaConfirma').val();
	
	if(senha1 == senha2) {
	
	} else {
		 $('#txtSenhaConfirma').val('');
	}


});


	
});