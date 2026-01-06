    <!-- Team Start -->
    <div class="container-fluid py-6 px-5" id="team">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Ourteam Intro'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor21=$fetch['postcolor'];
				
				?>
			
			<h1 class="display-5 mb-0 txtforTitle ourteamIntro" style="color:<?php echo $postColor21;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='Ourteam Intro'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Team_Intro=$fetch['post'];
				echo $fetch_Team_Intro;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Team_Intro;?>" style="display:none;" id="txt_Ourteam_Intro"><a href="#" style="display:none;text-decoration:none;" id="edit_OurTeam_Intro">Edit</a><a href="#team" class="EditPenOurTeamIntro" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="OurTeamIntroColor">
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
			<?php 			
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];				
				if($memberPreimission=="manager_admin"){
?>
			<form method="post" action="" enctype="multipart/form-data" id="TeamimgForm">
			<label>
			<input type="file" id="Team_img_1"style="display:none;" accept="image/png, image/jpe, image/jpeg,image/jpg,image/gif"/>
			<i class="fas fa-pen text-white file_upload_Teamimg1"></i>
			</label>
			</form>
			<?php
				}}
				$selectTeamImage=mysqli_query($conn,"select * from posts_img where post_code='Teamgroup_image' and member_allowgroup='74747' and active_features='1'");
				$fetch=enc_fetch_assoc($selectTeamImage);
				$selectTeamImage_1=$fetch['post_img_path'];
				
				?>
                    <img class="img-fluid w-75 rounded-circle" src="<?php echo $selectTeamImage_1;?>" alt="" style="height: 300px;">
     
            </div>
            <div class="col-lg-8">
                <div class="team-item position-relative overflow-hidden">
				<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='OurTeam Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor22=$fetch['postcolor'];
				
				?>
                   <h1 class="txtforTitle OurTeamTitle" style="color:<?php echo $postColor22;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='OurTeam Title'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Team_Title=$fetch['post'];
				echo $fetch_Team_Title;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Team_Title;?>" style="display:none;" id="txt_Ourteam_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_OurTeam_Title">Edit</a><a href="#team" class="EditPenOurTeamTitle" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="OurTeamTitleColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
<p style='font-size: 18px;' class="OurTeamDesctxt"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='OurTeam Desc'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_Team_Desc=$fetch['post'];
				echo $fetch_Team_Desc;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_OurTeam_Desc" ><?php echo $fetch_Team_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_OurTeam_Desc">Edit</a><a href="#team" class="EditPenOurTeamDesc" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->