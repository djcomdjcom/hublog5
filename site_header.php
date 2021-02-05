<?php
/**
 * site_header.php
 * 
 * (extend for header.php)
 */
?>
<header id="header">
  <div class="wrapper description"> <em>
    <?php bloginfo( 'description' ); ?>
    </em> </div>
	
	
  <section id="globalheader">
	  <div class="row wrapper mx-auto">
    <div class="order-2 order-md-1 sitetitle col-9 col-md-5 align-self-center"><a class="w100 maxw-360 mx-auto mx-md-0" href="/" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sitetitle.png"></a></div>
	  
	  
    <div class="order-1 order-md-2 sitelogo col-3 col-md-2"><a class="w100" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png"></a></div>
		  
		  
    <div id="header-sub" class="order-3 col-md-5 col-12 text-center text-md-right">
      <?php if ( has_nav_menu( 'contact-link' ) ) :?>
      <div class="menu-header_link-container">
        <?php wp_nav_menu( array('theme_location'=>'contact-link', 'fallback_cb'=>'nothing_to_do') ); ?>
      </div>
      <!--menu-header_link-container-->
      
      <?php else: ?>
		<div class="menu-header_link-container"><div class="menu-item"><a href="/about">会社案内</a><a href="/about#map">アクセス</a><a href="/inquiry?title=<?php if ( is_home() || is_front_page() ) {  echo ('トップページ');} else {echo get_the_title();}?>">お問い合わせ</a> </div></div>
      <?php endif; ?>
      <div class="contact-tel"> <span class="profile_inquiry_tel">
		  
		  <?php if (is_home() ): ?>
		  
    <h1 class="profile_corporate_name"><?php echo get_option('profile_corporate_name'); ?></h1>
    <?php else:?>
    <span class="profile_corporate_name"><?php echo get_option('profile_corporate_name'); ?></span>
    <?php endif;?>


		  
        <?php
        $profile_inquiry_tel = ( get_option( 'profile_inquiry_tel' ) ) ? get_option( 'profile_inquiry_tel' ) : get_option( 'profile_main_tel' );
        if ( !empty( $profile_inquiry_tel ) ): ?>
        &nbsp;<span class="telnum"><?php echo $profile_inquiry_tel; ?>&nbsp;</span>
        <?php
        endif;
        ?>
        </span> </div>
      <!--contact-tel-->
      <?php if ( get_option('profile_holiday') || get_option('profile_opening_hours')) : ?>
      <div class="opning-hour-day">
        <?php if ( get_option('profile_opening_hours')) : ?>
        <span class="profile_opening_hours"> <span class="title">営業時間：</span><?php echo (get_option('profile_opening_hours')) ?></span>
        <?php endif; ?>
        <?php if ( get_option('profile_holiday') ) : ?>
        <span class="profile_holiday"> <span class="title">定休日：</span><?php echo (get_option('profile_holiday')) ?> </span>
        <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
	  </div>
  </section>

 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top-contact.png" class="position-fixed top-contact" usemap="#tc">
  <map name="tc">
    <area shape="poly" coords="28,120,28,281,77,299,77,112" href="/document-request?title=<?php if ( is_home() || is_front_page() ) {  echo ('トップページ');} else {echo get_the_title();}?>
">
    <area shape="poly" coords="25,322,25,481,77,499,77,306" href="/inquiry?title=<?php if ( is_home() || is_front_page() ) {  echo ('トップページ');} else {echo get_the_title();}?>
">
  </map>
	
</header>
<?php if (! is_home() ): ?>
<nav id="headnav">
  <?php get_template_part( 'global-navi-menu' ); ?>
</nav>
<?php endif; ?>

