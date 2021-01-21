<?php get_header(); ?>

<main role="main">

<div id="home-slider">
		<?php get_template_part('nivoslides'); ?>

</div>
<div id="wp-carousel">
SPECIAL CONTENTS
<?php get_template_part('inc', 'event_bnrs'); ?>

</div>

<?php get_template_part( 'global-navi-menu' ); ?>


<!--▼▼▼コンセプト▼▼▼-->
<section id="home-concept" class="pt-5 pb-5">
<div class="wrapper">
	<header id="home-concept-header">
	<h2 class="ttl_img w100 maxw-640 center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-concept-ttl.png" title="<?php echo get_option('profile_shop_name'); ?>のコンセプト" alt="CONCEPT"/></h2>
  </header>
		<div id="home-concept-img">
  <figure class="w100 center">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-concept-img001.jpg" alt="<?php echo get_option('profile_shop_name'); ?>コンセプトイメージ"/>
		</figure>
	
	<a class="w100 maxw-200 topage" href="/concept"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-concept-topage.png" alt="コンセプトイページはこちら"/></a>
	</div>
	
  </div>
	
	<section id="concept-choice">
		<div class="wrapper pt-5">
		
		<h2 class="ttl_img w100 maxw-640 center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice-ttl.png"  alt="おすすめ4つの暮らし方"/></h2>
			
			
<p class="text-center">私たちと家づくりをしてくださった大切なオーナー様のお声をもとに<br>
誕生した日々を彩る４つの暮らしをご紹介いたします!!</p>
<ul class="flexbox">
			<li class="choice01">
				<figure class="w100">
		    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice_img01.jpg" alt="コンセプト1のイメージ"/>
				</figure>
				
				<div class="txtcell">
					<span class="subttl">STYLE 01</span>
					<h3 class="ttl">キッズHugスタイル</h3>
					
				</div>
			</li>
			<li class="choice02">
				<figure class="w100">
		    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice_img02.jpg" alt="コンセプト2のイメージ"/>
				</figure>
				
				<div class="txtcell">
					<span class="subttl">STYLE 02</span>
					<h3 class="ttl">イキイキWithスタイル</h3>
					
				</div>
			</li>
			<li class="choice03">
				<figure class="w100">
		    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice_img03.jpg" alt="コンセプト3のイメージ"/>
				</figure>
				
				<div class="txtcell">
					<span class="subttl">STYLE 03</span>
					<h3 class="ttl">おうちSalonスタイル</h3>
					
				</div>
			</li>
			<li class="choice04">
				<figure class="w100">
		    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice_img04.jpg" alt="コンセプト4のイメージ"/>
				</figure>
				
				<div class="txtcell">
					<span class="subttl">STYLE 04</span>
					<h3 class="ttl">ZEROスマートスタイル</h3>
					
				</div>
			</li>
	
		</ul>
		</div>
	</section>


</section>
<!--　home-concept　▲▲▲コンセプト▲▲▲-->
	

<!--▼▼▼施工事例▼▼▼-->
<section id="home-example" class="pb-5 pt-5">
	<div class="wrapper">
    <header class="content_header">
		
		
		<p class="center"><?php echo get_option('profile_shop_name'); ?>の施工実績</p>
		<h2 class="ttl_img mb-4 center w100 maxw-640"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-example-ttl.png" title="<?php echo get_option('profile_shop_name'); ?>の施工事例" alt="WORKS"/></h2>
		<div class="arrow btn toindex">
<a href="/example/" title="施工事例一覧ページヘのリンク">一覧を見る</a>
		</div>
	</header>
    
    

<script>
$(function(){
$('.posts .post.style-example').addClass('col-6 col-lg-4 mb-4'); 
});
</script>
<div class="row posts flex-row justify-content-start">
  <?php
  query_posts( array(
    'post_type' => 'example', //カスタム投稿名
    //            'event_type' => array('newhouse','renovation'),
//    'order' => 'ASC',
    'orderby' => 'order',
    'posts_per_page' => 9 //表示件数（ -1 = 全件 ）
  ) );
  ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
        <?php get_template_part('looppart', 'example'); ?>
<?php endwhile; endif; ?>
</div>    
    
 
</div>
	</section>
<!--　home-example　▲▲▲施工事例▲▲▲-->

	

<!--▼▼▼インフォエリア▼▼▼-->
<section id="home-infoarea" class="mb-5">
	<div class="wrapper p-md-5">
<!--▼▼▼ニュース＆トピックス▼▼▼-->
	<section id="home-news">
		<header class="content_header">
			<p class="subttl center">ニュース＆トピックス</p>
	    <h2 class="ttl w100 maxw-640 center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-news-ttl.png"  alt="NEWS&TOPICS"/></h2>
			
		<div class="arrow btn toindex">
<a href="/category/news" title="ニュース＆トピックス一覧ページヘのリンク">一覧を見る</a>
		</div>
			
		</header>
		
<?php query_posts('category_name=news-topics&posts_per_page=3'); ?>    
    
      <div class="posts clearfix mb-5">
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('looppart', 'headline'); ?>
        <?php endwhile; ?>
      </div>		
		
		</section>
<!--　home-example　▲▲▲ニュース＆トピックス▲▲▲-->

<!--▼▼▼イベント情報▼▼▼-->
	<section id="home-event">
		<header class="content_header">
			<p class="subttl center">近日のイベントのご案内</p>
	    <h2 class="ttl w100 maxw-640 center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-event-ttl.png"  alt="NEWS&TOPICS"/></h2>
			
		<div class="arrow btn toindex">
<a href="/category/event" title="ニュース＆トピックス一覧ページヘのリンク">一覧を見る</a>
		</div>
			
			
		</header>
		
<script>
$(function(){
$('.posts .post.style-event').addClass('col-12 col-lg-6 mb-4'); 
});
</script>
<?php query_posts('category_name=events&posts_per_page=2'); ?>
      <div class="posts row mb-5">
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('looppart', 'event'); ?>
        <?php endwhile; ?>
      </div>
<?php wp_reset_query(); ?>	
	
		
		</section>
<!--　home-event　▲▲▲イベント情報▲▲▲-->
	</div>
	</section>
<!--　home-infoarea　▲▲▲インフォエリア▲▲▲-->
	

<!--▼▼▼選ばれる理由▼▼▼-->
<section id="home-reason" class="pt-5 pb-5 mb-5">
	<div class="wrapper">
		<header class="content_header mb-5">
			
			<h2 class="ttl_img w100 maxw-640 center"><img title="<?php echo get_option('profile_shop_name'); ?>が選ばれる理由" src="<?php bloginfo('stylesheet_directory'); ?>/images/home-reason-ttl.png" alt="REASON"/></h2>
<p class="subttl text-center text-white"><?php echo get_option('profile_shop_name'); ?>が選ばれる理由</p>
		</header>
		
		
		<ul class="row">
			<li class="col-lg-3 col-6 bm-2">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reason_01_shinchiku.png">
			</li><li class="col-lg-3 col-6 mb-4">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reason_02_renovation.png">
			</li><li class="col-lg-3 col-6 mb-4">			
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reason_03_reform.png">
			</li><li class="col-lg-3 col-6 mb-4">			
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reason_04_after.png">
			</li><li class="col-lg-3 col-6 mb-4">			
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reason_05_iezukuri_nagare.png">
			</li><li class="col-lg-3 col-6 mb-4">			
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reason_06_keiyaku_nagare.png">
			</li><li class="col-lg-3 col-6 mb-4">			
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reason_07_hikiwatashi_nagare.png">
			</li><li class="col-lg-3 col-6 mb-4">			
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/reason_08_okane.png">
			</li>			
		</ul>
		
	</div>
</section>
	
<!--　home-infoarea　▲▲▲インフォエリア▲▲▲-->
	


	
	

<!--▼▼▼お客様の声▼▼▼-->
<section id="home-voice" class="pb-5 pt-5">
	<div class="wrapper">
    <header class="content_header">
		
		
		<p class="center"><?php echo get_option('profile_shop_name'); ?>で建てられたお客様の声</p>
		<h2 class="ttl_img mb-4 center w100 maxw-640"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-voice-ttl.png" title="<?php echo get_option('profile_shop_name'); ?>で建てられたお客様の声" alt="WORKS"/></h2>
		<div class="arrow btn toindex">
<a href="/voice/" title="施工事例一覧ページヘのリンク">一覧を見る</a>
		</div>
	</header>
    
    

<script>
$(function(){
$('.posts .post.style-voice').addClass('col-6 col-lg-4 mb-4'); 
});
</script>
<div class="row posts flex-row justify-content-start">
  <?php
  query_posts( array(
    'post_type' => 'voice', //カスタム投稿名
    //            'event_type' => array('newhouse','renovation'),
//    'order' => 'ASC',
    'orderby' => 'order',
    'posts_per_page' => 9 //表示件数（ -1 = 全件 ）
  ) );
  ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
        <?php get_template_part('looppart', 'voice'); ?>
<?php endwhile; endif; ?>
</div>    
    
 
</div>
	</section>
<!--　home-voice　▲▲▲お客様の声▲▲▲-->
	
	
	

<!--▼▼▼代表あいさつとスタッフ紹介▼▼▼-->
<section id="home-greeting">
	<div class="wrapper">
	
<!--▼▼▼代表あいさつ▼▼▼-->
		<section id="president">
	<figure class="w100">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/president_banner.png"  alt="代表あいさつ"/>
		</figure>
		
		</section>
		
		
<!--　home-greeting　▲▲▲代表あいさつ▲▲▲-->
<!--▼▼▼スタッフ紹介▼▼▼-->
		
		<section id="home-staff">
		<ul class="flexbox">
		<?php get_template_part('loop-authors'); ?>

			
		<div class="staff-list">
		   <a href="#"><img class="pt-2 photo yamamoto.r" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/and-next-you.png"></a>
		</div>
		</ul>


		
		</section>
<!--　home-staff　▲▲▲スタッフ紹介▲▲▲-->
		
	</div>
	
</section>
<!--　home-greeting　▲▲▲代表あいさつとスタッフ紹介▲▲▲-->
	

	
	

<div class="greeting">
<a href="/about/message"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/president_banner.png"></a>

<div class="staff-ol">
<div class="staff text-center">
<div class="staff-description">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/staff-t.png">
</div>

<div class="staff-list-i">

<ul>
<?php get_template_part('loop-authors'); ?>
<div class="staff-list">
<li class="text-center">
   <a href="#"><img class="pt-2 photo yamamoto.r" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/and-next-you.png"></a>
</li>
</div>
</ul>

</div>
</div>
</div>

</div>

<div class="about">
<div class="about-description text-center">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us.png">
</div>

<div class="about-inner row">
<div id="home-blog" class="col-12 col-lg-6">
<a href="/category/blog/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog.png"></a>
<div class="row posts">

<?php query_posts('category_name=blog&posts_per_page=3'); ?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
        <?php get_template_part('looppart', 'blog'); ?>
<?php endwhile; endif; ?>

</div>
</div>

<div id="home-promotion" class="col-12 col-lg-6">
<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_banner.png"></a>
<img class="sns-ttl" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sns-ttl.png">
<div class="blog2-1">
<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b-twitter.png"></a>
<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b-instagram.png"></a>
<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b-fb.png"></a>
</div>
</div>
</div>
</div>

<div class="navi text-center mt-3">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ftn.png">
<div class="ftnt">お客様の状況に応じてアクションをお選びください</div>
<div class="navi-menu">
<ul>
  <li><a href="/free"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/navi_01_torikumi.png"></a></li>
  <li><a href="/online"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/navi_02_original.png"></a></li>
  <li><a href="/kenngakukai"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/navi_03_&+.png"></a></li>
  <li><a href="/document-request"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/navi_04_online.png"></a></li>
</ul>
</div>
</div>

</main>


        <?php get_template_part('include', 'shiryou'); ?>


<?php if (get_option('profile_zeh_achievement')):?>

<div id="zeh_achievement" class="zeh">
<div class="zeh1">
        <div  class="row">
          <div class="col-lg-2 col-5 mx-auto d-block">
              <span class="w100 mb-3"><img class="" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_zeh.png"  alt="ZEHビルダー"/></span> </div>
          <!--L--> 
          <div class="col-lg-10 col-12">
            <h2 class="title lead"><?php echo get_option('profile_shop_name'); ?>はZEH<small>※</small>の普及に努めています！</h2>
            <p> ＺＥＨ（ゼッチ）とは、Net Zero Energy House（ネット・ゼロ・エネルギーハウス）の略。</p>
            <p>ネットゼロエネルギー住宅とは、建物の断熱化＋機器の高効率化により、使用エネルギーを削減し、さらに、太陽光発電などの創エネルギーを用いることで、エネルギー収支がゼロになる住宅のこと。</p>
          </div>
          
        </div>
    
    
</div>
<div class="zeh2">
<div class="zeh3">
<?php echo get_option('profile_shop_name'); ?>のZEH普及実績と今後の目標
</div>
<div class="zeh4 zeh_achievement">
<?php echo wpautop(get_option('profile_zeh_achievement'));?>
</div>
</div>
</div>
<?php endif;?>
<?php get_footer(); ?>

