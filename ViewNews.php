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
    <title>View News</title>
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
                <h1 class="display-4 text-white"> More News</h1>
            </div>
        </div>
    </div>
 <div class="container-fluid py-6 px-5" id="News">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
		 <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='News Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor51=$fetch['postcolor'];
				
				?>
            <h1 class="display-5 mb-0 txtforTitle newstitle" style="color:<?php echo $postColor51;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='News Title'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_news_title=$fetch['post'];
				echo $fetch_news_title;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_news_title;?>" style="display:none;" id="txt_News_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_News_title">Edit</a><a href="#News" class="EditPenOurNewsTitle" style="display:inline;"><i class="fas fa-pen"></i></a>
				<?php
				}}
				?>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
		<?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from news");
				while($fetch=enc_fetch_assoc($selectFeaturesIntro)){
				$news_day=$fetch['news_day'];
				$news_month=$fetch['news_month'];
				$news_year=$fetch['news_year'];
				$news_image=$fetch['news_image'];
				$news_member=$fetch['news_member'];
				$news_special=$fetch['news_special'];
				$news_comment=$fetch['news_comment'];
				
				?>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="<?php echo $news_image;?>" alt="">
                    </div>
                    <div class="bg-secondary d-flex">
					<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='News Background'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor52=$fetch['postcolor'];
				
				?>
                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center text-white px-4 txtforBack" style="background:<?php echo $postColor52;?> !important;">
                            <span><?php echo $news_day;?></span>
                            <h5 class="text-uppercase m-0"><?php echo $news_month;?></h5>
                            <span><?php echo $news_year;?></span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i><?php echo $news_member;?></small>
                                <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i><?php echo $news_special;?></small>
                            </div>
                            <a class="h4" href=""><?php echo $news_comment;?></a>
                        </div>
                    </div>
                </div>
            </div>
				<?php
				}
				?>
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
	</body>
	</html>