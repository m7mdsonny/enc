

    <!-- Features Start -->
    <div class="container-fluid py-6 px-5" id="features">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
		 			<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Index Fearures Introduction'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor6=$fetch['postcolor'];
				
				?>  
            <h1 class="display-5 mb-0 txtforTitle txtforFeaturesIntoduction" style="color:<?php echo $postColor6;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Index Fearures Introduction'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Features_Intro=$fetch['post'];
				echo $fetch_Features_Intro;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Features_Intro;?>" style="display:none;" id="txt_Features_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Title">Edit</a><a href="#features" class="EditPenFeatures" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="FeaturesCaptionColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
						<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Desc4'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor14=$fetch['postcolor'];
				
				?>
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 txtforBack" style="width: 60px; height: 60px;background:<?php echo $postColor14;?>!important;">
                            <i class="fa fa-cubes fs-4 text-white"></i>
                        </div>
							<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Title1'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor7=$fetch['postcolor'];
				
				?>  
                        <h3 class="txtforTitle txtFeaturesTitle1" style="color:<?php echo $postColor7;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Features Title1'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Features_Title1=$fetch['post'];
				echo $fetch_Features_Title1;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Features_Title1;?>" style="display:none;" id="txt_Features_Title1"><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Title1">Edit</a><a href="#features" class="EditPenFeaturesTitle1" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="FeaturesTitle1Color">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                        <p class="mb-0 txtfeaturesdesc1" ><?php
				
				$selectFeaturesDesc1=mysqli_query($conn,"select * from posts where post_code='Features Desc1'");
				$fetch=enc_fetch_assoc($selectFeaturesDesc1);
				$fetch_Features_Desc1=$fetch['post'];
				echo $fetch_Features_Desc1;
				
				?>
</p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Features_Desc1" ><?php echo $fetch_Features_Desc1;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Desc_1">Edit</a><a href="#features" class="EditPenFeaturesDesc1" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                    </div>
                    <div class="col-12">
						<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Desc4'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor15=$fetch['postcolor'];
				
				?>
                        <div class="txtforBack rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;background:<?php echo $postColor15;?>!important;">
                            <i class="fa fa-percent fs-4 text-white"></i>
                        </div>
							<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Title2'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor7=$fetch['postcolor'];
				
				?>  
                        <h3 class="txtforTitle txtFeaturesTitle2" style="color:<?php echo $postColor7;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Features Title2'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Features_Title2=$fetch['post'];
				echo $fetch_Features_Title2;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Features_Title2;?>" style="display:none;" id="txt_Features_Title2"><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Title2">Edit</a><a href="#features" class="EditPenFeaturesTitle2" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="FeaturesTitle2Color">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                        <p class="mb-0 txtfeaturesdesc2"><?php
				
				$selectFeaturesDesc2=mysqli_query($conn,"select * from posts where post_code='Features Desc2'");
				$fetch=enc_fetch_assoc($selectFeaturesDesc2);
				$fetch_Features_Desc2=$fetch['post'];
				echo $fetch_Features_Desc2;
				
				?></p>
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Features_Desc2" ><?php echo $fetch_Features_Desc2;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Desc_2">Edit</a><a href="#features" class="EditPenFeaturesDesc2" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                    </div>
                    <div class="col-12">
						<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Desc4'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor16=$fetch['postcolor'];
				
				?>
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 txtforBack" style="width: 60px; height: 60px;background:<?php echo $postColor16;?>!important;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
								<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Title3'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor8=$fetch['postcolor'];
				
				?>  
                        <h3 class="txtforTitle txtFeaturesTitle3" style="color:<?php echo $postColor8;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Features Title3'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Features_Title3=$fetch['post'];
				echo $fetch_Features_Title3;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Features_Title3;?>" style="display:none;" id="txt_Features_Title3"><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Title3">Edit</a><a href="#features" class="EditPenFeaturesTitle3" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="FeaturesTitle3Color">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                        <p class="mb-0 txtfeaturesdesc3"><?php
				
				$selectFeaturesDesc3=mysqli_query($conn,"select * from posts where post_code='Features Desc3'");
				$fetch=enc_fetch_assoc($selectFeaturesDesc3);
				$fetch_Features_Desc3=$fetch['post'];
				echo $fetch_Features_Desc3;
				
				?></p>
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Features_Desc3" ><?php echo $fetch_Features_Desc3;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Desc_3">Edit</a><a href="#features" class="EditPenFeaturesDesc3" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                    </div>
                </div>
            </div>
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Desc4'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor9=$fetch['postcolor'];
				
				?> 
            <div class="col-lg-4">
                <div class="d-block h-100 text-center txtforBack" style="background:<?php echo $postColor9;?> !important;">
				        <form method="post" action="" enctype="multipart/form-data" id="myformimgdesc4">
						<?php
				
				$selectFeaturesImage=mysqli_query($conn,"select * from posts_img where post_code='Features_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectFeaturesImage);
				$selectFeaturesImage_4=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid" src="<?php echo $selectFeaturesImage_4;?>" alt="">
					<?php
									if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
									if($memberPreimission=="manager_admin"){
?>
					<label>
					<input type="file" id="file_desc_4_img"style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
					<i class="fas fa-pen text-white file_upload_featuredesc4"></i>
					</label>
									<?php }}?>
					        </form>
	<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Desc4'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor10=$fetch['postcolor'];
				
				?>
                    <div class="p-4" style="background:<?php echo $postColor10;?> !important;">
					
                        <p class="text-white mb-4 txtfeaturesdesc4" style="background:<?php echo $postColor9;?> !important;"><?php
				
				$selectFeaturesDesc4F=mysqli_query($conn,"select * from posts where post_code='Features Desc4'");
				$fetch=enc_fetch_assoc($selectFeaturesDesc4F);
				$selectFeaturesDesc4=$fetch['post'];
				echo $selectFeaturesDesc4;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:512px;max-height:512px;" id="txt_Features_Desc4" ><?php echo $selectFeaturesDesc4;?></textarea><a href="#" style="display:none;text-decoration:none;color:white;" id="edit_Features_Desc_4">Edit</a><a href="#features" class="EditPenFeaturesDesc4" style="display:block;color:white;"><i class="fas fa-pen"></i></a>
<select style="font-size:16px;" id="FeaturesDesc4Color">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>	
</select>				
<?php }}?>
                        <a href="service.php" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
						<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Desc4'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor17=$fetch['postcolor'];
				
				?>
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 txtforBack" style="width: 60px; height: 60px;background:<?php echo $postColor17;?>!important;">
                            <i class="far fa-smile-beam fs-4 text-white"></i>
                        </div>
						<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Title5'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor11=$fetch['postcolor'];
				
				?>
                        <h3 class="txtforTitle txtFeaturesTitle5" style="color:<?php echo $postColor11;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Features Title5'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Features_Title5=$fetch['post'];
				echo $fetch_Features_Title5;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Features_Title5;?>" style="display:none;" id="txt_Features_Title5"><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Title5">Edit</a><a href="#features" class="EditPenFeaturesTitle5" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="FeaturesTitle5Color">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                        <p class="mb-0 txtfeaturesdesc5"><?php
				
				$selectFeaturesDesc5F=mysqli_query($conn,"select * from posts where post_code='Features Desc5'");
				$fetch=enc_fetch_assoc($selectFeaturesDesc5F);
				$selectFeaturesDesc5=$fetch['post'];
				echo $selectFeaturesDesc5;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Features_Desc5" ><?php echo $selectFeaturesDesc5;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Desc_5">Edit</a><a href="#features" class="EditPenFeaturesDesc5" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                    
                    </div>
                    <div class="col-12">
					<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Desc4'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor18=$fetch['postcolor'];
				
				?>
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 txtforBack" style="width: 60px; height: 60px;background:<?php echo $postColor18;?>!important;">
                            <i class="fa fa-user-tie fs-4 text-white"></i>
                        </div>
							<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Title6'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor12=$fetch['postcolor'];
				
				?>
                        <h3 class="txtforTitle txtFeaturesTitle6" style="color:<?php echo $postColor12;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Features Title6'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Features_Title6=$fetch['post'];
				echo $fetch_Features_Title6;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Features_Title6;?>" style="display:none;" id="txt_Features_Title6"><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Title6">Edit</a><a href="#features" class="EditPenFeaturesTitle6" style="display:inline;"><i class="fas fa-pen"></i></a>
						<select style="font-size:16px;" id="FeaturesTitle6Color">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                        <p class="mb-0 txtfeaturesdesc6"><?php
				
				$selectFeaturesDesc5F=mysqli_query($conn,"select * from posts where post_code='Features Desc6'");
				$fetch=enc_fetch_assoc($selectFeaturesDesc5F);
				$selectFeaturesDesc6=$fetch['post'];
				echo $selectFeaturesDesc6;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Features_Desc6" ><?php echo $selectFeaturesDesc6;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Desc_6">Edit</a><a href="#features" class="EditPenFeaturesDesc6" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                    
                    </div>
                    <div class="col-12">
					<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Desc4'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor19=$fetch['postcolor'];
				
				?>
                        <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 txtforBack" style="width: 60px; height: 60px;background:<?php echo $postColor19;?>!important;">
                            <i class="fa fa-headset fs-4 text-white"></i>
                        </div>
								<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Features Title7'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor13=$fetch['postcolor'];
				
				?>
                        <h3 class="txtforTitle txtFeaturesTitle7" style="color:<?php echo $postColor13;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Features Title7'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Features_Title7=$fetch['post'];
				echo $fetch_Features_Title7;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Features_Title7;?>" style="display:none;" id="txt_Features_Title7"><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Title7">Edit</a><a href="#features" class="EditPenFeaturesTitle7" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="FeaturesTitle7Color">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				
				<?php
				}}
				?>
                        <p class="mb-0 txtfeaturesdesc7"><?php
				
				$selectFeaturesDesc7F=mysqli_query($conn,"select * from posts where post_code='Features Desc7'");
				$fetch=enc_fetch_assoc($selectFeaturesDesc7F);
				$selectFeaturesDesc7=$fetch['post'];
				echo $selectFeaturesDesc7;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Features_Desc7" ><?php echo $selectFeaturesDesc7;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Features_Desc_7">Edit</a><a href="#features" class="EditPenFeaturesDesc7" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->