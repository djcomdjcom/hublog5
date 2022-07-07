<?php
/**
* looppart-example.php
*
* @テーマ名	hublog
* @更新日付	2012.04.06
*
*/
?>

<article id="post-<?php the_ID(); ?>" class="clearfix style-example post p-3">
	<?php if ( is_new( WHATSNEW_TTL ) ) : ?>
	<span class="tmb-icon new">新着</span>
	<?php endif; ?>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => '施工事例「', 'after' => '」詳細ページへ' ) ); ?>" class="thumbnail">
		<span class="attachment">
			<?php if ( function_exists('the_post_image') ) {
				if ( the_post_image(array(600, 600)) === false ){
					?><img src="<?php echo get_template_image('noimage');?>" alt="No Image" /><?php
				}
			} ?>
		</span>
	</a>
	<?php //get_template_part('cat_icon');//カテゴリーアイコン ?>
	
	<span class="title">
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'), the_title_attribute('echo=0')); ?>">
		<?php if(post_custom('catchcopy')) :?>
		<?php echo nl2br ( post_custom('catchcopy') ); ?>
		<?php else :?>
		<?php the_title(); ?>
		<?php endif ;?>
		</a>		
</span>
	

	<?php edit_post_link(__('Edit'), ''); ?>

</article><!--post-->


