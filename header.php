<?php
/**
 * hublog-lt/header.php
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<title><?php
	if ( is_home() || is_front_page() ) {
		bloginfo( 'name' ); 
	} else {
		wp_title(' | ',true,'right');
		bloginfo('name');
	}
?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php if ( file_exists(get_stylesheet_directory() . '/favicon.ico') ) : ?>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/gif" />
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/gif" />
<?php endif; //favicon.ico ?>


<script type="text/javascript">
    $(function(){
        $(".globNav-toggle").on("click", function() {
            $(this).next().slideToggle();
        });
    });
</script>

<script>
$(document).ready(function(){
    $("ul.children").hide();
    $("li.cat-item").hover(function() {
        $("ul.children",this).slideDown("slow");
    },
    function() {
        $("ul.children",this).slideUp("slow");
    });
});
</script>


<?php $print_css = (file_exists(get_stylesheet_directory() . '/print.css')) ? get_stylesheet_directory_uri() . '/print.css' : get_template_directory_uri() . '/print.css';?>
<link rel="stylesheet" href="<?php echo $print_css; ?>" type="text/css" media="print" />
<link rel="stylesheet" media="(max-width: 999px)" href="<?php print( get_template_directory_uri()) ?>/responsive.css">

<!-- css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Bootstrap js -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<?php wp_head(); ?>

</head>
<?php if (is_singular(array('lp','tnx') )): ?>
<?php get_template_part('code', 'fbpixel'); ?>
<?php endif;?>

<?php
$pagename = '';
$page_class = '';
if ( is_home() || is_front_page() ){
	$pagename = 'home';
} elseif ( is_page() ) {
	$pageObj = get_page(get_the_ID());
	if ($pageObj) {
		$page_name = $pageObj->post_name; //post_name is slug
		if ( $page_name ) {
			$page_class = 'page-' . $page_name;
		}
	}
	$pagename = $page_name;
}
?>


<body <?php body_class(); ?>>

<?php get_template_part( 'site_header' ); ?>
	
<div id="breadcrumb" class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
  <div class="wrapper inbox">
    <?php
    if ( function_exists( 'bcn_display' ) ) {
      bcn_display();
    }
    ?>
  </div>
</div>

<main role="main">
