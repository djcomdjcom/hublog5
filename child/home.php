<?php get_header(); ?>
<main role="main">
  <div id="home-slider">
	  <!--script src="<?php //bloginfo('stylesheet_directory'); ?>/js/nivo/jquery-1.9.0.min.js"></script-->

    <?php get_template_part('nivoslides'); ?>
  </div>
  <div id="home-carousel" class="mb-3">
    <div id="calousel_ttl" class="wrapper text-center">
		<span class="ttl mincho">SPECIAL CONTENTS</span>
	 </div>
    <?php get_template_part('inc', 'event_bnrs'); ?>
  </div>
  <?php get_template_part( 'global-navi-menu' ); ?>
  
  <!--▼▼▼コンセプト▼▼▼-->
  <section id="home-concept" class="pt-5">
    <div class="wrapper center">
      <header id="home-concept-header">
        <h2 class="ttl_img w100 maxw-800 center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-concept-ttl@2x.png" alt="<?php echo get_option('profile_shop_name'); ?>の家づくり"/></h2>
        <p><?php echo get_option('profile_shop_name'); ?>は、コンセプト文<br>
          コンセプト文コンセプト文コンセプト文コンセプト文<br>
          コンセプト文コンセプト文コンセプト文コンセプト文コンセプト文コンセプト文<br>
          コンセプト文コンセプト文コンセプト文</p>
      </header>
      <p class="w100 ttl_img maxw-800 center"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-concept-symbol@2x.png" alt="住まいの悩み×<?php echo get_option('profile_shop_name'); ?>の提案＝理想の暮らし"/> </p>
      <p> お客様の不満を理想的な暮らしに変換する<br>
        それが<?php echo get_option('profile_shop_name'); ?>の仕事です </p>
    </div>
    <section id="concept_choice" class="pb-5">
      <div class="wrapper pt-5">
        <h2 class="ttl_img w100 maxw-640 center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice-ttl@2x.png"  alt="新築注文住宅もリフォームも安心＆健康が最優先です"/></h2>
        <p class="text-center">私たちと家づくりをしてくださった大切なオーナー様のお声をもとに<br>
          誕生した日々を彩る４つの暮らしをご紹介いたします!!</p>
        <ul class="flexbox">
          <li class="choice01">
            <figure class="w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice_img01@2x.jpg" alt="コンセプト1のイメージ"/> </figure>
            <div class="txtcell"> <span class="subttl">STYLE 01</span>
              <h3 class="ttl">日本最高水準の高気密高断熱</h3>
            </div>
          </li>
          <li class="choice02">
            <figure class="w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice_img02@2x.jpg" alt="コンセプト2のイメージ"/> </figure>
            <div class="txtcell"> <span class="subttl">STYLE 02</span>
              <h3 class="ttl">無垢と漆喰で、大自然のような<br>
                おいしい空気を</h3>
            </div>
          </li>
          <li class="choice03">
            <figure class="w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice_img03@2x.jpg" alt="コンセプト3のイメージ"/> </figure>
            <div class="txtcell"> <span class="subttl">STYLE 03</span>
              <h3 class="ttl">悩みをしっかり解決し理想的な未来へ</h3>
            </div>
          </li>
          <li class="choice04">
            <figure class="w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/concept_choice_img04@2x.jpg" alt="コンセプト4のイメージ"/> </figure>
            <div class="txtcell"> <span class="subttl">STYLE 04</span>
              <h3 class="ttl">すべての基準は健康から</h3>
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
      <header class="content_header mt-5 mb-3">
        <h2 class="ttl_img mb-4 center w100"><img class="maxw-800" src="<?php bloginfo('stylesheet_directory'); ?>/images/home-example-ttl@2x.png" title="<?php echo get_option('profile_shop_name'); ?>の施工事例" alt="WORKS"/></h2>
        <p class="center subttl mb-4"><?php echo get_option('profile_shop_name'); ?>の施工実績</p>
      </header>
      <script>
$(function(){
$('.posts .post.style-example').addClass('col-6 col-lg-4 ');
});
</script>
      <div class="row posts flex-row justify-content-start no-gutters ">
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
      <?php wp_reset_query(); ?>
      <div class="arrow btn toindex"> <a href="/example/" title="施工事例一覧ページヘのリンク">一覧を見る</a> </div>
    </div>
  </section>
  <!--　home-example　▲▲▲施工事例▲▲▲--> 
  
  <!--▼▼▼インフォエリア▼▼▼-->
  <section id="home-infoarea" class="mb-5 wrapper">
    <div class="wrapper p-3 mx-3 my-5 p-md-5 mx-md-0">
      <!--▼▼▼ニュース＆トピックス▼▼▼-->
      <section id="home-news" class="mb-3">
        <header class="content_header">
          <h2 class="ttl w100 center"><img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/home-news-ttl@2x.png" alt="NEWS&TOPICS"/></h2>
          <p class="subttl center">ニュース＆トピックス</p>
        </header>
        <?php query_posts('category_name=news&posts_per_page=3'); ?>
        <div class="posts clearfix">
          <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('looppart', 'headline'); ?>
          <?php endwhile; ?>
        </div>
        <?php wp_reset_query(); ?>
        <div class="arrow btn toindex"> <a href="/category/news" title="ニュース＆トピックス一覧ページヘのリンク">一覧を見る</a> </div>
      </section>
      <!--　home-example　▲▲▲ニュース＆トピックス▲▲▲--> 
      
      <!--▼▼▼イベント情報▼▼▼-->
      <section id="home-event" class="mt-5">
        <header class="content_header">
          <h2 class="ttl w100 center"><img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/home-event-ttl@2x.png"  alt="NEWS&TOPICS"/></h2>
          <p class="subttl center"><?php echo get_option('profile_shop_name'); ?>の無垢・漆喰の家で「ワクワク体験」してみませんか。あなたにぴったりの家が見つかる「無料設計相談会」でご体験ください。</p>
        </header>
        <script>
$(function(){
$('.posts .post.style-event').addClass('col-12 col-lg-6 mb-4'); 
});
</script>
        <?php query_posts('category_name=event&posts_per_page=2'); ?>
        <div class="posts row">
          <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('looppart', 'event'); ?>
          <?php endwhile; ?>
        </div>
        <?php wp_reset_query(); ?>
        <div class="arrow btn toindex"> <a href="/category/event" title="イベント一覧ページヘのリンク">一覧を見る</a> </div>
      </section>
      <!--　home-event　▲▲▲イベント情報▲▲▲--> 
    </div>
  </section>
  <!--　home-infoarea　▲▲▲インフォエリア▲▲▲--> 
  
  <!--▼▼▼選ばれる理由▼▼▼-->
  <section id="home-reason" class="pt-5 pb-5 mt-5 mb">
    <div class="wrapper container-fluid">
      <header class="content_header mb-5">
        <h2 class="ttl_img w100 maxw-640 center"><img title="<?php echo get_option('profile_shop_name'); ?>が選ばれる理由" src="<?php bloginfo('stylesheet_directory'); ?>/images/home-reason-ttl@2x.png" alt="REASON"/></h2>
        <p class="subttl text-center text-white"><?php echo get_option('profile_shop_name'); ?>が選ばれる理由</p>
      </header>
      <ul class="row px-2 px-md-0">
        <li class="col-lg-4 col-6 mb-2"><a class="w100" href="/daichi"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason-daichi.jpg"></a></li>
        <li class="col-lg-4 col-6 mb-2"><a class="w100" href="/sw_organic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason-sw_organic.jpg"></a></li>
        <li class="col-lg-4 col-6 mb-2"><a class="w100" href="/trettio"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason-trettio.jpg"></a></li>
        <li class="col-lg-4 col-6 mb-2"><a class="w100" href="/shinchiku2sei"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason-shinchiku2sei.png"></a></li>
        <li class="col-lg-4 col-6 mb-2"><a class="w100" href="/sumicas"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason-sumicas.png"></a></li>
        <li class="col-lg-4 col-6 mb-2"><a class="w100" href="/sdgs"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reason-sdgs.png"></a></li>
      </ul>
    </div>
  </section>
  
  <!--　home-infoarea　▲▲▲インフォエリア▲▲▲--> 
  
  <!--▼▼▼お客様の声▼▼▼-->
  <section id="home-voice" class="pb-5 pt-5 ">
    <div class="wrapper mt-5">
      <header class="content_header">
        <h2 class="ttl_img mb-4 center w100"><img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/home-voice-ttl@2x.png" title="<?php echo get_option('profile_shop_name'); ?>で建てられたお客様の声" alt="WORKS"/></h2>
        <p class="subttl center"><?php echo get_option('profile_shop_name'); ?>で建てられたお客様の声</p>
      </header>
      <script>
$(function(){
$('.posts .post.style-voice').addClass('col-6 col-lg-4 mb-4'); 
});
</script>
      <div class="row posts flex-row justify-content-start no-gutters">
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
    <div class="arrow btn toindex"> <a href="/voice/" title="施工事例一覧ページヘのリンク">一覧を見る</a> </div>
  </section>
  <!--　home-voice　▲▲▲お客様の声▲▲▲--> 
  
  <!--▼▼▼代表あいさつとスタッフ紹介▼▼▼-->
  <section id="home-greeting" class="pt-3 pb-4 mb-5">
    <div class="wrapper"> 
      
      <!--▼▼▼代表あいさつ▼▼▼-->
      <section id="president"> </section>
      
      <!--　home-greeting　▲▲▲代表あいさつ▲▲▲--> 
      <!--▼▼▼スタッフ紹介▼▼▼-->
      
      <section id="home-staff" class="pt-5 container-fluid">
        <header class="content_header">
          <h2 class="ttl_img mb-4 center w100"> <img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/home-staff-ttl@2x.png" alt="STAFF"/></h2>
          <p class="subttl center mb-4">WE LOVE DAIEI-KENSETSU</p>
        </header>
        <div class="flexbox">
          <?php get_template_part('loop-authors'); ?>
          <div class="staff-list"> <a class="w100" href="/recruit"><img class="pt-2 photo" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff-topage.png"></a> </div>
        </div>
      </section>
      <!--　home-staff　▲▲▲スタッフ紹介▲▲▲--> 
      
    </div>
  </section>
  <!--　home-greeting　▲▲▲代表あいさつとスタッフ紹介▲▲▲-->
  
  <section id="home-about" class="pt-5 pb-5 mb-5 ">
	  
        <header class="content_header">
          <h2 class="ttl_img mb-4 center w100"> <img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/home-about-ttl@2x.png" alt="ABOUT US"/></h2>
          <p class="subttl center"><?php echo get_option('profile_shop_name'); ?>のいろいろなご紹介</p>
        </header>
	  
<div class="row wrapper">
	  <div id="home-blog-staff" class="home-blog col-12 col-lg-6 pr-lg-4 mb-4 container-fluid">
		  <h3 class="ttl_img w100">
			  <img class="maxw-220" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-blog_staff-ttl@2x.png" alt="STAFF BLOG">
			  <span class="ttl">スタッフブログ</span></h3>

		  
<div class="row posts flex-row">
  <?php
        query_posts( array(
          'post_type' => 'staff', //カスタム投稿名
          //            'event_type' => array('newhouse','renovation'),
          //    'order' => 'ASC',
          'orderby' => 'order',
          'posts_per_page' => 3 //表示件数（ -1 = 全件 ）
        ) );
        ?>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
  <?php get_template_part('looppart', 'inc_blog'); ?>
  <?php endwhile; endif; ?>
</div>
      <?php wp_reset_query(); ?>
		  
		  
		  <p class="btn arrow toindex">
			  <a href="/staff" title="スタッフブログ一覧へ">ARCHIVE</a>
		  
		  </p>
    </div>
	  
	  <div id="home-blog-genba" class="home-blog col-12 col-lg-6 pl-lg-4 mb-4 container-fluid">
		  <h3 class="ttl_img w100">
			  <img class="maxw-250" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-blog_builder-ttl@2x.png" alt="BUILDER BLOG">
			  <span class="ttl">現場ブログ</span></h3>
		  
<div class="row posts flex-row">
        <?php
        query_posts( array(
          'post_type' => 'genba', //カスタム投稿名
          //            'event_type' => array('newhouse','renovation'),
          //    'order' => 'ASC',
          'orderby' => 'order',
          'posts_per_page' => 3 //表示件数（ -1 = 全件 ）
        ) );
        ?>
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <?php get_template_part('looppart', 'inc_blog'); ?>
        <?php endwhile; endif; ?>
      </div>
      <?php wp_reset_query(); ?>
		  
		  <p class="btn arrow toindex">
			  <a href="/genba" title="現場ブログ一覧へ">ARCHIVE</a>
		  
		  </p>
		  
    </div>
	
	
	  </div>
	  
	  
	  
      <section id="home-promotion">
		  
		  <div class="wrapper row pt-4">
			  <div class="col-12 col-md-6">
		  <a class="w100" href="/president">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/bnr-president@2x.jpg" alt="社長ブログ"/>
		  </a>
			  </div>

			  <div class="col-12 col-md-6">

<div class="sns-link maxw-500 center">
	
	<p class="w100 center maxw-400"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/snsicon_followme@2x.png" alt="follow me"/></p>
<ul class="row">
  <li class="col-4">
		  <a class="w100" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-tw@2x.png" alt="twitter"></a>
		</li>
  <li class="col-4">
		  <a class="w100" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-ig@2x.png" alt="Instagram"></a>
		</li>
  <li class="col-4">
		  <a class="w100" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/snsicon-fb@2x.png" alt="facebook"></a>
		</li>
	</ul>		  
	    </div>
			  </div>
			  
		  </div>
	  </section>
	  
	  
  </section>
  <section id="hajimetenavi" class="navi text-center mt-5 mb-5">
    <header class="wrapper">
      <h2 class="ttl_img center w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hajimetenavi-ttl@2x.png" alt="はじめてナビ"/> </h2>
      <p class="center">お客様の状況に応じてアクションをお選びください</p>
    </header>
    <div class="wrapper container-fluid">
      <ul class="row">
        <li class="col-6 col-md-2" ><a class="w100" href="/benkyoukai"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-bnr-benkyoukai.jpg" alt="勉強会"></a></li>
        <li class="col-6 col-md-2" ><a class="w100" href="/kengakukai"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-bnr-kengakukai.jpg" alt="見学会"></a></li>
        <li class="col-6 col-md-2" ><a class="w100" href="/tochisagashi"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-bnr-tochisagashi.jpg" alt="土地探しサービス"></a></li>
        <li class="col-6 col-md-2" ><a class="w100" href="/toolbox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-bnr-toolbox.jpg" alt="道具箱訪問サービス"></a></li>
        <li class="col-6 col-md-2" ><a class="w100" href="/soudan_reform"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-bnr-soudan_reform.jpg" alt="リフォーム相談窓口"></a></li>
        <li class="col-6 col-md-2" ><a class="w100" href="/lifestyledessin"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-bnr-lifestyledessin.jpg" alt="ライフスタイルデッサン"></a></li>
      </ul>
    </div>
  </section>
</main>

<?php get_template_part('include', 'shiryou'); ?>


<?php if (get_option('profile_zeh_achievement')):?>
<div id="zeh_achievement" class="wrapper mt-5 mb-5 container-fluid">
  <div class="zeh1">
    <div  class="row">
      <div class="col-lg-2 col-5 mx-auto d-block"> <span class="w100 mb-3"><img class="" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_zeh.png"  alt="ZEHビルダー"/></span> </div>
      <!--L-->
      <div class="col-lg-10 col-12">
        <h2 class="title lead"><?php echo get_option('profile_shop_name'); ?>はZEH<small>※</small>の普及に努めています！</h2>
        <p> ＺＥＨ（ゼッチ）とは、Net Zero Energy House（ネット・ゼロ・エネルギーハウス）の略。</p>
        <p>ネットゼロエネルギー住宅とは、建物の断熱化＋機器の高効率化により、使用エネルギーを削減し、さらに、太陽光発電などの創エネルギーを用いることで、エネルギー収支がゼロになる住宅のこと。</p>
      </div>
    </div>
  </div>
  <div class="zeh2">
    <div class="zeh3"> <?php echo get_option('profile_shop_name'); ?>のZEH普及実績と今後の目標 </div>
    <div class="zeh4 zeh_achievement"> <?php echo wpautop(get_option('profile_zeh_achievement'));?> </div>
  </div>
</div>
<?php endif;?>
<?php get_footer(); ?>
