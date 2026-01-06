 <!-- About Start -->

   

   <div class="container-fluid bg-secondary p-0" id="Intro">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
			<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Introduction Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor1=$fetch['postcolor'];
				
				?>
                <h1 class="display-5 mb-4"><span class="txtforTitle" style="color:<?php echo $postColor1;?> !important;"><?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Introduction Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$fetch_aboutTitle=$fetch['post'];
				echo $fetch_aboutTitle;
				
				?></span>
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_aboutTitle;?>" style="display:none;" id="txtTitleAb"><a href="#" style="display:none;text-decoration:none;" id="edit_about_title">Edit</a><a href="#Intro" class="EditPenAboutTitle"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="AboutTitleIntroColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
</h1>
                <h4 class="text-primary mb-4"></h4>
                <p class="mb-4 pDescription" style="display:inline;">
				<?php 
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Introduction Description'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$fetch_aboutTitleDescripton=$fetch['post'];
				echo $fetch_aboutTitleDescripton;
				?>
				</p>
								<?php
								if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
				<textarea style="display:none;width: 100%;max-width: 100%;height:175px;max-height:175px;" id="txtTitleAbDesc"><?php echo $fetch_aboutTitleDescripton;
;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_about_Desc">Edit</a><a href="#Intro" class="EditPenAboutDesc"><i class="fas fa-pen"></i></a></br></br>
								<?php }}?>
                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 rounded-pill">About Us</a>
            </div>
            <div class="col-lg-6">
			<?php
				
				$selectabouttitleImage=mysqli_query($conn,"select * from posts where post_code='About Desc Image Color'");
				$fetch=enc_fetch_assoc($selectabouttitleImage);
				$postColor2=$fetch['postcolor'];
				
				?>
                <div class="d-flex flex-column justify-content-center txtforBack p-5" style="background:<?php echo $postColor2;?>">
                    <div class="d-flex text-white mb-5" id="integredtyfield">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px">
                            			<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Desc Image Color'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor3=$fetch['postcolor'];
				
				?>
							<i class="fa fa-user-tie fs-4 txtforTitle" style="color:<?php echo $postColor3;?> !important;"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="aboutTitle1" style="display:inline;"><?php 
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Title 1'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$fetch_aboutTitle1=$fetch['post'];
				echo $fetch_aboutTitle1;
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
				<input type="text" style="display:none;color:black;" id="txtTitleAb1"  value="<?php echo $fetch_aboutTitle1;?>"><a href="#" style="display:none;text-decoration:none;color:white;" id="edit_about_Title_1">Edit</a><a href="#Intro" class="EditPenAboutTitle1" style="display:inline-block;"><i class="fas fa-pen" style="color:white;"></i></a>
				<?php }}?>
								</br></br>
                            <p class="mb-0 aboutTitleDesc1" style="display:inline;"><?php 
				$selectabouttitleDesc1=mysqli_query($conn,"select * from posts where post_code='About Title Desc 1'");
				$fetch=enc_fetch_assoc($selectabouttitleDesc1);
				$fetch_aboutTitleDesc1=$fetch['post'];
				echo $fetch_aboutTitleDesc1;
				?></p>
<?php
if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
if($memberPreimission=="manager_admin"){
?>
				<textarea style="display:none;color:black;width: 100%;max-width:100%;height:110px;max-height:110px;margin-left:1%" id="txtTitleAbDesc1"><?php echo $fetch_aboutTitleDesc1;?></textarea><a href="#" style="display:none;text-decoration:none;color:white;" id="edit_about_Title_Desc_1">Edit</a><a href="#Intro" class="EditPenAboutTitleDesc1" style="display:inline-block;"><i class="fas fa-pen" style="color:white;"></i></a></br></br>
<?php }}?>
                        </div>
                    </div>
                    <div class="d-flex text-white mb-5" id="respectfield">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;" >
                         			<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Desc Image Color'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor4=$fetch['postcolor'];
				
				?>       
						   <i class="fa fa-chart-line fs-4 txtforTitle" style="color:<?php echo $postColor4;?> !important;"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="aboutTitle2" style="display:inline;"><?php 
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Title 2'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$fetch_aboutTitle2=$fetch['post'];
				echo $fetch_aboutTitle2;
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
				<input type="text" style="display:none;color:black;" id="txtTitleAb2"  value="<?php echo $fetch_aboutTitle2;?>"><a href="#" style="display:none;text-decoration:none;color:white;" id="edit_about_Title_2">Edit</a><a href="#Intro" class="EditPenAboutTitle2" style="display:inline-block;"><i class="fas fa-pen" style="color:white;"></i></a></br></br>
				<?php }}?>
                            <p class="mb-0 aboutTitleDesc2" style="display:inline;"><?php 
				$selectabouttitleDesc2=mysqli_query($conn,"select * from posts where post_code='About Title Desc 2'");
				$fetch=enc_fetch_assoc($selectabouttitleDesc2);
				$fetch_aboutTitleDesc2=$fetch['post'];
				echo $fetch_aboutTitleDesc2;
				?>
				</p>
				<?php
if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
if($memberPreimission=="manager_admin"){
?>
				<textarea style="display:none;color:black;width: 100%;max-width:100%;height:110px;max-height:110px;margin-left:1%" id="txtTitleAbDesc2"><?php echo $fetch_aboutTitleDesc2;?></textarea><a href="#" style="display:none;text-decoration:none;color:white;" id="edit_about_Title_Desc_2">Edit</a><a href="#Intro" class="EditPenAboutTitleDesc2" style="display:inline-block;"><i class="fas fa-pen" style="color:white;"></i></a></br></br>
<?php }}?>
                        </div>
                    </div>
                    <div class="d-flex text-white" id="responsibilityfield">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
     			<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Desc Image Color'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor5=$fetch['postcolor'];
				
				?>    
							<i class="fa fa-balance-scale fs-4 txtforTitle" style="color:<?php echo $postColor5;?> !important;"></i>
                        </div>
                        <div class="ps-4">
                            <h3 class="aboutTitle3" style="display:inline;"><?php 
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='About Title 3'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$fetch_aboutTitle3=$fetch['post'];
				echo $fetch_aboutTitle3;
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
								if($memberPreimission=="manager_admin"){
?>
				<input type="text" style="display:none;color:black;" id="txtTitleAb3"  value="<?php echo $fetch_aboutTitle3;?>"><a style="display:none;text-decoration:none;color:white;" id="edit_about_Title_3">Edit</a><a href="#Intro" class="EditPenAboutTitle3" style="display:inline-block;"><i class="fas fa-pen" style="color:white;"></i></a></br></br>
				<?php }}?>
                            <p class="mb-0 aboutTitleDesc3" style="display:inline;"><?php 
				$selectabouttitleDesc3=mysqli_query($conn,"select * from posts where post_code='About Title Desc 3'");
				$fetch=enc_fetch_assoc($selectabouttitleDesc3);
				$fetch_aboutTitleDesc3=$fetch['post'];
				echo $fetch_aboutTitleDesc3;
				?>
</p>

<?php
if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
if($memberPreimission=="manager_admin"){
?>
				<textarea style="display:none;color:black;width: 100%;max-width:100%;height:110px;max-height:110px;margin-left:1%" id="txtTitleAbDesc3"><?php echo $fetch_aboutTitleDesc3;?></textarea><a href="#" style="display:none;text-decoration:none;color:white;" id="edit_about_Title_Desc_3">Edit</a><a href="#Intro" class="EditPenAboutTitleDesc3" style="display:inline-block;"><i class="fas fa-pen" style="color:white;"></i></a></br></br></br></br>
<select style="font-size:16px;color:black;" id="AboutTitleimageColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
<?php }}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->