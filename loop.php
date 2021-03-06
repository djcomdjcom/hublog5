<?php
/**
 * loop.php
 */
?>
<div id="container" class="index clearfix widecolumn">
  <div id="content" role="main" <?php body_class( 'clearfix  container-fluid' ); ?>>
    <?php
    if ( !( is_home() ) ):
      $h1_class = '';
    if ( is_category() ):
      if ( function_exists( 'get_all_terms_meta' ) ) { //Plugin:wp-category-meta
        $catmetas = get_all_terms_meta( $cat );
        $catmeta = ( isset( $catmetas[ 'h1' ] ) ) ? array_pop( $catmetas[ 'h1' ] ) : '';
        if ( empty( $catmeta ) ) {
          $catmetas = get_all_terms_meta( get_parent_cat_id( $cat ) );
          $catmeta = ( isset( $catmetas[ 'h1' ] ) ) ? array_pop( $catmetas[ 'h1' ] ) : '';
        }
      }
    if ( empty( $catmeta ) ) {
      $page_title = single_cat_title( '', false );
    } else {
      $page_title = '<img src="' . $catmeta . '" alt="' . single_cat_title( '', false ) . '" title="' . single_cat_title( '', false ) . '" />';
      $h1_class = 'title-image';
    } elseif ( is_tag() ): $page_title = sprintf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );

    elseif ( is_tax() ): $page_title = sprintf( __( '%s', 'twentyten' ), '<span class="taxonomy">' . single_term_title( '', false ) . '一覧</span>' );

	  
    elseif (is_post_type_archive ( array('example','voice','reform'))): $page_title = sprintf( __( '%s', 'twentyten' ), '<span>' . get_post_type_object(get_post_type())->label . '</span>' );
	
    elseif ( is_day() ): $page_title = sprintf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() );
    elseif ( is_month() ): $page_title = sprintf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date( 'F Y' ) );
    elseif ( is_year() ): $page_title = sprintf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date( 'Y' ) );
    elseif ( is_404() ): $page_title = __( 'Not Found' );
    else :$page_title = wp_title( '', false ) . __( ' の記事一覧' );
    endif;
    ?>
    <header class="entry-header row">
      <h1 class="index-title entry-title col <?php echo $h1_class; ?>"><span><?php echo $page_title; ?></span></h1>
    </header>
    <?php endif; //!is_home ?>
    <script>
$(function(){
$('.posts .post.style-example').addClass('col-6 col-lg-4'); 
});
$(function(){
$('.posts .post.style-voice').addClass('col-6 col-lg-4'); 
});
$(function(){
$('.posts .post.style-reform').addClass('col-12'); 
});
</script>
    <div class="wrapper">
      <div <?php body_class( 'posts archive row col' ); ?>>
        <?php
        if ( !have_posts() ):
          /* 記事が見つからなかった場合の表示 */
          ?>
        <div id="post-0" class="post error404 not-found">
          <div class="entry-content cleartype" style="font-size:20px; color:#666; font-weight:bold; text-align:center;">
            <p>&nbsp;</p>
            <p>申し訳ございません。</p>
            <p>お探しのページは削除または、アドレスが変更となりました。<br />
              恐れ入りますが、<br />
              <a href="<?php site_url(); ?>">トップページ</a><br />
              よりご希望のメニューをお選びください。 </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
          <!-- .entry-content --> 
        </div>
        <!-- #post-0 -->
        
        <?php else : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php $looppart = apply_filters('looppart','index'); ?>
        <?php get_template_part('looppart', $looppart); ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <!--posts archive--> 
    </div>
    <?php

    if ( function_exists( 'postbar' ) ) {
      postbar();
    } else {
      global $wp_query;
      if ( $wp_query->max_num_pages > 1 ) {
        ?>
    <nav id="<?php echo esc_attr( 'nav-below' ); ?>">
      <h3 class="assistive-text">
        <?php _e( 'Post navigation', 'twentyeleven' ); ?>
      </h3>
      <div class="nav-previous">
        <?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?>
      </div>
      <div class="nav-next">
        <?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
      </div>
    </nav>
    <!-- #nav-above -->
    <?php
    }
    }
    ?>
  </div>
  <!-- #content --> 
  
</div>
<!-- #container -->

<?php //if ( in_category(array('blog','genba','staff','shachou')) ):?>
<?php //get_sidebar(); ?>
<?php //endif;?>
