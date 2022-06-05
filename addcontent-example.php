
<article id="" class="clearfix section">
  <?php if ( post_custom( 'renov-gallery' ) == 'gallery_off' ):  ?>
  <?php else:?>
	
	

  <section id="galleryslider" class="sliderArea rel_lb">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/slick/slick.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/slick/slick-theme.css" media="screen" />
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/slick/slick.min.js"></script> 
    <script>
//タグにclass追加
$(function(){
$('#galleryslider .gallery-size-large').addClass('slider_thumb slider'); 
});
$(function(){
$('#galleryslider .gallery-size-thumbnail').addClass('thumb'); 
});
		
//slick設定
$(document).on('ready', function() {
  $('.slider_thumb').slick({
      arrows:true,
	  dots: true,
      asNavFor:'.thumb',
          responsive: [{
               breakpoint: 768,
                    settings: {
//      arrows:false,
               }
          }
          ]	  
  })
	;
  $('.thumb').slick({
      asNavFor:'.slider_thumb',
      focusOnSelect: true,
//      slidesToShow:12,
      arrows:false,
          responsive: [{
               breakpoint: 767,
                    settings: {
      arrows:true,
//      slidesToShow:6,
      slidesToScroll:1,
               }
          }
          ]	  
  });

});

		
//サムネイル表示の調整	
	
var windowWidth = $(window).width();
var windowSm = 768;
if (windowWidth <= windowSm) {
$(function () {
let slidesToShowNum = 6; //slidesToShowに設定したい値を挿入
 /* slidesToShowより投稿が少ない場合の処理▽ */
let item = $('#galleryslider .gallery-size-thumbnail dl').length; //dlの個数を取得
if (item <= slidesToShowNum) {
for ( i = 0 ; i <= slidesToShowNum + 1 - item ; i++) { //足りていない要素数分、後ろに複製
$('#galleryslider .gallery-size-thumbnail dl:nth-child(' + i + ')').clone().appendTo('#galleryslider .gallery-size-thumbnail');
  }
 } /* slidesToShowより投稿が少ない場合の処理△ */

 $('#galleryslider .gallery-size-thumbnail').slick({
  slidesToShow: slidesToShowNum, //slidesToShowNumに設定した値が入る
 });
});
	
} else {
//横幅768px以上（PC、タブレット）に適用させるJavaScriptを記述
$(function () {
let slidesToShowNum = 12; //slidesToShowに設定したい値を挿入
 /* slidesToShowより投稿が少ない場合の処理▽ */
let item = $('#galleryslider .gallery-size-thumbnail dl').length; //liの個数を取得
if (item <= slidesToShowNum) {
for ( i = 0 ; i <= slidesToShowNum + 1 - item ; i++) { //足りていない要素数分、後ろに複製
$('#galleryslider .gallery-size-thumbnail dl:nth-child(' + i + ')').clone().appendTo('#galleryslider .gallery-size-thumbnail');
  }
 }
 /* slidesToShowより投稿が少ない場合の処理△ */
 $('#galleryslider .gallery-size-thumbnail').slick({
  slidesToShow: slidesToShowNum, //slidesToShowNumに設定した値が入る
 });
});}	



	
	
</script>	  
	  
	  
    <?php
    $id = $post->ID;
    if ( empty( $exclude ) ) {
      $eximages = get_children( array( 'post_parent' => $id, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'numberposts' => -1 ) );
      foreach ( $eximages as $eximage ) {
        $post_custom = get_post_custom( $eximage->ID );
        if ( isset( $post_custom[ 'exclude' ] ) ) {
          $excludes[] = $eximage->ID;
        }
      }
      if ( isset( $excludes ) && !empty( $excludes ) ) {
        $exclude = ( is_array( $excludes ) ) ? join( ',', $excludes ) : '';
      }
    };
    ?>
    <?php echo (do_shortcode('[gallery columns="0" link="file" title="true" caption="true" description="true" size="large"  exclude='.$exclude.']')); ?> <?php echo (do_shortcode('[gallery columns="0" link="none" title="false" caption="false" description="false" size="thumbnail"  exclude='.$exclude.']')); ?> </section>
</article>







<!--example-slider-->

<?php endif ?>
<?php
if ( post_custom( 'renov-gallery' ) == 'gallery_off' ):
  ?>
<?php else:?>
<article id="example-header" class="clearfix rel_lb">
  <h2 class="title">
    <?php if(post_custom('catchcopy')) :?>
    <span class="catchcopy"> <?php echo nl2br ( post_custom('catchcopy') ); ?> </span>
    <?php else :?>
    <?php the_title(); ?>
    <?php endif ;?>
  </h2>
  <?php if (post_custom('example-area') || post_custom('example-name') || post_custom('example-family') || post_custom('example-kouhou') || post_custom('example-shikichi') || post_custom('example-yuka') ) : ?>
  <div class="example-family">
    <?php if (post_custom('example-area') || post_custom('example-name')) : ?>
    <p class="example-area_name"> <span>
      <?php if (post_custom('example-area')) :?>
      <?php echo post_custom('example-area'); ?>
      <?php endif ; ?>
      </span> <span>
      <?php if (post_custom('example-name')) :?>
      <?php echo post_custom('example-name'); ?>様邸
      <?php endif ; ?>
      </span> </p>
    <?php endif ; ?>
    <?php if (post_custom('example-family')) :?>
    <span class="title">家族構成</span> <?php echo wpautop(post_custom('example-family')); ?> </div>
  <?php endif ; ?>
  <?php if (post_custom('example-kouhou') || post_custom('example-shikichi') || post_custom('example-yuka')) : ?>
  <div class="example-plan">
    <?php if (post_custom('example-kouhou')) :?>
    <p><?php echo post_custom('example-kouhou'); ?></p>
    <?php endif ; ?>
    <?php if (post_custom('example-shikichi')) :?>
    <p><span class="title">敷地面積</span>：<?php echo post_custom('example-shikichi'); ?></p>
    <?php endif ; ?>
    <?php if (post_custom('example-yuka')) :?>
    <p><span class="title">床面積</span>：<?php echo post_custom('example-yuka'); ?></p>
    <?php endif ; ?>
  </div>
  <?php endif ; ?>
  <?php endif ; ?>

  <?php if (post_custom ('example-C') || post_custom ('example-Q') || post_custom ('example-UA') )  :?>
  <div class="clearfix example-meta spec">
    <?php if (post_custom('example-C')) :?>
    <span class="example-c"> <span class="title">C値：</span><span class="number"><?php echo post_custom('example-C'); ?></span> </span>
    <?php endif ;?>
    <?php if (post_custom('example-Q')) :?>
    <span class="example-q"> <span class="title">Q値：</span><span class="number"><?php echo post_custom('example-Q'); ?></span> </span>
    <?php endif ;?>
    <?php if (post_custom('example-UA')) :?>
    <span class="example-ua"> <span class="title">UA値：</span><span class="number"><?php echo post_custom('example-UA'); ?></span> </span>
    <?php endif ;?>
  </div>
  <?php endif ;?>
</article>
<?php endif ?>
