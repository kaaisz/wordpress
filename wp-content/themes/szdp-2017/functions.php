<?php
//親テーマを見にいく挙動(CSSの引用、アップデートにもここで対応する)
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {
    //parent style.css - template directory uri
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    //child style.css - stylesheet directory uri
    wp_enqueue_style( 'style-child', get_stylesheet_directory_uri() . '/style.css', array( 'style' ) );
}

function add_files() {
    // deregister jquery.js in Wordpress ownself(Wordpressのjsファイルを読み込まない)
    wp_deregister_script('jquery');

    // Reload jQuery from googleapis
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', "", "20160608", false );
}
add_action( 'wp_enqueue_scripts', 'add_files' );

//Add jQuery Customised
function add_scripts() {
    //wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
    /*
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/effect.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fadethis.js"></script>
    */
    //child script.js - stylesheet directory uri
    wp_enqueue_script( 'script-child', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', false);
    //add imported jQuery plugins
    // - fadeThis
    //wp_enqueue_script( 'script-child', get_stylesheet_directory_uri() . '/assets/js/jquery.fadethis.js', array( 'jquery' ), '1.0.0', false);
    // - Scroll Magic
    wp_enqueue_script( 'ScrollMagic', get_stylesheet_directory_uri() . '/assets/js/ScrollMagic.js', array( 'jquery' ), '1.0.0', false);
    wp_enqueue_script( 'TweenMax', get_stylesheet_directory_uri() . '/assets/js/TweenMax.min.js', array( 'jquery' ), '1.0.0', false);
    wp_enqueue_script( 'Velocity', get_stylesheet_directory_uri() . '/assets/js/Velocity.min.js', array( 'jquery' ), '1.0.0', false);
    wp_enqueue_script( 'animation.Velocity', get_stylesheet_directory_uri() . '/assets/js/animation.velocity.js', array( 'jquery' ), '1.0.0', false);
    wp_enqueue_script( 'debug.addIndicators', get_stylesheet_directory_uri() . '/assets/js/debug.addIndicators.js', array( 'jquery' ), '1.0.0', false);
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );


//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

?>
