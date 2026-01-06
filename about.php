<?php
include '@inc/conn.php';
session_start();
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
$membername=$_SESSION['member_name'];
$passcode=$_SESSION['member_passcode'];
}
$selectSocial=mysqli_query($conn,"select * from socialmedia where (social_id='1')");
$socialfetch=mysqli_fetch_assoc($selectSocial);
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
    <title>About us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="About us" name="keywords">
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
<body>
<?php include "@inc/header_about.php";?>
        
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <!-- Navbar End -->
<!--/Banner area-------->
    <!-- Navbar End -->
 <div id="partner"> 
    
<?php
 include "@inc/Clientbanner.php";
?>
<hr>
<?php
 include "@inc/Partnerbanner.php";
?>
    </div>

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">About Us</h1>
            </div>
        </div>
    </div>
<?php include "@inc/sidebarcommunicte.php";?>
<!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
			  <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Page Welcome To'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor26=$fetch['postcolor'];
				
				?>
                <h1 class="display-5 mb-4 txtAboutWelcome" style="display: inline;color:<?php echo $postColor26;?> !important;">
<?php
				
				$selectAboutPageWelcome=mysqli_query($conn,"select * from posts where post_code='About Page Welcome To'");
				$fetch=mysqli_fetch_assoc($selectAboutPageWelcome);
				$fetch_AboutPage_Welcome=$fetch['post'];
				echo $fetch_AboutPage_Welcome;
				
				?>
				</h1>
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_AboutPage_Welcome;?>" style="display:none;" id="txt_AboutPage_Welcome"><a href="#" style="display:none;text-decoration:none;" id="edit_AboutPage_Welcome">Edit</a><a href="#" class="EditPenAboutPageWelcome" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="AboutWelcomeColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
				 <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='ENC About Page'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor27=$fetch['postcolor'];
				
				?>
				<h1 class="WelcomeENC" style="display: inline;"><span class="txtforTitle" style="color:<?php echo $postColor27;?> !important;"><?php
				
				$selectAboutPageWelcomeEnc=mysqli_query($conn,"select * from posts where post_code='ENC About Page'");
				$fetch=mysqli_fetch_assoc($selectAboutPageWelcomeEnc);
				$fetch_AboutPage_Welcome_ENC=$fetch['post'];
				echo $fetch_AboutPage_Welcome_ENC;
				
				?></span></h1>
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_AboutPage_Welcome_ENC;?>" style="display:none;" id="txt_AboutPage_Welcome_ENC"><a href="#" style="display:none;text-decoration:none;" id="edit_AboutPage_Welcome_ENC">Edit</a><a href="#" class="EditPenAboutPageWelcomeEnc" style="display:inline;"><i class="fas fa-pen"></i></a>
								<select style="font-size:16px; color:black" id="AboutENCColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Welcome About Page Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor28=$fetch['postcolor'];
				
				?>
                <h4 class="txtforTitle mb-4 txtWlecomeEncTitle" style="color:<?php echo $postColor28;?> !important;"><?php
				
				$selectAboutPageWelcomeTitlePage=mysqli_query($conn,"select * from posts where post_code='Welcome About Page Title'");
				$fetch=mysqli_fetch_assoc($selectAboutPageWelcomeTitlePage);
				$fetch_AboutPage_Welcome_ENC_Title=$fetch['post'];
				echo $fetch_AboutPage_Welcome_ENC_Title;
				
				?></h4><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_AboutPage_Welcome_ENC_Title"><?php echo $fetch_AboutPage_Welcome_ENC_Title;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_AboutPage_Welcome_ENC_Title">Edit</a><a href="#" class="EditPenAboutPageWelcomeEncTitle" style="display:inline;"><i class="fas fa-pen"></i></a>
						<select style="font-size:16px; color:black" id="AboutENCTitleColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				
				<?php
				}}
				?>
                <p class="mb-4 txtAboutPageDesc" ><?php
				
				$selectAboutPageWelcomeDesc=mysqli_query($conn,"select * from posts where post_code='AboutPage Desc'");
				$fetch=mysqli_fetch_assoc($selectAboutPageWelcomeDesc);
				$fetch_AboutPage_Welcome_ENC_Desc=$fetch['post'];
				echo $fetch_AboutPage_Welcome_ENC_Desc;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_AboutPage_Welcome_ENC_Desc"><?php echo $fetch_AboutPage_Welcome_ENC_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_AboutPage_Welcome_ENC_Desc">Edit</a><a href="#" class="EditPenAboutPageWelcomeEncDesc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
				<a href="contactus.php" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Get A Quote</a>
            </div>
			 <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About background Color'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor29=$fetch['postcolor'];
				
				?>
            <div class="col-lg-6" >
                <div class="h-100 d-flex flex-column justify-content-center txtforBack p-5" style="background:<?php echo $postColor29;?>!important">
                    <div class="d-flex text-white mb-5" id="BusinessDesc">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie fs-4 txtforTitle" style="color:<?php echo $postColor29;?>!important"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="txtBusinessPlanningAboutPage"><?php
				
				$selectAboutPageBussinessTitle=mysqli_query($conn,"select * from posts where post_code='About Page Business Planning Title'");
				$fetch=mysqli_fetch_assoc($selectAboutPageBussinessTitle);
				$fetch_AboutPage_Welcome_ENC_Bussiness_Title=$fetch['post'];
				echo $fetch_AboutPage_Welcome_ENC_Bussiness_Title;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_AboutPage_Welcome_ENC_Bussiness_Title;?>" style="display:none;color:black;" id="txt_AboutPage_Business_Title"><a href="#" style="display:none;text-decoration:none;color:white;" id="edit_AboutPage_Business_title">Edit</a><a href="#" class="EditPenAboutPageBusinessTitle text-white" style="display:inline;"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
                            <p class="mb-0 txtBusinessPlanningAboutPageDesc"><?php
				
				$selectAboutPageBussinessDesc=mysqli_query($conn,"select * from posts where post_code='Business Desc About Page'");
				$fetch=mysqli_fetch_assoc($selectAboutPageBussinessDesc);
				$fetch_AboutPage_Welcome_ENC_Bussiness_Desc=$fetch['post'];
				echo $fetch_AboutPage_Welcome_ENC_Bussiness_Desc;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;color:black;" id="txt_AboutPage_Business_Desc"><?php echo $fetch_AboutPage_Welcome_ENC_Bussiness_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;color:white" id="edit_AboutPage_Businesse_Desc">Edit</a><a href="#" class="EditPenAboutPageBusinessDesc" style="display:inline;color:white"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5" id="FinancialAnalaysisDesc">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-chart-line fs-4 txtforTitle" style="color:<?php echo $postColor29;?>!important"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="txtFinalAnalaysisAboutPage"><?php
				
				$selectAboutPageFinalAnalysisTitle=mysqli_query($conn,"select * from posts where post_code='Financial Analaysis Title'");
				$fetch=mysqli_fetch_assoc($selectAboutPageFinalAnalysisTitle);
				$fetch_AboutPage_FinalAnalaysis_Title=$fetch['post'];
				echo $fetch_AboutPage_FinalAnalaysis_Title;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_AboutPage_FinalAnalaysis_Title;?>" style="display:none;color:black;" id="txt_AboutPage_FinalAnalaysis_Title"><a href="#" style="display:none;text-decoration:none;color:white;" id="edit_AboutPage_FinalAnalaysis_title">Edit</a><a href="#" class="EditPenAboutPageFinalAnalaysisTitle text-white" style="display:inline;"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
                            <p class="mb-0 txtFinalAnalaysisAboutPageDesc"><?php
				
				$selectAboutPageFinalAnalysisDesc=mysqli_query($conn,"select * from posts where post_code='Financial Analaysis Desc'");
				$fetch=mysqli_fetch_assoc($selectAboutPageFinalAnalysisDesc);
				$fetch_AboutPage_FinalAnalaysis_Desc=$fetch['post'];
				echo $fetch_AboutPage_FinalAnalaysis_Desc;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;color:black;" id="txt_AboutPage_FinancialAnalaysis_Desc"><?php echo $fetch_AboutPage_FinalAnalaysis_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;color:white" id="edit_AboutPage_FinancialAnalaysis_Desc">Edit</a><a href="#" class="EditPenAboutPageFinancialAnalaysisDesc" style="display:inline;color:white"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
                        </div>
                    </div>
                    <div class="d-flex text-white" id="LegalAdvisoryDesc">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                            <i class="fa fa-balance-scale fs-4 txtforTitle" style="color:<?php echo $postColor29;?>!important"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="txtLegalAdvisoryTitle"><?php
				
				$selectAboutPageLegalAdvisoryTitle=mysqli_query($conn,"select * from posts where post_code='Legal Advisory Title'");
				$fetch=mysqli_fetch_assoc($selectAboutPageLegalAdvisoryTitle);
				$fetch_AboutPage_LegalAdvisory_Title=$fetch['post'];
				echo $fetch_AboutPage_LegalAdvisory_Title;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_AboutPage_LegalAdvisory_Title;?>" style="display:none;color:black;" id="txt_AboutPage_LegalAdvisory_Title"><a href="#" style="display:none;text-decoration:none;color:white;" id="edit_AboutPage_LegalAdvisory_title">Edit</a><a href="#" class="EditPenAboutPageLegalAdvisoryTitle text-white" style="display:inline;"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
                            <p class="mb-0 txtLegalAdvisoryDesc"><?php
				
				$selectAboutPageLegalAdvisoryDesc=mysqli_query($conn,"select * from posts where post_code='Legal Advisory Desc'");
				$fetch=mysqli_fetch_assoc($selectAboutPageLegalAdvisoryDesc);
				$fetch_AboutPage_LegalAdvisory_Desc=$fetch['post'];
				echo $fetch_AboutPage_LegalAdvisory_Desc;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;color:black;" id="txt_AboutPage_LegalAdvisory_Desc"><?php echo $fetch_AboutPage_LegalAdvisory_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;color:white" id="edit_AboutPage_LegalAdvisory_Desc">Edit</a><a href="#" class="EditPenAboutPageLegalAdvisoryDesc" style="display:inline;color:white"><i class="fas fa-pen"></i></a>
					<select style="font-size:16px; color:black" id="AboutbackgroundColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
<?php include "@inc/teaminc.php";?>
    <!-- Team End -->
    

    <!-- Footer Start -->
 <?php include "@inc/footerinc.php";?>

    <!-- Footer End -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

 <!-- JavaScript Libraries -->
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
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
          <script src="js/script.js"></script>
<?php
				}}?>
</body>

</html>