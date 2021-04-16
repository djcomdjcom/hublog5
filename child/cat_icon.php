
<?php
/**
 * cat_icon.php
 * カテゴリー名を表示するためのパーツ
 */

 	$category = get_the_category();
 	$cat_id   = $category[0]->cat_ID;
 	$cat_name = $category[0]->cat_name;
 	$cat_slug = $category[0]->category_nicename;


?>



<?php if (get_post_type() === 'example'): ?>

	<?php
	    if ($terms = get_the_terms($post->ID, 'ex_cat')) {
	        foreach ( $terms as $term ) {
	            $term_slug = $term -> slug;
	            echo ('<span class="') ;
	            echo esc_html($term_slug) ;
	            echo (' cat_icon">') ;
	            echo esc_html($term->name)  ;
	            echo ('</span>') ;
	        }
	    }
	?>

<?php elseif (is_category('event')) :?>
<?php echo ( post_custom( 'event-type' ) );?>
<?php endif; ?>
