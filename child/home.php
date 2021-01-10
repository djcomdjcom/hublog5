<?php
/**
/**
template name: HOME
* home.php
* @テーマ名	hublog4
* @更新日付	2020.02.02
*
*/
get_header();
?>
<?php if (current_user_can('administrator')) :?>
<p class="edit_theme"><a target="_blank" href="/wp-admin/theme-editor.php?file=home.php&theme=<?php echo get_stylesheet('name'); ?>" title="/wp-admin/theme-editor.php?file=addcontent-about.php&theme=<?php echo get_stylesheet('name'); ?>"> トップページを編集 </a> </p>
<?php endif;?>
<?php get_template_part('inc', 'eventposts'); ?>
<div id="container" class="widecolumn">
<div id="content" class="home clearfix">
  <header id="home-title" class="home-content">
    <div class="wrapper">
      <h1 class="title">
        <?php bloginfo('name'); ?>
      </h1>
    </div>
  </header>
  <?php
  $catnews = get_category_by_slug( 'news' ); //お知らせ　投稿がある場合のみ表示
  ?>
  <?php
  $catnews_id = ( $catnews ) ? $catnews->term_id : 0;
  $catnews_name = ( $catnews ) ? $catnews->name : 'News';
  ?>
  <?php query_posts('cat=' . $catnews_id . '&showposts=3'); ?>
  <?php if (have_posts()) : ?>
  <section id="home-news" class="clearfix home-content clearfix anchor">
    <div class="wrapper"> 
      <!--home-infoarea-event-->
      <header class="home_content_header clearfix">
        <h2 class="title">News</h2>
      </header>
      <div class="posts clearfix">
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('looppart', 'headline'); ?>
        <?php endwhile; ?>
      </div>
      <p class="arrow btn"><a class="arrow" href="<?php echo get_category_link($catnews_id); ?>" title="<?php echo $catnews_name; ?>">一覧へ</a> </p>
      <?php endif; //!empty $catnews?>
      <?php wp_reset_query(); ?>
    </div>
  </section>
  <!--home-news-->
  
  <article class="clearfix home-content" id="home-concept">
    <div class="wrapper">
      <header class="home_content_header clearfix">
        <h2 class="title-image "> <span class="w100"> <img src="<?php print( get_template_directory_uri()) ?>/images/sample-image.png" alt="コンセプト"> </span> </h2>
      </header>
      <div class="center">
        <p> 想像してみて下さい。<br>
          3世代住み継ぐことで子や孫の住居費が軽減し、ゼロエネルギー住宅で光熱費がかからず、高性能住宅で冬暖かく夏涼しい快適な空間ですごせて、ヒートショックなどの健康のリスクからも守られ、安心快適に暮らせる家が100年続くご家族を支えている未来を。 </p>
        <ul class="list">
          <li>「高性能で長持ちする家」をつくるために、スーパーウォール工法を標準仕様。</li>
          <li>耐震等級3+制震を標準仕様とし、ゼロエネルギー住宅仕様の高性能住宅を実現。</li>
        </ul>
        <p> 次の世代が住み継ぎたいと思える家を残して行くことは、次の世代の住居費を軽減し、豊かなご家族をつくるための大切な要因と私たちは考えています。 </p>
      </div>
    </div>
    <p class="btn arrow"> <a href="/concept">コンセプト</a> </p>
  </article>
  <article class="clearfix home-content" id="home-example-set">
  <?php
  query_posts( array(
    'post_type' => 'reform', //カスタム投稿名
    //            'event_type' => array('newhouse','renovation'),
    'order' => 'ASC',
    'orderby' => 'order',
    'posts_per_page' => 9 //表示件数（ -1 = 全件 ）
  ) );
  ?>
  <?php if (have_posts()) :?>
  <section id="home-example-reform" class="home-content">
    <div class="wrapper">
      <header class="home_content_header clearfix">
        <h2 class="title">リフォーム事例</h2>
      </header>
      <div class="posts archive category-example">
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('looppart', 'example'); ?>
        <?php endwhile; ?>
      </div>
      <p class="arrow btn"><a class="arrow" href="/reform" title="リフォーム事例一覧へ">一覧へ</a> </p>
    </div>
  </section>
  <!--home-example-reform-->
  <?php wp_reset_query(); endif;?>
  <?php
  query_posts( array(
    'post_type' => 'example', //カスタム投稿名
    //            'event_type' => array('newhouse','renovation'),
    'order' => 'ASC',
    'orderby' => 'order',
    'posts_per_page' => 9 //表示件数（ -1 = 全件 ）
  ) );
  ?>
  <?php if (have_posts()) :?>
  <section id="home-example-order" class="home-content">
  <div class="wrapper">
    <header class="home_content_header clearfix">
      <h2 class="title">注文住宅</h2>
    </header>
    <div class="posts archive category-example">
      <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('looppart', 'example'); ?>
      <?php endwhile; ?>
    </div>
    <p class="btn arrow"><a class="arrow" href="/example" title="施工事例一覧へ">一覧へ</a> </p>
    </section>
    <!--home-example-order-->
    <?php wp_reset_query(); endif;?>
    </section>
    </article>
    <!--home-example-set-->
    
    <article id="home-infoarea" class="clearfix home-content">
      <?php
      $catnews = get_category_by_slug( 'event' ); //イベント情報　投稿がある場合のみ表示
      ?>
      <?php
      $catnews_id = ( $catnews ) ? $catnews->term_id : 0;
      $catnews_name = ( $catnews ) ? $catnews->name : 'Event';
      ?>
      <?php query_posts('cat=' . $catnews_id . '&showposts=4'); ?>
      <?php if (have_posts()) : ?>
      <section id="home-event" class="clearfix anchor clearfix">
        <div class="wrapper"> 
          
          <!--home-infoarea-event-->
          <header class="home_content_header clearfix">
            <h2 class="title avenir">イベント情報</h2>
          </header>
          <div class="posts clearfix archive">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('looppart', 'home-event'); ?>
            <?php endwhile; ?>
          </div>
          <p class="btn arrow"><a class="arrow" href="<?php echo get_category_link($catnews_id); ?>" title="<?php echo $catnews_name; ?>">一覧へ</a> </p>
          <?php endif; //!empty $catnews?>
          <?php wp_reset_query(); ?>
        </div>
      </section>
      <!--home-event--> 
    </article>
    </section>
    <div class="wrapper home-content">
      <div class="wrapper">
        <?php get_template_part('include', 'shiryou'); //資料請求?>
        <!--home-shiryou--> 
      </div>
    </div>
    <?php
    $catnews = get_category_by_slug( 'blog' ); //お知らせ　投稿がある場合のみ表示
    ?>
    <?php
    $catnews_id = ( $catnews ) ? $catnews->term_id : 0;
    $catnews_name = ( $catnews ) ? $catnews->name : 'ブログ';
    ?>
    <?php query_posts('cat=' . $catnews_id . '&showposts=3'); ?>
    <?php if (have_posts()) : ?>
    <section id="home-blog" class="clearfix home-content anchor">
      <div class="wrapper">
        <header class="home_content_header clearfix">
          <h2 class="title">Blog</h2>
        </header>
        <div class="posts clearfix archive">
          <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('looppart', ''); ?>
          <?php endwhile; ?>
        </div>
        <p class="btn arrow"><a class="arrow" href="<?php echo get_category_link($catnews_id); ?>" title="<?php echo $catnews_name; ?>">一覧へ</a> </p>
        <?php endif; //!empty $catnews?>
        <?php wp_reset_query(); ?>
      </div>
    </section>
    <!--home-blog-->
    
    <section id="home-zeh" class="clearfix wrapper home-content">
      <div class="wrapper">
        <div  class="clearfix">
          <div class="l-box w66">
            <h2 class="title"><?php echo get_option('profile_shop_name'); ?>はZEH<small>※</small>の普及に努めています！</h2>
            <p> ＺＥＨ（ゼッチ）とは、Net Zero Energy House（ネット・ゼロ・エネルギーハウス）の略。</p>
            <p>ネットゼロエネルギー住宅とは、建物の断熱化＋機器の高効率化により、使用エネルギーを削減し、さらに、太陽光発電などの創エネルギーを用いることで、エネルギー収支がゼロになる住宅のこと。</p>
          </div>
          <!--L-->
          <div class="r-box w33"> <span class="w100"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_zeh.png"  alt="ZEHビルダー"/></span> </div>
          <!--R--> 
          
        </div>
        <div class="milestone clearfix">
          <h3 class="title"><span><?php echo get_option('profile_shop_name'); ?>　ZEH普及実績と今後の目標</span></h3>
          
          <!--ul >
            <li>
              2016年度実績：12件
            </li>
            <li>
              2017年度実績：17件
            </li>
            <li>
              2018年度実績：16件
            </li>
            <li>
              2019年度実績：100%
            </li>
            <li>
              2020年度実績：100%
            </li>
          </ul-->
          
          <table>
            <tr>
              <th> 2016年度実績 </th>
              <th> 2017年度実績 </th>
              <th> 2018年度実績 </th>
              <th> 2019年度実績 </th>
              <th> 2020年度実績 </th>
            </tr>
            <tr>
              <td> 12件 </td>
              <td> 17件 </td>
              <td> 16件 </td>
              <td> 100% </td>
              <td> 100% </td>
            </tr>
          </table>
        </div>
      </div>
    </section>
    <article id="home-about" class="clearfix">
      <div class="wrapper">
        <header class="home_content_header clearfix">
          <h2 class="title"> 会社情報 </h2>
        </header>
      </div>
      <div class="movie-wrap" style="padding-bottom: 30%; margin-bottom: 0;">
        <?php if (get_option('profile_googlemap')) : ?>
        <?php echo get_option('profile_googlemap'); ?>
        <?php else: ?>
        <iframe width="100%" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.jp/maps?q=<?php echo get_option('profile_address'); ?>&amp;z=17&output=embed&iwloc=B"></iframe>
        <?php endif; ?>
      </div>
      <div class="wrapper">
        <header class="home_content_header">
          <h3 class="title">お問合せ</h3>
        </header>
        <?php
        $form_inquiry = get_option( 'profile_form_inquiry' );
        echo do_shortcode( "[contact-form-7 id=\"$form_inquiry\" title=\"お問合せ\"]" );
        ?>
      </div>
    </article>
    <!--home-about-->
    
    </section>
    </article>
    <!--home-infoarea--> 
    
  </div>
  <!-- #content --> 
  
</div>
<!--#container-->

<?php get_footer(); ?>
<?php //echo do_shortcode(‘[addtoany]’);?>
