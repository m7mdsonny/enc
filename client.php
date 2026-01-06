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
    <title>Clients</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Client" name="keywords">
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
<?php include "@inc/header_client.php";?>

        
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
                <h1 class="display-4 text-white">Clients</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-6 px-5">
      <div class="row g-5">
            <div class="col-lg-12 col-md-6 col-sm-3">
			<?php
			$select=mysqli_query($conn,"select * from client_image");
				while($clientfetch=mysqli_fetch_assoc($select)){
				$clientimage=$clientfetch['client_image'];
				$clientid=$clientfetch['client_img_id'];
			?>
                    <img class="img-fluid" src="<?php echo $clientimage;?>" alt="" style="height: 92px;width:92px;">
						 <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
					<i class="fa fa-window-close closeicon" aria-hidden="true" id="<?php echo $clientid;?>"></i>
					<?php
				}}}
				?>
     
            </div>
          
        </div>  
			 <?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=mysqli_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
	<label>
					<input type="file" id="file_AddClient_img" style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="btn btn-success">Add client image</i>
					</label>	
					<?php
				}}
				?>
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