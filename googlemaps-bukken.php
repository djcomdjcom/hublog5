<?php
/**
 * googlemaps.php
 *
 * @テーマ名	livmile-framework
 * @更新日		2010.07.16

周辺検索機能の組み込み用です

 */

?>

<?php if ( post_custom('imput-map') ) : ?>
			<h3 class="address">
				<?php if ( post_custom('bukken-name') ) : ?>
					「<?php echo post_custom_cft('bukken-name'); ?>」
					<?php else: ?>
					この物件の
				
				<?php endif; ?>

				周辺地図
			<span>&nbsp;（<?php
						echo post_custom_cft('address1');
						echo post_custom_cft('address2');
						echo post_custom_cft('address3');
						echo post_custom_cft('address4');
					?>付近）</span>
			</h3>
			<div id="maps">

	<?php echo post_custom_cft('imput-map'); ?>
		</div>
	<?php else: ?>



<section id="googlemap-bukken">  
			<h3 class="address">
				<?php if ( post_custom('bukken-name') ) : ?>
					「<?php echo post_custom_cft('bukken-name'); ?>」
					<?php else: ?>
					この物件の
				
				<?php endif; ?>

				周辺地図
			<span>&nbsp;（<?php
						echo post_custom_cft('address1');
						echo post_custom_cft('address2');
						echo post_custom_cft('address3');
						echo post_custom_cft('address4');
					?>付近）</span>
			</h3>

			<div id="maps">


				<div id="google_map" style="width:620px; height:400px;"></div><!--google_map-->


			</div><!--maps-->

</section><!--googlemap-bukken-->



<?php
/**
 * as plugin 
 */
add_action('wp_footer', 'search_maps');
function search_maps() { 
	if ( is_singular() ) : ?>
<script type="text/javascript">
jQuery(document).ready(function($){
googlemap_init();
$('li.home').click(function(){
		var parentTag = $(this).parent().get(0).tagName;
		$(parentTag + ' *').removeClass('current');
		$(this).addClass('current');
		goHome();
	});
$('li.picture').click(function(){
		var parentTag = $(this).parent().get(0).tagName;
		$(parentTag + ' *').removeClass('current');
		$(this).addClass('current');
		doSearchAlbum();
	});
$('li.konbini').bind("click", function(){
		var parentTag = $(this).parent().get(0).tagName;
		$(parentTag + ' *').removeClass('current');
		$(this).addClass('current');
		$('input#queryInput').val('コンビニ');
		$('input#submitquery').click();
	});
$('li.eat').click(function(){
		var parentTag = $(this).parent().get(0).tagName;
		$(parentTag + ' *').removeClass('current');
		$(this).addClass('current');
		$('input#queryInput').val('飲食店');
		$('input#submitquery').click();
	});
$('li.study').click(function(){
		var parentTag = $(this).parent().get(0).tagName;
		$(parentTag + ' *').removeClass('current');
		$(this).addClass('current');
		$('input#queryInput').val('学校');
		$('input#submitquery').click();
	});
$('li.park').click(function(){
		var parentTag = $(this).parent().get(0).tagName;
		$(parentTag + ' *').removeClass('current');
		$(this).addClass('current');
		$('input#queryInput').val('公園');
		$('input#submitquery').click();	
	});
$('li.hospital').click(function(){
		var parentTag = $(this).parent().get(0).tagName;
		$(parentTag + ' *').removeClass('current');
		$(this).addClass('current');
		$('input#queryInput').val('病院');
		$('input#submitquery').click();
	});
$('input#queryInput').keydown(function(e){
		if (e.keyCode == 13){
			$('input#submitquery').click();
		}
	});
});
</script>
<?php
$gm_address  = post_custom('address1') . post_custom('address2') . post_custom('address3');
$address4    = post_custom('address4');
$gm_address .= ( ctype_digit($address4) ) ? $address4 . '丁目' : $address4;
$gm_address .= post_custom('address5');
?>
<input style="display:none" id="googlemap_address" type="text" value="<?php echo $gm_address; ?>" />
<?php $lat_long = ( is_array(post_custom('Lat_Long')) ) ? array_pop(post_custom('Lat_Long')) : post_custom('Lat_Long'); ?>
<input style="display:none" id="googlemap_latlng" type="text" value="<?php echo $lat_long; ?>" />


<?php endif;
}//endfunction
?>
<?php endif; ?>
