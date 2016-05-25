
    function validate_email(str) {    
      apos = str.indexOf("@");
      dotpos = str.lastIndexOf(".");
      if(apos<1||dotpos-apos<2) {
          return false;
      } else {
          return true;
      }
    }
    function checkChars(str) {
        var iChars = "!@#$%^&*()+=-[]';,./{}|\"\\:<>?~_"; 
        for(i=0; i<str.length; i++) {
            if(iChars.indexOf(str.charAt(i)) != -1) {
              return false;
            }
        }
        return true;
    }
    


/* validation for login*/

function loginValidation(){
	var snwem = document.getElementById('email');
	var snwpass = document.getElementById('password'); 

	if(snwem.value == ''){
		alert('Please enter your email address!.');
		snwem.focus();
		return false;
	}
	else if(!validate_email(snwem.value)){
        alert("Plaese enter your valid email address.");
        snwem.focus();
        return false;
    }
	else if(snwpass.value == ''){
		alert('Please enter your password!.');
		snwpass.focus();
		return false;
	}
	else if (snwpass.value.length < 5){
		alert('Please enter your valide password!.');
		snwpass.focus();
		return false;
	}
	else {
		return true;
	}
}


/* registration validation */

function regValidation(){
	var fname = document.getElementById('first_name');
	var lname = document.getElementById('last_name');
	var uname = document.getElementById('user_name');
	var email = document.getElementById('email');
	var pass = document.getElementById('password');
	var confirm_pass = document.getElementById('password_confirm');
	var chk = document.getElementById('t_and_c');

	if(fname.value == ''){
		alert('Please enter your first name!.');
		fname.focus();
		return false;
	}
	if(!checkChars(fname.value)){
		alert('Special symbol not allow');
		fname.focus();
		return false;
	}
	else if(lname.value == ''){
		alert('Please enter your last name!.');
		lname.focus();
		return false;
	}
	if(!checkChars(lname.value)){
		alert('Special symbol not allow');
		lname.focus();
		return false;
	}
	else if(uname.value == ''){
		alert('Please enter your profile name!.');
		uname.focus();
		return false;
	}
	if(!checkChars(uname.value)){
		alert('Special symbol not allow');
		uname.focus();
		return false;
	}
	else if(email.value == ''){
		alert('Please enter your email!.');
		email.focus();
		return false;
	}
	else if(!validate_email(email.value)){
        alert("Plaese enter your valid email address.");
        email.focus();
        return false;
    }
	else if(pass.value == ''){
		alert('Please enter your password!.');
		pass.focus();
		return false;
	}
	else if(pass.value.length < 5){
		alert('Password must be greater then 4 charecter!.');
		confirm_pass.focus();
		return false;
	}
	
	else if(confirm_pass.value == ''){
		alert('Please enter your confirm password!.');
		confirm_pass.focus();
		return false;
	}
	else if(pass.value != confirm_pass.value){
		alert('Confirm password did\'nt match !.');
		confirm_pass.focus();
		return false;
	}
	
	else{
		return true;
	}
}

