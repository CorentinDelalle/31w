<?php
/**
 * underscores functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscores
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function undercores_setup() {
	

    	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
    
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );

	add_theme_support( 'post-thumbnails' );

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



}

add_action( 'after_setup_theme', 'undercores_setup' );

/**
 * Enqueue scripts and styles.
 */
function undercores_scripts() {

	// wp_enqueue_style( 'undercores-style', 
    //                    get_stylesheet_uri(), 
    //                    array(), 
    //                    _S_VERSION );

    wp_enqueue_style('undercores-style',   // para poder agregar el archivo css dentro del tema
                      get_template_directory_uri() . '/style.css', 
                      array(), 
                      filemtime(get_template_directory() . '/style.css'), 
                      false);
	
}
add_action( 'wp_enqueue_scripts', 'undercores_scripts' );




/** ---------------------------------------------------------- */

function mon_31w_register_nav_menu(){
	register_nav_menus( array(
		'menu_primaire' => __( 'Menu Primaire', 'text_domain' ),
	
	) );
}
add_action( 'after_setup_theme', 'mon_31w_register_nav_menu', 0 );

function igc31w_filtre_choix_menu($obj_menu, $arg){
	//echo "/////////////////  obj_menu";
	// var_dump($obj_menu);
	//  echo "/////////////////  arg";
	//  var_dump($arg);

	if ($arg->menu == "aside"){
	foreach($obj_menu as $cle => $value)
	{
		//  print_r($value);
		 //$value->title = substr($value->title,7);
		 $value->title = wp_trim_words($value->title,3,"...");
			//echo $value->title . '<br>';
	 } 
	}
	//die();
	return $obj_menu;
}
add_filter("wp_nav_menu_objects","igc31w_filtre_choix_menu", 10,2);

/** ----------------- initialisation des sidebar */
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'footer-1' sidebar. */
	register_sidebar(
		array(
			'id'            => 'footer-01',
			'name'          => __( 'Sidebar 1 - footer' ),
			'description'   => __( 'Premier sidebar du footer' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
	register_sidebar(
		array(
			'id'            => 'footer-02',
			'name'          => __( 'Sidebar 2 - footer' ),
			'description'   => __( 'Deuxième sidebar du footer' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'footer-03',
			'name'          => __( 'Sidebar 3 - footer' ),
			'description'   => __( 'Troisième sidebar du footer' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'aside-1',
			'name'          => __( 'Sidebar 4 - aside' ),
			'description'   => __( 'Premier sidebar du aside' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'aside-2',
			'name'          => __( 'Sidebar 5 - aside' ),
			'description'   => __( 'Deuxième sidebar du aside' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}