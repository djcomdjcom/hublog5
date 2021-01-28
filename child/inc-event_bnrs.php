


	<?php query_posts( array(
    'post_type' => 'event_bnr', //カスタム投稿名
		'order'=>'ASC',
		'orderby'=>'menu_order',
    'posts_per_page' => '4'
)); ?>
<?php if(have_posts()): ?>

<?php
// プラグイン　 Jetpack > パフォーマンスおよびスピード > (無効にする)画像の遅延読み込みを有効にする
 ?>


<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/owlcarousel/assets/owl.theme.default.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/owlcarousel/assets/owl.carousel.min.css" media="screen" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/owlcarousel/owl.carousel.min.js"></script>


<script type="text/javascript">
jQuery(function($){

  $('.owl-carousel').owlCarousel({

							loop: true,
							nav: true,
							navSpeed: 800,
							dots: false,
							dotsSpeed: 800,
							lazyLoad: true,
							autoplay: true,
							autoplayHoverPause: true,
							autoplayTimeout: 1200,
							autoplaySpeed:  800,
							margin: 1,
							stagePadding: 0,
							margin:10,
							freeDrag: false,
							mouseDrag: true,
							touchDrag: true,
							slideBy: 1,
							fallbackEasing: "linear",
							responsiveClass: true,
							navText: [ "previous", "next" ],
							responsive:{
							0:{items: 2},
							600:{items: 4},
							1000:{items: 4}
                                
                            },
                            autoHeight: false
                        });
                        $('.owl-carousel').on("mousewheel", ".owl-stage", function(e) {
                if (e.deltaY > 0) {
                    $('.owl-carousel').trigger("next.owl");
                } else {
                    $('.owl-carousel').trigger("prev.owl");
                }
                e.preventDefault();
            });
                    });
                
</script>

					<!--home-event-->



					<section class="wrapper" id="inc-eventposts">

								<div class="owl-carousel owl-theme">
										<?php while (have_posts()) : the_post(); ?>

											<div id="post-<?php the_ID(); ?>" class="clearfix post style-bnrs item">


											<?php if (post_custom('event_bnr_url')) :?>
											<a target="_blank" class=" w100" href="<?php echo(post_custom('event_bnr_url')) ;?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'),the_title_attribute('echo=0')); ?>">

											<?php if ( function_exists('the_post_image') ) {
												if ( the_post_image(array(600,100)) === false ){
													?><img src="<?php echo get_template_image('noimage');?>" alt="No Image" /><?php
												}
											} ?>

											</a>
											<?php else :?>

											<span class=" w100" title="<?php printf(__('Permanent Link to %s'),the_title_attribute('echo=0')); ?>">
											<?php if ( function_exists('the_post_image') ) {
												if ( the_post_image('large') === false ){
													?><img src="<?php echo get_template_image('noimage');?>" alt="No Image" /><?php
												}
											} ?>

											</span>
											<?php endif;?>

											<?php edit_post_link(__('Edit'), ''); ?>
											</div>

										<?php endwhile; ?>
									</div>



					</section>
										<!--home-event-->

					<?php wp_reset_query(); ?>


<?php endif; ?>
