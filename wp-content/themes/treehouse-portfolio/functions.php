

<?php 

// To add the MENU CONSOLE to the THEME ADMIN SECTION:
//  Adds MENU OPTION to Admin Console
add_theme_support( 'menus' );


//  Tell WP that the MENU EXISTS (set up):
function register_theme_menus() {

	//  Tell WP there are specific NAVIGATION AREAS:  (Manage Locations Tab in 'Menus')
	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu XXX', 'treehouse-portfolio' ),
			'secondary-menu' => __( 'Secondary Menu XXX', 'treehouse-portfolio' )				
		)
	);

}
	add_action( 'init', 'register_theme_menus' );



// To add the FEATURED IMAGE to the THEME ADMIN SECTION - same as post_thumbnails:
add_theme_support( 'post-thumbnails' );




function wpt_excerpt_length( $length ) {
	return 16;
}

add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );		//  add_filter(1. when WP checks exerpt length  2.  use wpt_exerpt_lenght  3.  low priority)





//  REGISTER CUSTOM TAXONOMY:  change the archive of the specific “art” category to only display your CPT:


function my_modify_queries( $query ) {
	
	//dont run on admin or not a main query
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( is_category('Art') ) {
        // Display only 1 post for the original blog archive
        $query->set( 'post_type', 'portfolio-cpt' );
        return;
    }


    if ( is_category('Ugly Art') ) {
        // Display only 1 post for the original blog archive
        $query->set( 'post_type', 'portfolio-cpt' );
        return;
    }

        if ( is_category('all-art') ) {
        // Display only 1 post for the original blog archive
        $query->set( 'post_type', 'portfolio-cpt' );
        return;
    }

        if ( is_category('fart') ) {
        // Display only 1 post for the original blog archive
        $query->set( 'post_type', 'portfolio-cpt' );
        return;
    }


}
add_action( 'pre_get_posts', 'my_modify_queries', 1 );




//  WIDGETS:

function wpt_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );




//  STYLE:   wpt- is namespacing  (WordPressTreehouse)

function wpt_theme_styles() {				//  <<  function CREATED by us with wpt_ namespace

	//  Link to CSS stylesheet  1.  name of file  2.  link to the file . "concatenate"
	//  get_template_directory_uri()  - get us from the root directory of our site to the THEME FOLDER!!!!  . link to theme itself

	//  This way does not give away the URL structure to your site
	//  and NEVER use ABSOLUTE URLs!!!!

	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );		
	//wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'daniel_css', get_template_directory_uri() . '/css/daniel.css' );

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );			//  Tell WP when to call the function to enque the files   1.  HOOK 	2.  the name of the FUNCTION to call

//  JavaScript:

function wpt_theme_js() {

	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );		//  1.  file name  2.  Path  3. array of dependent files  4.  5.  Output at footer of file or not
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );		

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );



?>