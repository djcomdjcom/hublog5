<?php
query_posts( array(
  'post_type' => 'event_bnr', //カスタム投稿名
  'order' => 'ASC',
  'orderby' => 'menu_order',
  'posts_per_page' => '4'
) );
?>
<?php if(have_posts()): ?>
<?php
// プラグイン　 Jetpack > パフォーマンスおよびスピード > (無効にする)画像の遅延読み込みを有効にする
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/slick/slick.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/slick/slick-theme.css" media="screen" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/slick/slick.min.js"></script> 

<!--home-event--> 
<script type="text/javascript">
					$(function() {
					    $('.inc-eventposts').slick({
						
						
slidesToShow: 4,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 2000,						

infinite: true,
nav:true,
//centerMode: true, //要素を中央寄せ
centerPadding:'10px', //両サイドの見えている部分のサイズ
easing: 'ease-in-out',
							
					          responsive: [{
					               breakpoint: 700,
					                    settings: {
										slidesToShow: 2,
										centerPadding:'0px', //両サイドの見えている部分のサイズ
					               }
					          }
					          ]
					     });
					});

					</script>
<section class=" slick-slider" id="inc-eventposts">
  <div class="posts inc-eventposts slick">
    <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="clearfix post style-bnrs">
      <?php if (post_custom('event_bnr_url')) :?>
      <a target="_blank" class=" w100" href="<?php echo(post_custom('event_bnr_url')) ;?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'),the_title_attribute('echo=0')); ?>">
      <?php
      if ( function_exists( 'the_post_image' ) ) {
        if ( the_post_image( 'large' ) === false ) {
          ?>
      <img src="<?php echo get_template_image('noimage');?>" alt="No Image" />
      <?php
      }
      }
      ?>
      </a>
      <?php else :?>
      <span class=" w100" title="<?php printf(__('Permanent Link to %s'),the_title_attribute('echo=0')); ?>">
      <?php
      if ( function_exists( 'the_post_image' ) ) {
        if ( the_post_image( 'large' ) === false ) {
          ?>
      <img src="<?php echo get_template_image('noimage');?>" alt="No Image" />
      <?php
      }
      }
      ?>
      </span>
      <?php endif;?>
      <?php edit_post_link(__('Edit'), ''); ?>
    </article>
    <?php endwhile; ?>
  </div>
</section>
<!--home-event-->

<?php wp_reset_query(); ?>
<?php endif; ?>
