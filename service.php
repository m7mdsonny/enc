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
    <title>Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Service" name="keywords">
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
<?php include __DIR__ . "/@inc/header_services.php";?>
<div id="partner"> 
    
<?php
 include __DIR__ . "/@inc/Clientbanner.php";
?>
<hr>
<?php
 include __DIR__ . "/@inc/Partnerbanner.php";
?>
    </div>
    <!-- Navbar Start -->
<?php include __DIR__ . "/@inc/sidebarcommunicte.php";?>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Services</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-6 px-5">
      <div class="row g-5" id="ProfServices">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgServ1">
						<?php
				
				$selectENCProfServicesImage=mysqli_query($conn,"select * from posts_img where post_code='ENCProfServices_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectENCProfServicesImage);
				$selectServiceImage_1=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectServiceImage_1;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Service1_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Service1"></i>
					</label>
									<?php }}?>
					        </form>     
            </div>
            <div class="col-lg-8">
                <div class="team-item position-relative overflow-hidden">
							 <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='ENC Prof Services Services Page'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor30=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtServicesTitleServicesPage" style="color:<?php echo $postColor30;?> !important;"><?php
				
				$selectProfServicesServicesPageTitle=mysqli_query($conn,"select * from posts where post_code='ENC Prof Services Services Page'");
				$fetch=enc_fetch_assoc($selectProfServicesServicesPageTitle);
				$fetch_ENC_Prof_Services_Services_Page_Title=$fetch['post'];
				echo $fetch_ENC_Prof_Services_Services_Page_Title;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_Prof_Services_Services_Page_Title;?>" style="display:none;" id="txt_ENC_Prof_Services_Services_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Prof_Services_Services_Page_Title">Edit</a><a href="#ProfServices" class="EditPenENC_Prof_Services_Services_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="ServiceProfColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtServicesPageProfServicesDesc">
<?php
				
				$selectProfServicesServicesPageDesc=mysqli_query($conn,"select * from posts where post_code='Prof Services Services Page Desc'");
				$fetch=enc_fetch_assoc($selectProfServicesServicesPageDesc);
				$fetch_ENC_Prof_Services_Services_Page_Desc=$fetch['post'];
				echo $fetch_ENC_Prof_Services_Services_Page_Desc;
				
				?>
</p>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_ServicesPage_ProfServices_Desc"><?php echo $fetch_ENC_Prof_Services_Services_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_ServicesPage_ProfServices_Desc">Edit</a><a href="#ProfServices" class="EditPenServicesPage_ProfServices_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
            </div>
        </div>  
		
		
		      <div class="row g-5 py-6">

            <div class="col-lg-8" id="PPDIOO">
                <div class="team-item position-relative overflow-hidden">
					 <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='PPDIOO Services Page Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor31=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtPPDIOOServicesPageTitle" style="color:<?php echo $postColor31;?> !important;"><?php
				
				$selectPPDIOOServicesPageTitle=mysqli_query($conn,"select * from posts where post_code='PPDIOO Services Page Title'");
				$fetch=enc_fetch_assoc($selectPPDIOOServicesPageTitle);
				$fetch_ENC_PPDIOO_Services_Page_Title=$fetch['post'];
				echo $fetch_ENC_PPDIOO_Services_Page_Title;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_PPDIOO_Services_Page_Title;?>" style="display:none;" id="txt_ENC_PPDIOO_Services_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_PPDIOO_Services_Page_Title">Edit</a><a href="#PPDIOO" class="EditPenENC_PPDIOO_Services_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="ServicePPDIOOColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtPPDIODesc">
<?php
				
				$selectPPDIOOServicesPageDesc=mysqli_query($conn,"select * from posts where post_code='PPDIOO Services Page Desc'");
				$fetch=enc_fetch_assoc($selectPPDIOOServicesPageDesc);
				$fetch_ENC_PPDIOO_Services_Page_Desc=$fetch['post'];
				echo $fetch_ENC_PPDIOO_Services_Page_Desc;
				
				?>
</p>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_ServicesPage_PPDIOO_Desc"><?php echo $fetch_ENC_PPDIOO_Services_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_ServicesPage_PPDIOO_Desc">Edit</a><a href="#PPDIOO" class="EditPenServicesPage_PPDIOO_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
            </div>
			            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgServ2">
						<?php
				
				$selectPPDIOOImage=mysqli_query($conn,"select * from posts_img where post_code='PPDIOO_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectPPDIOOImage);
				$selectServiceImage_2=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectServiceImage_2;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Service2_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Service2"></i>
					</label>
									<?php }}?>
					        </form>        
            </div>
        </div>  
		
		
		     <div class="row g-5 py-6">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgServ3">
						<?php
				
				$selectSLAImage=mysqli_query($conn,"select * from posts_img where post_code='SLA_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectSLAImage);
				$selectServiceImage_3=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectServiceImage_3;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Service3_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Service3"></i>
					</label>
									<?php }}?>
					        </form>       
            </div>
            <div class="col-lg-8" id="SLAResident">
                <div class="team-item position-relative overflow-hidden">
				 <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='SLA Resident Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor32=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtSLAResidentTitle" style="color:<?php echo $postColor32;?> !important;"><?php
				
				$selectSLAResidentTitleServicesPageTitle=mysqli_query($conn,"select * from posts where post_code='SLA Resident Title'");
				$fetch=enc_fetch_assoc($selectSLAResidentTitleServicesPageTitle);
				$fetch_ENC_SLAResidentTitle_Services_Page_Title=$fetch['post'];
				echo $fetch_ENC_SLAResidentTitle_Services_Page_Title;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_SLAResidentTitle_Services_Page_Title;?>" style="display:none;" id="txt_ENC_SLAResident_Services_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_SLAResident_Services_Page_Title">Edit</a><a href="#SLAResident" class="EditPenENC_SLAResident_Services_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
								<select style="font-size:16px; color:black" id="ServiceSLAColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtSLAResidentDesc">
<?php
				
				$selectSLAResidentTitleServicesPageDesc=mysqli_query($conn,"select * from posts where post_code='SLA Resident Desc'");
				$fetch=enc_fetch_assoc($selectSLAResidentTitleServicesPageDesc);
				$fetch_ENC_SLAResidentTitle_Services_Page_Desc=$fetch['post'];
				echo $fetch_ENC_SLAResidentTitle_Services_Page_Desc;
				
				?>				
</p>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_ServicesPage_SLAResident_Desc"><?php echo $fetch_ENC_SLAResidentTitle_Services_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_ServicesPage_SLAResident_Desc">Edit</a><a href="#SLAResident" class="EditPenServicesPage_SLAResident_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
        </div> 
        </div> 

   <div class="row g-5 py-6">

            <div class="col-lg-8" id="HelpDesk">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Helpdesk Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor33=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtHelpDeskTitle" style="color:<?php echo $postColor33;?> !important;">
				   <?php
				$selectHelpDeskServicesPageTitle=mysqli_query($conn,"select * from posts where post_code='Helpdesk Title'");
				$fetch=enc_fetch_assoc($selectHelpDeskServicesPageTitle);
				$fetch_ENC_HelpDesk_Services_Page_Title=$fetch['post'];
				echo $fetch_ENC_HelpDesk_Services_Page_Title;
				?>
				   
				   </h1>
				   <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_HelpDesk_Services_Page_Title;?>" style="display:none;" id="txt_ENC_HelpDesk_Services_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_HelpDesk_Services_Page_Title">Edit</a><a href="#HelpDesk" class="EditPenENC_HelpDesk_Services_Page_Title" style="display:inline;"><i class="fas fa-pen"></i></a>
					<select style="font-size:16px; color:black" id="ServiceHelpDeskColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtHelpDeskDesc"> 
<?php
				$selectHelpDeskServicesPageDesc=mysqli_query($conn,"select * from posts where post_code='Helpdesk Desc'");
				$fetch=enc_fetch_assoc($selectHelpDeskServicesPageDesc);
				$fetch_ENC_HelpDesk_Services_Page_Desc=$fetch['post'];
				echo $fetch_ENC_HelpDesk_Services_Page_Desc;
				?>
</p>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_ServicesPage_HelpDesk_Desc"><?php echo $fetch_ENC_HelpDesk_Services_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_ServicesPage_HelpDesk_Desc">Edit</a><a href="#HelpDesk" class="EditPenServicesPage_HelpDesk_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
</div>
			            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgServ4">
						<?php
				
				$selectHelpdeskImage=mysqli_query($conn,"select * from posts_img where post_code='Helpdesk_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectHelpdeskImage);
				$selectServiceImage_4=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectServiceImage_4;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Service4_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Service4"></i>
					</label>
									<?php }}?>
					        </form>       
            </div>
        </div> 

     <div class="row g-5 py-6">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgServ5">
						<?php
				
				$selectGlobalFieldImage=mysqli_query($conn,"select * from posts_img where post_code='GlobalField_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectGlobalFieldImage);
				$selectServiceImage_5=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectServiceImage_5;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Service5_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Service5"></i>
					</label>
									<?php }}?>
					        </form>     
            </div>
            <div class="col-lg-8" id="GlobalField">
                <div class="team-item position-relative overflow-hidden">
					<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Global Field Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor34=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtGlobalFieldTitle" style="color:<?php echo $postColor34;?> !important;">
				   <?php
				$selectGlobalFieldServicesPageTitle=mysqli_query($conn,"select * from posts where post_code='Global Field Title'");
				$fetch=enc_fetch_assoc($selectGlobalFieldServicesPageTitle);
				$fetch_ENC_GlobalField_Services_Page_Title=$fetch['post'];
				echo $fetch_ENC_GlobalField_Services_Page_Title;
				?>
				   </h1>
				      <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_GlobalField_Services_Page_Title;?>" style="display:none;" id="txt_ENC_GlobalField_Services_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_GlobalField_Services_Page_Title">Edit</a><a href="#GlobalField" class="EditPenENC_GlobalField_Services_Page_Title" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="ServiceGlobalFieldColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtGlobalFieldDesc"> 
<?php
				$selectGlobalFieldServicesPageDesc=mysqli_query($conn,"select * from posts where post_code='Global Field Desc'");
				$fetch=enc_fetch_assoc($selectGlobalFieldServicesPageDesc);
				$fetch_ENC_GlobalField_Services_Page_Desc=$fetch['post'];
				echo $fetch_ENC_GlobalField_Services_Page_Desc;
				?>
</p>

<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_ServicesPage_GlobalField_Desc"><?php echo $fetch_ENC_GlobalField_Services_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_ServicesPage_GlobalField_Desc">Edit</a><a href="#GlobalField" class="EditPenServicesPage_GlobalField_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>  		
    </div>
	     <div class="row g-5">

            <div class="col-lg-8" id="GlobalProf">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Global Professional Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor35=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtGlobalProf" style="color:<?php echo $postColor35;?> !important;">
				   <?php
				$selectGlobalProfServicesPageTitle=mysqli_query($conn,"select * from posts where post_code='Global Professional Title'");
				$fetch=enc_fetch_assoc($selectGlobalProfServicesPageTitle);
				$fetch_ENC_GlobalProf_Services_Page_Title=$fetch['post'];
				echo $fetch_ENC_GlobalProf_Services_Page_Title;
				?>
				   </h1>
				   
				   <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_GlobalProf_Services_Page_Title;?>" style="display:none;" id="txt_ENC_GlobalProf_Services_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_GlobalProf_Services_Page_Title">Edit</a><a href="#GlobalProf" class="EditPenENC_GlobalProf_Services_Page_Title" style="display:inline;"><i class="fas fa-pen"></i></a>
					<select style="font-size:16px; color:black" id="ServiceGlobalProfColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtGlobalProfDesc">
<?php
				$selectGlobalProfServicesPageDesc=mysqli_query($conn,"select * from posts where post_code='Global Professional Desc'");
				$fetch=enc_fetch_assoc($selectGlobalProfServicesPageDesc);
				$fetch_ENC_GlobalProf_Services_Page_Desc=$fetch['post'];
				echo $fetch_ENC_GlobalProf_Services_Page_Desc;
				?>
</p>

<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_ServicesPage_GlobalProf_Desc"><?php echo $fetch_ENC_GlobalProf_Services_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_ServicesPage_GlobalProf_Desc">Edit</a><a href="#GlobalProf" class="EditPenServicesPage_GlobalProf_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
</div>
			            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgServ6">
						<?php
				
				$selectGlobalProfImage=mysqli_query($conn,"select * from posts_img where post_code='GlobalProfessional_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectGlobalProfImage);
				$selectServiceImage_6=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectServiceImage_6;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Service6_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Service6"></i>
					</label>
									<?php }}?>
					        </form>      
            </div>
        </div>
		
		     <div class="row g-5 py-6">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgServ7">
						<?php
				
				$selectPenetrationImage=mysqli_query($conn,"select * from posts_img where post_code='Penetration_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectPenetrationImage);
				$selectServiceImage_7=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectServiceImage_7;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Service7_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Service7"></i>
					</label>
									<?php }}?>
					        </form>      
            </div>
            <div class="col-lg-8" id="Penetrationtesting">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Penetration Testing Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor36=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtPenetrationtestingTitle" style="color:<?php echo $postColor36;?> !important;">
				   <?php
				$selectPenetrationTestingServicesPageTitle=mysqli_query($conn,"select * from posts where post_code='Penetration Testing Title'");
				$fetch=enc_fetch_assoc($selectPenetrationTestingServicesPageTitle);
				$fetch_ENC_PenetrationTesting_Services_Page_Title=$fetch['post'];
				echo $fetch_ENC_PenetrationTesting_Services_Page_Title;
				?>
				   </h1>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_PenetrationTesting_Services_Page_Title;?>" style="display:none;" id="txt_ENC_Penetrationtesting_Services_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Penetrationtesting_Services_Page_Title">Edit</a><a href="#Penetrationtesting" class="EditPenENC_Penetrationtesting_Services_Page_Title" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="ServicePenetrationTestingColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtPenetrationtestingDesc"> 
<?php
				$selectPenetrationTestingServicesPageDesc=mysqli_query($conn,"select * from posts where post_code='Penetration Testing Desc'");
				$fetch=enc_fetch_assoc($selectPenetrationTestingServicesPageDesc);
				$fetch_ENC_PenetrationTesting_Services_Page_Desc=$fetch['post'];
				echo $fetch_ENC_PenetrationTesting_Services_Page_Desc;
				?>
</p>

<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_ServicesPage_PenetrationTesting_Desc"><?php echo $fetch_ENC_PenetrationTesting_Services_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_ServicesPage_PenetrationTesting_Desc">Edit</a><a href="#Penetrationtesting" class="EditPenServicesPage_PenetrationTesting_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
    </div>
	
	
			      <div class="row g-5 py-6">

            <div class="col-lg-8" id="HumanResource">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Human Resource Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor37=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtHumanResourceTitle" style="color:<?php echo $postColor37;?> !important;">
				   <?php
				$selectHumanResourceServicesPageTitle=mysqli_query($conn,"select * from posts where post_code='Human Resource Title'");
				$fetch=enc_fetch_assoc($selectHumanResourceServicesPageTitle);
				$fetch_ENC_HumanResource_Services_Page_Title=$fetch['post'];
				echo $fetch_ENC_HumanResource_Services_Page_Title;
				?>
				   </h1>
		<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_HumanResource_Services_Page_Title;?>" style="display:none;" id="txt_ENC_HumanResource_Services_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_HumanResource_Services_Page_Title">Edit</a><a href="#HumanResource" class="EditPenENC_HumanResource_Services_Page_Title" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="ServiceHumanResourceColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>		   
				   
<p style="font-size: 18px;" class="txtHumanResourceDesc">
<?php
				$selectHumanResourceServicesPageDesc=mysqli_query($conn,"select * from posts where post_code='Human Resource Desc'");
				$fetch=enc_fetch_assoc($selectHumanResourceServicesPageDesc);
				$fetch_ENC_HumanResource_Services_Page_Desc=$fetch['post'];
				echo $fetch_ENC_HumanResource_Services_Page_Desc;
				?>
</p>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_ServicesPage_HumanResource_Desc"><?php echo $fetch_ENC_HumanResource_Services_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_ServicesPage_HumanResource_Desc">Edit</a><a href="#HumanResource" class="EditPenServicesPage_HumanResource_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
            </div>
			            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgServ8">
						<?php
				
				$selectHumanResourceImage=mysqli_query($conn,"select * from posts_img where post_code='HumanResource_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectHumanResourceImage);
				$selectServiceImage_8=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectServiceImage_8;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Service8_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Service8"></i>
					</label>
									<?php }}?>
					        </form>      
            </div>
        </div>  		
    </div>
    </div>
    </div>
    <!-- Services End -->

    

    <!-- Footer Start -->
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