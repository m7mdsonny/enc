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
    <title>Global reach</title>
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
<?php include "@inc/header_global.php";?>

        
    <!-- Topbar End -->
<div id="partner"> 
    
<?php
 include "@inc/Clientbanner.php";
?>
<hr>
<?php
 include "@inc/Partnerbanner.php";
?>
    </div>
    <!-- Navbar Start -->
	      <?php include "@inc/sidebarcommunicte.php";?>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Global Reach</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    

    <!-- Services Start -->
 <!-- Services Start -->
    <div class="container-fluid py-6 px-5">
      <div class="row g-5">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol1">
						<?php
				
				$selectGlobalReachImage1=mysqli_query($conn,"select * from posts_img where post_code='GlobalReach_image1' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectGlobalReachImage1);
				$selectGlobalReachImage_1=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectGlobalReachImage_1;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_GlobalReach1_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_GlobalReach1"></i>
					</label>
									<?php }}?>
					        </form>        
            </div>
            <div class="col-lg-8">
                <div class="team-item position-relative overflow-hidden" id="GlobalReach">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Global Reach Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor50=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtGlobalReachTitle" style="color:<?php echo $postColor50;?> !important;">
				   <?php
				$selectGlobalReachPageTitle=mysqli_query($conn,"select * from posts where post_code='Global Reach Title'");
				$fetch=mysqli_fetch_assoc($selectGlobalReachPageTitle);
				$fetch_ENC_GlobalReach_Page_Title=$fetch['post'];
				echo $fetch_ENC_GlobalReach_Page_Title;
				
				?> </h1>
				
					<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_GlobalReach_Page_Title;?>" style="display:none;" id="txt_ENC_GlobalReach_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_GlobalReach_Page_Title">Edit</a><a href="#GlobalReach" class="EditPenENC_GlobalReach_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="GlobalReachColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtGlobalReachDesc1">
<?php
				$selectGlobalReachPageDesc1=mysqli_query($conn,"select * from posts where post_code='Global Reach Desc1'");
				$fetch=mysqli_fetch_assoc($selectGlobalReachPageDesc1);
				$fetch_ENC_GlobalReach_Page_Desc1=$fetch['post'];
				echo $fetch_ENC_GlobalReach_Page_Desc1;
				
				?>
</p>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_GlobalReach_Desc1"><?php echo $fetch_ENC_GlobalReach_Page_Desc1;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_GlobalReach_Desc1">Edit</a><a href="#GlobalReach" class="EditPenGlobalReach_Desc1" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>  

</div>
            </div>
        </div>  
		
		
		      <div class="row g-5 py-6">

            <div class="col-lg-8">
                <div class="team-item position-relative overflow-hidden" id="GlobalReachDesc2">
                   <h1 class="txtforTitle"></h1>
<p style="font-size: 18px;" class="txtGlobalReachDesc2">
<?php
				$selectGlobalReachPageDesc2=mysqli_query($conn,"select * from posts where post_code='Global Reach Desc2'");
				$fetch=mysqli_fetch_assoc($selectGlobalReachPageDesc2);
				$fetch_ENC_GlobalReach_Page_Desc2=$fetch['post'];
				echo $fetch_ENC_GlobalReach_Page_Desc2;
				
				?>
 </p>
 <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_GlobalReach_Desc2"><?php echo $fetch_ENC_GlobalReach_Page_Desc2;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_GlobalReach_Desc2">Edit</a><a href="#GlobalReach" class="EditPenGlobalReach_Desc2" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?> 
 
 </div>
            </div>
			            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol1">
						<?php
				
				$selectGlobalReachImage2=mysqli_query($conn,"select * from posts_img where post_code='GlobalReach_image2' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectGlobalReachImage2);
				$selectGlobalReachImage_2=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectGlobalReachImage_2;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_GlobalReach2_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_GlobalReach2"></i>
					</label>
									<?php }}?>
					        </form>      
            </div>
        </div>  
        </div>  
		
    <!-- Services End -->
		
    <!-- Footer Start -->
 <?php include "@inc/footerinc.php";?>

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
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
          <script src="js/script.js"></script>
<?php
				}}?>
</body>
</html>