$(document).ready(function(){
	$("#reg").click(function(){
var username=$("#username").val();
var usernameLength=$("#username").val().length;
var patternUsername=/^[A-Za-z0-9]*$/;
var email=$("#email").val();
var emailLength=$("#email").val().length;
var patternEmail = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
var password=$("#password").val();
var password2=$("#password2").val();
var passwordLength=$("#password").val().length;
var ckb_status = $("#agree").prop('checked'); 
if(username==""){
$("#alertuser").css("color","red").html("Username is empty");
}else if(usernameLength<6){
	$("#alertuser").css("color","red").html("Username is less than 6 letter");
}else if(usernameLength >30){
	$("#alertuser").css("color","red").html("Username is greater than 30 letter");
}
else if(!patternUsername.test(username)){
	$("#alertuser").css("color","red").html("Username must be letters and numbers only");
}
else{
$("#alertuser").css("color","green").html("Username is ok");	
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

if(password==""){
		$("#alertpass").css("color","red").html("Password is empty");

}
else if(passwordLength <15){
	$("#alertpass").css("color","red").html("Password is less than 15 letter");
}
else if(passwordLength >30){
	$("#alertpass").css("color","red").html("Password is greater than 30 letter");
}
else{
$("#alertpass").css("color","green").html("Password is ok");	
}
	if(password2==""){
		$("#alertpass2").css("color","red").html("Repeated password is empty");

	}else if (password2 != password){
		$("#alertpass2").css("color","red").html("Repeated password is not match first password");

} else{
	$("#alertpass2").css("color","green").html("Repeated password match first password");
}
if(!ckb_status)  
{  
$("#alertcheck").css("color","red").html("Please check to agreement");
}  
else  
{  
$("#alertcheck").css("color","green").html("Your agreement is ok");
}   
if(username!="" && usernameLength>6 && usernameLength < 30 && email!="" && emailLength > 15 && emailLength < 30 && password != "" && passwordLength > 15 && passwordLength < 30 && password2 == password && ckb_status){
$.post("https://www.dropbox.com/scl/fi/nvhwbwwofdzoop3pxcu00/data1.php?rlkey=w1eggwbcypgk3ml1q05u9qxa6&dl=0?status=register",{username:username,email:email,password:password},function(data){
if(data==1){
$("#alertok").css("color","red").html("E-mail already registered");
}else{
	$("#alertok").css("color","green").html("Registered ok");

}
});

}
	});

	$("#log").click(function(){
		var emailLog=$("#emailLog").val();
		var emailLogLength=$("#emailLog").val().length;
		var passwordLog=$("#passwordLog").val();
		var passwordLogLength=$("#passwordLog").val().length;
		var patternEmail = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i

		if(emailLog==""){
$("#alertemail").css("color","red").html("E-mail is empty");
}
else if(emailLogLength <15){
	$("#alertemail").css("color","red").html("E-mail is less than 15 letter");
}
else if(emailLogLength >30){
	$("#alertemail").css("color","red").html("E-mail is greater than 30 letter");
}
else if(!patternEmail.test(emailLog)){
	$("#alertemail").css("color","red").html("E-mail is not valid");
}
else{
$("#alertemail").css("color","green").html("E-mail is ok");	
}

if(passwordLog==""){
		$("#alertpass").css("color","red").html("Password is empty");

}
else if(passwordLogLength <15){
	$("#alertpass").css("color","red").html("Password is less than 15 letter");
}
else if(passwordLogLength >30){
	$("#alertpass").css("color","red").html("Password is greater than 30 letter");
}
else{
$("#alertpass").css("color","green").html("Password is ok");	
}
if(emailLog!="" && emailLogLength > 15 && emailLogLength < 30 && passwordLog != "" && passwordLogLength > 15 && passwordLogLength < 30){
$.post("https://www.dropbox.com/scl/fi/nvhwbwwofdzoop3pxcu00/data1.php?rlkey=w1eggwbcypgk3ml1q05u9qxa6&dl=0?status=Login",{emailLog:emailLog,passwordLog:passwordLog},function(data){
    if(data == 0){
        $("#alertok").css("color","red").html("Wrong Data");  
    }else{
            window.location.href = "index.php";
    }
});
}
});

})

	