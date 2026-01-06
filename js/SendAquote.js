      	  $(function(){

$("#RequestAQuote").click(function(){
		
		var fullname=$("#form-floating-1").val();
		var fullnameLength=$("#form-floating-1").val().length;
		var patternfullname=/^[A-Za-z]*$/;
		var phone=$("#form-floating-2").val();
		var phoneLength=$("#form-floating-2").val().length;
		var patternphone=/^[0-9]*$/;
		var email=$("#form-floating-3").val();
				var emailLength=$("#form-floating-3").val().length;
var patternEmail = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var message=$("#form-floating-4").val();
		var messageLength=$("#form-floating-4").val().length;
if(fullname==""){
$("#alertfullname").css("color","red").html("Fullname is empty");
}else if(fullnameLength<6){
	$("#alertfullname").css("color","red").html("Fullname is less than 6 letter");
}else if(fullnameLength >30){
	$("#alertfullname").css("color","red").html("Fullname is greater than 30 letter");
}
else if(!patternfullname.test(fullname)){
	$("#alertfullname").css("color","red").html("Fullname must be letters only");
}
else{
$("#alertfullname").css("color","green").html("Fullname is ok");	
} 
if(phone==""){
$("#alertphone").css("color","red").html("Phone is empty");
}else if(phoneLength<8){
	$("#alertphone").css("color","red").html("Phone is less than 8 letter");
}else if(phoneLength >30){
	$("#alertphone").css("color","red").html("Phone is greater than 30 letter");
}
else if(!patternphone.test(phone)){
	$("#alertphone").css("color","red").html("Phone must be numbers only");
}
else{
$("#alertphone").css("color","green").html("Phone is ok");	
} 

if(email==""){
$("#alertemail").css("color","red").html("E-mail is empty");
}
else if(emailLength <15){
	$("#alertemail").css("color","red").html("E-mail is less than 15 letter");
}
else if(emailLength >30){
	$("#alertemail").css("color","red").html("E-mail is greater than 30 letter");
}
else if(!patternEmail.test(email)){
	$("#alertemail").css("color","red").html("E-mail is not valid");
}
else{
$("#alertemail").css("color","green").html("E-mail is ok");	
}
if(message==""){
$("#alertMessage").css("color","red").html("Message is empty");
}else if(messageLength<150){
	$("#alertMessage").css("color","red").html("Message is less than 150 letter");
}else if(messageLength >5000){
	$("#alertMessage").css("color","red").html("Message is greater than 5000 letter");
}
else{
$("#alertMessage").css("color","green").html("Message is ok");	
}
if(fullname!="" && fullnameLength>6 && fullnameLength < 30 && phone!="" && phoneLength>8 && phoneLength < 30 && email!="" && emailLength > 15 && emailLength < 30 && message!="" && messageLength>150 && messageLength < 5000 ){
		$.post("@inc/data.php?status=sendAquote",{fullname:fullname,phone:phone,email:email,message:message},function(data){
alert("success");
});
}
	});
	$("#Subscribe").click(function(){
		var mail=$("#email_subscribe").val();
		var emailLength=$("#email_subscribe").val().length;
var patternEmail = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
if(mail==""){
$("#alertemailSubscribe").css("color","red").html("E-mail is empty");
}
else if(emailLength <15){
	$("#alertemailSubscribe").css("color","red").html("E-mail is less than 15 letter");
}
else if(emailLength >50){
	$("#alertemailSubscribe").css("color","red").html("E-mail is greater than 30 letter");
}
else if(!patternEmail.test(mail)){
	$("#alertemailSubscribe").css("color","red").html("E-mail is not valid");
}
else{
$("#alertemailSubscribe").css("color","green").html("E-mail is ok");	
}

if(mail!="" && emailLength > 15 && emailLength < 50 ){
		$.post("@inc/data.php?status=subscribe",{mail:mail},function(data){
alert("success");
});
}
	});
	$("#SaveP").click(function(){
				var phone=$("#Phone").val();
		var phoneLength=$("#Phone").val().length;
		var patternphone=/^[0-9]*$/;
				var pass=$("#pass").val();

				if(phone==""){
$("#alertphone").css("color","red").html("Phone is empty");
}else if(phoneLength<8){
	$("#alertphone").css("color","red").html("Phone is less than 8 letter");
}else if(phoneLength >11){
	$("#alertphone").css("color","red").html("Phone is greater than 11 letter");
}
else if(!patternphone.test(phone)){
	$("#alertphone").css("color","red").html("Phone must be numbers only");
}	
else{
$("#alertphone").css("color","green").html("Phone is ok");	
$.post("@inc/data.php?status=editProfileDataNormal",{phone:phone,pass:pass},function(data){
	alert("Success");
});
}
	});
		  });