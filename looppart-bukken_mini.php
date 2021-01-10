<?php
/**
 * looppart-home-chukai.php
 *
 * @テーマ名	hublog
 *
 */
?>
<?php
$kakaku = ( post_custom('_kakaku-hidden') ) ? '---' : post_custom_cft('kakaku');
?>


			<article id="post-<?php the_ID(); ?>" class="post clearfix style-bukken mini">
				<?php if ( is_new( WHATSNEW_TTL ) ) : ?>
				<span class="tmb-icon new">新着</span>
				<?php endif; ?>

				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="thumbnail">

					<span class="attachment">
					<?php	$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
					if ( empty($thumbnail) ) :
					?><img src="<?php echo get_template_image('noimage');?>" width="120" height="120" alt="<?php the_title(); ?>" /><?php
					else :
					echo $thumbnail;
					endif; ?>
					</span><!--attachment-->
				
				</a>				
	

				<section class="spec_excerpt">
					<?php // 販売ステータス
			
						if ( post_custom('sale-status') == '予約商談中' ){
							?>
					<span class="bukken-status">
						<span class="sale-status-offer shoudanchu"><?php echo post_custom_cft('sale-status') ?></span>
					</span>
			
						<?php
						} elseif ( post_custom('sale-status') == 'ご成約済み' ) {
							?>
					<span class="bukken-status">
						<span class="sale-status-offer soldout"><?php echo post_custom_cft('sale-status') ?></span>
					</span>
						<?php
						}
					?>
					
					
				<span class="kakaku"><span class="number"><?php echo $kakaku; ?></span></span>
				
				
				
					<?php if ( post_custom('kakaku-tsubo') ): ?>
				<span class="tsubo">
						坪単価：<?php echo post_custom_cft('kakaku-tsubo'); ?>
				</span>
					<?php elseif ( post_custom('kakaku-m2') ): ?>
				<span class="tsubo">
						平米単価：<?php echo post_custom_cft('kakaku-m2'); ?>
				</span>
					<?php endif; ?>

				<span class="address"><?php echo post_custom_cft('address2'); ?><?php echo post_custom_cft('address3'); ?><?php echo post_custom_cft('address4'); ?></span>
				
				<?php if ( post_custom('madori') ) : ?>
				<span class="madori"><span><?php echo post_custom_cft('madori') ; ?></span></span>
				
				<?php elseif ( post_custom('tochimenseki') ) : ?>
				<span class="menseki">土地面積：<span><?php echo post_custom_cft('tochimenseki') ; ?></span></span>
				<?php endif; ?>

			</section>

				<?php edit_post_link(__('Edit'), ''); ?>
			</article><!-- #post-ID -->
			
