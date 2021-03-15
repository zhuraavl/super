<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
  
  <div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-6 p-md-5">
     <div class="img-pic-sticky">
      <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action( 'woocommerce_before_single_product_summary' );
        ?>
        </div>
    </div>
    <div class="col-12 col-md-6 pt-md-5 px-md-5">
     <div class="summary entry-summary">
     
     
     
		 
	
      <?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
		
		
		
		
		<div class="product-card-under-content">
     
		
		  </div>
		
		
		
   </div>
   
   
   
   
   <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
	
   
   
    <div class="product-card-top-content d-none">
     
      <div class="product-brand"></div>
      
		    <div class="product-counrty"></div>
		    <div class=""></div>
		  </div>
   
   
   
   
   
   
   
    </div>
  </div>
  </div>
	
	
	
	<div class="container-fluid px-0 my-5">

	<ul class="tabsz mb-4">
		<li class="tab-link current" data-tab="tab-1">Похожие</li>
		<li class="tab-link" data-tab="tab-2">В категории</li>
		<li class="tab-link" data-tab="tab-3">Просмотренное</li>
		
	</ul>

	<div id="tab-1" class="tabz-content current">
		
	</div>
	<div id="tab-2" class="tabz-content">
		 
	</div>
	<div id="tab-3" class="tabz-content">
		
	</div>
	

</div><!-- container -->
	
	
	
	
	<div class="products-list-under-product">
	  <h2 class="pb-3">Сопутствующие товары:</h2>
    <div class="products-list-under-product-content"></div>
	</div>

	
	
	

	
</div>









<div class="container-fluid in-this-cat d-none">
  <div class="row">
    <div class="col-12 px-0">
      <h3 class="text-center mb-5">Другое в этой категории:</h3>
     

   

<?php

if ( is_singular('product') ) {

  global $post;

  // get categories
  $terms = wp_get_post_terms( $post->ID, 'product_cat' );
  foreach ( $terms as $term ) $cats_array[] = $term->term_id;

  $query_args = array( 'post__not_in' => array( $post->ID ), 'posts_per_page' => 20, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product', 'tax_query' => array( 
     array(
            'taxonomy'  => 'product_visibility',
            'terms'     => array('exclude-from-catalog'),
            'field'     => 'name',
            'operator'  => 'NOT IN',
        ),
    array(
      'taxonomy' => 'product_cat',
      'field' => 'id',
      'terms' => $cats_array
    )
  ));

  $r = new WP_Query($query_args);
		
  if ($r->have_posts()) {
    ?>
    <ul class="products">
      <?php while ($r->have_posts()) : $r->the_post(); global $product; ?>
        <li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
 
  
	do_action( 'woocommerce_before_shop_loop_item_title' );
 ?>

  <?php
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
   
	 * @hooked woocommerce_template_loop_product_title - 5
   
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
 ?>

 

  <?php
	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
	
</li>
      <?php endwhile; ?>
    </ul>
    <?php
    // Reset the global $the_post as this query will have stomped on it
    wp_reset_query();

  }

}
?>
 </div>
  </div>
</div>





<?php do_action( 'woocommerce_after_single_product' ); ?>






 <div class="container-fluid recent-view d-none">
  <div class="row pt-2">
    <div class="col-12 px-0">
      <?php echo do_shortcode( '[rvp_show no_products="12"  slider_use="false"]' ); ?>

    </div>
  </div>
</div>




<?php echo adrotate_ad(3); ?>


<div class="container-fluid mb-5 pb-3 pt-5 category-product">
  <div class="row">
    <div class="col-12">
      <h3 class="text-center pb-3">Все категории:</h3>
      <?php echo do_shortcode( '[product_categories parent="0" per_page="12" column="2" orderby="id" order="DESC"]' ); ?>

    </div>
  </div>
</div>
 
 



