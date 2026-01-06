    <!-- Testimonial Start -->
<!-- Carousel wrapper -->
<section id="OurClient">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
	<?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='OurClient Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor23=$fetch['postcolor'];
				
				?>
      <h3 class="mb-4 txtforTitle ourclientTitle" style="color:<?php echo $postColor23;?> !important;"><?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='OurClient Title'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_client_title=$fetch['post'];
				echo $fetch_client_title;
				
				?></h3><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<input type="text" value="<?php echo $fetch_client_title;?>" style="display:none;" id="txt_Ourclient_Title"><a href="#" style="display:none;text-decoration:none;" id="edit_Client_title">Edit</a><a href="#OurClient" class="EditPenOurClientTitle" style="display:inline;"><i class="fas fa-pen"></i></a>
				<select style="font-size:16px;" id="OurClientTitleColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
      <p class="mb-4 pb-2 mb-md-5 pb-md-0 ourclientDesc">
        <?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from posts where post_code='OurClient Desc'");
				$fetch=enc_fetch_assoc($selectFeaturesIntro);
				$fetch_client_Desc=$fetch['post'];
				echo $fetch_client_Desc;
				
				?>
      </p><?php
				if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?><textarea style="display:none;width: 100%;max-width: 100%;height:88px;max-height:88px;" id="txt_OurClient_Desc" ><?php echo $fetch_client_Desc;?></textarea><a href="#" style="display:none;text-decoration:none;" id="edit_OurClient_Desc">Edit</a><a href="#OurClient" class="EditPenOurClientDesc" style="display:inline;"><i class="fas fa-pen"></i></a><?php }}?>
                    
    </div>
  </div>

  <div class="row text-center">
         <?php
				
				$selectClient=mysqli_query($conn,"select * from client");
				while($fetch=enc_fetch_assoc($selectClient)){
				$fetch_client_name=$fetch['client_name'];
				$fetch_client_img=$fetch['client_img'];
				$fetch_client_job=$fetch['client_job'];
				$fetch_client_say=$fetch['client_say'];
				
				
				?>
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="<?php echo $fetch_client_img;?>"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3"><?php echo $fetch_client_name;?></h5>
      <h6 class="text-primary mb-3"><?php echo $fetch_client_job;?></h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i><?php echo $fetch_client_say;?>
      </p>
      <!--<ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star-half-alt fa-sm text-warning"></i>
        </li>
      </ul>-->
    </div>

<?php
				}
?>
  </div>
</section>
    <!-- Testimonial End -->
