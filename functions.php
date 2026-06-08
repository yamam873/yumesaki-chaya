<?php
/**
 * 夢前茶屋 (Yumesaki Chaya) functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function yumesaki_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Navigation Menus
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary Menu', 'yumesaki' ),
	) );

	// HTML5 Support
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
}
add_action( 'after_setup_theme', 'yumesaki_setup' );

/**
 * Enqueue scripts and styles.
 */
function yumesaki_scripts() {
	// Google Fonts
	wp_enqueue_style( 'yumesaki-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap', array(), null );
	
	// Material Symbols
	wp_enqueue_style( 'yumesaki-icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );

	// Theme Stylesheet
	wp_enqueue_style( 'yumesaki-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Theme Script
	wp_enqueue_script( 'yumesaki-script', get_template_directory_uri() . '/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'yumesaki_scripts' );

/**
 * Register Custom Post Type: Menu (おしながき)
 */
function yumesaki_register_cpt_menu() {
	$labels = array(
		'name'                  => 'おしながき',
		'singular_name'         => 'メニュー',
		'menu_name'             => 'おしながき',
		'add_new'               => '新しく追加',
		'add_new_item'          => '新しいメニューを追加',
		'edit_item'             => 'メニューを編集',
		'new_item'              => '新しいメニュー',
		'view_item'             => 'メニューを表示',
		'all_items'             => 'すべてのおしながき',
		'search_items'          => 'メニューを探す',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'menu' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-food',
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'menu_item', $args );
}
add_action( 'init', 'yumesaki_register_cpt_menu' );

/**
 * Register Theme Customizer settings (店舗情報)
 */
function yumesaki_customize_register( $wp_customize ) {
	// Section: Shop Info
	$wp_customize->add_section( 'yumesaki_shop_info', array(
		'title'       => __( '店舗情報設定', 'yumesaki' ),
		'description' => __( 'フッターやアクセスエリアに表示される店舗情報を設定します。', 'yumesaki' ),
		'priority'    => 130,
	) );

	// Setting: Phone
	$wp_customize->add_setting( 'yumesaki_phone', array(
		'default'           => '079-000-0000',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'yumesaki_phone', array(
		'label'   => __( '電話番号', 'yumesaki' ),
		'section' => 'yumesaki_shop_info',
		'type'    => 'text',
	) );

	// Setting: Address
	$wp_customize->add_setting( 'yumesaki_address', array(
		'default'           => '〒671-0000 兵庫県姫路市夢前町○○ 123-4',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'yumesaki_address', array(
		'label'   => __( '住所', 'yumesaki' ),
		'section' => 'yumesaki_shop_info',
		'type'    => 'textarea',
	) );

	// Setting: Hours Weekday
	$wp_customize->add_setting( 'yumesaki_hours_weekday', array(
		'default'           => '11:00 - 17:00',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'yumesaki_hours_weekday', array(
		'label'   => __( '営業時間（平日）', 'yumesaki' ),
		'section' => 'yumesaki_shop_info',
		'type'    => 'text',
	) );

	// Setting: Hours Weekend
	$wp_customize->add_setting( 'yumesaki_hours_weekend', array(
		'default'           => '10:00 - 18:00',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'yumesaki_hours_weekend', array(
		'label'   => __( '営業時間（土日祝）', 'yumesaki' ),
		'section' => 'yumesaki_shop_info',
		'type'    => 'text',
	) );

	// Setting: Holidays
	$wp_customize->add_setting( 'yumesaki_holidays', array(
		'default'           => '火曜日',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'yumesaki_holidays', array(
		'label'   => __( '定休日', 'yumesaki' ),
		'section' => 'yumesaki_shop_info',
		'type'    => 'text',
	) );

	// Section: Hero Images
	$wp_customize->add_section( 'yumesaki_hero_images', array(
		'title'       => __( 'ヒーロー画像設定', 'yumesaki' ),
		'description' => __( 'トップページのヒーローエリアに表示する画像を設定します。', 'yumesaki' ),
		'priority'    => 120,
	) );

	for ( $i = 1; $i <= 4; $i++ ) {
		$wp_customize->add_setting( "yumesaki_hero_image_{$i}", array(
			'default'           => get_template_directory_uri() . "/img/hero{$i}.avif",
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "yumesaki_hero_image_{$i}", array(
			'label'    => sprintf( __( 'ヒーロー画像 %d', 'yumesaki' ), $i ),
			'section'  => 'yumesaki_hero_images',
			'settings' => "yumesaki_hero_image_{$i}",
		) ) );
	}
}
add_action( 'customize_register', 'yumesaki_customize_register' );

/**
 * Register ACF Fields for Menu via code (if ACF is active)
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_menu_details',
	'title' => 'メニュー詳細設定',
	'fields' => array(
		array(
			'key' => 'field_menu_price',
			'label' => '価格',
			'name' => 'menu_price',
			'type' => 'number',
			'instructions' => '税込価格を数字で入力してください。',
			'required' => 1,
			'append' => '円',
		),
		array(
			'key' => 'field_menu_is_takeout',
			'label' => 'テイクアウト',
			'name' => 'menu_is_takeout',
			'type' => 'true_false',
			'message' => 'テイクアウト可能にする',
			'default_value' => 0,
			'ui' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'menu_item',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;

/**
 * 管理画面バー（アドミンバー）をフロントエンドで非表示にする
 */
add_filter( 'show_admin_bar', '__return_false' );

/**
 * 固定ページを介さず「/contact/」URLで直接テンプレートを表示するカスタムルート
 */
add_action( 'template_redirect', 'yumesaki_custom_contact_route' );
function yumesaki_custom_contact_route() {
    // アクセスされたURLのパスを取得
    $path = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );
    
    // パスが 'contact' の場合、page-contact.phpを読み込んで処理を終了する
    if ( $path === 'contact' ) {
        // WordPressが404と判定しているのを200(正常)に上書き
        global $wp_query;
        $wp_query->is_404 = false;
        status_header( 200 );
        
        // テンプレートファイルを強制的に読み込む
        load_template( get_template_directory() . '/page-contact.php' );
        exit;
    }
}
