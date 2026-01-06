    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
			<?php 
						$select=mysqli_query($conn,"select * from slideshow");
						while($fetch=mysqli_fetch_assoc($select)){
							$title=$fetch['slide_title'];
							$caption=$fetch['slide_caption'];
							$image=$fetch['slide_img'];
						?>
                <div class="carousel-item active">
                    <img src="<?php echo $image;?>" alt="Image" width="1400" height="788">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
						
                            <h5 class="text-white text-uppercase">
				<?php
				echo $title;
				?></h5>
                            <h1 class="display-1 text-white mb-md-4">
							<?php
				echo $caption;
				
				?></h1>
                            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">About Us</a>
                            <a href="contactus.php" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                        </div>
                    </div>
                </div>
				<?php
						}
						?>
				   <div class="carousel-item">
                            <div class="embed-responsive embed-responsive-16by9">
  <video class="img-fluid" autoplay loop muted>
        <source
          src="img/slideshow/ENC.mp4"
          type="video/mp4"
        />
      </video>                    </div>
                </div>
				   
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->