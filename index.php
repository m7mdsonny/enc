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
    <title>ENC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ENC" name="keywords">
    <meta content="ENC" name="description">

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
				<style>
	.overlay{
 position:fixed;width:100%;height:100%;top:0;left:0;
 right:0;bottom:0;z-index:9999;background:#001743;
        }
.overlay img{
  display:block; position:absolute;
  margin:auto; width:300px;
  left:0; right:0; bottom:0; top:0;
  animation:load 1s infinite alternate linear;
            }
  @keyframes load{from{opacity:.2;transform:scale(.8);}}

	</style>
</head>
<body id="page-top" data-target=".side-menu" style="overflow-x:hidden;overflow-y: auto">
	       <div class="overlay" >
           <img src="load.png" alt="loading..."/>
       </div>

	<?php 
include __DIR__ . '/@inc/header.php';
include __DIR__ . '/@inc/partner.php';
include __DIR__ . '/@inc/sidebarCommunicte.php';
include __DIR__ . '/@inc/carousel.php';
include __DIR__ . '/@inc/aboutinc.php';
include __DIR__ . '/@inc/serviceinc.php';
include __DIR__ . '/@inc/featuresinc.php';
include __DIR__ . '/@inc/quoteinc.php';
include __DIR__ . '/@inc/teaminc.php';
//include __DIR__ . '/@inc/testimoleinc.php';
//include __DIR__ . '/@inc/bloginc.php';
include __DIR__ . '/@inc/footerinc.php';
 ?>
 <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/scrolling-nav.js"></script>
      <script src="js/validator.js"></script>
          <script src="js/main.js"></script>
		            <script src="js/SendAquote.js"></script>
		            <script src="js/createdata.js"></script>

		  <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
          <script src="js/script.js"></script>
		            <script src="js/createdata.js"></script>


<?php
				}}?>
    <!-- Template Javascript -->
	     	  <script>
      	  $(function(){
	      $(window).load(function () {
        $('.overlay').delay(2500).fadeOut(2000, function () {
            $('body').css({
                overflowX: 'hidden',
                overflowY: 'auto'
            });
            $('.overlay').remove()
        });
    });
	
		  });
	</script>

</body>

</html>
