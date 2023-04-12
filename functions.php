<?php
/**
 * clinton-gorda-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clinton-gorda-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clinton_gorda_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on clinton-gorda-theme, use a find and replace
		* to change 'clinton-gorda-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'clinton-gorda-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'clinton-gorda-theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'clinton_gorda_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'clinton_gorda_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clinton_gorda_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clinton_gorda_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'clinton_gorda_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clinton_gorda_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'clinton-gorda-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'clinton-gorda-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clinton_gorda_theme_widgets_init' );

function cptui_register_my_cpts() {

	/**
	 * Post Type: Projects.
	 */

	$labels = [
		"name" => esc_html__( "Projects", "clinton-gorda-theme" ),
		"singular_name" => esc_html__( "project", "clinton-gorda-theme" ),
	];

	$args = [
		"label" => esc_html__( "Projects", "clinton-gorda-theme" ),
		"labels" => $labels,
		"description" => "A list of all my recent projects.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "clints-projects", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"taxonomies" => [ "category" ],
		"taxonomies"=> array("topics", "category" ),
		"show_in_graphql" => false,
	];

	register_post_type( "clints-projects", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes_projects_categories() {

	/**
	 * Taxonomy: Project Categories.
	 */

	$labels = [
		"name" => esc_html__( "Project Categories", "clinton-gorda-theme" ),
		"singular_name" => esc_html__( "Project Category", "clinton-gorda-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Project Categories", "clinton-gorda-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'projects_categories', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "projects_categories",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "projects_categories", [ "clints-projects" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_projects_categories' );

/**
 * Enqueue scripts and styles.
 */
function clinton_gorda_theme_scripts() {
	wp_enqueue_style('clinton-gorda-main-style', get_theme_file_uri('css/style.css')); 
	wp_style_add_data( 'clinton-gorda-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'clinton-gorda-theme-navigation', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'clinton-gorda-theme-main', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clinton_gorda_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'wp_kses_allowed_html', 'acf_add_allowed_svg_tag', 10, 2 );

function acf_add_allowed_svg_tag( $tags, $context ) {
    if ( $context === 'acf' ) {
        $tags['svg']  = array(
            'xmlns'				=> true,
			'width'			=> true,
			'height'		=> true,
			'preserveAspectRatio'	=> true,
            'fill'				=> true,
            'viewbox'				=> true,
            'role'				=> true,
            'aria-hidden'			=> true,
            'focusable'				=> true,
        );
        $tags['path'] = array(
            'd'    => true,
            'fill' => true,
        );
    }

    return $tags;

}

add_image_size('project-single-size', 650, 800, array('left', 'top') );

add_image_size('project-size', 400, 600, array('left', 'top') );

add_image_size('full-page', 650, 1300, array('left', 'top') );



?>
