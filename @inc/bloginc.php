  <!-- Blog Start -->

    <div class="container-fluid py-6 px-5" id="News">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
		  <?php
				
				$selectabouttitle=mysqli_query($conn,"select * from posts where post_code='News Title'");
				$fetch=enc_fetch_assoc($selectabouttitle);
				$postColor24=$fetch['postcolor'];
				
				?>
            <h1 class="display-5 mb-0 txtforTitle newstitle" style="color:<?php echo $postColor24;?> !important;"><?php
				
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
				<select style="font-size:16px;" id="NewsTitleColor">
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
		<?php
				
				$selectFeaturesIntro=mysqli_query($conn,"select * from news limit 3");
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
				$postColor24=$fetch['postcolor'];
				
				?>
                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center text-white px-4 txtforBack" style="background:<?php echo $postColor24;?> !important;">
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
		  <a href="ViewNews.php" class="btn btn-primary" style="margin-left: 47%;margin-top:5%;">View All</a>
<?php
if(isset($email)){
				$selectmember=mysqli_query($conn,"select * from member where (member_mail='".$email."')");
				$memberfetch=enc_fetch_assoc($selectmember);
				$memberPreimission=$memberfetch['member_group'];
				
				if($memberPreimission=="manager_admin"){
				
				?>
				<select style="font-size:16px;" id="NewsbackgroundColor">
				<option value="0" selected>Select color</option>
				<option value="#337ab7">Blue</option>
				<option value="#f3525a">Red</option>
				<option value="#000">Black</option>
				</select>
				<?php
				}}
				?>
    </div>
    <!-- Blog End -->