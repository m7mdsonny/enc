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
    <title>Partner</title>
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
<?php include __DIR__ . "/@inc/header_partner.php";?>

        
    <!-- Topbar End -->
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
                <h1 class="display-4 text-white">Partner</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-6 px-5">
      <div class="row g-5">
            <div class="col-lg-12 col-md-6 col-sm-3" id="partnerParagraph">
                    <p class="partnerParagraph" >
					<?php
				
				$selectENCPartnerParagraph=mysqli_query($conn,"select * from posts where post_code='partnerParagraph'");
				$fetch=enc_fetch_assoc($selectENCPartnerParagraph);
				$fetch_ENC_PartnerParagraph_Desc=$fetch['post'];
				echo $fetch_ENC_PartnerParagraph_Desc;
				
				?>	
					</P>
					
					<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_partnerParagraph_Desc"><?php echo $fetch_ENC_PartnerParagraph_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_partnerParagraph_Desc">Edit</a><a href="#partnerParagraph" class="EditPenpartnerParagraph_Desc" style="display:inline;color:black"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?></br>
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Our Partnership Level Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor49=$fetch['postcolor'];
				
				?>
     <h1 class="Ourpartnership" style="display:inline-block;color:<?php echo $postColor49;?> !important;"><?php
				
				$selectENCPartnerParagraphTitle=mysqli_query($conn,"select * from posts where post_code='Our Partnership Level Title'");
				$fetch=enc_fetch_assoc($selectENCPartnerParagraphTitle);
				$fetch_ENC_PartnerParagraph_Title=$fetch['post'];
				echo $fetch_ENC_PartnerParagraph_Title;
				
				?>	</h1>
				
				  <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_PartnerParagraph_Title;?>" style="display:none;" id="txt_partnerParagraph_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_ENC_OurPartner_Title">Edit</a><a href="#partnerParagraph" class="EditPenENC_partnerParagraph_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="PartnershipColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?></br>
				
				<?php
			$select=mysqli_query($conn,"select * from partner where partner_group='OurPartnership'");
				while($clientfetch=enc_fetch_assoc($select)){
				$partner_img=$clientfetch['partner_img'];
				$partner_id=$clientfetch['partner_id'];
			?>
	                     <img class="img-fluid" src="<?php echo $partner_img;?>" alt="" style="height: 92px;width:92px;">

                 <?php
				
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeiconPartnership" aria-hidden="true" id="<?php echo $partner_id;?>"></i>
					<?php
				}}}
				?>
            </div>
          	 <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
	<label>
					<input type="file" id="file_AddPartnerPartnership_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="btn btn-success">Add partner Partnership image</i>
					</label>	
					<?php
				}}
				?>
        </div>  

	    		
    </div>
    <!-- Services End -->
		<ul class="nav nav-tabs m-5">
  <li class="active"><a data-toggle="tab" href="#global_alliance">Global Alliance</a></li>
  <li><a data-toggle="tab" href="#system">System</a></li>
  <li><a data-toggle="tab" href="#network">Network</a></li>
  <li><a data-toggle="tab" href="#network_passive">Network Passive Infrastructure</a></li>
  <li><a data-toggle="tab" href="#server_desktop">Server / Desktop</a></li>
  <li><a data-toggle="tab" href="#security">Security</a></li>
  <li><a data-toggle="tab" href="#ups_kvm">UPS and KVM</a></li>
  <li><a data-toggle="tab" href="#network_manage">Network Management / Test tools </a></li>
</ul>

<div class="tab-content m-5">
  <div id="global_alliance" class="tab-pane fade in active">
    <h3></h3>
<?php
			$select=mysqli_query($conn,"select * from partner where partner_group='Global'");
				while($clientfetch=enc_fetch_assoc($select)){
				$partner_img=$clientfetch['partner_img'];
				$partner_id=$clientfetch['partner_id'];
			?>
	                     <img class="img-fluid" src="<?php echo $partner_img;?>" alt="" style="height: 92px;width:15%;">

                 <?php
				
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeiconGlobal" aria-hidden="true" id="<?php echo $partner_id;?>"></i>
					<?php
				}}}
				?>
</br>
    	 <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?> 
<label>
<input type="file" id="file_AddPartnerGlobal_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
<i class="btn btn-success btnglobal">Add partner global image</i>
</label>
<?php
				}}
								?>
</div>
  <div id="system" class="tab-pane fade">
    <h3></h3>
<?php
			$select=mysqli_query($conn,"select * from partner where partner_group='System'");
				while($clientfetch=enc_fetch_assoc($select)){
				$partner_img=$clientfetch['partner_img'];
				$partner_id=$clientfetch['partner_id'];
			?>
	                     <img class="img-fluid" src="<?php echo $partner_img;?>" alt="" style="height: 92px;width:15%;">

                 <?php
				
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeiconSystem" aria-hidden="true" id="<?php echo $partner_id;?>"></i>
					<?php
				}}}
				?>
</br>
 <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?> 
	<label>
<input type="file" id="file_AddPartnerSystem_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
<i class="btn btn-success">Add partner system image</i>
</label>
<?php
				}}
								?>	
 </div>
 
  <div id="network" class="tab-pane fade">
    <h3></h3>
 <?php
			$select=mysqli_query($conn,"select * from partner where partner_group='Network'");
				while($clientfetch=enc_fetch_assoc($select)){
				$partner_img=$clientfetch['partner_img'];
				$partner_id=$clientfetch['partner_id'];
			?>
	                     <img class="img-fluid" src="<?php echo $partner_img;?>" alt="" style="height: 92px;width:15%;">

                 <?php
				
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeiconNetwork" aria-hidden="true" id="<?php echo $partner_id;?>"></i>
					<?php
				}}}
				?>
</br>
 <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?> 
	<label>
<input type="file" id="file_AddPartnerNetwork_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
<i class="btn btn-success">Add partner network image</i>
</label> 
<?php
				}}
				?>
  </div>
  
    <div id="network_passive" class="tab-pane fade">
    <h3></h3>
 <?php
			$select=mysqli_query($conn,"select * from partner where partner_group='NetworkPassive'");
				while($clientfetch=enc_fetch_assoc($select)){
				$partner_img=$clientfetch['partner_img'];
				$partner_id=$clientfetch['partner_id'];
			?>
	                     <img class="img-fluid" src="<?php echo $partner_img;?>" alt="" style="height: 92px;width:15%;">

                 <?php
				
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeiconNetworkPassive" aria-hidden="true" id="<?php echo $partner_id;?>"></i>
					<?php
				}}}
				?> 
 </br>
  <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?> 
	<label>
<input type="file" id="file_AddPartnerNetworkPassive_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
<i class="btn btn-success">Add partner network passive image</i>
</label> 
<?php
				}}
				?>
  </div>
  
    
    <div id="server_desktop" class="tab-pane fade">
    <h3></h3>
<?php
			$select=mysqli_query($conn,"select * from partner where partner_group='ServerDesktop'");
				while($clientfetch=enc_fetch_assoc($select)){
				$partner_img=$clientfetch['partner_img'];
				$partner_id=$clientfetch['partner_id'];
			?>
	                     <img class="img-fluid" src="<?php echo $partner_img;?>" alt="" style="height: 92px;width:13%;">

                 <?php
				
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeiconServerDesktop" aria-hidden="true" id="<?php echo $partner_id;?>"></i>
					<?php
				}}}
				?> 
</br>   
  <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?> 
 	<label>
<input type="file" id="file_AddPartnerServerDesktop_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
<i class="btn btn-success">Add partner Server / Desktop image</i>
</label>
<?php
				}}
				?>
  </div>
      <div id="security" class="tab-pane fade">
    <h3></h3>
  <?php
			$select=mysqli_query($conn,"select * from partner where partner_group='Security'");
				while($clientfetch=enc_fetch_assoc($select)){
				$partner_img=$clientfetch['partner_img'];
				$partner_id=$clientfetch['partner_id'];
			?>
	                     <img class="img-fluid" src="<?php echo $partner_img;?>" alt="" style="height: 92px;width:13%;">

                 <?php
				
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeiconSecurity" aria-hidden="true" id="<?php echo $partner_id;?>"></i>
					<?php
				}}}
				?> 
</br>   
  <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?> 
 	<label>
<input type="file" id="file_AddPartnerSecurity_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
<i class="btn btn-success">Add partner Security image</i>
</label>
 <?php
				}}
				?>
  </div>
  
        <div id="ups_kvm" class="tab-pane fade">
    <h3></h3>
   <?php
			$select=mysqli_query($conn,"select * from partner where partner_group='UPS'");
				while($clientfetch=enc_fetch_assoc($select)){
				$partner_img=$clientfetch['partner_img'];
				$partner_id=$clientfetch['partner_id'];
			?>
	                     <img class="img-fluid" src="<?php echo $partner_img;?>" alt="" style="height: 92px;width:13%;">

                 <?php
				
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeiconUPS" aria-hidden="true" id="<?php echo $partner_id;?>"></i>
					<?php
				}}}
				?> 
</br>   
  <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?> 
 	<label>
<input type="file" id="file_AddPartnerUPS_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
<i class="btn btn-success">Add partner UPS / KVM image</i>
</label>
 <?php
				}}
				?>
  </div>
          <div id="network_manage" class="tab-pane fade">
    <h3></h3>
    <?php
			$select=mysqli_query($conn,"select * from partner where partner_group='NetworkManage'");
				while($clientfetch=enc_fetch_assoc($select)){
				$partner_img=$clientfetch['partner_img'];
				$partner_id=$clientfetch['partner_id'];
			?>
	                     <img class="img-fluid" src="<?php echo $partner_img;?>" alt="" style="height: 92px;width:13%;">

                 <?php
				
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeiconNetworkManage" aria-hidden="true" id="<?php echo $partner_id;?>"></i>
					<?php
				}}}
				?> 
</br>   
  <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?> 
 	<label>
<input type="file" id="file_AddPartnerNetworkManage_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
<i class="btn btn-success">Add partner Network Manage image</i>
</label>
<?php
								}
				}
				?>
  </div>
</div>
    

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