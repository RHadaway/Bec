
window.onload = init;

var $ = function(id){
	return document.getElementById(id);
}

function init(){
	$("name").onblur = validateField;
	$("cemail").onblur = validateEmail;
}

function validateForm(){
	if(validateField() && validateEmail()){
		return true;
	}
	else{
		
		return false;
	}
}
function validateField() {
	
	if ($('name').value.length > 0) {
		$('name').className = "";
		return true;
		} // End if
	else {
		$('name').className = "error";
		$('nameerror').innerHTML="* Please enter name.";
		return false;
		} // End else
	}
function validateEmail() {
	var field = $("cemail");
	
	if (testEmail(field.value)) {
		field.className = "";
		return true;
		} // End if
	else {
		field.className = "error";
		return false;

		} // End else
	} // End validateEmail
	
function testEmail(email) {
	var emailRegEx = /^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i
	
	return emailRegEx.test(email);
	}//end testEmail



