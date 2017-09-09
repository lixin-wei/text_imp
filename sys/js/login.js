/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-05-17 23:02:37
 * @version $Id$
 */

$(init)
function init()
{

/*signup.htmlk  input error提示框*/
	var error = document.getElementById("pass-error");
	var erroremail = document.getElementById("email-error");
	var errorID = document.getElementById("userID-error");
	
	$("#sign-email").blur(function(){
		var len2 = document.getElementById("sign-email").value.length;
		if(len2 < 1 )
			erroremail.style.visibility = 'visible';
		else
			erroremail.style.visibility = 'hidden';
	});
	$("#sign-email").focus(function(){
			erroremail.style.visibility = 'hidden';
	});
	$("#sign-user").blur(function(){
		var len3 = document.getElementById("sign-user").value.length;
		if(len3 < 1 )
			errorID.style.visibility = 'visible';
		else
			errorID.style.visibility = 'hidden';
	});
	$("#sign-user").focus(function(){
			errorID.style.visibility = 'hidden';
	});
	$("#sign-pass").blur(function(){
		var len = document.getElementById("sign-pass").value.length;
		if(len < 6 )
			error.style.visibility = 'visible';
		else
			error.style.visibility = 'hidden';
	});
	$("#sign-pass").focus(function(){
			error.style.visibility = 'hidden';
	});
}