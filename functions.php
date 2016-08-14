<?php
/**
 * Bengal Barota functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bengal_Barota
 */
/*Bootstap Navwalker*/
require('wp_bootstrap_navwalker.php');

/*Remove category url*/
require_once  __DIR__ . '/inc/remove-category-url.php';


if ( ! function_exists( 'bengal_barota_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bengal_barota_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bengal Barota, use a find and replace
	 * to change 'bengal_barota' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bengal_barota', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'bengal_barota' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bengal_barota_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		'width' 		=> '400',
		'height'		=> '90'
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bengal_barota_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bengal_barota_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bengal_barota_content_width', 640 );
}
add_action( 'after_setup_theme', 'bengal_barota_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bengal_barota_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bengal_barota' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bengal_barota' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bengal_barota_widgets_init' );


function bengal_barota_footer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'bengal_barota' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'bengal_barota' ),
		'before_widget' => '<section id="%1$s" class="footer_section %2$s col-md-2 col-sm-3">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bengal_barota_footer_widgets_init' );


/**
 * Enqueue scripts and styles.
 */


function bengal_barota_scripts() {
	/*CSS*/
	    wp_enqueue_style( 'style', get_stylesheet_uri());
	    wp_enqueue_style( 'bootstrap.min',  get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	       wp_enqueue_style( 'nivo-slider',  get_template_directory_uri() . '/assets/css/nivo-slider.css');    

	       wp_enqueue_style( 'default',  get_template_directory_uri() . '/assets/css/default.css');
    
    /*JS*/
	    // wp_enqueue_script( 'jquery-3.1.0', get_template_directory_uri() . '/assets/js/jquery-3.1.0.min.js', array(), '1.0.0', true );   

	    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );

	    wp_enqueue_script( 'jquery.nivo', get_template_directory_uri() . '/assets/js/jquery.nivo.slider.pack.js', array(), '1.0.0', true );	    



}
add_action( 'wp_enqueue_scripts', 'bengal_barota_scripts' );


function mytheme_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'mytheme_setup');


add_image_size('archive', 410, 200);
add_image_size('single-full', 600, 310);
add_image_size('news-img', 180, 150);
add_image_size('cat-img', 255, 150);

add_image_size('slider', 800, 350);

add_image_size('old_issue', 250, 340);



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// resize image
add_image_size('news-image',250, 150, ture);

function excerpt($num) {

$limit = $num+1;

$excerpt = explode(' ', get_the_excerpt(), $limit);

array_pop($excerpt);

$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".readmore."'><br>বিস্তারিত</a>";

echo $excerpt;

}

/*Register Texonomy Author*/


// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_author_taxonomies', 0 );

// Create texonomy Author
function create_author_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Author', 'taxonomy general name' ),
		'singular_name'     => _x( 'Author', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Author' ),
		'all_items'         => __( 'All Author' ),
		'parent_item'       => __( 'Parent Author' ),
		'parent_item_colon' => __( 'Parent Author:' ),
		'edit_item'         => __( 'Edit Author' ),
		'update_item'       => __( 'Update Author' ),
		'add_new_item'      => __( 'Add New Author' ),
		'new_item_name'     => __( 'New Author Name' ),
		'menu_name'         => __( 'Author' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'writers' ),
	);

	register_taxonomy( 'writers', array( 'post' ), $args );
	
}



// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_bn_year_taxonomies', 0 );

// Create texonomy Bn Year
function create_bn_year_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Year', 'taxonomy general name' ),
		'singular_name'     => _x( 'Year', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Year' ),
		'all_items'         => __( 'All Year' ),
		'parent_item'       => __( 'Parent Year' ),
		'parent_item_colon' => __( 'Parent Year:' ),
		'edit_item'         => __( 'Edit Year' ),
		'update_item'       => __( 'Update Year' ),
		'add_new_item'      => __( 'Add New Year' ),
		'new_item_name'     => __( 'New Year Name' ),
		'menu_name'         => __( 'Year' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'bn_year' ),
	);

	register_taxonomy( 'bn_year', array( 'post','old_issue' ), $args );
	
}



// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_bn_month_taxonomies', 0 );

// Create texonomy Bn Month
function create_bn_month_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Month', 'taxonomy general name' ),
		'singular_name'     => _x( 'Month', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Month' ),
		'all_items'         => __( 'All Month' ),
		'parent_item'       => __( 'Parent Month' ),
		'parent_item_colon' => __( 'Parent Month:' ),
		'edit_item'         => __( 'Edit Month' ),
		'update_item'       => __( 'Update Month' ),
		'add_new_item'      => __( 'Add New Month' ),
		'new_item_name'     => __( 'New Month Name' ),
		'menu_name'         => __( 'Month' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'bn_month' ),
	);

	register_taxonomy( 'bn_month', array( 'post','old_issue' ), $args );
	
}






function the_breadcrumb() {
		echo '<ol id="crumbs" class="breadcrumb">';
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home');
		echo '">';
		echo 'মূল পাতা';
		echo "</a></li>";
		if (is_category() || is_single()) {
			echo '<li>';
			the_category(' </li><li> ');
			/*if (is_single()) {
				echo "</li><li>";
				the_title();
				echo '</li>';
			}*/
		} /*elseif (is_page()) {
			echo '<li>';
			echo the_title();
			echo '</li>';
		}*/
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ol>';
}



/**
 * Custom Popular Posts Function
 * @param type $postID
 */

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/*Convert Date Year to Bangla*/

function convert_date(){

	$date = date('Y');

	$en = array ('0','1','2','3','4','5','6','7','8','9');
	$bn = array ('০','১','২','৩','৪','৫','৬','৭','৮','৯');

	$result = str_replace($en, $bn, $date);

	return $result;
}




// Custom Post
function create_post_type() { 

 register_post_type( 'slider',
    array(
            'labels' => array(
                    'name' => __( 'Slider' ),
                    'singular_name' => __( 'Slider' ),
                    'add_new' => __( 'Add New' ),
                    'add_new_item' => __( 'Add New' ),
                    'edit_item' => __( 'Edit' ),
                    'new_item' => __( 'Add New' ),
                    'view_item' => __( 'View All' ),
                    'not_found' => __( 'Sorry, No Slider Found' )
            ),
				    'public'             => true,
				    'publicly_queryable' => true,
				    'show_ui'            => true,
				    'show_in_menu'       => true,
				    'menu_icon'           => 'dashicons-images-alt2',
				    'query_var'          => true,
				    'capability_type'    => 'post',
				    'has_archive'        => true,
				    'hierarchical'       => true,
				    'supports' => array( 'title','thumbnail','custom-fields','editor' )
    )
); 

}
add_action( 'init', 'create_post_type' ); 

// Custom Post
function create_old_issue_type() { 

 register_post_type( 'old_issue',
    array(
            'labels' => array(
                    'name' => __( 'Old Issue' ),
                    'singular_name' => __( 'Old Issue' ),
                    'add_new' => __( 'Add New' ),
                    'add_new_item' => __( 'Add New' ),
                    'edit_item' => __( 'Edit' ),
                    'new_item' => __( 'Add New' ),
                    'view_item' => __( 'View All' ),
                    'not_found' => __( 'Sorry, No Old Issue Found' )
            ),
				    'public'             => true,
				    'publicly_queryable' => true,
				    'show_ui'            => true,
				    'show_in_menu'       => true,
				    'menu_icon'           => 'dashicons-images-alt2',
				    'query_var'          => true,
				    'capability_type'    => 'post',
				    'has_archive'        => true,
				    'hierarchical'       => true,
				    'supports' => array( 'title','thumbnail','custom-fields','editor' )
    )
); 

}
add_action( 'init', 'create_old_issue_type' ); 