<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen', get_template_directory() . '/languages' );

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 840, 0 );
	add_image_size( 'portfolio-landscape', 480, 360, true );
	add_image_size( 'portfolio-portrait', 480, 640, true );
	add_image_size( 'portfolio-square', 480, 480, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer', 'twentyfifteen' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<div class="recent-tweets"><div class="tweet">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {

	// Add Bootstrap, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.0.3' );
	
	// Add Revolution slider, used in the main stylesheet.
	wp_enqueue_style( 'revSlider', get_template_directory_uri() . '/css/themecss/revolution-slider.css', array(), '1.4.5' );
	
	// Add LightBox, used in the main stylesheet.
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/css/themecss/lightbox.css', array(), '1.0' );
	
	// Add Portfolio, used in the main stylesheet.
	wp_enqueue_style( 'portfolio', get_template_directory_uri() . '/css/themecss/portfolio.css', array(), '1.0' );
	
	// Add Animate, used in the main stylesheet.
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/themecss/animate.css', array(), '1.0' );
	
	// Add Smarton, used in the main stylesheet.
	wp_enqueue_style( 'smarton', get_template_directory_uri() . '/css/smarton.css', array(), '1.0' );
	
	// Add Smarton, used in the main stylesheet.
	wp_enqueue_style( 'colorDefaut', get_template_directory_uri() . '/css/colors/color-default.css', array(), '1.0' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );
	

	// script for Bootstrap
	wp_enqueue_script( 'bootstrapJs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20141010', true );
	
	// script for Navigation
	wp_enqueue_script( 'NavigationJs', get_template_directory_uri() . '/js/themejs/jquery.smartmenus.js', array(), '20141010', true );
	
	// script for Parallax
	wp_enqueue_script( 'ParallaxJs', get_template_directory_uri() . '/js/themejs/jquery.stellar.js', array(), '20141010', true );
	
	// script for Animation
	wp_enqueue_script( 'AnimationJs', get_template_directory_uri() . '/js/themejs/jquery.waypoints.min.js', array(), '20141010', true );
	
	// script for Lightbox
	wp_enqueue_script( 'LightboxJs', get_template_directory_uri() . '/js/themejs/jquery.waypoints.min.js', array(), '20141010', true );
	
	// script for Caroussel fed
	wp_enqueue_script( 'CaroussselFedJs', get_template_directory_uri() . '/js/themejs/jquery.carouFredSel-6.2.1-packed.js', array(), '20141010', true );
	
	// script for Mousewheel
	wp_enqueue_script( 'MouseWheelJs', get_template_directory_uri() . '/js/themejs/helper-plugins/jquery.mousewheel.min.js', array(), '20141010', true );
	
	// script for TouchSwipe
	wp_enqueue_script( 'touchSwipeJs', get_template_directory_uri() . '/js/themejs/helper-plugins/jquery.touchSwipe.min.js', array(), '20141010', true );
	
	// script for Transit
	wp_enqueue_script( 'TransitJs', get_template_directory_uri() . '/js/themejs/helper-plugins/jquery.transit.min.js', array(), '20141010', true );
	
	// script for debounce
	wp_enqueue_script( 'debounceJs', get_template_directory_uri() . '/js/themejs/helper-plugins/jquery.ba-throttle-debounce.min.js', array(), '20141010', true );
	
	// script for Revolution
	wp_enqueue_script( 'RevPluginJs', get_template_directory_uri() . '/js/revolutionjs/jquery.themepunch.plugins.min.js', array(), '20141010', true );
	
	wp_enqueue_script( 'RevolutionJs', get_template_directory_uri() . '/js/revolutionjs/jquery.themepunch.revolution.min.js', array(), '20141010', true );
	
	// script for FlexSlider
	wp_enqueue_script( 'flexSliderJs', get_template_directory_uri() . '/js/themejs/jquery.flexslider.js', array(), '20141010', true );
	
	// script for Pie Chart
	wp_enqueue_script( 'pieChartJs', get_template_directory_uri() . '/js/themejs/jquery.easypiechart.min.js', array(), '20141010', true );
	
	// script for Tooltip Booster
	wp_enqueue_script( 'tooltipJs', get_template_directory_uri() . '/js/themejs/jquery.tooltipster.js', array(), '20141010', true );
	
	// script for Time Circle
	wp_enqueue_script( 'timeCircleJs', get_template_directory_uri() . '/js/themejs/TimeCircles.js', array(), '20141010', true );
	
	// script for Twitter
	wp_enqueue_script( 'twitterJs', get_template_directory_uri() . '/js/themejs/tweetie.js', array(), '20141010', true );
	
	// script for Range select
	wp_enqueue_script( 'rangeSelectJs', get_template_directory_uri() . '/js/themejs/jquery.nouislider.min.js', array(), '20141010', true );
	
	// script for LoadScript
	wp_enqueue_script( 'loadScriptJs', get_template_directory_uri() . '/js/themejs/application.js', array(), '20141010', true );
	if(is_page( 304 )){wp_enqueue_script('hackModal', AEC_URL . 'js/hackModal.js', '1.0.0', true);}
	
	


}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #f5f7f8; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #f5f7f8; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';


$result = add_role(
    'client_i_blink',
    __( 'Clients I-Blink' ),
    array(
        'read'         => true,  // true allows this capability
    )
);

add_theme_support('customer-area.single-post-templates', array(
    'cuar_private_file',    // Personnaliser l'affichage dans single-cuar_private_file.php
    'cuar_private_page',    // Personnaliser l'affichage dans single-cuar_private_page.php
    'cuar_conversation',    // Personnaliser l'affichage dans single-cuar_conversation.php
    'cuar_project',         // Personnaliser l'affichage dans single-cuar_project.php
    'cuar_tasklist',        // Personnaliser l'affichage dans single-cuar_tasklist.php
));

function register_my_menus() {
  register_nav_menus(
    array(  
    	'employer' => __( 'Employé menu' )
    )
  );
} 
add_action( 'init', 'register_my_menus' );

add_action("login_head", "my_login_head");
function my_login_head() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('".get_bloginfo('template_url')."/img/theme/logo.png') no-repeat scroll center top transparent;
		background-size:cover;
		height: 90px;
		width: 250px;
	}
	</style>
	";
}