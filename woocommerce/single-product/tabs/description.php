<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

global $post;

//global $product;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );

?>

<?php if ( $heading ) : ?>
	<h2><?php echo esc_html( $heading ); ?></h2>
<?php endif; ?>

<?php the_content(); ?>
<!--< ? php do_action( 'woocommerce_product_additional_information', $product ); ? >-->


 <div class="row product-infos-bottom mt-5">
     <div class="col-12">
       <div class="row">
        <div class="col-3">
          <p>Категория</p>
        </div>
        <div class="col-9">
          <p><span class="product-cats"></span></p>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <p>Бренд</p>
        </div>
        <div class="col-9">
          <p><span class="product-brand"></span></p>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <p>Страна</p>
        </div>
        <div class="col-9">
          <p><span class="product-counrty"></span></p>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <p>Вес</p>
        </div>
        <div class="col-9">
          <p><span class="product-weight"></span></p>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <p>Особенности</p>
        </div>
        <div class="col-9">
          <div class="tags-content"></div>
        </div>
      </div>
    </div>
    </div>
    
    
    
    

