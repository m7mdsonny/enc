
    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0" id="quote">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
			<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Quote Index Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor20=$fetch['postcolor'];
				
				?>
                <h1 class="display-5 mb-4 txtforTitle txtQuoteTitle1" style="color:<?php echo $postColor20;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Quote Index Title'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Quote_Title1=$fetch['post'];
				echo $fetch_Quote_Title1;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Quote_Title1;?>" style="display:none;" id="txt_Quote_Title1"><a href="#" style="display:none;text-decoration:none;" id="edit_Quote_Title1">Edit</a><a href="#quote" class="EditPenQuoteTitle1" style="display:inline;"><i class="fas fa-pen"></i></a>
					<select style="font-size:16px;" id="QuoteTitleColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				
				<?php
				}}
				?>
                <p class="mb-4 txtQuotedesc1"><?php
				
				$selectFeaturesDesc1=mysqli_query($conn,"select * from posts where post_code='Quote Index Desc'");
				$fetch=enc_fetch_assoc($selectFeaturesDesc1);
				$fetch_Quote_Desc1=$fetch['post'];
				echo $fetch_Quote_Desc1;
				
				?></p>
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Quote_Desc1" ><?php echo $fetch_Quote_Desc1;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Quote_desc_1">Edit</a><a href="#quote" class="EditPenQuoteDesc1" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                    
                <form>
                    <div class="row gx-3">
					<div id="alertfullname"></div>
					<div id="alertphone"></div>
					<div id="alertemail"></div>
					<div id="alertMessage"></div>
                        <div class="col-6 m-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div><br>
                        <div class="col-6 m-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-2" placeholder="+20123456789">
                                <label for="form-floating-2">Phone</label>
                            </div>
                        </div><br>
                        <div class="col-6 m-3">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="form-floating-3" placeholder="name@example.com">
                                <label for="form-floating-3">Email address</label>
                            </div>
                        </div><br>
                        <div class="col-6 m-3">
                            <div class="form-floating">
                                <textarea class="form-control" style="width: 500px;max-width: 500px;height: 150px;max-height: 150px;" id="form-floating-4" placeholder="Your Message"></textarea>
                             <label for="form-floating-4">Your Message</label>
                            </div>
                        </div><br>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100" type="button" id="RequestAQuote">Request A Quote</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">

                <div class="position-relative h-100 text-center bg-transparent">
				<?php 			
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];				
				if($memberPreimission=="manager_admin"){
?>
				<form method="post" action="" enctype="multipart/form-data" id="myQuoteimg1">
			<label>
			<input type="file" id="file_quote_1_img"style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
			<i class="fas fa-pen text-white file_upload_Quotedesc1"></i>
			</label>
			</form>
				<?php
				}}
				$selectQuoteImage=mysqli_query($conn,"select * from posts_img where post_code='Quote_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectQuoteImage);
				$selectQuoteImage_1=$fetch['post_img_path'];
				
				?>
                    <img class="w-75 h-75 p-5" src="<?php echo $selectQuoteImage_1;?>" style="object-fit: cover;margin-top: 9rem;">
                </div>
            </div>
			
        </div>
    </div>
    <!-- Quote End -->
