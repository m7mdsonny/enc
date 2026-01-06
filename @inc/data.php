<?php
include __DIR__ . "/conn.php";
$getstate=$_GET['status'];
if($getstate=="register"){
$username=strip_tags($_POST['username']);
$email=strip_tags($_POST['email']);
$password=strip_tags(sha1(md5(md5($_POST['password']))));
$code=sha1(rand(000000,99999999999999));
$passcode=sha1(rand(000000,99999999999999));
$select=mysqli_query($conn,"select * from member where member_mail='$email'");
$fetch=mysqli_num_rows($select);
if($fetch == "0"){
$insert=mysqli_query($conn,"insert into member (member_name,member_password,member_mail,member_code,member_passcode)Values('$username','$password','$email','$code','$passcode')");
echo $fetch;
}else{
echo $fetch;
}
}
if($getstate=="Login"){
	session_start();

$emailLog = strip_tags($_POST['emailLog']);
$pass=$_POST['passwordLog'];
$passwordLog = strip_tags(sha1(md5(md5($pass))));

if ($emailLog != "" && $pass != ""){

    $sql_query = "select * from member where (member_mail='".$emailLog."' AND member_password='".$passwordLog."')";
    $result = mysqli_query($conn,$sql_query);
	while($fetch=enc_fetch_assoc($result)){
$num=mysqli_num_rows($result);
$mail=$fetch['member_mail'];
$member_name=$fetch['member_name'];
$member_passcode=$fetch['member_passcode'];
    if($num > 0){
        $_SESSION['email'] = $mail;
        $_SESSION['member_name'] = $member_name;
        $_SESSION['member_passcode'] = $member_passcode;
echo "1";    
}else{
echo "0";    
}
}
}
}
if($getstate=="editAboutTitleIndex"){
		session_start();

$txtAboutTitle=addslashes($_POST['txtAboutTitle']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txtAboutTitle."' ,Manager_mail='".$membermail."' where (post_code='About Introduction Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Introduction Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutTitle=$fetch['post'];
	echo $fetchAboutTitle;

}

if($getstate=="editAboutTitleDescIndex"){
		session_start();

$txtAboutTitleDesc=addslashes($_POST['txtAboutTitleDesc']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txtAboutTitleDesc."' ,Manager_mail='".$membermail."' where (post_code='About Introduction Description' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Introduction Description' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutTitleDescriotion=$fetch['post'];
	echo $fetchAboutTitleDescriotion;

}
if($getstate=="editAboutTitle1Index"){
		session_start();

$txtAboutTitle1=addslashes($_POST['txtAboutTitle1']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txtAboutTitle1."' ,Manager_mail='".$membermail."' where (post_code='About Title 1' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Title 1' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutTitle1=$fetch['post'];
	echo $fetchAboutTitle1;

}

if($getstate=="editAboutTitleDesc1Index"){
		session_start();

$txtTitleAbDesc1=addslashes($_POST['txtTitleAbDesc1']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txtTitleAbDesc1."' ,Manager_mail='".$membermail."' where (post_code='About Title Desc 1' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Title Desc 1' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutTitleDesc1=$fetch['post'];
	echo $fetchAboutTitleDesc1;

}

if($getstate=="editAboutTitle2Index"){
		session_start();

$txtAboutTitle2=addslashes($_POST['txtAboutTitle2']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txtAboutTitle2."' ,Manager_mail='".$membermail."' where (post_code='About Title 2' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Title 2' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutTitle2=$fetch['post'];
	echo $fetchAboutTitle2;

}

if($getstate=="editAboutTitleDesc2Index"){
		session_start();

$txtTitleAbDesc2=addslashes($_POST['txtTitleAbDesc2']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txtTitleAbDesc2."' ,Manager_mail='".$membermail."' where (post_code='About Title Desc 2' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Title Desc 2' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutTitleDesc2=$fetch['post'];
	echo $fetchAboutTitleDesc2;

}

if($getstate=="editAboutTitle3Index"){
		session_start();

$txtAboutTitle3=addslashes($_POST['txtAboutTitle3']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txtAboutTitle3."' ,Manager_mail='".$membermail."' where (post_code='About Title 3' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Title 3' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutTitle3=$fetch['post'];
	echo $fetchAboutTitle3;

}

if($getstate=="editAboutTitleDesc3Index"){
		session_start();

$txtTitleAbDesc3=addslashes($_POST['txtTitleAbDesc3']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txtTitleAbDesc3."' ,Manager_mail='".$membermail."' where (post_code='About Title Desc 3' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Title Desc 3' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutTitleDesc3=$fetch['post'];
	echo $fetchAboutTitleDesc3;

}


if($getstate=="editServicesIndex"){
		session_start();

$txt_Services_caption=addslashes($_POST['txt_Services_caption']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Services_caption."' ,Manager_mail='".$membermail."' where (post_code='Index Services Caption' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Services Caption' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesCaption=$fetch['post'];
	echo $fetchServicesCaption;

}


if($getstate=="editServicesIndexTitle1"){
		session_start();

$txt_Services_Title1=addslashes($_POST['txt_Services_Title1']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Services_Title1."' ,Manager_mail='".$membermail."' where (post_code='Index Services Title 1' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Services Title 1' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesTitle1=$fetch['post'];
	echo $fetchServicesTitle1;

}

if($getstate=="editServicesDesc1Index"){
		session_start();

$txt_Services_Desc1=addslashes($_POST['txt_Services_Desc1']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Services_Desc1."' ,Manager_mail='".$membermail."' where (post_code='Index Services Desc1' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Services Desc1' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesDesc1=$fetch['post'];
	echo $fetchServicesDesc1;

}

if($getstate=="editServicesIndexTitle2"){
		session_start();

$txt_Services_Title2=addslashes($_POST['txt_Services_Title2']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Services_Title2."' ,Manager_mail='".$membermail."' where (post_code='Index Services Title 2' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Services Title 2' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesTitle2=$fetch['post'];
	echo $fetchServicesTitle2;

}

if($getstate=="editServicesDesc2Index"){
		session_start();

$txt_Services_Desc2=addslashes($_POST['txt_Services_Desc2']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Services_Desc2."' ,Manager_mail='".$membermail."' where (post_code='Index Services Desc2' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Services Desc2' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesDesc2=$fetch['post'];
	echo $fetchServicesDesc2;

}

if($getstate=="editServicesIndexTitle3"){
		session_start();

$txt_Services_Title3=addslashes($_POST['txt_Services_Title3']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Services_Title3."' ,Manager_mail='".$membermail."' where (post_code='Index Services Title 3' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Services Title 3' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesTitle3=$fetch['post'];
	echo $fetchServicesTitle3;

}

if($getstate=="editServicesDesc3Index"){
		session_start();

$txt_Services_Desc3=addslashes($_POST['txt_Services_Desc3']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Services_Desc3."' ,Manager_mail='".$membermail."' where (post_code='Index Services Desc3' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Services Desc3' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesDesc3=$fetch['post'];
	echo $fetchServicesDesc3;

}

if($getstate=="editServicesIndexTitle4"){
		session_start();

$txt_Services_Title4=addslashes($_POST['txt_Services_Title4']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Services_Title4."' ,Manager_mail='".$membermail."' where (post_code='Index Services Title 4' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Services Title 4' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesTitle4=$fetch['post'];
	echo $fetchServicesTitle4;

}

if($getstate=="editServicesDesc4Index"){
		session_start();

$txt_Services_Desc4=addslashes($_POST['txt_Services_Desc4']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Services_Desc4."' ,Manager_mail='".$membermail."' where (post_code='Index Services Desc4' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Services Desc4' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesDesc4=$fetch['post'];
	echo $fetchServicesDesc4;

}

if($getstate=="editFeaturesIndexTitle4"){
		session_start();

$txt_Features_Title=addslashes($_POST['txt_Features_Title']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Title."' ,Manager_mail='".$membermail."' where (post_code='Index Fearures Introduction' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Index Fearures Introduction' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesTitle=$fetch['post'];
	echo $fetchFeaturesTitle;

}

if($getstate=="editFeaturesTitle1"){
		session_start();

$txt_Features_Title1=addslashes($_POST['txt_Features_Title1']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Title1."' ,Manager_mail='".$membermail."' where (post_code='Features Title1' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Title1' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesTitle1=$fetch['post'];
	echo $fetchFeaturesTitle1;

}

if($getstate=="editFeaturesDesc1Index"){
		session_start();

$txt_Features_Desc1=addslashes($_POST['txt_Features_Desc1']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Desc1."' ,Manager_mail='".$membermail."' where (post_code='Features Desc1' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Desc1' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesDesc1=$fetch['post'];
	echo $fetchFeaturesDesc1;

}

if($getstate=="editFeaturesTitle2"){
		session_start();

$txt_Features_Title2=addslashes($_POST['txt_Features_Title2']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Title2."' ,Manager_mail='".$membermail."' where (post_code='Features Title2' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Title2' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesTitle2=$fetch['post'];
	echo $fetchFeaturesTitle2;

}

if($getstate=="editFeaturesDesc2Index"){
		session_start();

$txt_Features_Desc2=addslashes($_POST['txt_Features_Desc2']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Desc2."' ,Manager_mail='".$membermail."' where (post_code='Features Desc2' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Desc2' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesDesc2=$fetch['post'];
	echo $fetchFeaturesDesc2;

}

if($getstate=="editFeaturesTitle3"){
		session_start();

$txt_Features_Title3=addslashes($_POST['txt_Features_Title3']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Title3."' ,Manager_mail='".$membermail."' where (post_code='Features Title3' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Title3' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesTitle3=$fetch['post'];
	echo $fetchFeaturesTitle3;

}

if($getstate=="editFeaturesDesc3Index"){
		session_start();

$txt_Features_Desc3=addslashes($_POST['txt_Features_Desc3']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Desc3."' ,Manager_mail='".$membermail."' where (post_code='Features Desc3' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Desc3' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesDesc3=$fetch['post'];
	echo $fetchFeaturesDesc3;

}

if($getstate=="editFeaturesDesc4Index"){
		session_start();

$txt_Features_Desc4=addslashes($_POST['txt_Features_Desc4']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Desc4."' ,Manager_mail='".$membermail."' where (post_code='Features Desc4' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Desc4' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesDesc4=$fetch['post'];
	echo $fetchFeaturesDesc4;

}

if($getstate=="editFeaturesTitle5"){
		session_start();

$txt_Features_Title5=addslashes($_POST['txt_Features_Title5']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Title5."' ,Manager_mail='".$membermail."' where (post_code='Features Title5' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Title5' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesTitle5=$fetch['post'];
	echo $fetchFeaturesTitle5;

}

if($getstate=="editFeaturesDesc5Index"){
		session_start();

$txt_Features_Desc5=addslashes($_POST['txt_Features_Desc5']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Desc5."' ,Manager_mail='".$membermail."' where (post_code='Features Desc5' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Desc5' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesDesc5=$fetch['post'];
	echo $fetchFeaturesDesc5;

}
if($getstate=="editFeaturesTitle6"){
		session_start();

$txt_Features_Title6=addslashes($_POST['txt_Features_Title6']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Title6."' ,Manager_mail='".$membermail."' where (post_code='Features Title6' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Title6' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesTitle6=$fetch['post'];
	echo $fetchFeaturesTitle6;

}

if($getstate=="editFeaturesDesc6Index"){
		session_start();

$txt_Features_Desc6=addslashes($_POST['txt_Features_Desc6']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Desc6."' ,Manager_mail='".$membermail."' where (post_code='Features Desc6' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Desc6' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesDesc6=$fetch['post'];
	echo $fetchFeaturesDesc6;

}

if($getstate=="editFeaturesTitle7"){
		session_start();

$txt_Features_Title7=addslashes($_POST['txt_Features_Title7']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Title7."' ,Manager_mail='".$membermail."' where (post_code='Features Title7' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Title7' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesTitle7=$fetch['post'];
	echo $fetchFeaturesTitle7;

}
if($getstate=="editFeaturesDesc7Index"){
		session_start();

$txt_Features_Desc7=addslashes($_POST['txt_Features_Desc7']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Features_Desc7."' ,Manager_mail='".$membermail."' where (post_code='Features Desc7' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Features Desc7' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFeaturesDesc7=$fetch['post'];
	echo $fetchFeaturesDesc7;

}

if($getstate=="editQuoteTitle1"){
		session_start();

$txt_Quote_Title1=addslashes($_POST['txt_Quote_Title1']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Quote_Title1."' ,Manager_mail='".$membermail."' where (post_code='Quote Index Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Quote Index Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchQuoteTitle1=$fetch['post'];
	echo $fetchQuoteTitle1;

}

if($getstate=="editFQuoteDesc1Index"){
		session_start();

$txt_Quote_Desc1=addslashes($_POST['txt_Quote_Desc1']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Quote_Desc1."' ,Manager_mail='".$membermail."' where (post_code='Quote Index Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Quote Index Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchQuoteDesc1=$fetch['post'];
	echo $fetchQuoteDesc1;

}

if($getstate=="sendAquote"){
		session_start();

$fullname=addslashes($_POST['fullname']);
$phone=addslashes($_POST['phone']);
$email=addslashes($_POST['email']);
$message=addslashes($_POST['message']);
$membermail=$_SESSION['email'];
$insertAQuote=mysqli_query($conn,"insert into quote (quote_fullname,quote_phone,quote_email,quote_message)Values('$fullname','$phone','$email','$message')");
$to = "mohamedhany4dev@gmail.com";
$subject = "Quote E-mail";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Fullname</th>
<th>Phone</th>
<th>E-mail</th>
<th>Message</th>
</tr>
<tr>
<td>'".$fullname."'</td>
<td>'".$phone."'</td>
<td>'".$email."'</td>
<td>'".$message."'</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

}

if($getstate=="editOurTeamIntro"){
		session_start();

$txt_Ourteam_Intro=addslashes($_POST['txt_Ourteam_Intro']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Ourteam_Intro."' ,Manager_mail='".$membermail."' where (post_code='Ourteam Intro' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Ourteam Intro' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchOurTeamIntro=$fetch['post'];
	echo $fetchOurTeamIntro;

}

if($getstate=="editOurTeamTitle"){
		session_start();

$txt_Ourteam_Title=addslashes($_POST['txt_Ourteam_Title']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Ourteam_Title."' ,Manager_mail='".$membermail."' where (post_code='OurTeam Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='OurTeam Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchOurTeamTitle=$fetch['post'];
	echo $fetchOurTeamTitle;

}

if($getstate=="editOurTeamDesc"){
		session_start();

$txt_OurTeam_Desc=addslashes($_POST['txt_OurTeam_Desc']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_OurTeam_Desc."' ,Manager_mail='".$membermail."' where (post_code='OurTeam Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='OurTeam Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchOurTeamDesc=$fetch['post'];
	echo $fetchOurTeamDesc;

}

if($getstate=="editOurClientTitle"){
		session_start();

$txt_Ourclient_Title=addslashes($_POST['txt_Ourclient_Title']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Ourclient_Title."' ,Manager_mail='".$membermail."' where (post_code='OurClient Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='OurClient Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchOurClientTitle=$fetch['post'];
	echo $fetchOurClientTitle;

}

if($getstate=="editOurClientDesc"){
		session_start();

$txt_OurClient_Desc=addslashes($_POST['txt_OurClient_Desc']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_OurClient_Desc."' ,Manager_mail='".$membermail."' where (post_code='OurClient Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='OurClient Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchOurClientDesc=$fetch['post'];
	echo $fetchOurClientDesc;

}

if($getstate=="editNewsTitle"){
		session_start();

$txt_News_Title=addslashes($_POST['txt_News_Title']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_News_Title."' ,Manager_mail='".$membermail."' where (post_code='News Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='News Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchNewstTitle=$fetch['post'];
	echo $fetchNewstTitle;

}

if($getstate=="editFooterTitle"){
		session_start();

$txt_Footer_Title=addslashes($_POST['txt_Footer_Title']);
$membermail=$_SESSION['email'];
$updateAboutTitle=mysqli_query($conn,"update posts set post='".$txt_Footer_Title."' ,Manager_mail='".$membermail."' where (post_code='Footer Intro' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Footer Intro' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchFootertTitle=$fetch['post'];
	echo $fetchFootertTitle;

}

if($getstate=="subscribe"){
	$mail=addslashes($_POST['mail']);

$insertSubscribe=mysqli_query($conn,"insert into subscribe (subscribe_mail)Values('$mail')");
}
if($getstate=="editProfileData"){
			session_start();
$membermail=$_SESSION['email'];

	$PhonePersonal=addslashes($_POST['PhonePersonal']);
	$Email=addslashes($_POST['Email']);
	$passPersonal=strip_tags(sha1(md5(md5($_POST['passPersonal']))));
if(!empty($passPersonal)){
$insertSubscribe=mysqli_query($conn,"update member set member_phone='".$PhonePersonal."',member_password='".$passPersonal."',admin_mail='".$Email."' where (member_mail='".$membermail."')");
}else{
$insertSubscribe=mysqli_query($conn,"update member set member_phone='".$PhonePersonal."',admin_mail='".$Email."' where (member_mail='".$membermail."')");

}
}

if($getstate=="editProfileDataNormal"){
			session_start();
$membermail=$_SESSION['email'];

	$Phone=addslashes($_POST['phone']);
	$Email=addslashes($_POST['Email']);
	$pass=strip_tags(sha1(md5(md5($_POST['pass']))));
if(!empty($pass)){
$insertSubscribe=mysqli_query($conn,"update member set member_phone='".$Phone."',member_password='".$pass."' where (member_mail='".$membermail."')");
}else{
$insertSubscribe=mysqli_query($conn,"update member set member_phone='".$Phone."' where (member_mail='".$membermail."')");

}
}
if($getstate=="addSocialMedia"){
			session_start();
$membermail=$_SESSION['email'];
	$EmailUser=addslashes($_POST['EmailUser']);
	$Phone=addslashes($_POST['Phone']);
	$twitter=addslashes($_POST['twitter']);
	$facebook=addslashes($_POST['facebook']);
	$instagram=addslashes($_POST['instagram']);
	$linkedin=addslashes($_POST['linkedin']);
	$whatsapp=addslashes($_POST['whatsapp']);
	$address=addslashes($_POST['address']);
$insertSubscribe=mysqli_query($conn,"update socialmedia set Social_phone='".$Phone."',Social_email='".$EmailUser."',Social_twitter='".$twitter."',Social_facebook='".$facebook."',Social_instegram='".$instagram."',Social_linkedin='".$linkedin."',Social_Whatsapp='".$whatsapp."',social_address='".$address."' where (social_id='1')");

}
if($getstate=="addslideshow"){
	if(isset($_FILES['file']['name'])){
		$SlideTitle=$_POST['SlideshowTitle'];
		$SlideCaption=$_POST['SlideshowCaption'];
function resizeImage($resourceType, $image_width, $image_height, $resizeWidth, $resizeHeight)
{
    // $resizeWidth = 1024;
    //$resizeHeight = 720;
    $imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
    imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $image_width, $image_height);
    return $imageLayer;
}
 $new_width = 1400;
        $new_height = 788;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = time();
        $uploadPath = "../img/slideshow/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];
		
		switch ($uploadImageType)
        {
            case IMAGETYPE_JPEG:
                $resourceType = imagecreatefromjpeg($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,1400,788);

				imagejpeg($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
            break;

            case IMAGETYPE_GIF:
                $resourceType = imagecreatefromgif($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,1400,788);
				imagegif($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
            break;

            case IMAGETYPE_PNG:
                $resourceType = imagecreatefrompng($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                   $imageR=imageresolution($imageLayer,1400,788);
				imagepng($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
            break;

            case IMAGETYPE_JPG:
                $resourceType = imagecreatefrompng($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,1400,788);
				imagepng($imageR, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
            break;

            default:
                $imageProcess = 0;
            break;
        }
		        $uploadPathSql ="img/slideshow/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$insertSubscribe=mysqli_query($conn,"insert into slideshow (slide_img,slide_title,slide_caption)Values('$fileSql','$SlideTitle','$SlideCaption')");

        $imageProcess = 1;

    }
	/* Getting file name */
	/*$filename = $_FILES['file']['name'];
	$SlideshowTitle1=$_POST['SlideshowTitle1'];
	$SlideshowCaption1=$_POST['SlideshowCaption1'];

	$location = "../img/slideshow/".$filename;
	$location .=imageresolution($location, 1080, 720);
	$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
	$imageFileType = strtolower($imageFileType);

	/* Valid extensions */
	/*$valid_extensions = array("jpe","jpg","jpeg","png","bmp","webp","svg");

	$response = 0;
	/* Check file extension */
	/*if(in_array(strtolower($imageFileType), $valid_extensions)) {
	   	/* Upload file */
	  /* 	if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
	     	$response = $location;
			
				echo $response;

	   	}
	}

	exit;*/
}
if($getstate=="changefeaturesimage"){
				session_start();

	if(isset($_FILES['file']['name'])){
function resizeImage($resourceType, $image_width, $image_height, $resizeWidth, $resizeHeight)
{
    // $resizeWidth = 1024;
    //$resizeHeight = 720;
    $imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
    imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $image_width, $image_height);
    return $imageLayer;
}
 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = time();
        $uploadPath = "../img/post_features/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];

		switch ($uploadImageType)
        {
            case IMAGETYPE_JPEG:
                $resourceType = imagecreatefromjpeg($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,800,600);

				imagejpeg($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/post_features/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Features_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Features_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";

            break;

            case IMAGETYPE_GIF:
                $resourceType = imagecreatefromgif($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,800,600);
				imagegif($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/post_features/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Features_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Features_image','$EmailUser','74747')");

        $imageProcess = 1;
										echo "Success changed";

            break;

            case IMAGETYPE_PNG:
                $resourceType = imagecreatefrompng($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                   $imageR=imageresolution($imageLayer,800,600);
				imagepng($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/post_features/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Features_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Features_image','$EmailUser','74747')");

        $imageProcess = 1;
										echo "Success changed";

            break;

            case "IMAGETYPE_JPG":
                $resourceType = imagecreatefrompng($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,800,600);
				imagepng($imageR, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/post_features/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Features_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Features_image','$EmailUser','74747')");

        $imageProcess = 1;
										echo "Success changed";

            break;
    
            default:
						echo "Invalid format";

        $imageProcess = 0;

            break;
        
		        
		}
    }
}

if($getstate=="changeQuoteimage"){
				session_start();

	if(isset($_FILES['file']['name'])){
function resizeImage($resourceType, $image_width, $image_height, $resizeWidth, $resizeHeight)
{
    // $resizeWidth = 1024;
    //$resizeHeight = 720;
    $imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
    imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $image_width, $image_height);
    return $imageLayer;
}
 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = time();
        $uploadPath = "../img/post_quote/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];

		switch ($uploadImageType)
        {
            case IMAGETYPE_JPEG:
                $resourceType = imagecreatefromjpeg($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,800,600);

				imagejpeg($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/post_quote/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Quote_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Quote_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";

            break;

            case IMAGETYPE_GIF:
                $resourceType = imagecreatefromgif($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,800,600);
				imagegif($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/post_quote/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Quote_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Quote_image','$EmailUser','74747')");

        $imageProcess = 1;
										echo "Success changed";

            break;

            case IMAGETYPE_PNG:
                $resourceType = imagecreatefrompng($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                   $imageR=imageresolution($imageLayer,800,600);
				imagepng($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/post_quote/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Quote_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Quote_image','$EmailUser','74747')");

        $imageProcess = 1;
										echo "Success changed";

            break;

            case "IMAGETYPE_JPG":
                $resourceType = imagecreatefrompng($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,800,600);
				imagepng($imageR, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/post_quote/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Quote_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Quote_image','$EmailUser','74747')");

        $imageProcess = 1;
										echo "Success changed";

            break;
    
            default:
						echo "Invalid format";

        $imageProcess = 0;

            break;
        
		        
		}
    }
}


if($getstate=="changeTeamimage"){
				session_start();

	if(isset($_FILES['file']['name'])){
function resizeImage($resourceType, $image_width, $image_height, $resizeWidth, $resizeHeight)
{
    // $resizeWidth = 1024;
    //$resizeHeight = 720;
    $imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
    imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $image_width, $image_height);
    return $imageLayer;
}
 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = time();
        $uploadPath = "../img/teamgroup/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];

		switch ($uploadImageType)
        {
            case IMAGETYPE_JPEG:
                $resourceType = imagecreatefromjpeg($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,800,600);

				imagejpeg($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/teamgroup/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Teamgroup_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Teamgroup_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";

            break;

            case IMAGETYPE_GIF:
                $resourceType = imagecreatefromgif($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,800,600);
				imagegif($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/teamgroup/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Teamgroup_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Teamgroup_image','$EmailUser','74747')");

        $imageProcess = 1;
										echo "Success changed";

            break;

            case IMAGETYPE_PNG:
                $resourceType = imagecreatefrompng($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                   $imageR=imageresolution($imageLayer,800,600);
				imagepng($imageLayer, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/teamgroup/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Teamgroup_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Teamgroup_image','$EmailUser','74747')");

        $imageProcess = 1;
										echo "Success changed";

            break;

            case "IMAGETYPE_JPG":
                $resourceType = imagecreatefrompng($fileName);
                $imageLayer = resizeImage($resourceType, $sourceImageWidth, $sourceImageHeight, $new_width, $new_height);
                $imageR=imageresolution($imageLayer,800,600);
				imagepng($imageR, $uploadPath . "thump_" . $resizeFileName . '.' . $fileExt);
				$uploadPathSql ="img/teamgroup/";
$fileSql=$uploadPathSql. "thump_" .$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Teamgroup_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Teamgroup_image','$EmailUser','74747')");

        $imageProcess = 1;
										echo "Success changed";

            break;
    
            default:
						echo "Invalid format";

        $imageProcess = 0;

            break;
        
		        
		}
    }
}
/* About Page*/
if($getstate=="editAboutPageWelcome"){
		session_start();

$txt_AboutPage_Welcome_Title=addslashes($_POST['txt_AboutPage_Welcome']);
$membermail=$_SESSION['email'];
$updateAboutPageWelcomeTitle=mysqli_query($conn,"update posts set post='".$txt_AboutPage_Welcome_Title."' ,Manager_mail='".$membermail."' where (post_code='About Page Welcome To' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Page Welcome To ' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageWelcomeTitle=$fetch['post'];
	echo $fetchAboutPageWelcomeTitle;

}

if($getstate=="editAboutPageWelcomeEnc"){
		session_start();

$txt_AboutPage_Welcome_ENC=addslashes($_POST['txt_AboutPage_Welcome_ENC']);
$membermail=$_SESSION['email'];
$updateAboutPageWelcomeTitle=mysqli_query($conn,"update posts set post='".$txt_AboutPage_Welcome_ENC."' ,Manager_mail='".$membermail."' where (post_code='ENC About Page' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='ENC About Page' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageWelcomeTitleEnc=$fetch['post'];
	echo $fetchAboutPageWelcomeTitleEnc;

}

if($getstate=="editAboutPageWelcomeEncTitle"){
		session_start();

$txt_AboutPage_Welcome_ENC_Title=addslashes($_POST['txt_AboutPage_Welcome_ENC_Title']);
$membermail=$_SESSION['email'];
$updateAboutPageWelcomeTitle1=mysqli_query($conn,"update posts set post='".$txt_AboutPage_Welcome_ENC_Title."' ,Manager_mail='".$membermail."' where (post_code='Welcome About Page Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Welcome About Page Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageWelcomeTitle1=$fetch['post'];
	echo $fetchAboutPageWelcomeTitle1;

}

if($getstate=="editAboutPageWelcomeEncDesc"){
		session_start();

$txt_AboutPage_Welcome_ENC_Desc=addslashes($_POST['txt_AboutPage_Welcome_ENC_Desc']);
$membermail=$_SESSION['email'];
$updateAboutPageWelcomeDesc1=mysqli_query($conn,"update posts set post='".$txt_AboutPage_Welcome_ENC_Desc."' ,Manager_mail='".$membermail."' where (post_code='AboutPage Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='AboutPage Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageWelcomeDesc1=$fetch['post'];
	echo $fetchAboutPageWelcomeDesc1;

}

if($getstate=="editAboutPageBusinessTitle"){
		session_start();

$txt_AboutPage_Business_Title=addslashes($_POST['txt_AboutPage_Business_Title']);
$membermail=$_SESSION['email'];
$updateAboutPageBusinessTitle=mysqli_query($conn,"update posts set post='".$txt_AboutPage_Business_Title."' ,Manager_mail='".$membermail."' where (post_code='About Page Business Planning Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='About Page Business Planning Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageBusinessTitle=$fetch['post'];
	echo $fetchAboutPageBusinessTitle;

}

if($getstate=="editAboutPageBusinessDesc"){
		session_start();

$txt_AboutPage_Business_Desc=addslashes($_POST['txt_AboutPage_Business_Desc']);
$membermail=$_SESSION['email'];
$updateAboutPageBusinessDesc=mysqli_query($conn,"update posts set post='".$txt_AboutPage_Business_Desc."' ,Manager_mail='".$membermail."' where (post_code='Business Desc About Page' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Business Desc About Page' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageBusinessDesc=$fetch['post'];
	echo $fetchAboutPageBusinessDesc;

}

if($getstate=="editAboutPageFinancialAnalaysisTitle"){
		session_start();

$txt_AboutPage_FinalAnalaysis_Title=addslashes($_POST['txt_AboutPage_FinalAnalaysis_Title']);
$membermail=$_SESSION['email'];
$updateAboutPageFinancialAnalaysisTitle=mysqli_query($conn,"update posts set post='".$txt_AboutPage_FinalAnalaysis_Title."' ,Manager_mail='".$membermail."' where (post_code='Financial Analaysis Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Financial Analaysis Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageFinancialTitle=$fetch['post'];
	echo $fetchAboutPageFinancialTitle;

}

if($getstate=="editAboutPageFinancialAnalaysisDesc"){
		session_start();

$txt_AboutPage_FinancialAnalaysis_Desc=addslashes($_POST['txt_AboutPage_FinancialAnalaysis_Desc']);
$membermail=$_SESSION['email'];
$updateAboutPageFinancialAnalaysisTitle=mysqli_query($conn,"update posts set post='".$txt_AboutPage_FinancialAnalaysis_Desc."' ,Manager_mail='".$membermail."' where (post_code='Financial Analaysis Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Financial Analaysis Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageFinancialDesc=$fetch['post'];
	echo $fetchAboutPageFinancialDesc;

}

if($getstate=="editAboutPageLegalAdvisoryTitle"){
		session_start();

$txt_AboutPage_LegalAdvisory_Title=addslashes($_POST['txt_AboutPage_LegalAdvisory_Title']);
$membermail=$_SESSION['email'];
$updateAboutPageLegalAdvisoryTitle=mysqli_query($conn,"update posts set post='".$txt_AboutPage_LegalAdvisory_Title."' ,Manager_mail='".$membermail."' where (post_code='Legal Advisory Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Legal Advisory Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageLegalAdvisoryTitle=$fetch['post'];
	echo $fetchAboutPageLegalAdvisoryTitle;

}

if($getstate=="editAboutPageLegalAdvisoryDesc"){
		session_start();

$txt_AboutPage_LegalAdvisory_Desc=addslashes($_POST['txt_AboutPage_LegalAdvisory_Desc']);
$membermail=$_SESSION['email'];
$updateAboutPageLegalAdvisoryDesc=mysqli_query($conn,"update posts set post='".$txt_AboutPage_LegalAdvisory_Desc."' ,Manager_mail='".$membermail."' where (post_code='Legal Advisory Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Legal Advisory Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchAboutPageLegalAdvisoryDesc=$fetch['post'];
	echo $fetchAboutPageLegalAdvisoryDesc;

}

/*Services Page*/
if($getstate=="editServicesPageProfServicesTitle"){
		session_start();

$txt_ServicesPage_Prof_Services_Title=addslashes($_POST['txt_ServicesPage_Prof_Services_Title']);
$membermail=$_SESSION['email'];
$updateServicesPageProfServicesTitle=mysqli_query($conn,"update posts set post='".$txt_ServicesPage_Prof_Services_Title."' ,Manager_mail='".$membermail."' where (post_code='ENC Prof Services Services Page' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='ENC Prof Services Services Page' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$ENC_Prof_Services_Services_PageTitle=$fetch['post'];
	echo $ENC_Prof_Services_Services_PageTitle;

}

if($getstate=="editServicesPageProfServicesDesc"){
		session_start();

$txt_ServicesPage_ProfServices_Desc=addslashes($_POST['txt_ServicesPage_ProfServices_Desc']);
$membermail=$_SESSION['email'];
$updateServicesPageProfServicesDesc=mysqli_query($conn,"update posts set post='".$txt_ServicesPage_ProfServices_Desc."' ,Manager_mail='".$membermail."' where (post_code='Prof Services Services Page Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Prof Services Services Page Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageProfServicesDesc=$fetch['post'];
	echo $fetchServicesPageProfServicesDesc;

}

if($getstate=="editServicesPagePPDIOOTitle"){
		session_start();

$txt_ENC_PPDIOO_Services_Page_Title=addslashes($_POST['txt_ENC_PPDIOO_Services_Page_Title']);
$membermail=$_SESSION['email'];
$updateServicesPagePPDIOODesc=mysqli_query($conn,"update posts set post='".$txt_ENC_PPDIOO_Services_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='PPDIOO Services Page Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='PPDIOO Services Page Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPagePPDIOOTitle=$fetch['post'];
	echo $fetchServicesPagePPDIOOTitle;

}

if($getstate=="editServicesPagePPDIOODesc"){
		session_start();

$txt_ServicesPage_PPDIOO_Desc=addslashes($_POST['txt_ServicesPage_PPDIOO_Desc']);
$membermail=$_SESSION['email'];
$updateServicesPagePPDIOODesc=mysqli_query($conn,"update posts set post='".$txt_ServicesPage_PPDIOO_Desc."' ,Manager_mail='".$membermail."' where (post_code='PPDIOO Services Page Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='PPDIOO Services Page Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPagePPDIOODesc=$fetch['post'];
	echo $fetchServicesPagePPDIOODesc;

}

if($getstate=="editServicesPageSLAResidentTitle"){
		session_start();

$txt_ENC_SLAResident_Services_Page_Title=addslashes($_POST['txt_ENC_SLAResident_Services_Page_Title']);
$membermail=$_SESSION['email'];
$updateServicesPagePPDIOODesc=mysqli_query($conn,"update posts set post='".$txt_ENC_SLAResident_Services_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='SLA Resident Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='SLA Resident Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageSLAResidentTitle=$fetch['post'];
	echo $fetchServicesPageSLAResidentTitle;

}

if($getstate=="editServicesPageSLAResidentDesc"){
		session_start();

$txt_ServicesPage_SLAResident_Desc=addslashes($_POST['txt_ServicesPage_SLAResident_Desc']);
$membermail=$_SESSION['email'];
$updateServicesPageSLAResidentDesc=mysqli_query($conn,"update posts set post='".$txt_ServicesPage_SLAResident_Desc."' ,Manager_mail='".$membermail."' where (post_code='SLA Resident Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='SLA Resident Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageSLAResidentDesc=$fetch['post'];
	echo $fetchServicesPageSLAResidentDesc;

}

if($getstate=="editServicesPageHelpDeskTitle"){
		session_start();

$txt_ENC_HelpDesk_Services_Page_Title=addslashes($_POST['txt_ENC_HelpDesk_Services_Page_Title']);
$membermail=$_SESSION['email'];
$updateServicesPageHelpDeskTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_HelpDesk_Services_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Helpdesk Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Helpdesk Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageHelpDeskTitle=$fetch['post'];
	echo $fetchServicesPageHelpDeskTitle;

}

if($getstate=="editServicesPageHelpDeskDesc"){
		session_start();

$txt_ServicesPage_HelpDesk_Desc=addslashes($_POST['txt_ServicesPage_HelpDesk_Desc']);
$membermail=$_SESSION['email'];
$updateServicesPageSLAResidentDesc=mysqli_query($conn,"update posts set post='".$txt_ServicesPage_HelpDesk_Desc."' ,Manager_mail='".$membermail."' where (post_code='Helpdesk Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Helpdesk Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageHelpDeskDesc=$fetch['post'];
	echo $fetchServicesPageHelpDeskDesc;

}

if($getstate=="editServicesPageGlobalFieldTitle"){
		session_start();

$txt_ENC_GlobalField_Services_Page_Title=addslashes($_POST['txt_ENC_GlobalField_Services_Page_Title']);
$membermail=$_SESSION['email'];
$updateServicesPageGlobalFieldTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_GlobalField_Services_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Global Field Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Global Field Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageGlobalFieldTitle=$fetch['post'];
	echo $fetchServicesPageGlobalFieldTitle;

}

if($getstate=="editServicesPageGlobalFieldDesc"){
		session_start();

$txt_ServicesPage_GlobalField_Desc=addslashes($_POST['txt_ServicesPage_GlobalField_Desc']);
$membermail=$_SESSION['email'];
$updateServicesPageGlobalFieldDesc=mysqli_query($conn,"update posts set post='".$txt_ServicesPage_GlobalField_Desc."' ,Manager_mail='".$membermail."' where (post_code='Global Field Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Global Field Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageGlobalFieldDesc=$fetch['post'];
	echo $fetchServicesPageGlobalFieldDesc;

}
if($getstate=="editServicesPageGlobalProfTitle"){
		session_start();

$txt_ENC_GlobalProf_Services_Page_Title=addslashes($_POST['txt_ENC_GlobalProf_Services_Page_Title']);
$membermail=$_SESSION['email'];
$updateServicesPageGlobalFieldTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_GlobalProf_Services_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Global Professional Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Global Professional Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageGlobalProfTitle=$fetch['post'];
	echo $fetchServicesPageGlobalProfTitle;

}

if($getstate=="editServicesPageGlobalProfDesc"){
		session_start();

$txt_ServicesPage_GlobalProf_Desc=addslashes($_POST['txt_ServicesPage_GlobalProf_Desc']);
$membermail=$_SESSION['email'];
$updateServicesPageGlobalFieldDesc=mysqli_query($conn,"update posts set post='".$txt_ServicesPage_GlobalProf_Desc."' ,Manager_mail='".$membermail."' where (post_code='Global Professional Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Global Professional Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageGlobalProfDesc=$fetch['post'];
	echo $fetchServicesPageGlobalProfDesc;

}

if($getstate=="editServicesPagePenetrationtestingTitle"){
		session_start();

$txt_ENC_Penetrationtesting_Services_Page_Title=addslashes($_POST['txt_ENC_Penetrationtesting_Services_Page_Title']);
$membermail=$_SESSION['email'];
$updateServicesPenetrationTestingFieldTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_Penetrationtesting_Services_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Penetration Testing Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Penetration Testing Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPagePenetrationTestingTitle=$fetch['post'];
	echo $fetchServicesPagePenetrationTestingTitle;

}

if($getstate=="editServicesPagePenetrationTestingDesc"){
		session_start();

$txt_ServicesPage_PenetrationTesting_Desc=addslashes($_POST['txt_ServicesPage_PenetrationTesting_Desc']);
$membermail=$_SESSION['email'];
$updateServicesPenetrationTestingFieldTitle=mysqli_query($conn,"update posts set post='".$txt_ServicesPage_PenetrationTesting_Desc."' ,Manager_mail='".$membermail."' where (post_code='Penetration Testing Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Penetration Testing Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPagePenetrationTestingDesc=$fetch['post'];
	echo $fetchServicesPagePenetrationTestingDesc;

}

if($getstate=="editServicesPageHumanResourceTitle"){
		session_start();

$txt_ENC_HumanResource_Services_Page_Title=addslashes($_POST['txt_ENC_HumanResource_Services_Page_Title']);
$membermail=$_SESSION['email'];
$updateServicesHumanResourceTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_HumanResource_Services_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Human Resource Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Human Resource Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageHumanResourceTitle=$fetch['post'];
	echo $fetchServicesPageHumanResourceTitle;

}
if($getstate=="editServicesPageHumanResourceDesc"){
		session_start();

$txt_ServicesPage_HumanResource_Desc=addslashes($_POST['txt_ServicesPage_HumanResource_Desc']);
$membermail=$_SESSION['email'];
$updateServicesHumanResourceDesc=mysqli_query($conn,"update posts set post='".$txt_ServicesPage_HumanResource_Desc."' ,Manager_mail='".$membermail."' where (post_code='Human Resource Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Human Resource Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchServicesPageHumanResourceDesc=$fetch['post'];
	echo $fetchServicesPageHumanResourceDesc;

}
/*Service Page Image*/
if($getstate=="changeService1image"){
				session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Service/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Service/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='ENCProfServices_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','ENCProfServices_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
    }

if($getstate=="changeService2image"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Service/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Service/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='PPDIOO_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','PPDIOO_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeService3image"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Service/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Service/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='SLA_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','SLA_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeService4image"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Service/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Service/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Helpdesk_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Helpdesk_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeService5image"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Service/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Service/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='GlobalField_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','GlobalField_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}
if($getstate=="changeService6image"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Service/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Service/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='GlobalProfessional_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','GlobalProfessional_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeService7image"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Service/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Service/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Penetration_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Penetration_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}


if($getstate=="changeService8image"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Service/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Service/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='HumanResource_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','HumanResource_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}
/*Solution Page*/
if($getstate=="editSolutionPageNetworkSecurityTitle"){
		session_start();

$txt_ENC_NetworkSecurity_Solution_Page_Title=addslashes($_POST['txt_ENC_NetworkSecurity_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionNetworkSecurityTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_NetworkSecurity_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Network Security Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Network Security Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageNetworkSecurityTitle=$fetch['post'];
	echo $fetchSolutionPageNetworkSecurityTitle;

}

if($getstate=="editSolutionPageNetworkSecurityDesc"){
		session_start();

$txt_SolutionPage_NetworkSecurity_Desc=addslashes($_POST['txt_SolutionPage_NetworkSecurity_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionNetworkSecurityDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_NetworkSecurity_Desc."' ,Manager_mail='".$membermail."' where (post_code='Network Security Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Network Security Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageNetworkSecurityDesc=$fetch['post'];
	echo $fetchSolutionPageNetworkSecurityDesc;

}

if($getstate=="editSolutionPageIPTelephonyTitle"){
		session_start();

$txt_ENC_IPTelephony_Solution_Page_Title=addslashes($_POST['txt_ENC_IPTelephony_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionIPTelephonyTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_IPTelephony_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='IP Telephony Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='IP Telephony Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageIPTelephonyTitle=$fetch['post'];
	echo $fetchSolutionPageIPTelephonyTitle;

}

if($getstate=="editSolutionPageIPTelephonyDesc"){
		session_start();

$txt_SolutionPage_IPTelephony_Desc=addslashes($_POST['txt_SolutionPage_IPTelephony_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionIPTelephonyDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_IPTelephony_Desc."' ,Manager_mail='".$membermail."' where (post_code='IP Telephony Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='IP Telephony Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageIPTelephonyDesc=$fetch['post'];
	echo $fetchSolutionPageIPTelephonyDesc;

}

if($getstate=="editSolutionPageRoutingTitle"){
		session_start();

$txt_ENC_Routing_Solution_Page_Title=addslashes($_POST['txt_ENC_Routing_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionRoutingTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_Routing_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Routing Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Routing Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageRoutingTitle=$fetch['post'];
	echo $fetchSolutionPageRoutingTitle;

}

if($getstate=="editSolutionPageRoutingDesc"){
		session_start();

$txt_SolutionPage_Routing_Desc=addslashes($_POST['txt_SolutionPage_Routing_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionRoutingDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_Routing_Desc."' ,Manager_mail='".$membermail."' where (post_code='Routing Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Routing Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageRoutingDesc=$fetch['post'];
	echo $fetchSolutionPageRoutingDesc;

}

if($getstate=="editSolutionPageWirelessTitle"){
		session_start();

$txt_ENC_Wireless_Solution_Page_Title=addslashes($_POST['txt_ENC_Wireless_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionWirelessTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_Wireless_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Wireless Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Wireless Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageWirelessTitle=$fetch['post'];
	echo $fetchSolutionPageWirelessTitle;

}

if($getstate=="editSolutionPageWirelessDesc"){
		session_start();

$txt_SolutionPage_Wireless_Desc=addslashes($_POST['txt_SolutionPage_Wireless_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionWirelessDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_Wireless_Desc."' ,Manager_mail='".$membermail."' where (post_code='Wireless Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Wireless Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageWirelessDesc=$fetch['post'];
	echo $fetchSolutionPageWirelessDesc;

}

if($getstate=="editSolutionPageDataCentersTitle"){
		session_start();

$txt_ENC_DataCenters_Solution_Page_Title=addslashes($_POST['txt_ENC_DataCenters_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionDataCentersTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_DataCenters_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Data Centers Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Data Centers Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageDataCenterTitle=$fetch['post'];
	echo $fetchSolutionPageDataCenterTitle;

}

if($getstate=="editSolutionPageDataCentersDesc"){
		session_start();

$txt_SolutionPage_DataCenters_Desc=addslashes($_POST['txt_SolutionPage_DataCenters_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionDataCentersDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_DataCenters_Desc."' ,Manager_mail='".$membermail."' where (post_code='Data Centers Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Data Centers Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageDataCentersDesc=$fetch['post'];
	echo $fetchSolutionPageDataCentersDesc;

}

if($getstate=="editSolutionPageServerTitle"){
		session_start();

$txt_ENC_Server_Solution_Page_Title=addslashes($_POST['txt_ENC_Server_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionServerTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_Server_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Server Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Server Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageServerTitle=$fetch['post'];
	echo $fetchSolutionPageServerTitle;

}

if($getstate=="editSolutionPageServerDesc"){
		session_start();

$txt_SolutionPage_Server_Desc=addslashes($_POST['txt_SolutionPage_Server_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionServerDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_Server_Desc."' ,Manager_mail='".$membermail."' where (post_code='Server Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Server Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageServerDesc=$fetch['post'];
	echo $fetchSolutionPageServerDesc;

}

if($getstate=="editSolutionPageSecurityTitle"){
		session_start();

$txt_ENC_Security_Solution_Page_Title=addslashes($_POST['txt_ENC_Security_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionSecurityTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_Security_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Security Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Security Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageSecurityTitle=$fetch['post'];
	echo $fetchSolutionPageSecurityTitle;

}

if($getstate=="editSolutionPageSecurityDesc"){
		session_start();

$txt_SolutionPage_Security_Desc=addslashes($_POST['txt_SolutionPage_Security_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionSecurityDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_Security_Desc."' ,Manager_mail='".$membermail."' where (post_code='Security Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Security Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageSecurityDesc=$fetch['post'];
	echo $fetchSolutionPageSecurityDesc;

}

if($getstate=="editSolutionPageVirtualizationTitle"){
		session_start();

$txt_ENC_Virtualization_Solution_Page_Title=addslashes($_POST['txt_ENC_Virtualization_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionVirtualizationTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_Virtualization_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Virtualization Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Virtualization Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageVirtualizationTitle=$fetch['post'];
	echo $fetchSolutionPageVirtualizationTitle;

}

if($getstate=="editSolutionPageVirtualizationDesc"){
		session_start();

$txt_SolutionPage_Virtualization_Desc=addslashes($_POST['txt_SolutionPage_Virtualization_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionSecurityDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_Virtualization_Desc."' ,Manager_mail='".$membermail."' where (post_code='Virtualization Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Virtualization Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageVirtualizationDesc=$fetch['post'];
	echo $fetchSolutionPageVirtualizationDesc;

}

if($getstate=="editSolutionPagePowerTitle"){
		session_start();

$txt_ENC_Power_Solution_Page_Title=addslashes($_POST['txt_ENC_Power_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionPowerTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_Power_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Power Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Power Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPagePowerTitle=$fetch['post'];
	echo $fetchSolutionPagePowerTitle;

}

if($getstate=="editSolutionPagePowerDesc"){
		session_start();

$txt_SolutionPage_Power_Desc=addslashes($_POST['txt_SolutionPage_Power_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionPowerDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_Power_Desc."' ,Manager_mail='".$membermail."' where (post_code='Power Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Power Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPagePowerDesc=$fetch['post'];
	echo $fetchSolutionPagePowerDesc;

}

if($getstate=="editSolutionPageSoftwareTitle"){
		session_start();

$txt_ENC_Software_Solution_Page_Title=addslashes($_POST['txt_ENC_Software_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionSoftwareTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_Software_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Software Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Software Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageSoftwareTitle=$fetch['post'];
	echo $fetchSolutionPageSoftwareTitle;

}

if($getstate=="editSolutionPageSoftwareDesc"){
		session_start();

$txt_SolutionPage_Software_Desc=addslashes($_POST['txt_SolutionPage_Software_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionSoftwareDesc=mysqli_query($conn,"update posts set post='".$txt_SolutionPage_Software_Desc."' ,Manager_mail='".$membermail."' where (post_code='Software Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Software Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageSoftwareDesc=$fetch['post'];
	echo $fetchSolutionPageSoftwareDesc;

}

if($getstate=="editSolutionPageENCMicrosoftSolutionTitle"){
		session_start();

$txt_ENC_ENCMicrosoftSolution_Solution_Page_Title=addslashes($_POST['txt_ENC_ENCMicrosoftSolution_Solution_Page_Title']);
$membermail=$_SESSION['email'];
$updateSolutionENCMicrosoftSolutionTitle=mysqli_query($conn,"update posts set post='".$txt_ENC_ENCMicrosoftSolution_Solution_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='ENC Microsoft Solution Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='ENC Microsoft Solution Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageENCMicrosoftSolutionTitle=$fetch['post'];
	echo $fetchSolutionPageENCMicrosoftSolutionTitle;

}

if($getstate=="editSolutionPageENCMicrosoftSolutionDesc"){
		session_start();

$txt_ENCMicrosoftSolution_Solution_Page_Desc=addslashes($_POST['txt_ENCMicrosoftSolution_Solution_Page_Desc']);
$membermail=$_SESSION['email'];
$updateSolutionENCMicrosoftSolutionTitle=mysqli_query($conn,"update posts set post='".$txt_ENCMicrosoftSolution_Solution_Page_Desc."' ,Manager_mail='".$membermail."' where (post_code='ENC Microsoft Solution Desc' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='ENC Microsoft Solution Desc' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSolutionPageENCMicrosoftSolutionDesc=$fetch['post'];
	echo $fetchSolutionPageENCMicrosoftSolutionDesc;

}
/*Solution page images*/
if($getstate=="changeSolutionimage1"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Network_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Network_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeSolutionimage2"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='IP_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','IP_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeSolutionimage3"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Routing_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Routing_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeSolutionimage4"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Wireless_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Wireless_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeSolutionimage5"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Data_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Data_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeSolutionimage6"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Server_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Server_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeSolutionimage7"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Security_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Security_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeSolutionimage8"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Virtualization_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Virtualization_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}


if($getstate=="changeSolutionimage9"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Power_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Power_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeSolutionimage10"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='Software_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','Software_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}


if($getstate=="changeSolutionimage11"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Solution/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Solution/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='MicrosoftSolution_image' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','MicrosoftSolution_image','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="AddClientimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/Client/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/Client/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into client_image (client_image) VALUES('$fileSql')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}
if($getstate=="deleteClientimage"){
	$imageid=strip_tags($_POST['imageid']);
$sql = "DELETE FROM client_image WHERE client_img_id='$imageid'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}
/*Partner Page*/
if($getstate=="editpartnerParagraphDesc"){
		session_start();

$txt_partnerParagraph_Desc=addslashes($_POST['txt_partnerParagraph_Desc']);
$membermail=$_SESSION['email'];
$partnerParagraph_Desc_update=mysqli_query($conn,"update posts set post='".$txt_partnerParagraph_Desc."' ,Manager_mail='".$membermail."' where (post_code='partnerParagraph' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='partnerParagraph' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnerParagraphDesc=$fetch['post'];
	echo $fetchpartnerParagraphDesc;

}

if($getstate=="edittxtOurpartnershipTitle"){
		session_start();

$txt_partnerParagraph_Title=addslashes($_POST['txt_partnerParagraph_Title']);
$membermail=$_SESSION['email'];
$partnerParagraph_Title_update=mysqli_query($conn,"update posts set post='".$txt_partnerParagraph_Title."' ,Manager_mail='".$membermail."' where (post_code='Our Partnership Level Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Our Partnership Level Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnerParagraphTitle=$fetch['post'];
	echo $fetchpartnerParagraphTitle;

}

if($getstate=="AddfilesimgPartnerPartnershipimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/partner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/partner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into partner (partner_img,partner_group) VALUES('$fileSql','OurPartnership')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="deletePartnership"){
	$partnership=strip_tags($_POST['partnership']);
    $sql_query = mysqli_query($conn,"select * from partner where (partner_id='$partnership' And partner_group='OurPartnership')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnership=$fetch['partner_img'];
	$status=unlink("../".$fetchpartnership);
	$sql = "DELETE FROM partner WHERE partner_id='$partnership' And partner_group='OurPartnership'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}


if($getstate=="AddfilesimgPartnerGlobalimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/partner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/partner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into partner (partner_img,partner_group) VALUES('$fileSql','Global')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="deleteGlobal"){
	$partnershipGlobal=strip_tags($_POST['partnershipGlobal']);
	    $sql_query = mysqli_query($conn,"select * from partner where (partner_id='$partnershipGlobal' And partner_group='Global')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnershipGlobal=$fetch['partner_img'];
	$status=unlink("../".$fetchpartnershipGlobal);
$sql = "DELETE FROM partner WHERE partner_id='$partnershipGlobal' And partner_group='Global'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

if($getstate=="AddfilesimgPartnerSystemimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/partner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/partner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into partner (partner_img,partner_group) VALUES('$fileSql','System')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}


if($getstate=="deleteSystem"){
	$partnershipSystem=strip_tags($_POST['partnershipSystem']);
		    $sql_query = mysqli_query($conn,"select * from partner where (partner_id='$partnershipSystem' And partner_group='System')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnershipSystem=$fetch['partner_img'];
	$status=unlink("../".$fetchpartnershipSystem);
$sql = "DELETE FROM partner WHERE partner_id='$partnershipSystem' And partner_group='System'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}


if($getstate=="AddfilesimgPartnerNetworkimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/partner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/partner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into partner (partner_img,partner_group) VALUES('$fileSql','Network')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="deleteNetwork"){
	$partnershipNetwork=strip_tags($_POST['partnershipNetwork']);
$sql = "DELETE FROM partner WHERE partner_id='$partnershipNetwork' And partner_group='Network'";
	$sql_query = mysqli_query($conn,"select * from partner where (partner_id='$partnershipNetwork' And partner_group='Network')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnershipNetwork=$fetch['partner_img'];
	$status=unlink("../".$fetchpartnershipNetwork);
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

if($getstate=="AddfilesimgPartnerNetworkPassiveimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/partner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/partner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into partner (partner_img,partner_group) VALUES('$fileSql','NetworkPassive')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}
if($getstate=="deleteNetworkPassive"){
	$partnershipNetworkPassive=strip_tags($_POST['partnershipNetworkPassive']);
$sql = "DELETE FROM partner WHERE partner_id='$partnershipNetworkPassive' And partner_group='NetworkPassive'";
	$sql_query = mysqli_query($conn,"select * from partner where (partner_id='$partnershipNetworkPassive' And partner_group='NetworkPassive')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnershipNetworkP=$fetch['partner_img'];
	$status=unlink("../".$fetchpartnershipNetworkP);
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

if($getstate=="AddfilesimgPartnerServerDesktopimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/partner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/partner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into partner (partner_img,partner_group) VALUES('$fileSql','ServerDesktop')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="deleteServerDesktop"){
	$partnershipServerDesktop=strip_tags($_POST['partnershipServerDesktop']);
$sql = "DELETE FROM partner WHERE partner_id='$partnershipServerDesktop' And partner_group='ServerDesktop'";
$sql_query = mysqli_query($conn,"select * from partner where (partner_id='$partnershipServerDesktop' And partner_group='ServerDesktop')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnershipServer=$fetch['partner_img'];
	$status=unlink("../".$fetchpartnershipServer);
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

if($getstate=="AddfilesimgPartnerSecurityimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/partner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/partner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into partner (partner_img,partner_group) VALUES('$fileSql','Security')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="deleteSecurity"){
	$partnershipSecurity=strip_tags($_POST['partnershipSecurity']);
$sql = "DELETE FROM partner WHERE partner_id='$partnershipSecurity' And partner_group='Security'";
$sql_query = mysqli_query($conn,"select * from partner where (partner_id='$partnershipSecurity' And partner_group='Security')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnershipSecurity=$fetch['partner_img'];
	$status=unlink("../".$fetchpartnershipSecurity);
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

if($getstate=="AddfilesimgPartnerUPSimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/partner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/partner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into partner (partner_img,partner_group) VALUES('$fileSql','UPS')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="deleteUPS"){
	$partnershipUPS=strip_tags($_POST['partnershipUPS']);
$sql = "DELETE FROM partner WHERE partner_id='$partnershipUPS' And partner_group='UPS'";
$sql_query = mysqli_query($conn,"select * from partner where (partner_id='$partnershipUPS' And partner_group='UPS')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnershipUPS=$fetch['partner_img'];
	$status=unlink("../".$fetchpartnershipUPS);
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}


if($getstate=="AddfilesimgPartnerNetworkManageimage"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/partner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/partner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"insert into partner (partner_img,partner_group) VALUES('$fileSql','NetworkManage')");


        $imageProcess = 1;
								echo "Success uploaded";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="deleteNetworkManage"){
	$partnershipNetworkManage=strip_tags($_POST['partnershipNetworkManage']);
$sql = "DELETE FROM partner WHERE partner_id='$partnershipNetworkManage' And partner_group='NetworkManage'";
$sql_query = mysqli_query($conn,"select * from partner where (partner_id='$partnershipNetworkManage' And partner_group='NetworkManage')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchpartnershipNetworkManage=$fetch['partner_img'];
	$status=unlink("../".$fetchpartnershipNetworkManage);
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

/*Global Reach Page*/
if($getstate=="edittxtGlobalReachTitle"){
		session_start();

$txt_ENC_GlobalReach_Page_Title=addslashes($_POST['txt_ENC_GlobalReach_Page_Title']);
$membermail=$_SESSION['email'];
$GlobalReach_Title_update=mysqli_query($conn,"update posts set post='".$txt_ENC_GlobalReach_Page_Title."' ,Manager_mail='".$membermail."' where (post_code='Global Reach Title' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Global Reach Title' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchGlobalReachTitle=$fetch['post'];
	echo $fetchGlobalReachTitle;

}

if($getstate=="edittxtGlobalReachDesc1"){
		session_start();

$txt_GlobalReach_Desc1=addslashes($_POST['txt_GlobalReach_Desc1']);
$membermail=$_SESSION['email'];
$GlobalReach_Desc1_update=mysqli_query($conn,"update posts set post='".$txt_GlobalReach_Desc1."' ,Manager_mail='".$membermail."' where (post_code='Global Reach Desc1' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Global Reach Desc1' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchGlobalReachDesc1=$fetch['post'];
	echo $fetchGlobalReachDesc1;

}

if($getstate=="edittxtGlobalReachDesc2"){
		session_start();

$txt_GlobalReach_Desc2=addslashes($_POST['txt_GlobalReach_Desc2']);
$membermail=$_SESSION['email'];
$GlobalReach_Desc2_update=mysqli_query($conn,"update posts set post='".$txt_GlobalReach_Desc2."' ,Manager_mail='".$membermail."' where (post_code='Global Reach Desc2' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Global Reach Desc2' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchGlobalReachDesc2=$fetch['post'];
	echo $fetchGlobalReachDesc2;

}

if($getstate=="changeGlobalReachimage1"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/globalreach/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/globalreach/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='GlobalReach_image1' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','GlobalReach_image1','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="changeGlobalReachimage2"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/globalreach/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/globalreach/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];

		$updateimagefeatures=mysqli_query($conn,"update posts_img set active_features='0',manager_mail='".$EmailUser."' where (post_code='GlobalReach_image2' and member_allowgroup='74747')");

		$insertimagefeatures=mysqli_query($conn,"insert into posts_img (post_img_path,post_code,manager_mail,member_allowgroup)Values('$fileSql','GlobalReach_image2','$EmailUser','74747')");

        $imageProcess = 1;
								echo "Success changed";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="DeleteSlideshowImage"){
	$DeleteSlideshowID=strip_tags($_POST['DeleteSlideshow']);
$sql_query = mysqli_query($conn,"select * from slideshow where (slide_id='$DeleteSlideshowID')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSlideImage=$fetch['slide_img'];
	$status=unlink("../".$fetchSlideImage);
	$sql = "DELETE FROM slideshow WHERE slide_id='$DeleteSlideshowID'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

if($getstate=="AddFilePartnerBanner"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/banner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/banner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];
		$insertimagefeatures=mysqli_query($conn,"insert into banner (banner_img,banner_group)Values('$fileSql','PartnerBanner')");

        $imageProcess = 1;
								echo "Success Add";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="DeletePartnerBannerImage"){
	$DeletePartnerBannerID=strip_tags($_POST['DeletePartnerBanner']);
$sql_query = mysqli_query($conn,"select * from banner where (banner_id='$DeletePartnerBannerID' And banner_group='PartnerBanner')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchbanner_img=$fetch['banner_img'];
	$status=unlink("../".$fetchbanner_img);
	$sql = "DELETE FROM banner WHERE banner_id='$DeletePartnerBannerID' And banner_group='PartnerBanner'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

if($getstate=="AddFileClinerBanner"){
					session_start();

	if(isset($_FILES['file']['name'])){

 $new_width = 800;
        $new_height = 600;
        $fileName = $_FILES['file']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = "thump_" .time();
        $uploadPath = "../img/banner/";
        $fileExt = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];


				$uploadPathSql ="img/banner/";
$fileSql=$uploadPathSql.$resizeFileName . "." . $fileExt;
        move_uploaded_file($fileName, $uploadPath . $resizeFileName . "." . $fileExt);
		$EmailUser=$_SESSION['email'];
		$insertimagefeatures=mysqli_query($conn,"insert into banner (banner_img,banner_group)Values('$fileSql','ClientBanner')");

        $imageProcess = 1;
								echo "Success Add";


    
	}else{
		echo "Invalid format";

        $imageProcess = 0;
        
		        
		}
}

if($getstate=="DeleteClientBannerImage"){
	$DeletePartnerBannerID=strip_tags($_POST['DeleteClientBanner']);
$sql_query = mysqli_query($conn,"select * from banner where (banner_id='$DeletePartnerBannerID' And banner_group='ClientBanner')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchbanner_img=$fetch['banner_img'];
	$status=unlink("../".$fetchbanner_img);
	$sql = "DELETE FROM banner WHERE banner_id='$DeletePartnerBannerID' And banner_group='ClientBanner'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
}

if($getstate=="edittxtGeneralmanagerTitle"){
		session_start();

$txt_ENC_GeneralManager_Title=addslashes($_POST['txt_ENC_GeneralManager_Title']);
$membermail=$_SESSION['email'];
$partnerParagraph_Title_update=mysqli_query($conn,"update posts set post='".$txt_ENC_GeneralManager_Title."' ,Manager_mail='".$membermail."' where (post_code='contactus_general_Manager' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='contactus_general_Manager' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchGeneralManagerTitle=$fetch['post'];
	echo $fetchGeneralManagerTitle;

}
if($getstate=="edittxtSalesmanagerTitle"){
		session_start();

$txt_ENC_SalesManager_Title=addslashes($_POST['txt_ENC_SalesManager_Title']);
$membermail=$_SESSION['email'];
$partnerParagraph_Title_update=mysqli_query($conn,"update posts set post='".$txt_ENC_SalesManager_Title."' ,Manager_mail='".$membermail."' where (post_code='Conatct us Sales Manager' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='Conatct us Sales Manager' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSalesManagerTitle=$fetch['post'];
	echo $fetchSalesManagerTitle;

}
if($getstate=="edittxtSalesmanagermailTitle"){
		session_start();

$txt_ENC_SalesManagermail_Title=addslashes($_POST['txt_ENC_SalesManagermail_Title']);
$membermail=$_SESSION['email'];
$partnerParagraph_Title_update=mysqli_query($conn,"update posts set post='".$txt_ENC_SalesManagermail_Title."' ,Manager_mail='".$membermail."' where (post_code='SalesManageremail' AND memberallow_group='74747')");
    $sql_query = mysqli_query($conn,"select * from posts where (post_code='SalesManageremail' AND memberallow_group='74747')");
	$fetch=enc_fetch_assoc($sql_query);
	$fetchSalesManagermailTitle=$fetch['post'];
	echo $fetchSalesManagermailTitle;

}
?>
