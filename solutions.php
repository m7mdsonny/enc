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
    <title>Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Solutions" name="keywords">
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
<?php include "@inc/header_solutions.php";?>

        
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
                <h1 class="display-4 text-white">Solutions</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-6 px-5">
      <div class="row g-5">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol1">
						<?php
				
				$selectNetworkImage=mysqli_query($conn,"select * from posts_img where post_code='Network_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectNetworkImage);
				$selectSolutionImage_1=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_1;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution1_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution1"></i>
					</label>
									<?php }}?>
					        </form>       
            </div>
            <div class="col-lg-8" id="NetworkSecurity">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Network Security Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor38=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtNetworkSecurityTitle" style="color:<?php echo $postColor38;?> !important;">
				   <?php
				
				$selectNetworkSecuritySolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='Network Security Title'");
				$fetch=mysqli_fetch_assoc($selectNetworkSecuritySolutionPageTitle);
				$fetch_ENC_NetworkSecurity_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_NetworkSecurity_Solution_Page_Title;
				
				?>
				   </h1>
				   
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_NetworkSecurity_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_NetworkSecurity_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_NetworkSecurity_Solution_Page_Title">Edit</a><a href="#NetworkSecurity" class="EditPenENC_NetworkSecurity_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="SolutionNetworkSecurityColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtNetworkSecurityDesc">
  <?php
				
				$selectNetworkSecuritySolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='Network Security Desc'");
				$fetch=mysqli_fetch_assoc($selectNetworkSecuritySolutionPageDesc);
				$fetch_ENC_NetworkSecurity_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_NetworkSecurity_Solution_Page_Desc;
				
				?>
</p> 
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_NetworkSecurity_Desc"><?php echo $fetch_ENC_NetworkSecurity_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_NetworkSecurity_Desc">Edit</a><a href="#NetworkSecurity" class="EditPenSoltuionPage_NetworkSecurity_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>   
          </div>
            </div>
        </div>  
		
		
		      <div class="row g-5 py-6">

            <div class="col-lg-8" id="IPTelephony">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='IP Telephony Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor39=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtIPTelephonyTitle" style="color:<?php echo $postColor39;?> !important;"><?php
				
				$selectIPTelephonySolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='IP Telephony Title'");
				$fetch=mysqli_fetch_assoc($selectIPTelephonySolutionPageTitle);
				$fetch_ENC_IPTelephony_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_IPTelephony_Solution_Page_Title;
				
				?></h1>
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_IPTelephony_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_IPTelephony_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_IPTelephony_Solution_Page_Title">Edit</a><a href="#IPTelephony" class="EditPenENC_IPTelephony_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="SolutionIPColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtIPTelephonyDesc">
<?php
				
				$selectIPTelephonySolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='IP Telephony Desc'");
				$fetch=mysqli_fetch_assoc($selectIPTelephonySolutionPageDesc);
				$fetch_ENC_IPTelephony_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_IPTelephony_Solution_Page_Desc;
				
				?>
</p>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_IPTelephony_Desc"><?php echo $fetch_ENC_IPTelephony_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_IPTelephony_Desc">Edit</a><a href="#IPTelephony" class="EditPenSoltuionPage_IPTelephony_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?> 
</div>
            </div>
			            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol2">
						<?php
				
				$selectIPImage=mysqli_query($conn,"select * from posts_img where post_code='IP_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectIPImage);
				$selectSolutionImage_2=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_2;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution2_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution2"></i>
					</label>
									<?php }}?>
					        </form>      
            </div>
        </div>  
		
		
		     <div class="row g-5 py-6">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol3">
						<?php
				
				$selectRoutingImage=mysqli_query($conn,"select * from posts_img where post_code='Routing_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectRoutingImage);
				$selectSolutionImage_3=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_3;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution3_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution3"></i>
					</label>
									<?php }}?>
					        </form>       
            </div>
            <div class="col-lg-8" id="Routing">
                <div class="team-item position-relative overflow-hidden">
								<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Routing Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor40=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtRoutingTitle" style="color:<?php echo $postColor40;?> !important;">
				   <?php
				
				$selectRoutingSolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='Routing Title'");
				$fetch=mysqli_fetch_assoc($selectRoutingSolutionPageTitle);
				$fetch_ENC_Routing_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_Routing_Solution_Page_Title;
				
				?>
				   </h1>
				   
				   <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_Routing_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_Routing_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Routing_Solution_Page_Title">Edit</a><a href="#Routing" class="EditPenENC_Routing_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
					<select style="font-size:16px; color:black" id="SolutionRoutingColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtRoutingDesc">
<?php
				
				$selectRoutingSolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='Routing Desc'");
				$fetch=mysqli_fetch_assoc($selectRoutingSolutionPageDesc);
				$fetch_ENC_Routing_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_Routing_Solution_Page_Desc;
				
				?>
</p>

<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_Routing_Desc"><?php echo $fetch_ENC_Routing_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_Routing_Desc">Edit</a><a href="#Routing" class="EditPenSoltuionPage_Routing_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
        </div> 

   <div class="row g-5 py-6">

            <div class="col-lg-8" id="Wireless">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Wireless Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor41=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtWirelessTitle" style="color:<?php echo $postColor41;?> !important;">
				    <?php
				
				$selectWirelessSolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='Wireless Title'");
				$fetch=mysqli_fetch_assoc($selectWirelessSolutionPageTitle);
				$fetch_ENC_Wireless_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_Wireless_Solution_Page_Title;
				
				?>
				   </h1>
				   
				     <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_Wireless_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_Wireless_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Wireless_Solution_Page_Title">Edit</a><a href="#Wireless" class="EditPenENC_Wireless_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="SolutionWirelessColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtWirelessDesc">
<?php
				
				$selectWirelessSolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='Wireless Desc'");
				$fetch=mysqli_fetch_assoc($selectWirelessSolutionPageDesc);
				$fetch_ENC_Wireless_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_Wireless_Solution_Page_Desc;
				
				?>
</p>


<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_Wireless_Desc"><?php echo $fetch_ENC_Wireless_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_Wireless_Desc">Edit</a><a href="#Wireless" class="EditPenSoltuionPage_Wireless_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
            </div>
			            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol4">
						<?php
				
				$selectWirelessImage=mysqli_query($conn,"select * from posts_img where post_code='Wireless_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectWirelessImage);
				$selectSolutionImage_4=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_4;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution4_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution4"></i>
					</label>
									<?php }}?>
					        </form>      
            </div>
        </div> 

     <div class="row g-5 py-6">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol5">
						<?php
				
				$selectDataImage=mysqli_query($conn,"select * from posts_img where post_code='Data_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectDataImage);
				$selectSolutionImage_5=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_5;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution5_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution5"></i>
					</label>
									<?php }}?>
					        </form>      
            </div>
            <div class="col-lg-8" id="DataCenters">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Data Centers Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor42=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtDataCentersTitle" style="color:<?php echo $postColor42;?> !important;">
				   <?php
				
				$selectDataCentersSolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='Data Centers Title'");
				$fetch=mysqli_fetch_assoc($selectDataCentersSolutionPageTitle);
				$fetch_ENC_DataCenters_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_DataCenters_Solution_Page_Title;
				
				?>
				   </h1>
				   
				     <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_DataCenters_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_DataCenters_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_DataCenters_Solution_Page_Title">Edit</a><a href="#DataCenters" class="EditPenENC_DataCenters_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="SolutionDataCenterColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtDataCentersDesc"> 
<?php
				
				$selectDataCentersSolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='Data Centers Desc'");
				$fetch=mysqli_fetch_assoc($selectDataCentersSolutionPageDesc);
				$fetch_ENC_DataCenters_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_DataCenters_Solution_Page_Desc;
				
				?>
</p>

<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_DataCenters_Desc"><?php echo $fetch_ENC_DataCenters_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_DataCenters_Desc">Edit</a><a href="#DataCenters" class="EditPenSoltuionPage_DataCenters_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
        </div>  		
    </div>
	     <div class="row g-5">

            <div class="col-lg-8" id="Server">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Server Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor43=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtforServerTitle" style="color:<?php echo $postColor43;?> !important;">
				   <?php
				
				$selectServerSolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='Server Title'");
				$fetch=mysqli_fetch_assoc($selectServerSolutionPageTitle);
				$fetch_ENC_Server_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_Server_Solution_Page_Title;
				
				?>
				   </h1>
				   
				     <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_Server_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_Server_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Server_Solution_Page_Title">Edit</a><a href="#DataCenters" class="EditPenENC_Server_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="SolutionServerColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtforServerDesc">
<?php
				
				$selectServerSolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='Server Desc'");
				$fetch=mysqli_fetch_assoc($selectServerSolutionPageDesc);
				$fetch_ENC_Server_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_Server_Solution_Page_Desc;
				
				?>
</p>


<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_Server_Desc"><?php echo $fetch_ENC_Server_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_Server_Desc">Edit</a><a href="#Server" class="EditPenSoltuionPage_Server_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
            </div>
			            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol6">
						<?php
				
				$selectServerImage=mysqli_query($conn,"select * from posts_img where post_code='Server_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectServerImage);
				$selectSolutionImage_6=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_6;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution6_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution6"></i>
					</label>
									<?php }}?>
					        </form>     
            </div>
        </div>
		
		     <div class="row g-5 py-6">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol7">
						<?php
				
				$selectSecurityImage=mysqli_query($conn,"select * from posts_img where post_code='Security_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectSecurityImage);
				$selectSolutionImage_7=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_7;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution7_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution7"></i>
					</label>
									<?php }}?>
					        </form>     
            </div>
            <div class="col-lg-8" id="Security">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Security Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor44=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtforSecurityTitle" style="color:<?php echo $postColor44;?> !important;">
				   
				   <?php
				
				$selectSecuritySolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='Security Title'");
				$fetch=mysqli_fetch_assoc($selectSecuritySolutionPageTitle);
				$fetch_ENC_Security_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_Security_Solution_Page_Title;
				
				?>
				   </h1>
				   
				     <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_Security_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_Security_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Security_Solution_Page_Title">Edit</a><a href="#Security" class="EditPenENC_Security_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
								<select style="font-size:16px; color:black" id="SolutionSecurityColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtforSecurityDesc">
   <?php
				
				$selectSecuritySolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='Security Desc'");
				$fetch=mysqli_fetch_assoc($selectSecuritySolutionPageDesc);
				$fetch_ENC_Security_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_Security_Solution_Page_Desc;
				
				?>
</p>

<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_Security_Desc"><?php echo $fetch_ENC_Security_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_Security_Desc">Edit</a><a href="#Server" class="EditPenSoltuionPage_Security_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>  		
    </div>
    </div>
	
	
			      <div class="row g-5 py-6">

            <div class="col-lg-8" id="Virtualization">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Virtualization Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor45=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtforVirtualizationTitle" style="color:<?php echo $postColor45;?> !important;">
				   <?php
				
				$selectVirtualizationSolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='Virtualization Title'");
				$fetch=mysqli_fetch_assoc($selectVirtualizationSolutionPageTitle);
				$fetch_ENC_Virtualization_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_Virtualization_Solution_Page_Title;
				
				?>
				   </h1>
				   
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_Virtualization_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_Virtualization_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Virtualization_Solution_Page_Title">Edit</a><a href="#Virtualization" class="EditPenENC_Virtualization_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="SolutionVirtualizationColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtforVirtualizationDesc"> 
<?php
				
				$selectVirtualizationSolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='Virtualization Desc'");
				$fetch=mysqli_fetch_assoc($selectVirtualizationSolutionPageDesc);
				$fetch_ENC_Virtualization_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_Virtualization_Solution_Page_Desc;
				
				?>
</p>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_Virtualization_Desc"><?php echo $fetch_ENC_Virtualization_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_Virtualization_Desc">Edit</a><a href="#Virtualization" class="EditPenSoltuionPage_Virtualization_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
            </div>
			            <div class="col-lg-4">
						<form method="post" action="" enctype="multipart/form-data" id="myformimgSol8">
						<?php
				
				$selectVirtualizationImage=mysqli_query($conn,"select * from posts_img where post_code='Virtualization_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectVirtualizationImage);
				$selectSolutionImage_8=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_8;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution8_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution8"></i>
					</label>
									<?php }}?>
					        </form>     
            </div>
        </div>

      <div class="row g-5">
            <div class="col-lg-4">
									<form method="post" action="" enctype="multipart/form-data" id="myformimgSol9">
						<?php
				
				$selectPowerImage=mysqli_query($conn,"select * from posts_img where post_code='Power_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectPowerImage);
				$selectSolutionImage_9=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_9;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution9_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution9"></i>
					</label>
									<?php }}?>
					        </form> 
     
            </div>
            <div class="col-lg-8" id="Power">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Power Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor46=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtforPowerTitle" style="color:<?php echo $postColor46;?> !important;"><?php
				
				$selectPowerSolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='Power Title'");
				$fetch=mysqli_fetch_assoc($selectPowerSolutionPageTitle);
				$fetch_ENC_Power_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_Power_Solution_Page_Title;
				
				?>
				</h1>
					<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_Power_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_Power_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Power_Solution_Page_Title">Edit</a><a href="#Power" class="EditPenENC_Power_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="SolutionPowerColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtforPowerDesc">
<?php
				
				$selectPowerSolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='Power Desc'");
				$fetch=mysqli_fetch_assoc($selectPowerSolutionPageDesc);
				$fetch_ENC_Power_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_Power_Solution_Page_Desc;
				
				?>
</p>
<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_Power_Desc"><?php echo $fetch_ENC_Power_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_Power_Desc">Edit</a><a href="#Power" class="EditPenSoltuionPage_Power_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
            </div>
        </div> 

		      <div class="row g-5 py-6">

            <div class="col-lg-8" id="Software">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Software Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor47=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtforSoftwareTitle" style="color:<?php echo $postColor47;?> !important;">
				   <?php
				
				$selectSoftwareSolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='Software Title'");
				$fetch=mysqli_fetch_assoc($selectSoftwareSolutionPageTitle);
				$fetch_ENC_Software_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_Software_Solution_Page_Title;
				
				?>
				   </h1>
				   
				   <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_Software_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_Software_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Software_Solution_Page_Title">Edit</a><a href="#Software" class="EditPenENC_Software_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="SolutionSoftwareColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtforSoftwareDesc">
<?php
				
				$selectSoftwareSolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='Software Desc'");
				$fetch=mysqli_fetch_assoc($selectSoftwareSolutionPageDesc);
				$fetch_ENC_Software_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_Software_Solution_Page_Desc;
				
				?>
</p>

<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_SolutionPage_Software_Desc"><?php echo $fetch_ENC_Software_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_SolutionPage_Software_Desc">Edit</a><a href="#Software" class="EditPenSoltuionPage_Software_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
            </div>
			            <div class="col-lg-4">
									<form method="post" action="" enctype="multipart/form-data" id="myformimgSol10">
						<?php
				
				$selectSoftwareImage=mysqli_query($conn,"select * from posts_img where post_code='Software_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectSoftwareImage);
				$selectSolutionImage_10=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_10;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution10_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution10"></i>
					</label>
									<?php }}?>
					        </form>      
            </div>
        </div> 

      <div class="row g-5">
            <div class="col-lg-4">
<form method="post" action="" enctype="multipart/form-data" id="myformimgSol11">
						<?php
				
				$selectMicrosoftSolutionImage=mysqli_query($conn,"select * from posts_img where post_code='MicrosoftSolution_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=mysqli_fetch_assoc($selectMicrosoftSolutionImage);
				$selectSolutionImage_11=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75" src="<?php echo $selectSolutionImage_11;?>" alt="" style="height: 300px;">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_Solution11_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-black file_upload_Solution11"></i>
					</label>
									<?php }}?>
					        </form>     
            </div>
            <div class="col-lg-8" id="ENCMicrosoftSolution">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='ENC Microsoft Solution Title'");
				$fetch=mysqli_fetch_assoc($selectabouttitle);
				$postColor48=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle txtENCMicrosoftSolutionTitle" style="color:<?php echo $postColor48;?> !important;">
			<?php
				
				$selectENCMicrosoftSolutionSolutionPageTitle=mysqli_query($conn,"select * from posts where post_code='ENC Microsoft Solution Title'");
				$fetch=mysqli_fetch_assoc($selectENCMicrosoftSolutionSolutionPageTitle);
				$fetch_ENC_ENCMicrosoftSolution_Solution_Page_Title=$fetch['post'];
				echo $fetch_ENC_ENCMicrosoftSolution_Solution_Page_Title;
				
				?>	   
				   </h1>
				   
				   <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_ENCMicrosoftSolution_Solution_Page_Title;?>" style="display:none;" id="txt_ENC_ENCMicrosoftSolution_Solution_Page_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_ENCMicrosoftSolution_Solution_Page_Title">Edit</a><a href="#ENCMicrosoftSolution" class="EditPenENC_ENCMicrosoftSolution_Solution_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="SolutionENCMicrosoftSolutionColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style="font-size: 18px;" class="txtENCMicrosoftSolutionDesc"> 
<?php
				
				$selectENCMicrosoftSolutionSolutionPageDesc=mysqli_query($conn,"select * from posts where post_code='ENC Microsoft Solution Desc'");
				$fetch=mysqli_fetch_assoc($selectENCMicrosoftSolutionSolutionPageDesc);
				$fetch_ENC_ENCMicrosoftSolution_Solution_Page_Desc=$fetch['post'];
				echo $fetch_ENC_ENCMicrosoftSolution_Solution_Page_Desc;
				
				?>
</p>

<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_ENCMicrosoftSolution_Solution_Page_Desc"><?php echo $fetch_ENC_ENCMicrosoftSolution_Solution_Page_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_ENCMicrosoftSolution_Solution_Page_Desc">Edit</a><a href="#ENCMicrosoftSolution" class="EditPenSoltuionPage_ENCMicrosoftSolution_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
</div>
            </div>
        </div>    		
    </div>
    </div>
    <!-- Services End -->
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