
<ul class="row">
  <?php if (get_option('profile_sns_fb')) :?>
  <li class="col-4"> <a target="_blank" class="w100" href="<?php echo (get_option('profile_sns_tw')) ;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-tw@2x.png" alt="twitter"></a> </li>
  <?php endif;?>
  <?php if (get_option('profile_sns_fb')) :?>
  <li class="col-4"> <a target="_blank" class="w100" href="<?php echo (get_option('profile_sns_ig')) ;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-ig@2x.png" alt="Instagram"></a> </li>
  <?php endif;?>
  <?php if (get_option('profile_sns_fb')) :?>
  <li class="col-4"> <a target="_blank" class="w100" href="<?php echo (get_option('profile_sns_fb')) ;?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-fb@2x.png" alt="facebook"></a> </li>
  <?php endif;?>
</ul>
