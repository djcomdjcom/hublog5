<?php
/**
 * side-voice.php
 */
?>


<?php 
$catnews = get_category_by_slug('voice'); //お客様の声
if ( !empty($catnews) ) :
?>		

<?php
$catnews_id   = ( $catnews ) ? $catnews->term_id : 0;
$catnews_name = ( $catnews ) ? $catnews->name    : 'お客様の声';
?>
<?php query_posts('cat=' . $catnews_id . '&showposts=1&orderby=rand'); ?>

	<?php if (have_posts()) : ?>
	
		<article id="side-voice" class="clearfix">
		
		<h2 class="title">
		<a href="<?php echo get_category_link($catnews_id); ?>"><?php echo $catnews_name; ?></a>
		</h2>
		
		<div class="posts clearfix">
		
		
		<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('looppart', 'voice'); ?>
		<?php endwhile; ?>
		</div>
		
		<span class="toindex clearfix">
		<a class="bnr" href="<?php echo get_category_link($catnews_id); ?>">
		<?php echo $catnews_name; ?>一覧
		</a>
		</span>
		
		</article>
		
		<?php endif; //!empty $catnews ?>
	
<?php endif;?>
