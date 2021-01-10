<?php
/**
 * hublog-lt/functions.php
 */

//スライドショー用投稿タイプ
register_post_type(
    'slideimage', //投稿タイプ名
    array(
        'label'=> 'スライドショー', //ラベル名
		'menu_icon' => 'dashicons-images-alt2',
        'labels' => array(
		'edit_item' => 'スライドを編集',
		'add_new_item' => '新しいスライドの追加',
            'menu_name' => 'スライドショー' //管理画面のメニュー名
            ),
        'public' => true, //公開状態
        'query_var' => true, // スラッグでURLをリクエストできる
        'hierarchical' => false, //固定ページのように親ページを指定するならtrue
        'rewrite' => array('slug' => 'slideimage'), //スラッグ名
        'has_archive' => true, //パーマリンクがデフォルト以外、アーカイブページを表示する場合はtrue
        'supports' => array(
            'title',
           'editor',
//            'custom-fields',
            'thumbnail',
            'page-attributes',
//            'excerpt'
        )
    )
);

register_taxonomy(
    'slidecat', //タクソノミ名
    'slideimage', //タクソノミを使う投稿タイプ名
    array(
        'rewrite' => array('slug' => 'slideimage'), //投稿タイプのスラッグ
        'label' => 'スライドカテゴリー', //ラベル名
        'labels' => array(
            'menu_name' => 'カテゴリー' //管理画面のメニュー名
        ),
        'public' => true, //公開状態
        'hierarchical' => true, //カテゴリのように扱う場合はtrue
        'has_archive' => true,
        'query_var' => true,
        'show_admin_column' => true, //投稿タイプのテーブルにタクソノミーのカラムを生成
    )
);
//スライドショー専用カスタムフィールド

// カスタムフィールド追加
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');

function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'slideimage');
}

function my_custom_fields() {
  global $post;
  $slide_url = get_post_meta($post->ID,'slide_url',true);
  $h1 = get_post_meta($post->ID,'h1',true);
  $slide_target = get_post_meta($post->ID,'slide_target',true);
  if($slide_target==1){ $slide_target_c="checked";}
  else{$slide_target_c= "/";}

  echo '<p>スライドのリンク先URL<br />';
  echo '<input type="text" name="slide_url" value="'.esc_html($slide_url).'" size="40" /></p>';
//  echo '<p>大見出し（h1）40文字以内を推奨<br />';
//  echo '<input type="text" name="h1" value="'.esc_html($h1).'" size="50" /></p>';
  echo '<p>新規ウィンドウで開く場合はチェック<br />';
  echo '<input type="checkbox" name="slide_target" value="1" ' . $slide_target_c . '>新規ウィンドウで開く</p>';
}

// カスタムフィールドの値を保存
function save_custom_fields( $post_id ) {
  if(!empty($_POST['slide_url']))
    update_post_meta($post_id, 'slide_url', $_POST['slide_url'] );
  else delete_post_meta($post_id, 'slide_url');

  if(!empty($_POST['h1']))
    update_post_meta($post_id, 'h1', $_POST['h1'] );
  else delete_post_meta($post_id, 'h1');

  if(!empty($_POST['slide_target']))
    update_post_meta($post_id, 'slide_target', $_POST['slide_target'] );
  else delete_post_meta($post_id, 'slide_target');
}
//LP用投稿タイプ
register_post_type(
    'lp', //投稿タイプ名
    array(
        'label'=> 'LP', //ラベル名
		'menu_icon' => 'dashicons-megaphone',
        'labels' => array(
		'edit_item' => 'LPを編集',
		'add_new_item' => '新しいLPの追加',
            'menu_name' => 'LP' //管理画面のメニュー名
            ),
        'public' => true, //公開状態
        'query_var' => true, // スラッグでURLをリクエストできる
        'hierarchical' => false, //固定ページのように親ページを指定するならtrue
        'rewrite' => array('slug' => 'lp'), //スラッグ名
        'has_archive' => true, //パーマリンクがデフォルト以外、アーカイブページを表示する場合はtrue
        'supports' => array(
            'title',
           'editor',
            'custom-fields',
            'thumbnail',
            'page-attributes',
//            'excerpt'
        )
    )
);
//サンクスページ用投稿タイプ
register_post_type(
    'tnx', //投稿タイプ名
    array(
        'label'=> 'サンクスページ', //ラベル名
		'menu_icon' => 'dashicons-heart',
        'labels' => array(
		'edit_item' => 'サンクスページを編集',
		'add_new_item' => '新しいサンクスページの追加',
            'menu_name' => 'サンクスページ' //管理画面のメニュー名
            ),
        'public' => true, //公開状態
        'query_var' => true, // スラッグでURLをリクエストできる
        'hierarchical' => false, //固定ページのように親ページを指定するならtrue
        'rewrite' => array('slug' => 'tnx'), //スラッグ名
        'has_archive' => true, //パーマリンクがデフォルト以外、アーカイブページを表示する場合はtrue
        'supports' => array(
            'title',
           'editor',
            'custom-fields',
            'thumbnail',
            'page-attributes',
//            'excerpt'
        )
    )
);


function cptui_register_my_cpts() {

	/**
	 * Post Type: 施工事例.
	 */

	$labels = array(
		"name" => __( "施工事例", "custom-post-type-ui" ),
		"singular_name" => __( "施工事例", "custom-post-type-ui" ),
		"menu_name" => __( "施工事例（新築・リノベ）", "custom-post-type-ui" ),
		"all_items" => __( "すべての施工事例", "custom-post-type-ui" ),
		"add_new_item" => __( "施工事例の追加", "custom-post-type-ui" ),
		"edit_item" => __( "施工事例の編集", "custom-post-type-ui" ),
		"new_item" => __( "新規施工事例", "custom-post-type-ui" ),
		"view_item" => __( "施工事例を表示", "custom-post-type-ui" ),
		"view_items" => __( "施工事例を表示", "custom-post-type-ui" ),
		"search_items" => __( "施工事例を検索", "custom-post-type-ui" ),
		"archives" => __( "施工事例", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "施工事例", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "example",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "example", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-admin-multisite",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ),
		"taxonomies" => array( "ex_cat" ),
	);

	register_post_type( "example", $args );

	/**
	 * Post Type: リフォーム事例.
	 */

	$labels = array(
		"name" => __( "リフォーム事例", "custom-post-type-ui" ),
		"singular_name" => __( "リフォーム事例", "custom-post-type-ui" ),
		"archives" => __( "リフォーム", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "リフォーム事例", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "reform",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "reform", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-hammer",
		"supports" => array( "title", "editor", "thumbnail", "custom-fields", "author" ),
	);

	register_post_type( "reform", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: 施工事例の種別.
	 */

	$labels = array(
		"name" => __( "施工事例の種別", "custom-post-type-ui" ),
		"singular_name" => __( "施工事例の種別", "custom-post-type-ui" ),
		"menu_name" => __( "施工事例の種別", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "施工事例の種別", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'ex_cat', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "ex_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		);
	register_taxonomy( "ex_cat", array( "example" ), $args );

	/**
	 * Taxonomy: リフォーム種別.
	 */

	$labels = array(
		"name" => __( "リフォーム種別", "custom-post-type-ui" ),
		"singular_name" => __( "リフォーム種別", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "リフォーム種別", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'reform_cat', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "reform_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		);
	register_taxonomy( "reform_cat", array( "reform" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

function cptui_register_my_cpts_event_bnr() {

	/**
	 * Post Type: イベントバナー.
	 */

	$labels = array(
		"name" => __( "イベントバナー", "custom-post-type-ui" ),
		"singular_name" => __( "イベントバナー", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "イベントバナー", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "event_bnr", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-images-alt",
		"supports" => array( "title", "thumbnail", "custom-fields" ),
	);

	register_post_type( "event_bnr", $args );
}

add_action( 'init', 'cptui_register_my_cpts_event_bnr' );
