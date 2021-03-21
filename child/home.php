<?php get_header(); ?>
<article id="container">
  <div id="home-slider">
    <?php get_template_part('nivoslides'); ?>
  </div>
  <div id="home-carousel" class="mb-3">
    <div id="calousel_ttl" class="wrapper text-center"> <span class="ttl mincho">SPECIAL CONTENTS</span> </div>
    <?php get_template_part('inc', 'event_bnrs'); ?>
  </div>
  <nav id="headnav">
    <?php get_template_part( 'global-navi-menu' ); ?>
  </nav>
  
  <!--▼▼▼コンセプト▼▼▼-->
  <section id="home-concept" class="pt-5">
    <div class="inbox center">
      <header id="home-concept-header" class="wrapper">
        <h2 class="ttl_img w100 maxw-800 center mb-4"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-cpt-ttl@2x.png" alt="<?php echo get_option('profile_shop_name');//屋号 ?>の家づくり"/></h2>
      </header>
      <div class="w100 wrapper bm-0"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-cpt-img01@2x.jpg" alt="家族みんなの笑顔が溢れる自然素材に囲まれた人にやさしくてあたたかな家づくり"/> </div>
    </div>
    <section id="concept_choice" class="pb-5 row justify-content-center no-gutters">
      <div class="wrapper pt-5 order-md-2 col-12">
        <h2 class="ttl_img w100 maxw-640 center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cpt_choice-ttl@2x.png"  alt="すべてはお客様のために　おすすめ4つの暮らし方"/></h2>
        <p class="text-center">私たちと家づくりをしてくださった大切なオーナー様のお声をもとに<br>
          誕生した日々を彩る４つの暮らしをご紹介いたします!!</p>
        <ul class="flexbox">
          <li class="choice01">
            <figure class="w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/cpt_choice-01@2x.jpg" alt="コンセプト1のイメージ"/> </figure>
            <div class="txtcell"> <span class="subttl">STYLE 01</span>
              <h3 class="ttl">ファミリア スタイル</h3>
            </div>
          </li>
          <li class="choice02">
            <figure class="w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/cpt_choice-02@2x.jpg" alt="コンセプト2のイメージ"/> </figure>
            <div class="txtcell"> <span class="subttl">STYLE 02</span>
              <h3 class="ttl">2世帯 スタイル</h3>
            </div>
          </li>
          <li class="choice03">
            <figure class="w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/cpt_choice-03@2x.jpg" alt="コンセプト3のイメージ"/> </figure>
            <div class="txtcell"> <span class="subttl">STYLE 03</span>
              <h3 class="ttl">アトリエサロンスタイル</h3>
            </div>
          </li>
          <li class="choice04">
            <figure class="w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/cpt_choice-04@2x.jpg" alt="コンセプト4のイメージ"/> </figure>
            <div class="txtcell"> <span class="subttl">STYLE 04</span>
              <h3 class="ttl">ゼロエネルギースタイル</h3>
            </div>
          </li>
        </ul>
      </div>
      <div id="concept-topage" class="wrapper col-12 order-md-1"> <a  class="w100 maxw-200 mx-auto" href="/concept"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-cpt-topage@2x.png" alt="コンセプトページはこちら"/></a> </div>
    </section>
  </section>
  <!--　home-concept　▲▲▲コンセプト▲▲▲--> 
  
  <!--▼▼▼施工事例▼▼▼-->
  <?php get_template_part('include', 'example');//施工事例 ?>
  <!--　home-example　▲▲▲施工事例▲▲▲--> 
  
  <!--▼▼▼インフォエリア▼▼▼-->
  <section id="home-infoarea" class="mb-5 wrapper">
    <div class="wrapper p-3 mx-3 my-5 p-md-5 mx-md-0"> 
      <!--▼▼▼ニュース＆トピックス▼▼▼-->
      <section id="home-news" class="mb-3 home-posts">
        <header class="content_header">
          <p class="subttl center">ニュース＆トピックス</p>
          <h2 class="ttl w100 center"><img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-news-ttl@2x.png" alt="NEWS&TOPICS"/></h2>
        </header>
        <?php query_posts('category_name=news&posts_per_page=3'); ?>
        <div class="posts clearfix">
          <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('looppart', 'headline'); ?>
          <?php endwhile; ?>
        </div>
        <div class="arrow btn toindex"> <a href="/category/news" title="ニュース＆トピックス一覧ページヘのリンク">一覧を見る</a> </div>
        <?php wp_reset_query(); ?>
      </section>
      <!--　home-example　▲▲▲ニュース＆トピックス▲▲▲--> 
      
      <!--▼▼▼イベント情報▼▼▼-->
      <section id="home-event" class="mt-5 home-posts">
        <header class="content_header">
          <p class="subttl center">近日イベントのご案内</p>
          <h2 class="ttl w100 center"><img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-event-ttl@2x.png"  alt="NEWS&TOPICS"/></h2>
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
  
  <?php get_template_part('include', 'reason');//選ばれる理由 ?>
  
  <!--　home-infoarea　▲▲▲インフォエリア▲▲▲--> 
  
  <!--▼▼▼お客様の声▼▼▼-->
  <section id="home-voice" class="pb-5 pt-5 ">
    <div class="wrapper mt-5 home-posts">
      <header class="content_header">
        <p class="subttl center"><?php echo get_option('profile_shop_name');//屋号 ?>で建てられたお客様の声</p>
        <h2 class="ttl_img mb-4 center w100"><img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-voice-ttl@2x.png" title="<?php echo get_option('profile_shop_name');//屋号 ?>で建てられたお客様の声" alt="VOICE"/></h2>
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
      <div class="arrow btn toindex"> <a href="/voice/" title="お客様の声一覧ページヘのリンク">一覧を見る</a> </div>
    </div>
  </section>
  <!--　home-voice　▲▲▲お客様の声▲▲▲--> 
  
  <!--▼▼▼代表あいさつとスタッフ紹介▼▼▼-->
  <section id="home-greeting" class="pb-4 mb-5">
    <div class="wrapper"> 
      
      <!--▼▼▼代表あいさつ▼▼▼-->
      <section id="president"> <a href="/message" class="w100"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-bnr-president@2x.jpg" alt="代表あいさつ"/> <span class="readmore">READ MORE</span> </a> </section>
      
      <!--　home-greeting　▲▲▲代表あいさつ▲▲▲--> 
      <!--▼▼▼スタッフ紹介▼▼▼-->
      
      <section id="home-staff" class="mt-5 container-fluid home-posts">
        <header class="content_header">
          <h2 class="ttl_img mb-4 center w100"> <img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-staff-ttl@2x.png" alt="STAFF"/></h2>
        </header>
        <div class="flexbox">
          <?php get_template_part('loop-authors'); ?>
          <div class="staff-list"> <a class="w100" href="/recruit"><img class="pt-2 photo" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff-topage.png"></a> </div>
        </div>
        <p class="arrow btn toindex"> <a href="/staff">スタッフ紹介</a> </p>
      </section>
      <!--　home-staff　▲▲▲スタッフ紹介▲▲▲--> 
      
    </div>
  </section>
  <!--　home-greeting　▲▲▲代表あいさつとスタッフ紹介▲▲▲-->
  
  <section id="home-about" class="pt-5 pb-5 mb-5 wrapper">
    <header class="content_header">
      <p class="subttl center"><?php echo get_option('profile_shop_name');//屋号 ?>のいろいろなご紹介</p>
      <h2 class="ttl_img center w100"> <img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-about-ttl@2x.png" alt="ABOUT US"/></h2>
    </header>
    <section id="home-promotion" class="pt-5 container-fluid ">
      <div class="wrapper row pt-4 justify-content-start no-gutters">
        <div class="col-12 col-md-6 home-blog">
          <header class="mb-3 ">
            <h3 class="ttl_img w100"> <img class="maxw-450" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hm-blog-ttl@2x.png" alt="BLOG"> </h3>
          </header>
          <?php query_posts('category_name=news&posts_per_page=3'); ?>
          <div class="posts clearfix">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('looppart', 'inc_blog'); ?>
            <?php endwhile; ?>
          </div>
          <p class="btn arrow toindex"> <a href="/category/blog">一覧へ</a></p>
          <?php wp_reset_query(); ?>
        </div>
        <div class="col-12 col-md-6 pt-5 ">
          <div class="sns-link container-fluid"> <a href="/torikumi" class="w100 mt-5 mb-4"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/about-bnr-sdgs@2x.jpg" alt="SDGS"/> </a>
            <p class="w100 center maxw-400"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/snsicon-followme@2x.png" alt="follow me"/></p>
            <?php get_template_part('include', 'snslink');//SNSボタン ?>
          </div>
        </div>
      </div>
    </section>
  </section>
  <section id="hajimetenavi" class="navi text-center mt-5 mb-5">
    <header class="wrapper">
      <h2 class="ttl_img center w100 maxw-800"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hajimete-ttl@2x.png" alt="<?php echo get_option('profile_shop_name');//屋号 ?>のはじめてナビ"/> </h2>
      <p class="center lead">お客様の状況に応じて
		  <span class="text-nowrap">アクションをお選びください</span></p>
    </header>
    <div class="wrapper container-fluid">
      <ul class="row maxw-1000 mx-auto">
        <li class="col-6 col-md-3" ><a class="w100" href="/#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hajimete_bnr-001@2x.jpg" alt="住まいの無料相談会"></a></li>
        <li class="col-6 col-md-3" ><a class="w100" href="/#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hajimete_bnr-002@2x.jpg" alt="オンライン打ち合わせ"></a></li>
        <li class="col-6 col-md-3" ><a class="w100" href="/#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hajimete_bnr-003@2x.jpg" alt="構造完成見学会"></a></li>
        <li class="col-6 col-md-3" ><a class="w100" href="/offer?title=<?php if ( is_home() || is_front_page() ) {  echo ('トップページ');} else {echo get_the_title();}?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hajimete_bnr-004@2x.jpg" alt="資料請求"></a></li>
      </ul>
    </div>
  </section>
</article>
<?php get_template_part('include', 'contact'); ?>
<?php get_template_part('include', 'zeh'); ?>
<?php get_footer(); ?>
