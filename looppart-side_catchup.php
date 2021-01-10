<?php
/**
 * looppart-side_catchup.php
 *
 * @テーマ名	hublog
 * @更新日付	2012.04.05
 *
 */
?>			

			
			<article id="post-<?php the_ID(); ?>" class="post clearfix style-side_catchup">
				
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="medium"><?php
				$thumbnail = get_the_post_thumbnail(get_the_ID(), array(240,240));
				if ( empty($thumbnail) ) :
				?><img src="<?php echo get_template_image('noimage');?>" width="120" height="120" alt="<?php the_title(); ?>" /><?php
				else :
				echo $thumbnail;
				endif; ?>
				
				</a>
				
				<h2 class="title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'), the_title_attribute('echo=0')); ?>">
				<?php the_title(); ?></a>
				</h2>
				
				
				<div class="excerpt">
				<?php the_excerpt(); ?>
				<span class="todetail"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'), the_title_attribute('echo=0')); ?>">
				詳細を見る
				</a></span>
				</div><!-- excerpt -->
				
	
			</article><!-- div#post-ID -->
			
