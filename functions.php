<?php

/**
 * tracky functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tracky
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tracky_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tracky, use a find and replace
		* to change 'tracky' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('tracky', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'tracky'),
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
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'tracky_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tracky_content_width()
{
	$GLOBALS['content_width'] = apply_filters('tracky_content_width', 640);
}
add_action('after_setup_theme', 'tracky_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tracky_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'tracky'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'tracky'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'tracky_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tracky_scripts()
{
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/src/input.css', array(), '1.0.0');

	wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
	wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.0.0');


	wp_enqueue_style('tracky-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('tracky-style', 'rtl', 'replace');

	wp_enqueue_script('tracky-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0.0', true);
	wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '1.0.0', true);
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery-js'), '1.0.0', true);
	wp_localize_script('custom-js', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'tracky_scripts');

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
if (defined('JETPACK__VERSION')) {
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

/**
 * Register Custom Post Type "Avis"
 *
 * @return void
 */
function register_avis_post_type()
{
	$labels = array(
		'name'               => _x('Avis', 'Post Type General Name', 'tracky'),
		'singular_name'      => _x('avis', 'Post Type Singular Name', 'tracky'),
		'menu_name'          => __('Avis', 'tracky'),
		'parent_item_colon'  => __('Parent avis:', 'tracky'),
		'all_items'          => __('All Avis', 'tracky'),
		'view_item'          => __('View avis', 'tracky'),
		'add_new_item'       => __('Add New avis', 'tracky'),
		'add_new'            => __('Add New', 'tracky'),
		'edit_item'          => __('Edit avis', 'tracky'),
		'update_item'        => __('Update avis', 'tracky'),
		'search_items'       => __('Search Avis', 'tracky'),
		'not_found'          => __('Not Found', 'tracky'),
		'not_found_in_trash' => __('Not Found in Trash', 'tracky'),
	);
	$args = array(
		'label'               => __('avis', 'tracky'),
		'description'         => __('Avis', 'tracky'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-media-document',
		'menu_position'       => 5,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' => 'Avis'),
		'capability_type'     => 'post',
	);
	register_post_type('avis', $args);
}
add_action('init', 'register_avis_post_type');


/**
 * Register Custom Post Type "Produits"
 *
 * @return void
 */
function register_produit_post_type()
{
	$labels = array(
		'name'               => _x('Produits', 'Post Type General Name', 'tracky'),
		'singular_name'      => _x('produit', 'Post Type Singular Name', 'tracky'),
		'menu_name'          => __('Produits', 'tracky'),
		'parent_item_colon'  => __('Parent produit:', 'tracky'),
		'all_items'          => __('All Produits', 'tracky'),
		'view_item'          => __('View produit', 'tracky'),
		'add_new_item'       => __('Add New produit', 'tracky'),
		'add_new'            => __('Add New', 'tracky'),
		'edit_item'          => __('Edit produit', 'tracky'),
		'update_item'        => __('Update produit', 'tracky'),
		'search_items'       => __('Search Produits', 'tracky'),
		'not_found'          => __('Not Found', 'tracky'),
		'not_found_in_trash' => __('Not Found in Trash', 'tracky'),
	);
	$args = array(
		'label'               => __('produit', 'tracky'),
		'description'         => __('Produits', 'tracky'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-media-document',
		'menu_position'       => 5,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' => 'Produits'),
		'capability_type'     => 'post',
	);
	register_post_type('produit', $args);
}
add_action('init', 'register_produit_post_type');

/**
 * Register catégorie taxonomy
 *
 * @return void
 */
function register_catégorie_taxonomy()
{
	$labels = array(
		'name'                       => _x('Catégories', 'Taxonomy General Name', 'text_domain'),
		'singular_name'              => _x('Catégorie', 'Taxonomy Singular Name', 'text_domain'),
		'menu_name'                  => __('Catégories', 'text_domain'),
		'all_items'                  => __('All Catégories', 'text_domain'),
		'parent_item'                => __('Parent Catégorie', 'text_domain'),
		'parent_item_colon'          => __('Parent Catégorie:', 'text_domain'),
		'new_item_name'              => __('New Catégorie Name', 'text_domain'),
		'add_new_item'               => __('Add New Catégorie', 'text_domain'),
		'edit_item'                  => __('Edit Catégorie', 'text_domain'),
		'update_item '                => __('Update Catégorie', 'text_domain'),
		'separate_items_with_commas' => __('Separate catégorie with commas', 'text_domain'),
		'search_items'               => __('Search Catégories', 'text_domain'),
		'add_or_remove_items'        => __('Add or remove catégorie', 'text_domain'),
		'choose_from_most_used'      => __('Choose from the most used catégorie', 'text_domain'),
		'not_found'                  => __('Not Found', 'text_domain'),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_in_nav_menus'          => true,
		'show_admin_column'          => true,
		'query_var'                  => true,
		'rewrite'                    => array('slug' => 'catégorie'),
	);
	register_taxonomy('catégorie', array('produit'), $args);
}
add_action('init', 'register_catégorie_taxonomy');


// create ajax flitter ..
function enqueue_ajax_filter_scripts()
{
	wp_enqueue_script('ajax-filter', get_template_directory_uri() . '/js/ajax-filter.js', array('jquery'), null, true);
	wp_localize_script('ajax-filter', 'ajax_filter_params', array(
		'ajax_url' => admin_url('admin-ajax.php'),
	));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_filter_scripts');

function ajax_filter_produits()
{


	if (intval($_POST['categorie_id']) > 0) {
		$categorie_id = intval($_POST['categorie_id']);
		$args = array(
			'post_type' => 'produit',
			'tax_query' => array(
				array(
					'taxonomy' => 'catégorie',
					'field'    => 'term_id',
					'terms'    => $categorie_id,
				),
			),
		);
	} else {
		$args = array(
			'post_type'      => 'produit',
			'post_status'    => 'publish',
			'posts_per_page' => 6,
		);
	}





	$query = new WP_Query($args);

	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			$image_url = get_the_post_thumbnail_url($product_id, 'full') ?: get_template_directory_uri() . "/assets/images/Frame-589-min.webp";

			// Output post information with the specified HTML structure
?>
			<article class="group aspect-square overflow-y-hidden flex relative flex-col">
				<div class="flex flex-col grow justify-center w-full bg-white rounded border-2 transition-all duration-200 group-hover:border-4 border-cornflowerblue-100 border-solid max-md:px-5 max-md:mt-7">
					<img loading="lazy" src="<?php echo esc_url($image_url); ?>" alt="" class="mt-3 px-7 w-full aspect-[1.37]" />
					<button class="justify-center transition-all duration-200 -bottom-full group-hover:bottom-0 w-full left-0 absolute items-center px-16 py-5 mt-8 bg-cornflowerblue-100 rounded-sm max-md:px-5 !text-white">
						<?php echo get_the_title(); ?>
					</button>
				</div>
			</article>
<?php
		}
		wp_reset_postdata();
	} else {
		echo 'No produits found in this catégorie.';
	}

	wp_die(); // This is required to terminate immediately and return a proper response
}
add_action('wp_ajax_filter_produits', 'ajax_filter_produits');
add_action('wp_ajax_nopriv_filter_produits', 'ajax_filter_produits');
