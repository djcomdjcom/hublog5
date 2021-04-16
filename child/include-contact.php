<article class="include-contact wrapper pb-5 container-fluid">
	
  <div class="inbox p-2 px-md-4 pt-md-3 pb-md-0 ">
	  
    <div class=" row no-gutters align-item-end text-center justify-content-around" >
      <div class="inc_contact-ttl col-lg-4 col-8 order-lg-1">
        <div class="w100 px-md-4 mt-md-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/inc_contact-ttl@2x.png" alt="CONTACT US"/></div>
      </div>
		
      <div class="inc_contact-img01 col-lg-3 col-3 order-lg-3">
		  
        <div class="w100 center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/inc_contact-img01@2x.png" alt=""/> </div>
		  
      </div>
    <div class="inc_contact-btn col-lg-5 col-12 order-lg-2"> <span class="profile_inquiry_tel">
      <?php
      $profile_inquiry_tel = ( get_option( 'profile_inquiry_tel' ) ) ? get_option( 'profile_inquiry_tel' ) : get_option( 'profile_main_tel' );
      if ( !empty( $profile_inquiry_tel ) ): ?>
      &nbsp;<span class="telnum "><?php echo $profile_inquiry_tel; ?>&nbsp;</span>
      <?php
      endif;
      ?>
      </span>
      <div>
        <?php if (get_option('profile_opening_hours')) :?>
        <div class="profile_opening_hours  px-1" > 営業時間 <?php echo (get_option('profile_opening_hours')) ;?> </div>
        <?php endif;?>
        <?php if (get_option('profile_holiday')) :?>
        <div class="profile_holiday px-1"> 定休日 <?php echo (get_option('profile_holiday')) ;?> </div>
        <?php endif;?>
      </div>
		
        <ul class="btn_set row py-2 mx-auto">
          <li class="to_shiryou col-12 col-md-6 btn">
			  <a class="" href="/offer?title=<?php if ( is_home() || is_front_page() ) {  echo ('トップページ');} else {echo get_the_title();}?>
">資料請求</a> </li>
          <li class="to_inquiry  col-12 col-md-6 btn">
			  <a class="" href="/inquiry?title=<?php if ( is_home() || is_front_page() ) {  echo ('トップページ');} else {echo get_the_title();}?>
">お問い合わせ</a> </li>
        </ul>
    </div>
		
    
    <!--contact-tel--> 
    </div>
  </div>
</article>
<!--include-contact--> 
