 

 <!-- Topbar Start -->
<div class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler bg-white text-red" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
   <div class="navbar-nav">
   <a href="index.php">
  <img src="img/logo.png" width="100" height="50"/>
    </a>
      <a class="nav-item nav-link text-white" href="index.php">Home</a>
      <a class="nav-item nav-link text-white" href="about.php">About</a>
      <a class="nav-item nav-link text-white" href="service.php">Services</a>
      <a class="nav-item nav-link text-white" href="solutions.php">Solutions</a>
      <a class="nav-item nav-link text-white" href="client.php">Clients</a>
      <a class="nav-item nav-link active" href="partner.php">Partner<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-white" href="globalreach.php">Global Reach</a>
      <a class="nav-item nav-link text-white" href="contactus.php">Contact Us</a>

    </div>
  </div>
     
      <div class="col-md-5 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center text-white bg-primary top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i><?php echo $Socialemail;?></p>
                    </div>
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+2<?php echo $Socialphone;?></p>
                    </div>
					<div class="py-2">
						  <?php

	  if(isset($email)){
		  if (strlen($membername) > 10) // if you want...
{
    $maxLength = 9;
    $membername = substr($membername, 0, $maxLength)."...";

	  ?>
	                      <div class="py-2">

      <a class="text-white textdecoration" href="dashboard.php"><?php echo $membername;?></a>
	        <a class="text-white textdecoration" href="logout.php">Logout</a>

	  </div>

	  <?php
}}else{
	  ?>
	        <a class="text-white textdecoration" href="login.php">Login / Signup</a>
<?php
	  }
	  ?>
                </div>
                </div>
            </div>
</div>
        
    <!-- Topbar End -->