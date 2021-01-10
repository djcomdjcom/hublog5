<?php
/**
template name: ☆htmlインクルード用 タイトル小 1カラム

 * htmlpageonecolumn_smallheader.php
 *
 * @テーマ名	hublog
 * @更新日付	2012.03.15
 *
 */
get_header();
?>

		<div id="container" class="page widecolumn htmlpage">

			<div id="content" role="main">
					<?php the_post(); ?>
					<article class="entry-content clearfix hentry">

				<?php if ( post_custom('headerimg') ) : ?>
                <h1 class="entry-title title-image">
                <span><?php the_title(); ?></span>
                <?php echo post_custom('headerimg') ; ?>
                </h1>

				<?php else : ?>
    
                <h1 class="entry-title smallheader"><span><?php the_title(); ?></span></h1>
	            <?php endif; ?>
					
					
<?php if ( current_user_can( 'administrator' ) ) :?>
<p class="edit_theme"><a target="_blank" href="/wp-admin/theme-editor.php?file=html%2F<?php echo $slug_name = $post->post_name; ?>.php&theme=<?php echo get_stylesheet('name'); ?>" title="/wp-admin/theme-editor.php?file=html%2F<?php echo $slug_name = $post->post_name; ?>.php&theme=<?php echo get_stylesheet('name'); ?>">
このincludeテーマを編集
</a></p>
<?php endif;?>


<?php the_content(); ?>
					
</a></p>
					
<?php //インクルードセクション
$the_page = get_page(get_the_ID());
$include_html_dir  = STYLESHEETPATH . '/html/';
$include_html_file = $include_html_dir . $the_page->post_name;
if ( file_exists($include_html_file . '.php') ){
	include $include_html_file . '.php';
} elseif ( file_exists($include_html_file . '.html') ){
	include $include_html_file . '.html';
}
?>


					
                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                </article><!-- .entry-content -->


                
                <?php /** ページタブリンク **/ ?>
                <?php $parent_page_id = (int)post_custom('parent_page_id'); ?>
                <?php if ( $parent_page_id > 0 ) : ?>
                    <ul id="pagetab-<?php echo $parent_page_id; ?>" class="pagetab clearfix cleartype">
                        <?php wp_list_pages('depth=1&hide_empty=0&title_li=&include='  . $parent_page_id); ?>
                        <?php wp_list_pages('depth=1&hide_empty=0&title_li=&child_of=' . $parent_page_id); ?>
                    </ul>
                <?php endif; ?>
				
				
				
				
				<?php
				$inc_ID = ( post_custom('inc_ID') ) ? post_custom('inc_ID') : post_custom('Cat_ID'); 
				if ( ctype_digit($inc_ID) && $inc_ID > 0 ) : 
					//init for Post in Page
					$inc_description = ( post_custom('inc_description') ) ? post_custom('inc_description') : post_custom('Cat_description');
					$inc_looppart    = ( post_custom('inc_looppart') && ctype_alnum(post_custom('inc_looppart')) ) ? post_custom('inc_looppart') : '';
					$inc_showposts   = ( post_custom('inc_showposts')   ) ? (int)post_custom('inc_showposts') : (int)post_custom('showposts'); 
					$pip_args['showposts'] = ( empty($inc_showposts) ) ? 10 : $inc_showposts;
					?>

                    <div class="related-posts related-posts01 clearfix">

                        <?php echo $inc_description; ?>
						<div class="posts archive clearfix">
                        <?php switch( post_custom('inc_type') ) :
							case 'author' :
	                            $pip_args['author'] = $inc_ID;
								break;
							case 'tag_id' :
	                            $pip_args['tag_id'] = $inc_ID;
								break;
							default: //カテゴリーを選択したとみなす
								$pip_args['cat'] = $inc_ID;
							endswitch;
							
							query_posts($pip_args);
                            while ( have_posts() ) : the_post();
                                get_template_part('looppart', $inc_looppart);
                            endwhile;
                        ?>
    					</div>
                    </div>
				<?php endif; wp_reset_query(); //init for Post in Page?>
				

			<!--商品ページ共通-->
			<?php 
			$gettemplate01 = ( post_custom('gettempale01') ) 	
			;  ?>			
			<?php get_template_part($gettemplate01); ?>
			
				

			<?php get_template_part('hublog-inquiry',''); //問い合わせフック ?>

			<footer class="entry-utility page">
				<div class="entry-meta updated author">
					<span class="date updated"><?php the_time('Y/n/j') ?></span>
					<span class="author vcard">投稿者：<span class="fn"><?php the_author(); ?></span></span>
				</div><!--entry-meta-->
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			
			</footer><!-- .entry-utility -->

			</div><!-- #content -->
            
		</div><!-- #container -->



<?php get_footer(); ?>
