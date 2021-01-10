<?php
/**
 * side-blog.php
 */
?>


<?php 
$catnews = get_category_by_slug('blog'); //ブログ
if ( !empty($catnews) ) :
?>		

<?php
$catnews_id   = ( $catnews ) ? $catnews->term_id : 0;
$catnews_name = ( $catnews ) ? $catnews->name    : 'ブログ';
?>
<?php query_posts('cat=' . $catnews_id . '&showposts=3'); ?>

	<?php if (have_posts()) : ?>
	
		<div id="side-blog" class="clearfix">
		
		<h2 class="title">
		<a href="<?php echo get_category_link($catnews_id); ?>"><?php echo $catnews_name; ?></a>
		</h2>
		
		<div class="posts clearfix">
		
		
		<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('looppart', 'thumb_title'); ?>
		<?php endwhile; ?>
		</div>
		
		<span class="toindex clearfix">
		<a class="bnr" href="<?php echo get_category_link($catnews_id); ?>">
		<?php echo $catnews_name; ?>一覧
		</a>
		</span>
		
		</div>
		
		<?php endif; //!empty $catnews ?>
	
<?php endif;?>
<?php wp_reset_query(); ?>