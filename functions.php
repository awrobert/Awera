<?php
/****************************************************************
 * Define Framework Constants
 ****************************************************************/
define("THEME_URL", get_template_directory_uri());


/****************************************************************
 * Define Framework Constants
 ****************************************************************/
define('AWERA_MODE', 'test');
define('AWERA_CUSTOMIZED', true); // set to TRUE if you changed something in the source code.
define('AWERA_PREFIX',			'aw_');
define('AWERA_THEME_PREFIX',		AWERA_PREFIX . get_template().'_');
define('AWERA_META_PREFIX',		'_' . AWERA_PREFIX);
define('AWERA_HELP_URL', 'http://alethemes.com/help');


/****************************************************************
 * Disallow WordPress Standart Style
 ****************************************************************/
remove_action('wp_head','feed_links_extra', 3); // Убирает ссылки на rss категорий
remove_action('wp_head','feed_links', 2); 			// Убирает ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  					// Убирает сервис Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); 		// Убирает Windows Live Writer
remove_action('wp_head','wp_generator');  			// Убирает версию wordpress


/****************************************************************
 * Enqueues Scripts And Styles.
 ****************************************************************/
function theme_scripts() {

	wp_register_style( 
		'CSS_Bootstrap', THEME_URL . '/libs/bootstrap/css/bootstrap.css',
		 array(), null);
	wp_enqueue_style('CSS_Bootstrap');

	wp_register_style( 
		'CSS_FontAwesome', THEME_URL . '/libs/font-awesome/css/font-awesome.css',
		 array(), null);
	wp_enqueue_style('CSS_FontAwesome');

	wp_register_style( 
		'CSS_MAIN', THEME_URL . '/css/main.css',
		 array(), null);
	wp_enqueue_style('CSS_MAIN');

	wp_register_style( 
		'CSS_FONTS', THEME_URL . '/css/fonts.css',
		 array(), null);
	wp_enqueue_style('CSS_FONTS');

	wp_register_style( 
		'CSS_MEDIA', THEME_URL . '/css/media.css',
		 array(), null);
	wp_enqueue_style('CSS_MEDIA');

  wp_register_script( 'SCRIPT_Bootstrap', THEME_URL . '/libs/bootstrap/js/bootstrap.min.js',
    array( 'jquery' ), '0001', true );
	wp_enqueue_script( 'SCRIPT_Bootstrap' );


	wp_register_script( 'SCRIPT_MAIN', THEME_URL . '/js/comon.js',
    array( 'jquery' ), '0001', true );
	wp_enqueue_script( 'SCRIPT_MAIN' );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


/****************************************************************
 * Registers a Widgets Awera Theme
 ****************************************************************/
function theme_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'theme_widgets_init' );


/****************************************************************
 * Registers a Menu Awera Theme
 ****************************************************************/
add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_menu' => 'Head Menu',
		'footer_menu' => 'Footer Menu'
	) );
});


/****************************************************************
 * Breadcrumbs Pages
 ****************************************************************/
require_once('inc/breadcrumbs.php');


/****************************************************************
 * Pagination Pages
 ****************************************************************/
require_once('inc/pagination.php');


/****************************************************************
 * Register Bootstrap Navigation Walker
 ****************************************************************/
 require_once('inc/bootstrap-menu.php');

/****************************************************************
 * WooCommcerce Support And Settings
 ****************************************************************/
//*** SUPPORT WOOCOMMERCE
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
//****SETTINGS WOOCOMMERCE
//***SINGLE PRODUCT
//**Краткое описание
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//**RATING
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
//**Кнопка "Добавить в корзину"
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
//**Мета информация
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
//**Распродажа
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
//**Основная информация
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
//**Похожие товары
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
//***ARCHIVE PRODUCTS
//**Кол-во результатов
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
//**Сортировка
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
//**PAGINATION
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );