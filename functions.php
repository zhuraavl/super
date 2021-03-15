<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}




/**
 * @snippet       Remove Zoom, Gallery @ Single Product Page
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 3.8
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
  
//add_action( 'wp', 'bbloomer_remove_zoom_lightbox_theme_support', 99 );
//  
//function bbloomer_remove_zoom_lightbox_theme_support() { 
//   remove_theme_support( 'wc-product-gallery-zoom' );
//   remove_theme_support( 'wc-product-gallery-lightbox' );
//   remove_theme_support( 'wc-product-gallery-slider' );
//}





// Add to your theme's functions.php file. De-queues Select2 styles & scripts. Useful to keep Boostrap form control formatting

/**
 * Remove Woocommerce Select2 - Woocommerce 3.2.1+
 */
function woo_dequeue_select2() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );

        wp_dequeue_script( 'selectWoo');
        wp_deregister_script('selectWoo');
    } 
}
add_action( 'wp_enqueue_scripts', 'woo_dequeue_select2', 100 );




add_filter( 'woocommerce_subcategory_count_html', 'wc_filter_woocommerce_subcat_count_html', 10, 2 );
function wc_filter_woocommerce_subcat_count_html( $mark_class_count_category_count_mark, $category ) {
$mark_class_count_category_count_mark = ' <mark class="count">' . $category->count . '</mark>';
return $mark_class_count_category_count_mark;
};








/*
	Get Script and Style IDs
	Adds inline comment to your frontend pages
	View source code near the <head> section
	Lists only properly registered scripts
	@ https://digwp.com/2018/08/disable-script-style-added-plugins/
*/
function shapeSpace_inspect_script_style() {
	
	global $wp_scripts, $wp_styles;
	
	echo "\n" .'<!--'. "\n\n";
	
	echo 'SCRIPT IDs:'. "\n";
	
	foreach($wp_scripts->queue as $handle) echo $handle . "\n";
	
	echo "\n" .'STYLE IDs:'. "\n";
	
	foreach($wp_styles->queue as $handle) echo $handle . "\n";
	
	echo "\n" .'-->'. "\n\n";
	
}
add_action('wp_print_scripts', 'shapeSpace_inspect_script_style');



// disable stylesheet (example)
function shapeSpace_disable_scripts_styles() {
	
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wc-block-style');
	wp_dequeue_style('yith-wcwl-main');
	wp_dequeue_style('pwb-styles-frontend');
//	wp_dequeue_style('woocommerce-layout');
//	wp_dequeue_style('woocommerce-smallscreen');
//	wp_dequeue_style('woocommerce-general');
//	wp_dequeue_style('woocommerce-inline');
//	wp_dequeue_style('dgwt-wcas-style');
	wp_dequeue_style('woocommerce_prettyPhoto_css');
	wp_dequeue_style('jquery-selectBox');
	wp_dequeue_style('yith-wcwl-font-awesome');
	wp_dequeue_style('rank-math');
	wp_dequeue_style('xoo-wsc-fonts');
//	wp_dequeue_style('xoo-wsc-style');
	wp_dequeue_style('wdp_pricing-table');
	wp_dequeue_style('wdp_deals-table');
  
  
  wp_dequeue_script('pwb-functions-frontend');      
  wp_dequeue_script('jquery-selectBox');      
     

}
add_action('wp_enqueue_scripts', 'shapeSpace_disable_scripts_styles', 100);








function get_user_geo_country(){
    $geo      = new WC_Geolocation(); // Get WC_Geolocation instance object
    $user_ip  = $geo->get_ip_address(); // Get user IP
    $user_geo = $geo->geolocate_ip( $user_ip ); // Get geolocated user data.
    $country  = $user_geo['country']; // Get the country code
    return sprintf( '<p>' . __('We ship to %s', 'woocommerce') . '</p>', WC()->countries->countries[ $country ] );
}
add_shortcode('geoip_country', 'get_user_geo_country');







/**
 * @snippet       WooCommerce Change Number of Related Products
 * @how-to        Get CustomizeWoo.com FREE
 * @sourcecode    https://businessbloomer.com/?p=17473
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.5.4
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
add_filter( 'woocommerce_output_related_products_args', 'bbloomer_change_number_related_products', 9999 );
 
function bbloomer_change_number_related_products( $args ) {
 $args['posts_per_page'] = 12; // # of related products
 $args['columns'] = 12; // # of columns per row
 return $args;
}




//
// add_filter('woocommerce_get_catalog_ordering_args', 'set_sort_order');
//   function set_sort_order($args) {
//     $args['orderby'] = 'rand';
//     return ($args);    
//   }





add_filter( 'woocommerce_default_address_fields' , 'custom_override_state_required' );
function custom_override_state_required( $address_fields ) {
  $wc = WC();
  $country = $wc->customer->get_country();
  if($country){
     $address_fields['state']['required'] = false;
  }
  return $address_fields;
}





// Display the cart item weight in cart and checkout pages
add_filter( 'woocommerce_get_item_data', 'display_custom_item_data', 10, 2 );
function display_custom_item_data( $cart_item_data, $cart_item ) {
    if ( $cart_item['data']->get_weight() > 0 ){
        $cart_item_data[] = array(
            'name' => __( 'Weight', 'woocommerce' ),
            'value' =>  $cart_item['data']->get_weight()  . ' ' . get_option('woocommerce_weight_unit')
        );
    }
    return $cart_item_data;
}

// Save and Display the order item weight (everywhere)
add_action( 'woocommerce_checkout_create_order_line_item', 'display_order_item_data', 20, 4 );
function display_order_item_data( $item, $cart_item_key, $values, $order ) {
    if ( $values['data']->get_weight() > 0 ){
        $item->update_meta_data( __( 'Weight', 'woocommerce' ), $values['data']->get_weight() . '' . get_option('woocommerce_weight_unit') );
    }
}















add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );
function custom_remove_woo_checkout_fields( $fields ) {
    // remove billing fields

    unset($fields['billing']['billing_company']);
    unset($fields['shipping']['shipping_company']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['billing']['billing_state']);
    
    return $fields;
}



//
//add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
//function custom_override_checkout_fields($fields)
// {
//
// 
// $fields['billing']['billing_first_name']['placeholder'] = 'CUSTOMER NAME'; 
// $fields['billing']['billing_state']['placeholder'] = 'STATE / REGION'; 
// $fields['billing']['billing_address_1']['placeholder'] = 'ADDRESSS'; 
// $fields['billing']['billing_address_2']['placeholder'] = 'APT / UNIT / BUILDING'; 
// $fields['billing']['billing_city']['placeholder'] = 'CITY'; 
// $fields['billing']['billing_postcode']['placeholder'] = 'ZIP / POSTAL CODE'; 
//
// $fields['billing']['billing_email']['placeholder'] = 'E-MAIL';
// $fields['billing']['billing_phone']['placeholder'] = 'PHONE';
// $fields['order']['order_comments']['placeholder'] = 'ADD SHIPPING DETAILS (OPTIONAL)';
// return $fields;
// }




/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="cart-customlocation" ><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
	<?php
	$fragments['.cart-customlocation'] = ob_get_clean();
	return $fragments;
}




/**
 * @snippet       WooCommerce Show Product Image @ Checkout Page
 * @author        Sandesh Jangam
 * @donate $9     https://www.paypal.me/SandeshJangam/9
 */
// 
//add_filter( 'woocommerce_cart_item_name', 'ts_product_image_on_checkout', 10, 3 );
// 
//function ts_product_image_on_checkout( $name, $cart_item, $cart_item_key ) {
//     
//    /* Return if not checkout page */
//    if ( ! is_checkout() ) {
//        return $name;
//    }
//     
//    /* Get product object */
//    $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
// 
//    /* Get product thumbnail */
//    $thumbnail = $_product->get_image();
// 
//    /* Add wrapper to image and add some css */
//    $image = '<div class="ts-product-image" style="width: 52px; height: 45px; display: inline-block; padding-right: 7px; vertical-align: middle;">'
//                . $thumbnail .
//            '</div>'; 
// 
//    /* Prepend image to name and return it */
//    return $image . $name;
//}




function vnm_wc_redirect_account_dashboard( $wp ) {

    if ( !is_admin() ) {
        //  Uncomment the following line if you want to see what the current request is
        //die( $wp->request );

        //  The following will only match if it's the root Account page; all other endpoints will be left alone

        if ( $wp->request === 'my-account' ) {
            wp_redirect( site_url( '/my-account/orders/' ) );
            exit;
        }
    }
}

add_action( 'parse_request', 'vnm_wc_redirect_account_dashboard', 10, 1 );






add_filter( 'woocommerce_shortcode_products_query', function( $query_args, $atts, $loop_name ){
    if( $loop_name == 'recent_products' ){
        $query_args['meta_query'] = array( array(
            'key'     => '_stock_status',
            'value'   => 'outofstock',
            'compare' => 'NOT LIKE',
        ) );
    }
    return $query_args;
}, 10, 3);









function register_my_menu() { register_nav_menu('new-menu',__( 'New Menu' )); } add_action( 'init', 'register_my_menu' );













add_filter('woocommerce_catalog_orderby', 'wc_customize_product_sorting');

function wc_customize_product_sorting($sorting_options){
    $sorting_options = array(
        'menu_order' => __( 'Сортировка', 'woocommerce' ),
        'popularity' => __( 'По популярности', 'woocommerce' ),
        'date'       => __( 'По дате добавления', 'woocommerce' ),
        'price'      => __( 'По цене: от низкой', 'woocommerce' ),
        'price-desc' => __( 'По цене: от высокой', 'woocommerce' ),
    );

    return $sorting_options;
}



add_filter('the_title', 'single_product_page_title', 10, 2);

function single_product_page_title($title, $id) {
    if(is_product_category() || is_page() ) {                
        $title = mb_strimwidth($title, 0, 38, '...');
        return $title;
    }

    return $title;
}