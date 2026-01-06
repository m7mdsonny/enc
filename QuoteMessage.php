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
                <h1 class="display-4 text-white">Quote Message Reading</h1>
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
<div class="quoteMessage">
<table>
<tr>
<td>
Full Name
</td>
<td>
Phone
</td>
<td>
E-mail
</td>
<td>
Message
</td>
</tr>
<?php
$mysqlSelectquote=mysqli_query($conn,"select * from quote");
while($fetchQuote=enc_fetch_assoc($mysqlSelectquote)){
$quoteid=$fetchQuote['quote_id'];
$fullnameMessage=$fetchQuote['quote_fullname'];
$phoneMessage=$fetchQuote['quote_phone'];
$mailMessage=$fetchQuote['quote_email'];
$mMessage=$fetchQuote['quote_message'];
$reading=$fetchQuote['reading'];
?>
<tr>
<td>
<?php echo $fullnameMessage;?>
</td>
<td>
<?php echo $phoneMessage;?>
</td>
<td>
<?php echo $mailMessage;?>
</td>
<td>
<?php 
 $arr = str_split($mMessage); 
  
    for($i = 0; $i < 30; $i++) { 
        print($arr[$i]); 
    } 
?>
<a href='readmessage.php?mid=<?php echo $quoteid;?>'>Read more</a>

</td>
<td>
<?php if($reading=="1"){
	echo "Already reading";
}else{
	echo "Not reading";
}
	?>
</td>
</tr>
<?php
}
?>
</table>

</div>

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