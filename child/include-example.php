<!--▼▼▼施工事例▼▼▼-->
<section id="home-example" class="pb-5">
  <div class="wrapper home-posts">
    <header class="content_header mt-5 mb-3">
      <p class="center subttl mb-1"><?php echo get_option('profile_shop_name'); ?>の施工実績</p>
      <h2 class="ttl_img mb-4 center w100"><img class="maxw-480" src="<?php bloginfo('stylesheet_directory'); ?>/images/hm-ex-ttl@2x.png" title="<?php echo get_option('profile_shop_name'); ?>の施工事例" alt="WORKS"/></h2>
    </header>
    <div class="ttl_ribbon py-2 mb-4" >
      <p class="my-0 txt-l">新築注文住宅施工事例</p>
    </div>
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
