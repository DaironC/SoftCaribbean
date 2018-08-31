<?php
//activando el soporte para los sidebar
if (function_exists('register_sidebar')) {
/**
* Creates a sidebar
* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
*/
// $args = array(
// 	'name'          => __( 'Ultimas Entradas Footer'),
// 	'id'            => 'unique-sidebar-id',
// 	'description'   => '',
// 	'class'         => '',
// 	'before_widget' => '',
// 	'after_widget'  => '',
// 	'before_title'  => '',
// 	'after_title'   => '',
// );
//register_sidebar( $args );
register_sidebar(array(
'name'=>'Ultimas Entradas Footer'
));
register_sidebar(array(
'name'=>'Ultimas Categorias Footer'
));

$header_info = array(
'width'         => 288,
'height'        => 123,
'default-image' => get_template_directory_uri() . '/images/logo.png',
);
add_theme_support( 'custom-header', $header_info );
$header_images = array(
'logo' => array(
'url'           => get_template_directory_uri() . '/images/logo.png',
'thumbnail_url' => get_template_directory_uri() . '/images/sunset_thumbnail.jpg',
'description'   => 'logo',
),
);
register_default_headers( $header_images );
}
/*Activando soporte para las imagenes */
if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');}
// set_post_thumbnail_size(150, 150, true); // default Post Thumbnail dimensions (cropped)
// // additional image sizes
// // delete the next line if you do not need additional image sizes
// add_image_size('category-thumb', 374, 260, true);
// add_image_size('category-full', 783, 290, true);
// }
register_nav_menus(array(
'principal' => 'Menu Principal',

));
/**
* Enqueue scripts
*
* @param string $handle Script name
* @param string $src Script url
* @param array $deps (optional) Array of script names on which this script depends
* @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
* @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
*/
function misrecursos()
{
wp_enqueue_script('dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js', array('jquery'), '1.4.3', true);
wp_enqueue_style("style", get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'misrecursos');