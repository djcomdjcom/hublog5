<?php
/**
 * hublog-lt/functions.php
 */

if ( ! isset( $content_width ) )
	$content_width = 620;

if ( !function_exists('fallback_cb_access') ) :
function fallback_cb_access(){
	$args = array(
		'sort_column' => 'menu_order, post_title',
		'menu_class'  => 'menu-access-container',
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
		'show_home'   => true,
		'link_before' => '',
		'link_after'  => '',
	);
	wp_page_menu($args);
}
endif;

if ( !function_exists('nothing_to_do') ) :
function nothing_to_do(){
	return;
}
endif;

class Theme_Settings{
	var $r;

	function __construct($args=''){
		$defaults = array(
		);
		$r = wp_parse_args($args,$defaults);
		$this->r = $r;

		add_action( 'after_setup_theme',  array(&$this, 'setup_theme_supports') );
		add_action( 'after_setup_theme',  array(&$this, 'setup_nav_menu') );
		add_action( 'widgets_init',		  array(&$this, 'hublog_widgets_init_sidebar'), 5 );
		add_action( 'widgets_init',		  array(&$this, 'hublog_widgets_init_footer'),  9 );
		add_action( 'wp_enqueue_scripts', array(&$this, 'enqueue_scripts_styles') );
		if ( is_admin() ){
//			add_action('admin_head', array(&$this, 'wp_admin_favicon') );
		} else {
			add_action('get_header', array(&$this, 'set_template_env') );
			add_action('body_class', array(&$this, 'body_class_add_parent_term'), 10, 2 );
		}
	}

	function set_template_env(){
		add_filter('looppart', array(&$this, 'get_post_is_in'), 5 );
	}
	

	function setup_theme_supports() {
		add_editor_style ( 'style-editor' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-background' );
		//add_theme_support( 'post-formats' , array('post') );

		$custom_header_args = array(
			// Text color and image (empty to use none).
			'default-text-color'     => '069',
			'header-text'			 => true,
			'default-image'          => get_stylesheet_directory_uri() . '/images/sitetitle.png',

			// Set height and width, with a maximum value for the width.
			'height'		=> 120,
			'width'			=> 580,
			'max-width'		=> 2000,

			// Support flexible height and width.
			'flex-height'            => true,
			'flex-width'             => false,

			// Random image rotation off by default.
			'random-default'         => false,

			// Callbacks for styling the header and the admin preview.
			'wp-head-callback'       => array(&$this,'cb_header_style'),
			'admin-head-callback'    => '',
			'admin-preview-callback' => array(&$this,'admin_custom_header_preview'),
		);
		add_theme_support( 'custom-header', $custom_header_args );
	}

	function admin_custom_header_preview(){
		?>
		<div class="custom_header_preview" style="border:2px #ddd solid;padding:10px;">
			<p>&nbsp;</p>
			<div id="global-header" class="clearfix wrapper">
				<h1 class="description" style="font-size:12px;font-weight:normal;margin-top:0;"><?php bloginfo('description'); ?></h1>
				<?php $header_image = get_header_image(); ?>
				<a class="sitetitle" href="javascript:void(0);" onclick="return false;" title="<?php bloginfo('name'); ?>" style="font-size:24px;font-weight:bold;">
					<?php if ( ! empty( $header_image ) ) : ?>
						<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php //echo get_custom_header()->width; ?>" height="<?php //echo get_custom_header()->height; ?>" alt="" />
					<?php else : ?>
						<?php bloginfo('name'); ?>
					<?php endif; ?>
				</a>
			</div>
		</div>
	<?php }

	function cb_header_style() {
		$text_color = get_header_textcolor();
		// If no custom options for text are set, let's bail
		if ( $text_color == get_theme_support( 'custom-header', 'default-text-color' ) )
			return;

		// If we get this far, we have custom styles.
		?>
		<style type="text/css">
		<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
		?>
			.blogname {
				position: absolute !important;
				clip: rect(1px 1px 1px 1px); /* IE7 */
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
			// If the user has set a custom color for the text, use that.
			else :
		?>
			.blogname {
				color: #<?php echo $text_color; ?> !important;
			}
		<?php endif; ?>
		</style>
		<?php
	}

	function get_html5js_url(){
		global $wp_scripts;
		// Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions.
		$html5js = 'http://html5shim.googlecode.com/svn/trunk/html5.js';
		$response = wp_remote_head($html5js,1);
		if( !(!is_wp_error( $response ) && $response["response"]["code"] === 200) ) {
			$html5js = get_template_directory_uri() . '/js/html5.js';
		}
		return $html5js;
		//wp_enqueue_script( 'html5js', $html5js );
		//$wp_scripts->add_data( 'html5js', 'conditional', 'lt IE 9' );
	}

	function enqueue_scripts_styles(){
		global $wp_styles;

$child_theme = wp_get_theme();//????????????
$parent_theme = wp_get_theme(get_template());//????????????
		
		wp_enqueue_style( 'style-common', get_template_directory_uri() . '/common.css?'. $parent_theme->get( 'Version' ) );
		wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.min.css?'. $child_theme->get( 'Version' ) );

		wp_enqueue_style(     'for-ie', get_template_directory_uri() . '/css/ie.css', array('hublog-style') );
		$wp_styles->add_data( 'for-ie', 'conditional', 'lt IE 9' );

		$print_css = '/print.css';
		if ( file_exists(get_stylesheet_directory() . $print_css) ){
			wp_enqueue_style( 'hublog-style-print', get_stylesheet_directory_uri() . $print_css, array('hublog-style'), false, 'print' );
		}

	}

	function setup_nav_menu(){
		register_nav_menu( 'primary' , __('Global nav') );
		register_nav_menu( 'contact-link' , __('Contact-Link') );
		register_nav_menu( 'mobile-nav' , __('mobile-nav') );
		register_nav_menu( 'about-nav' , __('about-nav') );
	}

	function hublog_widgets_init_sidebar(){
		//??????????????????
		$this->register_sidebar( array(
			'name' => __( 'Sidebar' ),
			'id' => 'sidebar-widget-area-1',
		) );
		foreach ( (array)apply_filters('additional_sidebars','') as $sidebar_slug ) {
			switch ( esc_attr($sidebar_slug) ) {
				case 'rent' :
			 		$this->register_sidebar(array(
						'name' => __('Sidebar') . ':' . __('??????'),
						'id' => 'sidebar-widget-area-' . $sidebar_slug,
					));
					break;
				case 'sell' :
			 		$this->register_sidebar(array(
						'name' => __('Sidebar') . ':' . __('??????'),
						'id' => 'sidebar-widget-area-' . $sidebar_slug,
					));
					break;
				case 'blog' :
			 		$this->register_sidebar(array(
						'name' => __('Sidebar') . ':' . __('????????????'),
						'id' => 'sidebar-widget-area-' . $sidebar_slug,
					));
					break;
			 }
		}
	}
	
	function hublog_widgets_init_footer(){
		//??????????????????
		$this->register_sidebar( array(
			'name' => __( 'Footer 1'),
			'id' => 'footer-widget-area-1',
			'description' => __( 'Three columons.' ),
		) );
		$this->register_sidebar( array(
			'name' => __( 'Footer 2'),
			'id' => 'footer-widget-area-2',
			'description' => __( 'Bottom of page.' ),
		) );
	}

	function register_sidebar($args=''){
		$defaults = array(
			'id' => '',
			'name' => '',
			'description' => '',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<span class="widget-title">',
			'after_title' => '</span>',
		);
		$r = wp_parse_args( $args, $defaults );
		register_sidebar( $r );
	}
/*
	function wp_admin_favicon(){
		if ( file_exists(get_stylesheet_directory() . '/favicon.ico' ) ) :
			$favicon_url = get_stylesheet_directory() . '/favicon.ico';
			echo '<link rel="shortcut icon" href="' . $favicon_url . '" type="image/gif" />';
			echo '<link rel="icon" href="' . $favicon_url . '" type="image/gif" />';
		endif; //favicon.ico
	}
*/
	function get_post_is_in($partname){
		global $post;
		$output = '';
		if ( post_is_in_category_slug('sell') || post_is_in_taxonomy_slug('sell','bukken') ) {
			$output = 'bukken';
		} elseif ( post_is_in_category_slug('rent') || post_is_in_taxonomy_slug('rent','bukken') ) {
			$output = 'bukken';
		} elseif ( post_is_in_category_slug('tatemono') || post_is_in_taxonomy_slug('tatemono','bukken') ) {
			$output = 'bukken';
		} elseif ( post_is_in_category_slug('example') ) {
			$output = 'example';
		} elseif ( post_is_in_category_slug('reform') ) {
			$output = 'reform';

		} elseif ( post_is_in_category_slug('event') ) {
			$output = 'event';
			
			
		} elseif ( post_is_in_category_slug('component') ) {
			$output = 'component';

		} elseif ( is_post_type_archive('example')) {
			$output = 'example';
		} elseif ( is_tax('ex_cat')) {
			$output = 'example';

		} elseif ( is_post_type_archive('reform')) {
			$output = 'reform';
		} elseif ( is_tax('reform_cat')) {
			$output = 'reform';


		} elseif ( post_is_in_category_slug('voice') ) {
			$output = 'voice';
			
			
		} elseif ( is_post_type_archive('voice')) {
			$output = 'voice';
		} elseif ( is_tax('voice_cat')) {
			$output = 'voice';
			
			
		} elseif ( $post_cats = wp_get_post_categories($post->ID) ) {
			$c = get_category( array_shift($post_cats) );
			$output = $c->slug;
		}

		if ( empty($output) ){
			return $partname;
		} else {
			return $output;
		}
	}

	function get_page_type(){
		if ( is_home() ){
			$output = 'home';
		} elseif ( is_front_page() ){
			$output = 'home';
		} elseif ( is_category() ) {
			$output = 'category';
		} elseif ( is_tag() ) {
			$output = 'tag';
		} elseif ( is_archive() ) {
			$output = 'archive';
		} else {
			$output = get_post_type();
		}
		return $output;
	}

	function body_class_add_parent_term($classes, $class){
		if ( is_category() ){
			global $cat;
			$current_cat = get_category( $cat );
			if ( $current_cat->category_parent > 0 ){
				$p_cat = get_category( $current_cat->category_parent );
				$classes[] = 'category-parent-' . sanitize_html_class( $p_cat->slug, $p_cat->term_id );
				$classes[] = 'category-parent-' . $p_cat->term_id;
			}
		} elseif ( is_tax() ) {
			global $wp_query;
			$term = $wp_query->get_queried_object();
			if ( $term->parent > 0 ){
				$current_term = get_term_by( 'id', $term->parent, $term->taxonomy );
				$classes[] = 'term-parent-' . sanitize_html_class( $current_term->slug, $current_term->term_id );
				$classes[] = 'term-parent-' . $current_term->term_id;
			}
		}
		return array_unique($classes);
	}

} // end Class Theme_Settings
$hublog3 = new Theme_Settings();

/* ??????????????????????????????????????????????????? */
$inc_dirs = array();
if ( get_stylesheet_directory() != get_template_directory() ) {
	$inc_dirs[] = get_stylesheet_directory() . '/inc';
}
$inc_dirs[] = get_template_directory() . '/inc';
foreach ( $inc_dirs as $modules_dir ) {
	if ( is_dir($modules_dir) && $dh = opendir($modules_dir) ) {
		while ( ( $module = readdir( $dh ) ) !== false ) {
			if ( substr($module, -4) == '.php' && $module[0] != '_' ) {
				include_once $modules_dir . '/' . $module;
			}
		}
	}
}

//??????????????????????????????????????????????????????????????????????????????????????????????????????
function media_uploader_default_view() {
echo '<script type="text/javascript">jQuery(function( $ ){ ';
echo 'wp.media.view.Modal.prototype.on( \'ready\', function( ){ $( \'select.attachment-filters\' ).find( \'[value="uploaded"]\').attr( \'selected\', true ).parent().trigger(\'change\'); });';
echo '});</script>'."\n";
}
add_action( 'admin_footer-post-new.php', 'media_uploader_default_view' );
add_action( 'admin_footer-post.php', 'media_uploader_default_view' );


// body??????????????????????????????????????? 
function pagename_class($classes = '') { 
	if (is_page()) { $page = get_post(get_the_ID()); $classes[] = 'page-' . $page->post_name; 
					if ($page->post_parent) { $classes[] = 'page-' . get_page_uri($page->post_parent) . '-child'; } 
				   } 
	return $classes; } 
add_filter('body_class', 'pagename_class')
;


/* add comment..??????????????????????????????????????????????????????
* ---------------------------------------- */
add_action('add_meta_boxes', 'add_bzb_checklists');
function add_bzb_checklists() {
  add_meta_box('bzb_checklists', '?????????????????????????????????????????????', 'bzb_checklists', 'post', 'side', 'low');
}

function bzb_checklists() {
  global $post;
  $checklists = array();
  $checklists = get_post_meta($post->ID, 'bzb_checklists', true);
?>
<input type="hidden" name="bzb_checklists[]" value="">
<table class="form-table cmb_metabox">
  <tr class="cmb-type-multicheck cmb_id_bzb_checklists">
    <label style="display:none;" for="bzb_checklists">?????????????????????</label>
    <td>
      <small>???1?????????7????????????????????????????????????????????????</small>
      <ul>
        <li><input class="cmb_option" type="checkbox" name="bzb_checklists[]" id="bzb_checklists1" value="check01" <?php echo ( is_array($checklists) && in_array("check01",$checklists))? "checked='checked'":"";?> /> <label for="bzb_checklists1">???1???<b>????????????</b>?????????????????????????????????????????????????????????????</label></li>
        <li><input class="cmb_option" type="checkbox" name="bzb_checklists[]" id="bzb_checklists2" value="check02"   <?php echo ( is_array($checklists) && in_array("check02",$checklists))? "checked='checked'":"";?> /> <label for="bzb_checklists2">???2???<b>???????????????</b>???????????????????????????????????????????????????????????????????</label></li>
        <li><input class="cmb_option" type="checkbox" name="bzb_checklists[]" id="bzb_checklists3" value="check03"   <?php echo ( is_array($checklists) && in_array("check03",$checklists))? "checked='checked'":"";?> /> <label for="bzb_checklists3">???3???<b>??????????????????</b>????????????????????????????????????????????????</label></li>
        <li><input class="cmb_option" type="checkbox" name="bzb_checklists[]" id="bzb_checklists4" value="check04"   <?php echo ( is_array($checklists) && in_array("check04",$checklists))? "checked='checked'":"";?> /> <label for="bzb_checklists4">???4???<b>?????????????????????</b></label>
        	????????????????????????????????????????????????</li>
        <li><input class="cmb_option" type="checkbox" name="bzb_checklists[]" id="bzb_checklists5" value="check05"   <?php echo ( is_array($checklists) && in_array("check05",$checklists))? "checked='checked'":"";?> /> <label for="bzb_checklists5">???5???<b>?????????????????????</b>???????????????????????????????????????????????????????????????????????????????????????????</label></li>
        <li><input class="cmb_option" type="checkbox" name="bzb_checklists[]" id="bzb_checklists6" value="check06"   <?php echo ( is_array($checklists) && in_array("check06",$checklists))? "checked='checked'":"";?> /> <label for="bzb_checklists6">???6???<b>??????????????????</b>??????????????????????????????????????????????????????????????????????????????????????????</label></li>
        <li><input class="cmb_option" type="checkbox" name="bzb_checklists[]" id="bzb_checklists7" value="check07"   <?php echo ( is_array($checklists) && in_array("check07",$checklists))? "checked='checked'":"";?> /> <label for="bzb_checklists7">???7???<b>????????????</b>??????????????????????????????????????????????????????????????????</label></li>
      </ul>
      <span class="cmb_metabox_description"></span>
    </td>
  </tr>
</table>

<?php
}
//ADMIN CSS??????
function admin_files() {
    echo '
<link rel="stylesheet" href="'.get_bloginfo('template_directory'). '/wp-admin.css">
<link rel="stylesheet" href="'.get_bloginfo('stylesheet_directory'). '/wp-admin.css">';
}
//contactform7??????????????????
add_action( 'wp_footer', 'mycustom_wp_footer' );

function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    ga( 'send', 'event', 'Contact Form', 'submit' );
}, false );
</script>
<?php
}
add_action('admin_head', 'admin_files');

 //Analytics???????????????
function analytics_in_admin_bar() {
global $wp_admin_bar;
$wp_admin_bar->add_menu(array(
'id' => 'dashboard_menu-hublog_setting',
'title' => __('hublog_setting'),
'href' => home_url('/hublog_setting/') ,
'meta'   => array(
'target' => '_blank'
),
));
}
add_action('wp_before_admin_bar_render', 'analytics_in_admin_bar');
add_theme_support( 'post-thumbnails' );	
