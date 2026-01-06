<!--/Banner area-------->
 <?php
 $selectSocial=mysqli_query($conn,"select * from socialmedia where (social_id='1')");
$socialfetch=enc_fetch_assoc($selectSocial);
$socialtwitter1=$socialfetch['Social_twitter'];
$socialfacebook1=$socialfetch['Social_facebook'];
$Sociallinkedin1=$socialfetch['Social_linkedin'];
$Socialphone=$socialfetch['Social_phone'];
$SocialWhatsapp1=$socialfetch['Social_Whatsapp'];
$Socialemail1=$socialfetch['Social_email'];
$Socialinstegram1=$socialfetch['Social_instegram'];
$socialaddress=$socialfetch['social_address'];
 ?>
	        <nav class="side-menuLeft">
        <ul>
         <li>
            <a href="https://www.twitter.com/<?php echo $socialtwitter1;?>" target="_blank"><img src="img/icon/twitter.png" width="32" height="32"/>
              <span class="menu-title">Twitter</span>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/<?php echo $socialfacebook1;?>" target="_blank"><img src="img/icon/Facebook.png" width="32" height="32"/>
              <span class="menu-title">FaceBook</span>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/<?php echo $Sociallinkedin1;?>" target="_blank"><img src="img/icon/LinkedIn.png" width="32" height="32"/>
              <span class="menu-title">linkedin</span>
            </a>
          </li>
          <li>
            <a href="https://wa.me/<?php echo "+2".$SocialWhatsapp1;?>" target="_blank"><img src="img/icon/whatapp.png" width="32" height="32"/>
              <span class="menu-title">Whatsapp</span>
            </a>
          </li>
          <li>
            <a href="mailto:<?php echo $Socialemail1;?>" target="_blank"><img src="img/icon/mail.png" width="32" height="32"/>
              <span class="menu-title">Email</span>
            </a>
          </li>
          <li>
            <a href="https://www.instegram.com/<?php echo $Socialinstegram1;?>" target="_blank"><img src="img/icon/instegram.png" width="32" height="32"/>
              <span class="menu-title">Instegram</span>
            </a>
          </li>
        </ul>
      </nav>