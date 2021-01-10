<?php
/**
 * looppart-side_event.php
 *
 * @テーマ名	hublog
 * @更新日付	2012.04.05
 *
 */
?>			


		<article id="post-<?php the_ID(); ?>"  class="post clearfix  poststyle-side_event">

			
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="medium"><?php
					$thumbnail = get_the_post_thumbnail(get_the_ID(), array(240,240));
					if ( empty($thumbnail) ) :
							?><img src="<?php echo get_template_image('noimage');?>" width="120" height="120" alt="<?php the_title(); ?>" /><?php
					else :
							echo $thumbnail;
					endif; ?>
			
			</a>
			
			
			
			<p class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute( array( 'before' => 'イベント「', 'after' => '」詳細・お申込方法のページへ' ) ); ?>">
			 <?php the_title(); ?></a></p>
			
			<?php if (post_custom('event-closed')) : ?>
			<span class="event-closed cleartype">
			このイベントは終了しました。<br />
			ありがとうございました。
			</span>
			<?php endif  ?>        
			<span class="event-date">
			開催日：<?php echo post_custom('event-date'); ?>
			</span>
			<span class="event-hour">
			開催時間：<?php echo post_custom('event-hour'); ?>
			</span>
			
			<span class="event-at">
			開催場所：<?php echo post_custom('event-at'); ?>
			</span>
			
			<span class="todetail">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute( array( 'before' => 'イベント「', 'after' => '」詳細・お申込方法のページへ' ) ); ?>">
			詳細・お申し込み方法</a>		
			</span>	
		</article>
