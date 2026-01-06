<?php
include __DIR__ . '/@inc/conn.php';
session_start();
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
$membername=$_SESSION['member_name'];
$passcode=$_SESSION['member_passcode'];
}
$selectSocial=mysqli_query($conn,"select * from socialmedia where (social_id='1')");
$socialfetch=enc_fetch_assoc($selectSocial);
$socialtwitter=$socialfetch['Social_twitter'];
$socialfacebook=$socialfetch['Social_facebook'];
$Sociallinkedin=$socialfetch['Social_linkedin'];
$Socialphone=$socialfetch['Social_phone'];
$SocialWhatsapp=$socialfetch['Social_Whatsapp'];
$Socialemail=$socialfetch['Social_email'];
$Socialinstegram=$socialfetch['Social_instegram'];
$socialaddress=$socialfetch['social_address'];


   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include __DIR__ . "/@inc/header_dashboard.php";?>

        
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <!-- Navbar End -->
<!--/Banner area-------->
    <!-- Navbar End -->
 <div id="partner"> 
    
<?php
 include __DIR__ . "/@inc/Clientbanner.php";
?>
<hr>
<?php
 include __DIR__ . "/@inc/Partnerbanner.php";
?>
    </div>

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Dashboard</h1>
            </div>
        </div>
    </div>
<?php include __DIR__ . "/@inc/sidebarcommunicte.php";?>
	  <!-- Page Header End -->
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				$member_phone=$memberfetch['member_phone'];
				$member_Admin_email=$memberfetch['admin_mail'];
				if($memberPreimission=="manager_admin"){
				
				?>
<div class="prosettings"><h1>Profile Settings</h1></div>
<div class="tblPro">
<?php
$selectsocial=mysqli_query($conn,"select * from socialmedia where (social_id='1')");
$socialfetch=enc_fetch_assoc($selectsocial);
$phone=$socialfetch['Social_phone'];
$Social_Whatsapp=$socialfetch['Social_Whatsapp'];
$Social_email=$socialfetch['Social_email'];
$Social_instegram=$socialfetch['Social_instegram'];
$Social_linkedin=$socialfetch['Social_linkedin'];
$Social_facebook=$socialfetch['Social_facebook'];
$Social_twitter=$socialfetch['Social_twitter'];
$social_address=$socialfetch['social_address'];
?>

<table class="tblmain">
<tr>
<td>
<label class="lblItem">Phone</label>
</td>
<td>
<div id="alertphoneP"></div>
<div id="alertpassP"></div>
<div id="alertEmailP"></div>
<input type="text" id="PhonePersonal" class="inptitem" value="<?php echo $member_phone;?>"/>
</td>
</tr>
<tr>
<td>
<label class="lblItem">Admin E-mail</label>
</td>
<td>
<input type="text" id="MemberEMail" class="inptitem" value="<?php echo $member_Admin_email;?>"/>
</td>
</tr>
<tr>
<td>
<label class="lblItem">Password</label>
</td>
<td>
<input type="password" id="passPersonal" class="inptitem"/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<a id="SaveSetting" class=" btn btn-primary inptitem" style="margin-bottom:2%">Save Settings</a>
</td>
</tr>
<tr>
<td>
<label class="lblItem">Email for customer</label>
</td>
<td>
<input type="text" id="EmailUser" class="inptitem" value="<?php echo $Social_email;?>"/>
</td>
<td>
<div id="alertemail1"></div>

</td>
</tr>
<tr>
<td>
<label class="lblItem">Phone for customer +20</label>
</td>
<td>
<input type="text" id="Phone" class="inptitem" value="<?php echo $phone;?>"/>
</td>
<td>
<div id="alertephone"></div>
</td>
</tr>
<tr>

<td>
<label class="lblItem">https://twitter.com/</label>
</td>
<td>
<input type="text" id="twitter" class="inptitem" value="<?php echo $Social_twitter;?>"/>
</td>
<td>
<div id="alerttwitter"></div>
</td>
</tr>
<tr>
<td>
<label class="lblItem">https://facebook.com/</label>
</td>
<td>
<input type="text" id="facebook" class="inptitem" value="<?php echo $Social_facebook;?>"/>
</td>
<td>
<div id="alertfacebook"></div>
</td>
</tr>
<tr>
<td>
<label class="lblItem">https://www.instagram.com/</label>
</td>
<td>
<input type="text" id="instagram" class="inptitem" value="<?php echo $Social_instegram;?>"/>
</td>
<td>
<div id="alertinsta"></div>
</td>
</tr>
<tr>
<td>
<label class="lblItem">https://www.linkedin.com/in/</label>
</td>
<td>
<input type="text" id="linkedin" class="inptitem" value="<?php echo $Social_linkedin;?>"/>
</td>
<td>
<div id="alertlinkedin"></div>
</td>
</tr>
<tr>
<td>
<label class="lblItem">Whatsapp for customer</label>
</td>
<td>
<input type="text" id="whatsapp" class="inptitem" value="<?php echo $Social_Whatsapp;?>"/>
</td>
<td>
<div id="alertwhatsapp"></div>
</td>
</tr>
<tr>
<td>
<label class="lblItem">Address for customer</label>
</td>
<td>
<input type="text" id="address" class="inptitem" value="<?php echo $social_address;?>"/>
</td>
<td>
<div id="alertAddress"></div>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="button" id="Saveprofile" class=" btn btn-primary inptitem" value="Save Profile"/>
</td>
</tr>
</table>
    </div>
<div class="SlideshowAddphoto"><h1>Slideshow</h1></div>
        <form method="post" action="" enctype="multipart/form-data" id="myform">

<table class="tblmain">
<tr>
<td>
<label class="lblItem">Slideshow Title</label>
</td>
<td>
<input type="text" id="SlideshowTitle1" class="inptitem"/>
</td>
</tr>

<tr>
<td>
<label class="lblItem">Slideshow Caption</label>
</td>
<td>
<input type="text" id="SlideshowCaption1" class="inptitem"/>
</td>
</tr>

<tr>
<td>
<label class="lblItem">Slideshow image</label>
</td>
<td>
<input type="file" id="SlideshowImage" class="inptitem"  accept="image/png, image/jpe, image/jpeg,image/jpg,image/bmp,image/svg,image/webp"/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="button" id="Saveslideshow" class=" btn btn-primary inptitem" value="Save Slideshow"/>
</td>
</tr>
</table>
</form>
<div class="SlideshowAddphoto"><h1>Partner</h1></div>
<table>
<tr>
<td>
<label class="lblItem1">Partner image</label>
</td>
<td>
<input type="file" id="PartnerImage" class="inptitem1"/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="button" id="SavePartner" class=" btn btn-primary inptitem2" value="Save Partner"/>
</td>
</tr>
</table>
<div class="SlideshowAddphoto"><h1>Client</h1></div>
<table>
<tr>
<td>
<label class="lblItem1">Client name</label>
</td>
<td>
<input type="text" id="ClientName" class="inptitem2"/>
</td>
</tr>
<tr>
<td>
<label class="lblItem1">Client Job</label>
</td>
<td>
<input type="text" id="ClientJob" class="inptitem2"/>
</td>
</tr>
<tr>
<td>
<label class="lblItem1">Client Say</label>
</td>
<td>
<textarea id="ClientSay" class="inptitem3"></textarea>
</td>
</tr>
<tr>
<td>
<label class="lblItem1">Client Picture</label>
</td>
<td>
<input type="file" id="ClientPic" class="inptitem2"/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="button" id="Saveclient" class=" btn btn-primary inptitem2" value="Save Client"/>
</td>
</tr>
</table>
<div class="SlideshowAddphoto"><h1>News</h1></div>
<table>
<tr>
<td>
<label class="lblItem3">News Day</label>
</td>
<td>
<input type="date" class="inptitem2"/>
</td>
</tr>
<tr>
<td>
<label class="lblItem3">News Image</label>
</td>
<td>
<input type="file" class="inptitem2"/>
</td>
</tr>
<tr>
<td>
<label class="lblItem3">News Special</label>
</td>
<td>
<input type="text" class="inptitem2"/>
</td>
</tr>
<tr>
<td>
<label class="lblItem3">News Comment</label>
</td>
<td>
<textarea id="NewsComment" class="inptitem3"></textarea>

</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="button" id="SaveNews" class=" btn btn-primary inptitem2" value="Save News"/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<div class="buttonConrol">
<a id="Slideshow" class=" btn btn-success" href="SlideShowControl.php">Slideshow</a>
<a id="Client" class=" btn btn-success" href="ClientControl.php">Client Banner</a>
<a id="Partner" class=" btn btn-success" href="PartnerControl.php">Partner Banner</a>
<a id="Partner" class=" btn btn-success" href="QuoteMessage.php">Quote Message</a>
</div>
</td>
</tr>
</table>

</div>
   				<?php
				}else{
					?>
<div class="prosettings"><h1>Profile Settings</h1></div>
<div class="tblPro">


<table class="tblmain">
<tr>
<td>
<label class="lblItem">Phone</label>
</td>
<td>
<div id="alertphone"></div>
<input type="text" id="Phone" class="inptitem" value="<?php echo $member_phone;?>"/>
</td>
</tr>
<tr>
<td>
<label class="lblItem">Password</label>
</td>
<td>
<div id="alertpassP"></div>
<input type="password" id="pass" class="inptitem"/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="button" id="SaveP" class="btn btn-primary inptitem" value="Save profile" style="margin-bottom:2%"/>
</td>
</tr>
</table>
					<?php
				}}
				?>
    

    <!-- Footer Start -->
 <?php include __DIR__ . "/@inc/footerinc.php";?>
    <!-- Footer End -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

 <!-- JavaScript Libraries -->
     <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/SendAquote.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
          <script src="js/script.js"></script>
<?php
				}}?>
</body>

</html>