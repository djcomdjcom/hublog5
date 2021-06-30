<?php
/**
 */

get_header();


$post_id = get_the_ID();

?>
<script language="javascript" type="text/javascript">
	$(function(){
  $('.rel_lb a[href$=".jpg"],.rel_lb a[href$=".jpeg"],.rel_lb a[href$=".JPG"],.rel_lb a[href$=".JPEG"],.rel_lb a[href$=".png"],.rel_lb a[href$=".PNG"],.rel_lb a[href$=".gif"],.rel_lb a[href$=".GIF"]').attr('rel' ,'lightbox');
});  
</script>

<div id="container" class="single clearfix">
<div id="content" role="main">
<?php the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header wrapper">
  <h1 class="entry-title">
    <?php the_title(); ?>
  </h1>
</header>

	
<section id="bunjo_role-1" class="bunjo_role role-concept clearfix anchor">
  <div class="entry-content">
    <header class="bunjo_role-header">
      <h2 class="entry-title"> <span>CONCEPT</span><span class="small">コンセプト</span> </h2>
    </header>
	 
   <?php if ( is_object_in_term($post->ID,'bunjo_role','bunjo-gallery') || is_object_in_term($post->ID,'bunjo_role','bunjo-performance') || is_object_in_term($post->ID,'bunjo_role','bunjo-equipment') || is_object_in_term($post->ID,'bunjo_role','bunjo-location') ): ?>
	
	<div class="text-center">
	<a href="/bunjo/<?php echo $parent_id = $post->post_parent;?>.html">親ページへ移動</a>
	</div>
<?php endif;?>
	  
	  
	  
	  
	  <div class="the_content">
    <?php the_content(); ?>
	  </div>
	  
	<p class="to_form btn"><a href="#form">資料請求・内覧予約はこちら</a></p>
	  
    <?php edit_post_link(__('Edit'), ''); ?>
  </div>
  <!-- .entry-content --> 
</section>
<?php wp_reset_query(); ?>
<?php
$arg = array(
  'post_type' => 'bunjo', //カスタム投稿名
  'post_parent' => $post_id,
  'posts_per_page' => 5 //表示件数（-1で全ての記事を表示）
);
$posts = get_posts( $arg );
if ( $posts ): ?>
<?php
$i = 2; //ループ回数習得
foreach ( $posts as $post ): setup_postdata( $post );
?>
<section id="bunjo_role-<?php  echo $i; ?>" class="bunjo_role role-<?php $terms = get_the_terms($post->ID,'bunjo_role');foreach( $terms as $term ) {echo $term->slug;}?> clearfix anchor">
<div class="entry-content">
<header class="bunjo_role-header">
  <h2>
    <?php if ( is_object_in_term($post->ID,'bunjo_role','bunjo-gallery') ): ?>
    <span>GALLERY</span><span class="small">フォトギャラリー</span>
    <?php elseif ( is_object_in_term($post->ID,'bunjo_role','bunjo-performance') ): ?>
    <span>PERFORMANCE</span><span class="small">素材・性能</span>
    <?php elseif ( is_object_in_term($post->ID,'bunjo_role','bunjo-equipment') ): ?>
    <span>EQUIPMENT</span><span class="small">物件概要・設備・特徴</span>
    <?php elseif ( is_object_in_term($post->ID,'bunjo_role','bunjo-location') ): ?>
    <span>LOCATION</span><span class="small">周辺環境</span>
    <?php endif ;?>
  </h2>
</header>
<div class="the_content">
<?php if ( is_object_in_term($post->ID,'bunjo_role','bunjo-performance') ): ?>
<div class="inbox">
  <div class="bunjo-performance00">
    <?php the_content(); ?>
	  
	  
  </div>
  <!--bunjo-performance01-->
  
  <?php if (post_custom('performance-01-ttl') || post_custom('performance-02-ttl') || post_custom('performance-03-ttl')) ://?>
  <?php if (post_custom('performance-01')) ://?>
  <div class="tabContents active anchor" id="bunjo-performance01"> <?php echo wpautop(post_custom('performance-01')); ?> </div>
  <!--bunjo-performance02-->
  <?php endif ;//?>
  <?php if (post_custom('performance-02')) ://?>
  <div class="tabContents anchor" id="bunjo-performance02"> <?php echo wpautop(post_custom('performance-02')); ?> </div>
  <!--bunjo-performance02-->
  <?php endif ;//?>
  <?php if (post_custom('performance-03')) ://?>
  <div class="tabContents anchor" id="bunjo-performance03"> <?php echo wpautop(post_custom('performance-03')); ?> </div>
  <!--bunjo-performance03-->
  <?php endif ;//?>
</div>
<!--inbox of bunjo-performance-->

<?php if (post_custom('performance-01-ttl') && post_custom('performance-02-ttl') && post_custom('performance-03-ttl')) ://?>
<ul class="flexbox tab tab-col3">
<?php elseif (post_custom('performance-01-ttl') && post_custom('performance-02-ttl')) ://?>
<ul class="flexbox tab tab-col2">
<?php elseif (post_custom('performance-02-ttl') && post_custom('performance-03-ttl')) ://?>
<ul class="flexbox tab tab-col2">
<?php elseif (post_custom('performance-01-ttl') && post_custom('performance-03-ttl')) ://?>
<ul class="flexbox tab tab-col2">
<?php else :?>
<ul class="flexbox tab tab-col3">
  <?php endif;?>
  <?php if (post_custom('performance-01-ttl')) ://?>
  <li class="bunjo-performance01 active"> <a href="#bunjo-performance01"> <?php echo (post_custom('performance-01-ttl')); ?> </a> </li>
  <?php endif ;//?>
  <?php if (post_custom('performance-02-ttl')) ://?>
  <li class="bunjo-performance02"> <a href="#bunjo-performance02"> <?php echo (post_custom('performance-02-ttl')); ?> </a> </li>
  <?php endif ;//?>
  <?php if (post_custom('performance-03-ttl')) ://?>
  <li class="bunjo-performance03"> <a href="#bunjo-performance03"> <?php echo (post_custom('performance-03-ttl')); ?> </a> </li>
  <?php endif ;//?>
</ul>
<?php endif ;//?>
<script language="javascript" type="text/javascript">
$(function() {
  $(".tab a").click(function() {
    $(this).parent().addClass("active").siblings(".active").removeClass("active");
    var tabContents = $(this).attr("href");
    $(tabContents).addClass("active").siblings(".active").removeClass("active");
    return false;
  });
});	
	
				
</script>
	
	
	
<?php elseif ( is_object_in_term($post->ID,'bunjo_role','bunjo-gallery') ): ?>
<section id="galleryslider" class="clearfix rel_lb">
  <?php echo (do_shortcode('[gallery link="file" title="false" caption="true" description="true" size="medium"  type="flexslider"]')); ?>
</section>
<!--　-->

<?php elseif ( is_object_in_term($post->ID,'bunjo_role','bunjo-location') ): ?>
<section id="galleryslider" class="clearfix rel_lb">
  <?php echo (do_shortcode('[gallery link="file" title="false" caption="true" description="true" size="medium" ]')); ?>
</section>
<!--　-->

<?php else :?>
<?php the_content(); ?>
<?php endif; ?>
<?php edit_post_link(__('Edit'), ''); ?>
</div>
</div>
<!-- .entry-content -->
	
	
	<p class="to_form btn"><a href="#form">資料請求・内覧予約はこちら</a></p>
</section>
<!--0000-->

<?php $i++;endforeach; ?>
<?php endif;  wp_reset_postdata();?>

	
<?php //get_template_part('include', 'example');//選ばれる理由 ?>
	
	
	
	
	


<?php
query_posts( array(
'post_type' => 'example', //カスタム投稿名
'orderby' => 'order',
'posts_per_page' => 5 //表示件数（ -1 = 全件 ）
) );
?>

<section id="popup_gallery" class="posts posts-popup_gallery clearfix rel_lb">
	
	<header class="content-header">
	
	<h2 class="bold">OTHER WORKS</h2>
		<span class="subttl"><?php echo get_option('profile_shop_name');//屋号 ?>の施工事例</span>
	</header>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
	
	
<article id="post-<?php the_ID(); ?>" class="post clearfix style-popup_gallery parent-container">
<?php echo (do_shortcode('[gallery size="medium" link="file"]')); ?>
<span class="title "><?php the_title(); ?></span>
	    <?php edit_post_link(__('Edit'), ''); ?>

</article><!--post-->
<?php endwhile; endif; ?>
	</section>
<?php wp_reset_query(); ?>
	



	
	<!--フォーム	-->
	<section id="form" class="clearfix anchor maxw-1200 mx-auto">
		<header class="text-center mt-5 py-4">
		<h2>資料請求・内覧のお申し込み</h2>
		</header>
		
	<?php echo apply_filters('the_content', get_post_meta($post->ID, 'unique-form-ttl', true)); ;?>

</section><!--form-->
	

	
	
	
	
	
	
	
	
<nav id="bunjo_content-nav">
  <ul class="flexbox">
    <li> <a href="#bunjo_role-1"> <span>CONCEPT</span><span class="small">コンセプト</span> </a> </li>
    <?php
    $arg = array(
      'post_type' => 'bunjo', //カスタム投稿名
      'post_parent' => $post_id,
      'posts_per_page' => 5 //表示件数（-1で全ての記事を表示）
    );
    $posts = get_posts( $arg );
    if ( $posts ): ?>
    <?php
    $i = 2; //ループ回数習得
    foreach ( $posts as $post ): setup_postdata( $post );
    ?>
    <li>
      <?php if ( is_object_in_term($post->ID,'bunjo_role','bunjo-gallery') ): ?>
      <a href="#bunjo_role-<?php  echo $i; ?>"> <span>GALLERY</span><span class="small">フォトギャラリー</span> </a>
      <?php elseif ( is_object_in_term($post->ID,'bunjo_role','bunjo-performance') ): ?>
      <a href="#bunjo_role-<?php  echo $i; ?>"> <span>PERFORMANCE</span><span class="small">素材・性能</span> </a>
      <?php elseif ( is_object_in_term($post->ID,'bunjo_role','bunjo-equipment') ): ?>
      <a href="#bunjo_role-<?php  echo $i; ?>"> <span>EQUIPMENT</span><span class="small">物件概要・設備・特徴</span> </a>
      <?php elseif ( is_object_in_term($post->ID,'bunjo_role','bunjo-location') ): ?>
      <a href="#bunjo_role-<?php  echo $i; ?>"> <span>LOCATION</span><span class="small">周辺環境</span> </a>
      <?php endif ;?>
    </li>
    <?php $i++;endforeach; ?>
	  
  </ul>
  <?php endif;  wp_reset_postdata();?>
</nav>
	
	
<script language="javascript" type="text/javascript">
	
$(function() {
    // ナビゲーションのリンクを指定
   var navLink = $('#bunjo_content-nav li a');
 
    // 各コンテンツのページ上部からの開始位置と終了位置を配列に格納しておく
   var contentsArr = new Array();
  for (var i = 0; i < navLink.length; i++) {
       // コンテンツのIDを取得
      var targetContents = navLink.eq(i).attr('href');
      // ページ内リンクでないナビゲーションが含まれている場合は除外する
      if(targetContents.charAt(0) == '#') {
         // ページ上部からコンテンツの開始位置までの距離を取得
            var targetContentsTop = $(targetContents).offset().top;
         // ページ上部からコンテンツの終了位置までの距離を取得
            var targetContentsBottom = targetContentsTop + $(targetContents).outerHeight(true) - 1;
         // 配列に格納
            contentsArr[i] = [targetContentsTop, targetContentsBottom]
      }
   };
 
  // 現在地をチェックする
   function currentCheck() {
       // 現在のスクロール位置を取得
        var windowScrolltop = $(window).scrollTop();
        for (var i = 0; i < contentsArr.length; i++) {
           // 現在のスクロール位置が、配列に格納した開始位置と終了位置の間にあるものを調べる
          if(contentsArr[i][0] <= windowScrolltop && contentsArr[i][1] >= windowScrolltop) {
                // 開始位置と終了位置の間にある場合、ナビゲーションにclass="current"をつける
               navLink.removeClass('current');
               navLink.eq(i).addClass('current');
                i == contentsArr.length;
            }
       };
  }
 
   // ページ読み込み時とスクロール時に、現在地をチェックする
  $(window).on('load scroll', function() {
      currentCheck();
 });
 
 // ナビゲーションをクリックした時のスムーズスクロール
    navLink.click(function() {
      $('html,body').animate({
          scrollTop: $($(this).attr('href')).offset().top
       }, 300);
        return false;
   })
});	</script>
	
<footer>
  <div class="entry-utility wrapper">
    <?php edit_post_link( __( 'Edit', 'hublog' ), '<span class="edit-link">', '</span>' ); ?>
    <?php
    wp_link_pages( array(
      'before' => '<div class="page-link">' . __( 'Pages:' ),
      'after' => '</div>',
      'link_before' => '<span>',
      'link_after' => '</span>',
    ) );
    ?>
    <div class="entry-meta">
      <?php
      printf(
        $posted_in,
        get_the_category_list( ', ' ),
        $tag_list,
        get_permalink(),
        the_title_attribute( 'echo=0' )
      );
      ?>
    </div>
    <!-- .entry-meta -->
    
    <div class="entry-meta updated author"> <span class="date updated">
      <?php the_time('Y/n/j') ?>
      </span> <span class="author vcard">投稿者：<span class="fn">
      <?php the_author(); ?>
      </span></span> </div>
    <!-- .entry-meta --> 
    
  </div>
  <!-- .entry-utility --> 
  
</footer>
</article>
<!-- #post-## -->

</div>
<!-- #content -->
</div>
<!-- #container -->

<?php
/**
 */

get_footer();

?>
<style>
	#globalheader{
		visibility: hidden;
		height: 30px;
		overflow: hidden;
	}
	#headnav{
		display: none;
	}
	.anchor{
		margin-top: -6.5em;
		padding-top: 6.0em;
	}
	
	#bunjo_content-nav{
		position: fixed;
		left: 0;
		top: 0;
		right: 0;
		width: 100vw;
		background: #5F401D;
		z-index: 399;
	}
		#bunjo_content-nav ul{
			font-size: 0;
			letter-spacing: 0;
			padding: 0;
			margin: 0;
			color: #fff;
			width: 100vw;
			margin: 0 auto;
			
	}
		#bunjo_content-nav li{
			padding: 0;
			margin: 0;
			width: 20%;
			text-align: center;
	}
	#bunjo_content-nav li *{
		font-size: 1.4rem;
	}
	#bunjo_content-nav li a{
		color: #fff;
		display: block;
		padding: 1.0rem;
		transition: .15s;
	}
	#bunjo_content-nav li a.current,
	#bunjo_content-nav li a:hover{
		text-decoration: none;
		background: #C9A063;
	}
	
	#bunjo_content-nav li a > span{
		display: block;
		padding: 0 0.5em;
	}
	#bunjo_content-nav li a > span.small{
		font-size: 0.6em;
	}
	.entry-header .entry-title{
		background: none;
		font-size: 1rem;
		text-align: center;
		padding-top: 3em;
		margin-bottom: -3em;
		padding: 0;
		margin-top: 3em;
		margin-bottom: -3em;
	}
.bunjo_role	.entry-content{
	position: relative;
	}
.bunjo_role	.entry-content .post-edit-link{
	position: absolute;
	right: 3px;
	top: 5em;
	display: inline-block;
	padding: 0.2em 1em;
	background: #fff;
		
	}
.bunjo_role	.entry-content h1,
.bunjo_role	.entry-content h2,
.bunjo_role	.entry-content h3,
.bunjo_role	.entry-content h4,
.bunjo_role	.entry-content h5{
		border: none;
		padding-left: 0;
		padding-right: 0;
		background: none;
	font-weight: bold;
	}
	
	.bunjo_role-header {
		background: #5F401D;
	}
	.bunjo_role-header h2{
		text-align: center;
		color: #fff;
		line-height: 1.6em;
		margin-bottom: 0;
	}
	.bunjo_role-header h2 span{
		display: block;
		font-size: 1.8rem;
		line-height: 1.7em;
	}
	.bunjo_role-header h2 span.small{
		font-size: 0.8rem;
	}

	#bunjo_role-1{
		background: url("<?php bloginfo('stylesheet_directory'); ?>/images/bg_check.png");
	}
	
	.bunjo_role	.the_content{
		padding-top: 2em;
		margin-top: 0;
	}
	
/*concept*/	
	.bunjo_role.role-bunjo-concept{
		margin-bottom: 3em;
	}
/*PERFORMANCE*/
	.bunjo_role.role-bunjo-performance{}
	.bunjo_role.role-bunjo-performance .the_content{
		padding-top: 0;
	}
	.bunjo_role.role-bunjo-performance .the_content >  .inbox{
		border-left:2px solid #5F401D;
		border-right:2px solid #5F401D;
		border-bottom:2px solid #5F401D;
		padding: 3em 2em 2em ;
	}
	
	
	.bunjo_role.role-bunjo-performance .tab{
	}	
	.bunjo_role.role-bunjo-performance .tab,
	.bunjo_role.role-bunjo-performance .tab > li{
		padding: 0;
		font-size: 0;
		letter-spacing: 0;
	}
	.bunjo_role.role-bunjo-performance .tab > li{
		display: block;
		margin: 0;
	}
	.bunjo_role.role-bunjo-performance .tab.tab-col3 > li{
		width: calc( 100% / 3);
	}
	.bunjo_role.role-bunjo-performance .tab.tab-col2 > li{
		width: calc( 100% / 2);
	}
	.bunjo_role.role-bunjo-performance .tab > li a{
		display: block;
		text-align: center;
		padding:0.8em  0 ;
		background:  #fff;
		color: #5F401D;
		font-size: 1.2rem;
		border-left: 1px solid #5F401D;
		border-right: 1px solid #5F401D;
		border-bottom: 2px solid #5F401D;
		text-decoration: none;
	}
	.bunjo_role.role-bunjo-performance .tab > li a:after{
		content: ">";
		display: inline-block;
		margin-left: 0.5em;
	}
	
	.bunjo_role.role-bunjo-performance .tab > li:first-child a{
		border-left: 2px solid #5F401D;
	}
	.bunjo_role.role-bunjo-performance .tab > li:ladt-child a{
		border-right: 2px solid #5F401D;
	}
	.bunjo_role.role-bunjo-performance .tab > li.active a{
		background: #5F401D;
		color: #fff;
	}
	.tabContents {
  display: none;
}
.tabContents.active {
  display: block;
}
	
	.role-bunjo-performance .tabContents.anchor{
			padding-top: 8em;
		}

	
	/*EQUIPMENT*/
	.bunjo_role.role-bunjo-equipment .the_content{
		border:2px solid #5F401D;
		padding: 2em;
		margin-top: 0;

	}
	
	/*LOCATION*/
	.bunjo_role.role-bunjo-location .gallery dl + br {
		display: none;
	}
	
	.bunjo_role.role-bunjo-location .gallery {
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding-left: 0;
  display: -webkit-box;
  display: -moz-box;


  display: -ms-box;
  display: -webkit-flexbox;
  display: -moz-flexbox;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: flex;
  -webkit-box-lines: multiple;
  -moz-box-lines: multiple;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}
	.bunjo_role.role-bunjo-location .gallery > * {
  box-sizing: border-box;
  width: 24%;
  margin:0.5em 0.5%;
		padding: 0;
  vertical-align: top;
  position: relative;
}	

	.bunjo_role.role-bunjo-location	#galleryslider{
		padding: 0;
		background:transparent;
	}
	.bunjo_role.role-bunjo-location .gallery dl{
		padding-bottom: 1em;
	}	
	.bunjo_role.role-bunjo-location .gallery dl dd{
		line-height: 1.5em;
	}	
	
.bunjo_role.role-bunjo-location .gallery dl dt a{
display: block;
background: #ccc;
position: relative;
overflow: hidden;
width: 100%;/*　トリミングしたい枠の幅　*/
padding-top: 65%;/*　トリミングしたい枠の高さ　*/

}

.bunjo_role.role-bunjo-location .gallery dl dt a img {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  display: block;
}
	
	
/*FORM*/	
	.bunjo_role.role-bunjo-concept  .to_form.btn a{
		margin-bottom: 0;
	}

		.bunjo_role .to_form.btn a{
		padding: 0.7em;
		font-size: 1.3rem;
		border-radius: 0.5em;
		background: #22AC38;
		color: #fff;
		max-width: 25em;
		margin: 0 auto 4em;
		display: block;
	}
	.bunjo_role .to_form.btn a:before{
  content: "\f0e0";
  font-family: FontAwesome;
		margin-right: 1em;
		
	}
	.bunjo_role .to_form.btn a:after{
  content: "\f0da";
  font-family: FontAwesome;
		margin-left: 1em;
	}
	
	#form header h2{
		font-size: 1.5em;
	}
	
/*POPUP GALLERY EXAMPEL*/
	
	#popup_gallery{
		background: #C9A063;
		color: #fff;
		padding: 2em 0;
		margin-bottom: 3em;
	}
	#popup_gallery .content-header{
		color: #fff;
		padding: 1em 0;
	}
	#popup_gallery.posts{
		text-align: center;
	}	
	#popup_gallery dl.gallery-item,
	#popup_gallery dl + br{
		display: none;
	}
	#popup_gallery dl.gallery-item:first-child{
		display: block;
		float: none;
	}
	
.posts .post.style-popup_gallery{
		display: inline-block;
		width: 17%;
	margin: 0 1%;
	vertical-align:top;
	}
	
	
	
	#popup_gallery dl dt a{
display: block;
background: rgba(0,0,0,0.1);
position: relative;
overflow: hidden;
width: 100%;/*　トリミングしたい枠の幅　*/
padding-top: 100%;/*　トリミングしたい枠の高さ　*/
		border-radius: 7px;

}
	#popup_gallery dl dt a img{
	display: block;
	width: 100%;
	height: auto;
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	display: block;
}
	
	
	
	
@media screen and (max-width: 999px) {
	#bunjo_content-nav li a {
		padding: 0.4em 0;
		font-size: 1rem;
	}
	
	
	.bunjo_role.role-bunjo-performance .tab li{
		width: 100% !important;
	}	
	.bunjo_role.role-bunjo-performance .tab li a{
		padding: 0.2em 0;
		border-bottom: 2px solid #5F401D;
		border-left: 2px solid #5F401D;
		border-right: 2px solid #5F401D;
	}
	}
	
@media screen and (max-width: 719px) {
	#bunjo_content-nav li{
		width: 50%;
		text-align: left;
	}
	#bunjo_content-nav li a span:before{
		content: ">";
		margin-right: 0.5em;
		display: inline-block;
	}
	#bunjo_content-nav li a{
		padding: 0.3em 0;
	}
	#bunjo_content-nav li a > span{
		display: none;
	}
	#bunjo_content-nav li a > span.small{
		display: block;
		font-size: 1.0rem;
	}	
	.bunjo_role.role-bunjo-location .gallery .title{
		display: none;
	}
	
	.bunjo_role.role-bunjo-location .gallery dl{
		padding-bottom: 0;
	}
	
	#popup_gallery .style-popup_gallery .title{
		display: none;
	}
		
	}
	
	</style>
