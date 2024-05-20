<?php
/**
 * tracky functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tracky
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
function tracky_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tracky, use a find and replace
		* to change 'tracky' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tracky', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'tracky' ),
			'header-menu' => esc_html__('Header menu', 'tracky'),
			'pages-légales' => esc_html__('pages légales', 'tracky'),
			'liens-utils' => esc_html__('liens utils', 'tracky'),
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
			'tracky_custom_background_args',
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
add_action( 'after_setup_theme', 'tracky_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tracky_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tracky_content_width', 640 );
}
add_action( 'after_setup_theme', 'tracky_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tracky_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tracky' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tracky' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tracky_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tracky_scripts() {
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/src/input.css', array(), '1.0.0');
	
	wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
	wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.0.0');


	wp_enqueue_style( 'tracky-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'tracky-style', 'rtl', 'replace' );

	wp_enqueue_script( 'tracky-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tracky_scripts' );

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

/**
 * tracky customizer
 *
 * @param [type] $wp_customize
 * @return void
 */
function tracky_customizer_settings($wp_customize)
{

	// Section for Contact Information
	$wp_customize->add_section('contact_info_section', array(
		'title'    => __('Contact Information', 'tracky'),
		'priority' => 30,
	));

	// Email
	$wp_customize->add_setting('contact_email', array(
		'default'   => '',
	));

	$wp_customize->add_control('contact_email', array(
		'type'     => 'email',
		'section'  => 'contact_info_section',
		'label'    => __('Email', 'tracky'),
	));

	// Email
	$wp_customize->add_setting('contact_phone', array(
		'default'   => '',
	));

	$wp_customize->add_control('contact_phone', array(
		'type'     => 'text',
		'section'  => 'contact_info_section',
		'label'    => __('Téléphone', 'tracky'),
	));
	// Email
	$wp_customize->add_setting('contact_adress', array(
		'default'   => '',
	));

	$wp_customize->add_control('contact_adress', array(
		'type'     => 'text',
		'section'  => 'contact_info_section',
		'label'    => __('Adresse', 'tracky'),
	));
	// Section for Social Media Links
	$wp_customize->add_section('social_media_section', array(
		'title'    => __('Social Media Links', 'tracky'),
		'priority' => 35,
	));

	// Facebook
	$wp_customize->add_setting('facebook_link', array(
		'default'   => '',
	));

	$wp_customize->add_control('facebook_link', array(
		'type'     => 'url',
		'section'  => 'social_media_section',
		'label'    => __('Facebook', 'tracky'),
		'description' => 'https://facebook.com/yourusername',
	));

	// Youtub
	$wp_customize->add_setting('youtub_link', array(
		'default'   => '',
	));

	$wp_customize->add_control('youtub_link', array(
		'type'     => 'url',
		'section'  => 'social_media_section',
		'label'    => __('Youtub', 'tracky'),
		'description' => 'https://youtub.com/yourusername'
	));

	// Instagram
	$wp_customize->add_setting('instagram_link', array(
		'default'   => '',
	));

	$wp_customize->add_control('instagram_link', array(
		'type'     => 'url',
		'section'  => 'social_media_section',
		'label'    => __('Instagram', 'tracky'),
		'description' => 'https://instagram.com/in/yourusername'
	));

	// Twitter
	$wp_customize->add_setting('tweeter_link', array(
		'default'   => '',
	));

	$wp_customize->add_control('tweeter_link', array(
		'type'     => 'url',
		'section'  => 'social_media_section',
		'label'    => __('Twitter', 'tracky'),
		'description' => 'https://twitter.com/yourusername'
	));



}
add_action('customize_register', 'tracky_customizer_settings');


