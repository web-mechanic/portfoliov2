<?php 
remove_filter('the_content','wpautop');
remove_filter('the_excerpt','wpautop');
add_action( 'init', 'create_post_type' );
add_action( 'widgets_init', 'portfolio_sidebars' );
add_action('init', 'build_taxonomies');
add_action('after_setup_theme', 'portfolio_setup');
remove_action('wp_head', 'wp_generator');


/*Menus*/
function my_wp_nav_menu_args( $args = '' )
{
    $args['container'] = false;
    return $args;
} // function

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );



/*Gestion des scripts*/

function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

/* Ajoute HTML5 SHIV */



function wpEnqueueScripts(){

	wp_deregister_script('jquery');
	wp_deregister_style('wpcf7');

	if ((is_page('contact'))) {
		// comment out the next two lines to load the local copy of jQuery
		
     wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
     wp_enqueue_script('jquery');
		wpcf7_enqueue_scripts();
		wpcf7_enqueue_styles();
	}


   	 wp_register_script('responsive-nav', get_template_directory_uri() . '/js/nav.js', array(),'1', true);
     wp_enqueue_script('responsive-nav');
}
add_action('wp_enqueue_scripts', 'wpEnqueueScripts');



if(!function_exists(portfolio_sidebars)){
    function portfolio_sidebars(){
        register_sidebar( array(
		'id' => 'primary',
                'name' => __( 'Primary' ),
		'description' => __( 'Une description de la sidebar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
                'id' => 'secondary',
		'name' => __( 'Secondary' ),
		'description' => __( 'A short description of the sidebar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    }

}

if(!function_exists(portfolio_setup)){
    function portfolio_setup(){
        add_theme_support('post-thumbnails');
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'ptfAccueil', 272, 272, true);
    add_image_size( 'showcase', 573, 1024, true);
    add_image_size( 'cv', 862, 300, true);
    
     // on vérifie que la fonction existe, puis on crée la nouvelle taille d'image. Le dernier paramètre à true indique qu'il faut rogner l'image pour qu'elle s'adapte aux dimensions
}

add_filter('image_size_names_choose', 'my_image_sizes'); // le filtre qui permet d'ajouter la nouvelle taille au gestionnaire de médias
function my_image_sizes($sizes) {
        $addsizes = array(
                "ptfAccueil"=>__("Prtfolio-accueil"),

                );

        $newsizes = array_merge($sizes, $addsizes);
        return $newsizes;
}
        register_nav_menu('header-menu',__('Header Menu','titi'));

    }
    
}

if(!function_exists('create_post_type')){
	function create_post_type() {

//PostType de la page d'accueil
		register_post_type( 'ptfPT',
			array(
				'labels' => array(
					'name' => __( 'Portfolio' ),
				),
				'public' => true,
				'supports' => array('title','thumbnail','excerpt'),
				'has_archive' => true,
				'rewrite' => array('slug' => 'portfolio'),
				'has_archive' => true
			)
		);

		register_post_type( 'cvPT',
			array(
				'labels' => array(
					'name' => __( 'CV' ),
				),
				'public' => true,
				'supports' => array('title','thumbnail'),
				'has_archive' => true,
				'rewrite' => array('slug' => 'CV'),
				'has_archive' => false
			)
		);

		register_post_type( 'blogPT',
			array(
				'labels' => array(
					'name' => __( 'Blog' ),
				),
				'public' => true,
				'supports' => array('title','thumbnail','excerpt'),
				'has_archive' => true,
				'rewrite' => array('slug' => 'Blog'),
				'has_archive' => true
			)
		);		

	}
};

