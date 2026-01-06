 <marquee behavior="alternate" scrolldelay="140" onmouseover="this.stop()" onmouseout="this.start()">
           <?php 
		   $selectBanner=mysqli_query($conn,"select * from banner where (banner_group='ClientBanner')");
		  while($fetchBanner=mysqli_fetch_assoc($selectBanner)){
			  $img_banner=$fetchBanner['banner_img'];
?>
            <img src="<?php echo $img_banner;?>" border="0" style="height:25px;">&nbsp;
			<?php
		  }
		  ?>
    </marquee>