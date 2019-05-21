<?php 

/**
 * Functions
 *
 * @package ashiishme
 *
 * @subpackage wp-headless-cms
 */

if(!function_exists('ashiishme_server_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function ashiishme_server_setup() {

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */

        add_theme_support( 'post-thumbnails', array( 'post' ) );

    }

endif;


// add thumnail to json (wp-api)
add_action( 'rest_api_init', 'add_thumbnail_to_JSON' );

function add_thumbnail_to_JSON() {
//Add featured image
register_rest_field( 'post',
    'featured_image_src', //NAME OF THE NEW FIELD TO BE ADDED - you can call this anything
    array(
        'get_callback'    => 'get_image_src',
        'update_callback' => null,
        'schema'          => null,
         )
    );
}

// returns featured image
function get_image_src( $object, $field_name, $request ) {
    $size = '';
    $feat_img_array = wp_get_attachment_image_src($object['featured_media'], $size, true);
    return $feat_img_array[0];
}

// custom excerpt length
function new_excerpt_length($length) {
    return 26;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
