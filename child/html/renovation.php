


<div class="pagetab pagetab-main">
  <?php wp_nav_menu(array('theme_location'=>'renov-nav', 'fallback_cb'=>'nothing_to_do')); ?>
</div>


<p>
  <?php echo (get_option('profile_shop_name')) ?>のリノベーション
</p>

<p>
  このページはリノベーショントップページです。<br>

  ・リノベーションの概要<br>

  ・<?php echo (get_option('profile_shop_name')) ?>のリノベーションの強みなど、リノベーションのトップ項目を記載するページです。<br>
  サイトによっては必要ない場合があります。
</p>



<p class="w100">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/sample-image.png" alt="イメージ">
</p>


<div class="pagetab pagetab-bottom">
  <?php wp_nav_menu(array('theme_location'=>'renov-nav', 'fallback_cb'=>'nothing_to_do')); ?>
</div>
