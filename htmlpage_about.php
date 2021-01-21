<?php
/**
template name: ☆ABOUT子ページ 1カラム（htmlinclude）
 */
get_header();
?>
<div id="container" class="page widecolumn htmlpage">
  <div id="content" role="main">
    <?php the_post(); ?>
    <article class="entry-content clearfix hentry">
      <?php if ( post_custom('headerimg') ) : ?>
      <h1 class="entry-title title-image"> <span>
        <?php the_title(); ?>
        </span> <?php echo post_custom('headerimg') ; ?> </h1>
      <?php else : ?>
      <h1 class="entry-title"><span>
        <?php the_title(); ?>
        </span></h1>
      <?php endif; ?>
      <?php the_content(); ?>
      <?php if( post_custom('about-enkaku')) :?>
      <h2>沿革</h2>
      <section id="enkaku">
        <div class="slide-table"> <?php echo wpautop( post_custom ('about-enkaku')) ;?> </div>
      </section>
      <!--enkaku-->
      <?php endif;?>
      <?php //インクルードセクション
      $the_page = get_page( get_the_ID() );
      $include_html_dir = STYLESHEETPATH . '/html/';
      $include_html_file = $include_html_dir . $the_page->post_name;
      if ( file_exists( $include_html_file . '.php' ) ) {
        include $include_html_file . '.php';
      } elseif ( file_exists( $include_html_file . '.html' ) ) {
        include $include_html_file . '.html';
      }
      ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
    </article>
    <!-- .entry-content -->
    
    <?php
    $inc_ID = ( post_custom( 'inc_ID' ) ) ? post_custom( 'inc_ID' ) : post_custom( 'Cat_ID' );
    if ( ctype_digit( $inc_ID ) && $inc_ID > 0 ):
      //init for Post in Page
      $inc_description = ( post_custom( 'inc_description' ) ) ? post_custom( 'inc_description' ) : post_custom( 'Cat_description' );
    $inc_looppart = ( post_custom( 'inc_looppart' ) && ctype_alnum( post_custom( 'inc_looppart' ) ) ) ? post_custom( 'inc_looppart' ) : '';
    $inc_showposts = ( post_custom( 'inc_showposts' ) ) ? ( int )post_custom( 'inc_showposts' ) : ( int )post_custom( 'showposts' );
    $pip_args[ 'showposts' ] = ( empty( $inc_showposts ) ) ? 10 : $inc_showposts;
    ?>
    <div class="related-posts related-posts01 clearfix"> <?php echo $inc_description; ?>
      <div class="posts archive clearfix">
        <?php
        switch ( post_custom( 'inc_type' ) ):
        case 'author':
          $pip_args[ 'author' ] = $inc_ID;
          break;
        case 'tag_id':
          $pip_args[ 'tag_id' ] = $inc_ID;
          break;
        default: //カテゴリーを選択したとみなす
          $pip_args[ 'cat' ] = $inc_ID;
          endswitch;

          query_posts( $pip_args );
          while ( have_posts() ): the_post();
          get_template_part( 'looppart', $inc_looppart );
          endwhile;
          ?>
      </div>
    </div>
    <?php endif; wp_reset_query(); //init for Post in Page?>
    
    <!--商品ページ共通-->
    <?php
    $gettemplate01 = ( post_custom( 'gettempale01' ) );
    ?>
    <?php get_template_part($gettemplate01); ?>
    <?php wp_nav_menu( array('theme_location'=>'about-nav', 'fallback_cb'=>'nothing_to_do') ); ?>
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
    
  </div>
  <!-- #content --> 
  
</div>
<!-- #container -->

<?php get_footer(); ?>
