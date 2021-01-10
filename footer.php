<?php
/**
 * footer.php
 */
wp_reset_query();
?>

	</div><!-- #main-->

<?php if ( get_option( 'blog_public') ): ?>
<?php else: ?>
<div class="wrapper" style=" border: 2px solid red; color:red; background:#fff; text-align:center; margin-top:1em;margin-bottom:1em; padding:0.5em 0;">
※検索エンジンのインデックスを許可していません。<br />
<a href="/wp-admin/options-reading.php">許可する</a>
</div>
<?php endif; ?>

<?php if ( is_user_logged_in() ) : ?><p class="aligncenter">	<a href="/hublog_setting">→hublog設定</a></p><?php endif; ?>



    <footer id="footer" class="clearfix">

			<?php get_sidebar('footer'); ?>

        <div id="foot-info" class="wrapper clearfix">

					<div id="foot-shopinfo" class="cleartype clearfix">
						
						<address id="foot-shopinfo-main">
							<span class="profile_corporate_name"><?php echo get_option('profile_corporate_name'); ?></span>

							<span class="profile_address">
								
								<span class="postcode">
								<?php echo '〒' . get_option('profile_postcode'); ?>
								</span>
							
								<span class="address">
								<?php echo get_option('profile_address'); ?>
								</span>
									
							</span><!--profile_address-->

								
							<span class="profile_tel-fax">
								<?php if (get_option('profile_main_tel')) : ?>

								<span class="tel">
									<span class="title">TEL：</span>
									<span class="number"><?php echo get_option('profile_main_tel'); ?></span>
								</span>&nbsp;&nbsp;
								<?php endif; ?>
						
								<?php if (get_option('profile_fax')) : ?>
								<span class="fax">
									<span class="title">FAX：</span>
									<span class="number"><?php echo get_option('profile_fax'); ?></span>
								</span>
								<?php endif; ?>

							</span><!--profile_tel-fax-->
						</address><!--foot-shopinfo-main-->
						
						
						<div id="foot-shopinfo-sub">
							<span class="profile_inquiry_tel"><?php
							$profile_inquiry_tel = (get_option('profile_inquiry_tel')) ? get_option('profile_inquiry_tel') : get_option('profile_main_tel');
							if (!empty($profile_inquiry_tel)) : ?>&nbsp;<span class="telnum"><?php echo $profile_inquiry_tel; ?>&nbsp;</span><?php endif;
							?>
							</span>
							
							<div class="opning-hour-day">

								<?php if ( get_option('profile_opening_hours') ) : ?>
								<span class="profile_opening_hours">
								<span class="title">営業時間：</span><?php echo (get_option('profile_opening_hours')) ?>
								</span>
								<?php endif; ?>


								<?php if ( get_option('profile_holiday') ) : ?>
								<span class="profile_holiday">
								<span class="title">定休日：</span><?php echo (get_option('profile_holiday')) ?>
								</span>
								<?php endif; ?>
								
							</div><!--opning-hour-day-->
							
							<div id="foot-shopinfo-link">
								<span class="toabout"><a href="/about#gaiyou">店舗情報</a></span>
								<span class="tomap"><a href="/about#map">アクセスマップ</a></span>
							</div><!--side-shopinfo-link-->

							
							<div id="foot-inquiry">
							<?php wp_nav_menu( array('theme_location'=>'top-right-area', 'fallback_cb'=>'nothing_to_do') ); ?>
							</div><!--foot-inquiry-->
						
						</div><!--foot-shopinfo-sub-->
					</div><!--foot-shopinfo-->
					
        </div><!-- .foot-info -->


        <div class="cr">Copyright &copy; <?php bloginfo('name'); ?> All rights resereved.</div>
    </footer><!-- #footer -->
	</div><!--#page-->

<div id="wp_footer">
 <div id="kanri">
    <span class="alignright"><a href="http://djcom.jp/">Powered by DJCOM Inc.</a></span>
	</div>
 <?php wp_footer(); ?>
</div><!--wp_footer-->

</body>
<?php if ( is_user_logged_in() ) : ?>
<div class="to_dashboard">
<?php edit_post_link(__('Edit'), '', ''); ?>
<a href="<?php echo admin_url();?>">管理画面</a>
</div><!--inbox-->
<?php endif; ?>
</html>