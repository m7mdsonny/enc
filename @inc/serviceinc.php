
    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5" id="CaptionServices">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
		<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Index Services Caption'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor=$fetch['postcolor'];
				
				?>
            <h1 class="display-5 mb-0 txtforTitle CaptionServices" style="color:<?php echo $postColor;?>!important;"><?php
				
				$selectSevicesCaption=mysqli_query($conn,"select * from posts where post_code='Index Services Caption'");
				$fetch=enc_fetch_assoc($selectSevicesCaption);
				$fetch_Services_Caption=$fetch['post'];
				echo $fetch_Services_Caption;
				
				?></h1><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Services_Caption;?>" style="display:none;" id="txt_Services_caption"><a href="#" style="display:none;text-decoration:none;" id="edit_Services_caption">Edit</a><a href="#CaptionServices" class="EditPenServicesCaption"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="ServiceTitleColor">
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
            <div class="col-lg-4 col-md-6">
			<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Service Image Color'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColorImageService=$fetch['postcolor'];
				
								$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Index Services Title 1'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColorServiceTitle1=$fetch['postcolor'];
				?>
                <div class="service-item bg-secondary text-center px-5" >
                    <div class="d-flex align-items-center justify-content-center text-white rounded-circle mx-auto mb-4 txtforBack" style="width: 90px; height: 90px;margin-top: 0%;background:<?php echo $postColorImageService;?> !important">
                        <i class="fa fa-user-tie fa-2x"></i>
                    </div>
                    <h3 class="mb-3 txtforTitle txt_services_title1" style="font-size: 21px;display:inline;color:<?php echo $postColorServiceTitle1;?>!important;"><?php
				
				$selectSevicesTitle1=mysqli_query($conn,"select * from posts where post_code='Index Services Title 1'");
				$fetch=enc_fetch_assoc($selectSevicesTitle1);
				$fetch_Services_Title1=$fetch['post'];
				echo $fetch_Services_Title1;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Services_Title1;?>" style="display:none;" id="txt_Services_Title1"><a href="#" style="display:none;text-decoration:none;" id="edit_Services_Title_1">Edit</a><a href="#CaptionServices" class="EditPenServicesTitle1" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="ServiceTitleColor1">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                    <p class="mb-0 txtservicesdesc1" style="font-size:11px;"><?php
				
				$selectSevicesDesc1=mysqli_query($conn,"select * from posts where post_code='Index Services Desc1'");
				$fetch=enc_fetch_assoc($selectSevicesDesc1);
				$fetch_Services_Desc1=$fetch['post'];
				echo $fetch_Services_Desc1;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Services_Desc1" ><?php echo $fetch_Services_Desc1;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Services_Desc_1">Edit</a><a href="#CaptionServices" class="EditPenServicesDesc1" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center text-white rounded-circle mx-auto mb-4 txtforBack" style="width: 90px; height: 90px;margin-top: -5%;background:<?php echo $postColorImageService;?> !important">
                        <i class="fa fa-chart-pie fa-2x "></i>
                    </div>
					<?Php
					$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Index Services Title 2'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColorServiceTitle2=$fetch['postcolor'];
                    ?>
					<h3 class="mb-3 txtforTitle txt_services_title2" style="font-size: 21px;color:<?php echo $postColorServiceTitle2;?>!important;"><?php
				
				$selectSevicesTitle2=mysqli_query($conn,"select * from posts where post_code='Index Services Title 2'");
				$fetch=enc_fetch_assoc($selectSevicesTitle2);
				$fetch_Services_Title2=$fetch['post'];
				echo $fetch_Services_Title2;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Services_Title2;?>" style="display:none;" id="txt_Services_Title2"><a href="#" style="display:none;text-decoration:none;" id="edit_Services_Title_2">Edit</a><a href="#CaptionServices" class="EditPenServicesTitle2" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="ServiceTitleColor2">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                    <p class="mb-0 txtservicesdesc2" style="font-size:11px;"><?php
				
				$selectSevicesDesc2=mysqli_query($conn,"select * from posts where post_code='Index Services Desc2'");
				$fetch=enc_fetch_assoc($selectSevicesDesc2);
				$fetch_Services_Desc2=$fetch['post'];
				echo $fetch_Services_Desc2;
				
				?></p>
				<?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Services_Desc2" ><?php echo $fetch_Services_Desc2;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Services_Desc_2">Edit</a><a href="#CaptionServices" class="EditPenServicesDesc2" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center text-white rounded-circle mx-auto mb-4 txtforBack" style="width: 90px; height: 90px;margin-top: 10%;background:<?php echo $postColorImageService;?> !important">
                        <i class="fa fa-chart-line fa-2x "></i>
                    </div>
					<?Php
					$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Index Services Title 2'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColorServiceTitle3=$fetch['postcolor'];
                    ?>
                    <h3 class="mb-3 txtforTitle txt_services_title3" style="font-size: 21px;color:<?php echo $postColorServiceTitle3;?>!important;"><?php
				
				$selectSevicesTitle3=mysqli_query($conn,"select * from posts where post_code='Index Services Title 3'");
				$fetch=enc_fetch_assoc($selectSevicesTitle3);
				$fetch_Services_Title3=$fetch['post'];
				echo $fetch_Services_Title3;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Services_Title3;?>" style="display:none;" id="txt_Services_Title3"><a href="#" style="display:none;text-decoration:none;" id="edit_Services_Title_3">Edit</a><a href="#CaptionServices" class="EditPenServicesTitle3" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="ServiceTitleColor3">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                    <p class="mb-0 txtservicesdesc3" style="font-size:11px;"><?php
				
				$selectSevicesDesc3=mysqli_query($conn,"select * from posts where post_code='Index Services Desc3'");
				$fetch=enc_fetch_assoc($selectSevicesDesc3);
				$fetch_Services_Desc3=$fetch['post'];
				echo $fetch_Services_Desc3;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Services_Desc3" ><?php echo $fetch_Services_Desc3;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Services_Desc_3">Edit</a><a href="#CaptionServices" class="EditPenServicesDesc3" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                </div></br></br>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center text-white rounded-circle mx-auto mb-4 txtforBack" style="width: 90px; height: 90px;margin-top: 4%;background:<?php echo $postColorImageService;?> !important">
                        <i class="fa fa-chart-area fa-2x"></i>
                    </div>
					<?Php
					$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='Index Services Title 4'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColorServiceTitle4=$fetch['postcolor'];
                    ?>
                    <h3 class="mb-3 txtforTitle txt_services_title4" style="font-size: 21px;color:<?php echo $postColorServiceTitle4;?>!important;"><?php
				
				$selectSevicesTitle4=mysqli_query($conn,"select * from posts where post_code='Index Services Title 4'");
				$fetch=enc_fetch_assoc($selectSevicesTitle4);
				$fetch_Services_Title4=$fetch['post'];
				echo $fetch_Services_Title4;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_Services_Title4;?>" style="display:none;" id="txt_Services_Title4"><a href="#" style="display:none;text-decoration:none;" id="edit_Services_Title_4">Edit</a><a href="#CaptionServices" class="EditPenServicesTitle4" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="ServiceTitleColor4">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
                    <p class="mb-0 txtservicesdesc4" style="font-size:11px;"><?php
				
				$selectSevicesDesc4=mysqli_query($conn,"select * from posts where post_code='Index Services Desc4'");
				$fetch=enc_fetch_assoc($selectSevicesDesc4);
				$fetch_Services_Desc4=$fetch['post'];
				echo $fetch_Services_Desc4;
				
				?></p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_Services_Desc4" ><?php echo $fetch_Services_Desc4;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_Services_Desc_4">Edit</a><a href="#CaptionServices" class="EditPenServicesDesc4" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="AboutServiceImageColor">
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
    <!-- Services End -->