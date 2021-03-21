<?php
/**
 * footer.php
 */
wp_reset_query();
?>
</main>

<!-- #main-->

<?php wp_reset_query(); ?>
<div id="wrapper"> <a class="btn-gnavi"> <span></span> <span></span> <span></span>
  <div class="btn-gnavi-menu">MENU</div>
  </a>
  <nav id="global-navi">
    <div class="global-navi-inner">
      <div id="global-navi-logo" class="wrapper center mb-0 mb-md-4">
		  <a class="w100 center" href="/"><?php echo get_option('profile_shop_name'); ?></a>
		</div><div class="gtn-contgact">
			<div class="contact-tel ">
				<span class="profile_inquiry_tel">
				<?php
				$profile_inquiry_tel = ( get_option( 'profile_inquiry_tel' ) ) ? get_option( 'profile_inquiry_tel' ) : get_option( 'profile_main_tel' );
				if ( !empty( $profile_inquiry_tel ) ): ?>
				&nbsp;<span class="telnum"><?php echo $profile_inquiry_tel; ?>&nbsp;</span>
				<?php
				endif;
				?>
				</span>
			</div>

			<div class="inc_contact-btn">
				<ul class="btn_set row py-2 mx-auto px-0">
				<li class="to_shiryou col-6 btn"> <a class="" href="/offer/?title=<?php echo get_the_title();?>">資料請求</a> </li>
				<li class="to_inquiry col-6 btn"> <a class="" href="/inquiry/?title=<?php echo get_the_title();?>">お問い合わせ</a> </li>
				</ul>
			</div>
		</div>
		
	<?php get_template_part('include', 'snslink');//SNSボタン ?>
		
		
      <div class="gni-address mt-3">
        <nav id="access">
          <?php get_template_part( 'global-navi-menu' ); ?>
        </nav>
		  
		  
		  
		  <div class="gtm-address">
        <p class="profile_address"><?php echo '' . get_option('profile_postcode'); ?> <?php echo get_option('profile_address'); ?></p>
        <span class="text-nowrap px-1">TEL： <?php echo get_option('profile_main_tel'); ?> </span> <span class="text-nowrap px-1">FAX： <?php echo get_option('profile_fax'); ?> </span>
        <div class="gni-time" class="m-4">
        <span class="text-nowrap px-1">営業時間 <?php echo (get_option('profile_opening_hours')) ?></span><span class="text-nowrap px-1">定休日　<?php echo (get_option('profile_holiday')) ?></span> </div>
		  </div>
			  
      <div class="global-navi-menu text-left mt-4">
        <div class=" f1">
          <?php
          if ( has_nav_menu( 'f1' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f1',
            ) );
          }
          ?>
        </div>
        <div class=" f2">
          <?php
          if ( has_nav_menu( 'f2' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f2',
            ) );
          }
          ?>
        </div>
        <div class=" f3">
          <?php
          if ( has_nav_menu( 'f3' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f3',
            ) );
          }
          ?>
        </div>
        <div class=" f4">
          <?php
          if ( has_nav_menu( 'f4' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f4',
            ) );
          }
          ?>
        </div>
        <div class=" f5">
          <?php
          if ( has_nav_menu( 'f5' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f5',
            ) );
          }
          ?>
        </div>
      </div>
    </div>
  </nav>
</div>
<?php if ( get_option( 'blog_public') ): ?>
<?php else: ?>
<div class="wrapper" style="clear:both; border: 2px solid red; color:red; background:#fff; text-align:center; margin-top:1em;margin-bottom:1em; padding:0.5em 0;"> ※検索エンジンのインデックスを許可していません。<br />
  <a href="/wp-admin/options-reading.php">許可する</a> </div>
<?php endif; ?>
<?php if ( is_user_logged_in() ) : ?>
<p class="aligncenter"> <a href="/hublog_setting">→hublog設定</a></p>
<?php endif; ?>
<footer class="" id="footer">
  <div id="footer_img"></div>
  <div id="footer_inbox">
    <div class="wrapper pt-5 pb-5">
      <div class="footer-navi-menu text-left my-4">
        <div class=" f1">
          <?php
          if ( has_nav_menu( 'f1' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f1',
            ) );
          }
          ?>
        </div>
        <div class=" f2">
          <?php
          if ( has_nav_menu( 'f2' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f2',
            ) );
          }
          ?>
        </div>
        <div class=" f3">
          <?php
          if ( has_nav_menu( 'f3' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f3',
            ) );
          }
          ?>
        </div>
        <div class=" f4">
          <?php
          if ( has_nav_menu( 'f4' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f4',
            ) );
          }
          ?>
        </div>
        <div class=" f5">
          <?php
          if ( has_nav_menu( 'f5' ) ) {
            wp_nav_menu( array(
              'theme_location' => 'f5',
            ) );
          }
          ?>
        </div>
      </div>
		
            <?php get_template_part('include', 'snslink');//SNSボタン ?>
		
		
      <div class="footer-contact mt-4 container-fluid">
        <div class="row mb-5 mt-5">
          <div class="footer-contact-inner1 col-md-4 mb-4"> <a href="/" class="w100"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer@2x.png"></a> </div>
          <div class="footer-contact-inner2 col-md-4  mb-4"> <?php echo '' . get_option('profile_postcode'); ?> <?php echo get_option('profile_address'); ?> <br>
            <span class="text-nowrap px-1">TEL： <?php echo get_option('profile_main_tel'); ?> </span> <span class="text-nowrap px-1">FAX： <?php echo get_option('profile_fax'); ?> </span><br>
            <span class="text-nowrap px-1">営業時間 <?php echo (get_option('profile_opening_hours')) ?></span><span class="text-nowrap px-1">定休日　<?php echo (get_option('profile_holiday')) ?></span> </div>
          <div class=" col-md-4  mb-4">
            <div class="contact-tel"> <span class="profile_inquiry_tel">
              <?php
              $profile_inquiry_tel = ( get_option( 'profile_inquiry_tel' ) ) ? get_option( 'profile_inquiry_tel' ) : get_option( 'profile_main_tel' );
              if ( !empty( $profile_inquiry_tel ) ): ?>
              &nbsp;<span class="telnum"><?php echo $profile_inquiry_tel; ?>&nbsp;</span>
              <?php
              endif;
              ?>
              </span> </div>
            <!--contact-tel--> 
          </div>
        </div>
      </div>
      <div class="cr"> Copyright&copy; <?php echo get_option('profile_corporate_name'); ?> All Rights Reserved. </div>
    </div>
  </div>
</footer>
<script>
$(function(){
        $(".btn-gnavi").on("click", function(){
                var rightVal = 0;
                if($(this).hasClass("open")) {
                        rightVal = -10000;
                        $(this).removeClass("open");
                } else {
                        $(this).addClass("open");
                }

                $("#global-navi").stop().animate({
                        right: rightVal
                }, 200);
        });
});
</script>
<?php wp_footer(); ?>
</body>
<?php if ( is_user_logged_in() ) : ?>
<div class="to_dashboard">
  <?php edit_post_link(__('Edit'), '', ''); ?>
  <a href="<?php echo admin_url();?>">管理画面</a> </div>
<!--inbox-->
<?php endif; ?>
</html>