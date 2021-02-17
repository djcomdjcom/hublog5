
<article id="example-slider" class="clearfix">

<?php if ( post_custom( 'renov-gallery' ) == 'gallery_off' ):  ?>
	
<?php else:?>
	
<section id="galleryslider" class="clearfix rel_lb">
<?php echo (do_shortcode('[gallery link="file" title="false" caption="true" description="true" size="large"  type="flexslider"]')); ?>
</section><!--　-->
</article><!--example-slider-->

<?php endif ?>
<?php
if ( post_custom( 'renov-gallery' ) == 'gallery_off' ):
  ?>
<?php else:?>

<article id="example-header" class="clearfix rel_lb">
	<h2 class="title">
		<?php if(post_custom('catchcopy')) :?>
		<span class="catchcopy">
		<?php echo nl2br ( post_custom('catchcopy') ); ?>
		</span>
			<?php else :?>
			<?php the_title(); ?>
		<?php endif ;?>
	</h2>

	<?php if (post_custom('example-area') || post_custom('example-name') || post_custom('example-family') || post_custom('example-kouhou') || post_custom('example-shikichi') || post_custom('example-yuka') ) : ?>

		<div class="example-family">
		
		<?php if (post_custom('example-area') || post_custom('example-name')) : ?>
		<p class="example-area_name">
			<span><?php if (post_custom('example-area')) :?><?php echo post_custom('example-area'); ?><?php endif ; ?></span>
			<span><?php if (post_custom('example-name')) :?><?php echo post_custom('example-name'); ?>様邸<?php endif ; ?></span>
		</p>
		<?php endif ; ?>


		<?php if (post_custom('example-family')) :?>
		<span class="title">家族構成</span>
		<?php echo wpautop(post_custom('example-family')); ?>
		</div>
		<?php endif ; ?>


		<?php if (post_custom('example-kouhou') || post_custom('example-shikichi') || post_custom('example-yuka')) : ?>
			<div class="example-plan">
			<?php if (post_custom('example-kouhou')) :?>
				<p><?php echo post_custom('example-kouhou'); ?></p>
			<?php endif ; ?>

			<?php if (post_custom('example-shikichi')) :?>
				<p><span class="title">敷地面積</span>：<?php echo post_custom('example-shikichi'); ?></p>
			<?php endif ; ?>

			<?php if (post_custom('example-yuka')) :?>
				<p><span class="title">床面積</span>：<?php echo post_custom('example-yuka'); ?></p>
			<?php endif ; ?>
			</div>
		<?php endif ; ?>

	<?php endif ; ?>




<?php if (post_custom ('example-C') || post_custom ('example-Q') || post_custom ('example-UA') )  :?>
<div class="clearfix example-meta spec">
	<?php if (post_custom('example-C')) :?>
	<span class="example-c"> <span class="title">C値：</span><span class="number"><?php echo post_custom('example-C'); ?></span> </span>
	<?php endif ;?>
	<?php if (post_custom('example-Q')) :?>
	<span class="example-q"> <span class="title">Q値：</span><span class="number"><?php echo post_custom('example-Q'); ?></span> </span>
	<?php endif ;?>
	<?php if (post_custom('example-UA')) :?>
	<span class="example-ua"> <span class="title">UA値：</span><span class="number"><?php echo post_custom('example-UA'); ?></span> </span>
	<?php endif ;?>
</div>
<?php endif ;?>

</article>
	<?php endif ?>

