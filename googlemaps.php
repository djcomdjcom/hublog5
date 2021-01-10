<?php
/**
 * googlemaps.php
 *
 * @テーマ名	livmile-framework
 * @更新日		2010.07.16

周辺検索機能の組み込み用です

 */

?>


		<div id="metalist_and_map">
        
			<div id="maps">
                
				<div id="google_map" style="width:678px; height:400px;"></div>
                
                  <div style="margin-bottom:0;">
            	  
                    <div class="gels-form gels-form-v3">
                          <input type="text" id="queryInput" value="" style="width: 250px;"/>
                          <input type="button" id="submitquery" value="<?php _e('Find'); ?>" onClick="doSearch()"/>
                    </div>
                    
                  </div>
			
			</div>
            
            <div id="photoPanel" style="float:right;width:30%;height 100%"></div>
            
        </div>



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
