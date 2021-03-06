<?php
/**
 * loop-page.php
 */
?>
<?php the_post(); ?>
<div id="container" class="single page widecolumn clearfix">
  <div id="content" role="main" <?php body_class( 'clearfix' ); ?>>
    <article id="post-<?php the_ID(); ?>" <?php post_class('hentry'); ?>>
      <header class="entry-header">

        <h1 class="entry-title"><span>
          <?php the_title(); ?>
          </span></h1>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
      </div>
      <!-- .entry-content -->
      
      <?php get_template_part('releated-posts'); ?>
      
      <!--商品ページ共通-->
      <?php
      $gettemplate01 = ( post_custom( 'gettempale01' ) );
      ?>
      <?php get_template_part($gettemplate01); ?>
      <?php get_template_part('hublog-inquiry',''); //問い合わせフック ?>
      <footer class="entry-utility page wrapper">
        <div class="entry-meta updated author"> <span class="date updated">
          <?php the_time('Y/n/j') ?>
          </span> <span class="author vcard">投稿者：<span class="fn">
          <?php the_author(); ?>
          </span></span> </div>
        <!--entry-meta-->
        <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
      </footer>
      <!-- .entry-utility --> 
      
    </article>
    <!-- #post --> 
    
  </div>
  <!-- #content --> 
</div>
<!-- #container --> 
