    <!-- Footer Start -->
	 <?php
 $selectSocial=mysqli_query($conn,"select * from socialmedia where (social_id='1')");
$socialfetch=enc_fetch_assoc($selectSocial);
$socialtwitter2=$socialfetch['Social_twitter'];
$socialfacebook2=$socialfetch['Social_facebook'];
$Sociallinkedin2=$socialfetch['Social_linkedin'];
$Socialphone2=$socialfetch['Social_phone'];
$SocialWhatsapp2=$socialfetch['Social_Whatsapp'];
$Socialemail2=$socialfetch['Social_email'];
$Socialinstegram2=$socialfetch['Social_instegram'];
$socialaddress2=$socialfetch['social_address'];
 ?>
  <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Footer Intro'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor25=$fetch['postcolor'];
				
				?>
    <div class="container-fluid text-secondary p-5 txtforBack" id="footer" style="background:<?php echo $postColor25;?> !important;">
        <div class="row g-5">
            <div class="col-12 text-center">
			
                <h1 class="display-5 mb-4 txtfooter"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Footer Intro'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_footer_Intro=$fetch['post'];
				echo $fetch_footer_Intro;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_footer_Intro;?>" style="display:none; color:black" id="txt_footer_Intro"><a href="#" style="display:none;text-decoration:none;color:white" id="edit_footer_Intro">Edit</a><a href="#footer" class="EditPenfooterTitle1" style="display:inline;color:white"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px; color:black" id="FooterTitleColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
					<div id="alertemailSubscribe"></div>
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email" id="email_subscribe">
                        <button class="btn btn-dark px-4" type="button" id="Subscribe">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <div class="container-fluid bg-dark text-secondary p-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                    <a class="text-secondary mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                    <a class="text-secondary mb-2" href="solutions.php"><i class="bi bi-arrow-right text-primary me-2"></i>Solutions</a>
                    <a class="text-secondary" href="Client.php"><i class="bi bi-arrow-right text-primary me-2"></i>Clients</a>
                    <a class="text-secondary" href="partner.php"><i class="bi bi-arrow-right text-primary me-2"></i>Partner</a>
                    <a class="text-secondary" href="contactus.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                    <a class="text-secondary mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                    <a class="text-secondary mb-2" href="morenews.php"><i class="bi bi-arrow-right text-primary me-2"></i>News</a>
                    <a class="text-secondary" href="contactus.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i><?php echo $socialaddress2;?></p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i><?php echo $Socialemail2;?></p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+2<?php echo $Socialphone2;?></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.twitter.com/<?php echo $socialtwitter2;?>"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.facebook.com/<?php echo $socialfacebook2;?>"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://www.linkedin.com/<?php echo $Sociallinkedin2;?>"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://www.instegram.com/<?php echo $Socialinstegram2;?>"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://wa.me/<?php echo "+2".$SocialWhatsapp2;?>" target="_blank"><i class="fab fa-whatsapp fw-normal"></i></a>
                </div>
            </div>


        </div>
    </div>
    <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="m-0">&copy; <a class="text-secondary border-bottom" href="#">ENC</a>. All Rights Reserved. Designed & Developed by 
		   <?php
				$selectDevPageTitle=mysqli_query($conn,"select * from developer");
				$fetch=enc_fetch_assoc($selectDevPageTitle);
				$dev_name=$fetch['dev_name'];
				$fetch_ENC_Developer_href_Page_Title=$fetch['dev_href'];
				
				
				?>
		<a class="text-secondary border-bottom" href="<?php echo $fetch_ENC_Developer_href_Page_Title;?>">
Eng-Mohamed Hany</a>
		
			<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="Developer"){
				
				?>
				<input type="text" value="<?php echo $fetch_ENC_Developer_href_Page_Title;?>" style="display:none;color:black" id="txt_ENC_Developer_href_Title">
				<a href="#" style="display:none;text-decoration:none;" id="edit_ENC_Developer_Page_Title">Edit</a><a href="#dev" class="EditPenENC_Developer_Page" style="display:inline;"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
				
		</p>
    </div>
		 <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="Developer"){
?>
          <script src="js/scriptDev.js"></script>
<?php
				}}?>
    <!-- Footer End -->