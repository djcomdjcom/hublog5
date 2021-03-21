<div class="snslink wrapper">
<ul class="flexbox">
  <?php if (get_option('profile_sns_line')): ?>
  <li class=""> <a target="_blank" class="w100" href="http://line.me/ti/p/%40<?php echo get_option('profile_sns_line'); ?>" > <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-line@2x.png" alt="<?php echo get_option('profile_corporate_name'); ?>のline公式アカウント"> </a> </li>
  <?php endif;?>
  <?php if (get_option('profile_sns_ytch')): ?>
  <li class=""> <a target="_blank" class="w100" href="<?php echo get_option('profile_sns_ytch'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-yt@2x.png" alt="<?php echo get_option('profile_corporate_name'); ?>のYou Tubeチャンネル"></a> </li>
  <?php endif;?>
  <?php if (get_option('profile_sns_tw')): ?>
  <li class=""> <a target="_blank" class="w100" href="<?php echo get_option('profile_sns_tw'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-tw@2x.png" alt="<?php echo get_option('profile_corporate_name'); ?>のtwitter"></a> </li>
  <?php endif;?>
  <?php if (get_option('profile_sns_ig')): ?>
  <li class=""> <a target="_blank" class="w100" href="<?php echo get_option('profile_sns_ig'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-ig@2x.png" alt="<?php echo get_option('profile_corporate_name'); ?>のInstagram"></a> </li>
  <?php endif;?>
  <?php if (get_option('profile_sns_pin')): ?>
  <li class=""> <a target="_blank" class="w100" href="<?php echo get_option('profile_sns_pin'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-pin@2x.png" alt="<?php echo get_option('profile_corporate_name'); ?>のPintarestチャンネル"></a> </li>
  <?php endif;?>
  <?php if (get_option('profile_sns_fb')): ?>
  <li class=""> <a target="_blank" class="w100" href="<?php echo get_option('profile_sns_fb'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-fb@2x.png" alt="<?php echo get_option('profile_corporate_name'); ?>のfacebook"></a> </li>
  <?php endif;?>
</ul>
</div>