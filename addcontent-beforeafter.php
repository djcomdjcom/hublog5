<?php
/**
* addcontent-reform.php
*
* @テーマ名	hublog-c
* @更新日付	2012.02.15
*
*/
?>
<div id="addcontent-reform" class="clearfix">

	<?php if (post_custom('reform-gallery')) : ?>
	<section id="galleryslider" class="clearfix rel_lb">
	<?php echo (do_shortcode('[gallery link="file" title="false" caption="true" description="true" size="large"  type="flexslider"]')); ?>
	</section><!--　-->
	<?php endif ?>
	
	
	<div id="reform-meta">
		<div class="inbox">
		
			<?php if (post_custom('feature')) : ?>
			<div class="icon-features clearfix"><?php get_template_part('icon-features'); ?></div>
			<?php endif ?>

			
			<?php if (post_custom('reform-name')) : ?>
			<span class="example-area_name">[
			<span class="example-area"><?php echo post_custom('reform-area'); ?></span>&nbsp;&nbsp; 
			<span class="example-name"><?php echo post_custom('reform-name'); ?></span>
			]
			</span>
			
			<?php endif ?>
			
			<?php if (post_custom('reform-madori')) : ?>
			<span class="example-yuka">間取：<?php echo post_custom('reform-madori'); ?></span>
			<?php endif ?>
			
			<?php if (post_custom('reform-yuka')) : ?>
			<span class="example-yuka">総工事床面積：<?php echo post_custom('reform-yuka'); ?></span>
			<?php endif ?>
			
			
			<?php if (post_custom('reform-kasho')) : ?>
			<span class="reform-kasho">施工個所：<?php echo post_custom('reform-kasho'); ?></span>
			<?php endif ?>
			
			<?php if (post_custom('reform-yosan')) : ?>
			<span class="example-yosan">工事予算：<?php echo post_custom('reform-yosan'); ?>万円</span>
			<?php endif ?>
		</div><!--inbox-->
	
	
		<dl class="reform-youbou">
			<dt class="title">お客様のご要望・お悩み</dt>
			<dd class="postcustom">
			<?php echo wpautop(post_custom('reform-youbou')); ?>
			</dd>
		</dl><!--reform-youbou-->
		
		<dl class="reform-kaiketsusaku">
			<dt class="title"><?php echo get_option('profile_shop_name'); ?>からの解決策</dt>
			<dd><?php echo wpautop(post_custom('reform-kaiketsusaku')); ?>
			</dd>
		</dl>

	</div><!--reform-meta-->
	
	
</div><!--addcontent-reform-->
	
	
<!--　beforeafter表示-->
<div id="before-after" class="rel_lb">
	<table>
		<tbody>
		<?php if (post_custom('01after-image')) : ?>
		<tr class="title">
			<th class="before">施工前</th>
			<th>&nbsp;</th>
			<th class="after">施工後</th>
		</tr>

		<tr id="before-after_01">
			<td class="before-image" id="before-image_01">

				<?php echo wp_get_attachment_link(post_custom('01before-image'),'medium');?>
				<div class="description" id="description_01">
				<?php echo wpautop(post_custom('01description')); ?>
				</div>					

			</td>
			<td class="arrow">
			<span><img src="<?php bloginfo('template_directory'); ?>/images/beforeafter-arrow.png" alt="→"/></span>
			</td>

			<td class="after-image" id="after-image_01">
				<?php echo wp_get_attachment_link(post_custom('01after-image'),'large');?>
			<?php //echo wp_get_attachment_link(get_field('01after-image'),array(500, 500));?>
			</td>
		</tr>
		
		<?php endif //01before-after ?>



		<?php if (post_custom('02after-image')) : ?>

		<tr id="before-after_02">
			<td class="before-image" id="before-image_02">

				<?php echo wp_get_attachment_link(post_custom('02before-image'),'medium');?>
				<div class="description" id="description_02">
				<?php echo wpautop(post_custom('02description')); ?>
				</div>					

			</td>
			<td class="arrow">
			<span><img src="<?php bloginfo('template_directory'); ?>/images/beforeafter-arrow.png" alt="→"/></span>
			</td>

			<td class="after-image" id="after-image_02">
				<?php echo wp_get_attachment_link(post_custom('02after-image'),'large');?>
			</td>
		</tr>
		
		<?php endif //02before-after ?>


		<?php if (post_custom('03after-image')) : ?>

		<tr id="before-after_03">
			<td class="before-image" id="before-image_03">

				<?php echo wp_get_attachment_link(post_custom('03before-image'),'medium');?>
				<div class="description" id="description_03">
				<?php echo wpautop(post_custom('03description')); ?>
				</div>					

			</td>
			<td class="arrow">
			<span><img src="<?php bloginfo('template_directory'); ?>/images/beforeafter-arrow.png" alt="→"/></span>
			</td>

			<td class="after-image" id="after-image_03">
				<?php echo wp_get_attachment_link(post_custom('03after-image'),'large');?>
			</td>
		</tr>
		
		<?php endif //03before-after ?>



		<?php if (post_custom('04after-image')) : ?>

		<tr id="before-after_04">
			<td class="before-image" id="before-image_04">

				<?php echo wp_get_attachment_link(post_custom('04before-image'),'medium');?>
				<div class="description" id="description_04">
				<?php echo wpautop(post_custom('04description')); ?>
				</div>					

			</td>
			<td class="arrow">
			<span><img src="<?php bloginfo('template_directory'); ?>/images/beforeafter-arrow.png" alt="→"/></span>
			</td>

			<td class="after-image" id="after-image_04">
				<?php echo wp_get_attachment_link(post_custom('04after-image'),'large');?>
			</td>
		</tr>
		
		<?php endif //04before-after ?>
		
		
		<?php if (post_custom('05after-image')) : ?>

		<tr id="before-after_05">
			<td class="before-image" id="before-image_05">

				<?php echo wp_get_attachment_link(post_custom('05before-image'),'medium');?>
				<div class="description" id="description_05">
				<?php echo wpautop(post_custom('05description')); ?>
				</div>					

			</td>
			<td class="arrow">
			<span><img src="<?php bloginfo('template_directory'); ?>/images/beforeafter-arrow.png" alt="→"/></span>
			</td>

			<td class="after-image" id="after-image_05">
				<?php echo wp_get_attachment_link(post_custom('05after-image'),'large');?>
			</td>
		</tr>
		
		<?php endif //05before-after ?>		
		
		</tbody>
	</table>

</div>			
<!--beforeafterここまで-->