<?php
/**
 * footer.php
 */
wp_reset_query();
?>
</main>

<!-- #main-->


<?php wp_reset_query(); ?>
<div id="wrapper">
<a class="btn-gnavi"> <span></span> <span></span> <span></span>
<div class="btn-gnavi-menu">MENU</div>
</a>
<nav id="global-navi">
  <div class="global-navi-inner">
	  
	  
<nav class="wrapper">
  <?php //get_template_part( 'global-navi-menu' ); ?>
</nav>
	  
	  <div id="global-navi-logo" class="wrapper center mb-4"> <a class="w100 center" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer@2x.png"></a> </div>
          <div class="contact-tel"> <span class="profile_inquiry_tel">
            <?php
            $profile_inquiry_tel = ( get_option( 'profile_inquiry_tel' ) ) ? get_option( 'profile_inquiry_tel' ) : get_option( 'profile_main_tel' );
            if ( !empty( $profile_inquiry_tel ) ): ?>
            &nbsp;<span class="telnum"><?php echo $profile_inquiry_tel; ?>&nbsp;</span>
            <?php
            endif;
            ?>
            </span> </div>

	  
    <div class="gni-address mt-3"> <?php echo '' . get_option('profile_postcode'); ?> <?php echo get_option('profile_address'); ?>　TEL： <?php echo get_option('profile_main_tel'); ?> FAX： <?php echo get_option('profile_fax'); ?> </div>
    <div class="gni-time" class="m-4">
		<?php if (get_option('profile_opening_hours')) :?>
		<span class="profile_opening_hours" >
    営業時間 <?php echo (get_option('profile_opening_hours')) ;?>
		</span>
		<?php endif;?>
		
		
		<?php if (get_option('profile_holiday')) :?>
		<span class="profile_holiday">
		定休日 <?php echo (get_option('profile_holiday')) ;?>
		</span>
	  <?php endif;?>
	  </div>
	  
	  
	  
  <div class="global-navi-menu text-left mt-4">
      <div class="d-inline-block f1">
		<?php
		if ( has_nav_menu( 'f1' ) ) {
		wp_nav_menu( array(
		'theme_location' => 'f1',
		) );
		}
		?>
      </div>
      <div class="d-inline-block f2">
		<?php
		if ( has_nav_menu( 'f2' ) ) {
		wp_nav_menu( array(
		'theme_location' => 'f2',
		) );
		}
		?>
      </div>
      <div class="d-inline-block f3">
		<?php
		if ( has_nav_menu( 'f3' ) ) {
		wp_nav_menu( array(
		'theme_location' => 'f3',
		) );
		}
		?>
      </div>
      <div class="d-inline-block f4">
		<?php
		if ( has_nav_menu( 'f4' ) ) {
		wp_nav_menu( array(
		'theme_location' => 'f4',
		) );
		}
		?>
      </div>
      <div class="d-inline-block f5">
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
<div class="wrapper" style="clear:both; border: 2px solid red; color:red; background:#fff; text-align:center; margin-top:1em;margin-bottom:1em; padding:0.5em 0;">
※検索エンジンのインデックスを許可していません。<br />
<a href="/wp-admin/options-reading.php">許可する</a>
</div>
<?php endif; ?>

<?php if ( is_user_logged_in() ) : ?><p class="aligncenter">	<a href="/hublog_setting">→hublog設定</a></p><?php endif; ?>


<footer class="" id="footer">
<div id="footer_img"></div>
<div id="footer_inbox">	
  <div class="wrapper pt-5 pb-5">
    <div class="footer-navi-menu text-left mt-5">
      <div class="d-inline-block f1">
		<?php
		if ( has_nav_menu( 'f1' ) ) {
		wp_nav_menu( array(
		'theme_location' => 'f1',
		) );
		}
		?>
      </div>
      <div class="d-inline-block f2">
		<?php
		if ( has_nav_menu( 'f2' ) ) {
		wp_nav_menu( array(
		'theme_location' => 'f2',
		) );
		}
		?>
      </div>
      <div class="d-inline-block f3">
		<?php
		if ( has_nav_menu( 'f3' ) ) {
		wp_nav_menu( array(
		'theme_location' => 'f3',
		) );
		}
		?>
      </div>
      <div class="d-inline-block f4">
		<?php
		if ( has_nav_menu( 'f4' ) ) {
		wp_nav_menu( array(
		'theme_location' => 'f4',
		) );
		}
		?>
      </div>
      <div class="d-inline-block f5">
		<?php
		if ( has_nav_menu( 'f5' ) ) {
		wp_nav_menu( array(
		'theme_location' => 'f5',
		) );
		}
		?>
      </div>
    </div>
    <div class="footer-contact mt-5 container-fluid">
      <div class="row mb-5 mt-5">
        <div class="footer-contact-inner1 col-md-4 mb-4"> <a href="/" class="w100"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer@2x.png"></a> </div>
        <div class="footer-contact-inner2 col-md-4  mb-4"> <?php echo '' . get_option('profile_postcode'); ?> <?php echo get_option('profile_address'); ?> <br>
			<span class="text-nowrap px-1">TEL： <?php echo get_option('profile_main_tel'); ?> </span>
			<span class="text-nowrap px-1">FAX： <?php echo get_option('profile_fax'); ?> </span><br>
			<span class="text-nowrap px-1">営業時間 <?php echo (get_option('profile_opening_hours')) ?></span><span class="text-nowrap px-1">定休日　<?php echo (get_option('profile_holiday')) ?></span>
		  </div>
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
    <div class="cr"> Copyright&copy; <?php echo get_option('profile_shop_name'); ?> All Rights Reserved. </div>
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