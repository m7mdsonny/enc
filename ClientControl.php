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
    <title>Client Banner Control</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Partner" name="keywords">
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
</head>
<body>
<?php include __DIR__ . "/@inc/header_news.php";?>

        
    <!-- Topbar End -->
<div id="partner"> 
    
<?php
 include __DIR__ . "/@inc/Clientbanner.php";
?>
<hr>
    <marquee behavior="alternate" scrolldelay="140" onmouseover="this.stop()" onmouseout="this.start()">
                  <img src="img/banner/_1.jpg">&nbsp;&nbsp;
                  <img src="img/banner/_2.png">&nbsp;&nbsp;
                  <img src="img/banner/_3.png">&nbsp;&nbsp;
                  <img src="img/banner/_4_002.gif">&nbsp;&nbsp;
                  <img src="img/banner/_5.png">&nbsp;&nbsp;
                  <img src="img/banner/_6.png">&nbsp;&nbsp;
                  <img src="img/banner/_7.png">&nbsp;&nbsp;
                  <img src="img/banner/_8.png">&nbsp;&nbsp;
                  <img src="img/banner/_9.png">&nbsp;&nbsp;
                  <img src="img/banner/_10.png">&nbsp;&nbsp;
    </marquee>
    </div>
    <!-- Navbar Start -->
	      <?php include __DIR__ . "/@inc/sidebarcommunicte.php";?>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Client Banner Control</h1>
            </div>
        </div>
    </div>
 <div class="container-fluid py-6 px-5" id="News">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0 txtforTitle newstitle"></h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
		<table>
<tr>
<td>
<label class="">Partner Banner image</label>
<input type="file" id="file_Partner_img" style="display:inline;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
</td>
</tr>
</table>
            <div class="col-lg-12">

		<?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from banner where banner_group='PartnerBanner'");
				while($fetch=enc_fetch_assoc($selectFeaturesIntro)){
				$banner_img=$fetch['banner_img'];
				$banner_id=$fetch['banner_id'];
				
				?>
                <div style="display:inline;">
                    <div class="position-relative overflow-hidden">
                        <img class="w-15" src="<?php echo $banner_img;?>" alt="" style="height:75px;">
                    </div>
                    <div class=" position-relative overflow-hidden bg-secondary d-flex" style="display:inline;">
                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center text-white px-4 txtforBack w-15" >
							<span><a class="btn btn-success DeletePartnerBanner" href="#" id="<?php echo $banner_id;?>">Delete</a></span>
                        </div>
                    </div>
                </div>
				<?php
				}
				?>
        </div>
        </div>

    </div>
	 <?php include __DIR__ . "/@inc/footerinc.php";?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

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