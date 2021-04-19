<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="facebook-domain-verification" content="rhon0fi1brut28f0pam04hnp7qkow3" /> <!-- Подтверждение домена для FB -->
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7NM7KV');</script>
<!-- End Google Tag Manager -->
  
  
  
  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '710473486518098');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=710473486518098&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  
  

	<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7NM7KV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-182978643-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-182978643-1');
</script>






	<!-- ******************* The Navbar Area ******************* -->
	<div class="header-topbar d-none d-md-block">
		<div class="container-fluid px-4">
          <div class="row">
            
            <div class="col-12 col-md-6"><span class="pr-5">Пн-Пт:  10:00 AM - 6:00 PM</span>
			  <a href="">+38 067 815 09 99</a>
			  <a href="" class="pl-3">+38 050 015 09 99</a>
			</div>
           <div class="col-12 col-md-6 text-right">
             <a href="/about" class="pr-4">О нас</a>
             <a href="/payments" class="pr-4">Оплата</a>
             <a href="/delivery" class="pr-5">Доставка</a>
           
          
             <?php echo do_shortcode('[woo-currency-switcher]')?>
           </div>
            
          </div>
			
		</div>

	</div>
	
	
	
	

	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">



		<?php if ( 'container' == $container ) : ?>
			<?php endif; ?>

    
    <div class="container-fluid pb-1 pt-3">
      <div class="row align-items-center">
        
        
        
        
        
        
        <div class="col-6 col-md-3 text-center text-md-left pr-0">
          <?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>
              <div class="logo-box">
							<h1 class="mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
              </div>
						<?php else : ?>
              <div class="logo-box">
							<a class="" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
              </div>
						<?php endif; ?>


					<?php } else {

						the_custom_logo();

					} ?>
        </div>
        
        <div class="col-6 col-md-3 text-right order-md-last icons-menu">
              
              
              <div class="open-search">
                <img src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt="">
                <?php echo do_shortcode('[wcas-search-form]'); ?>
              </div>
<!--
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/wish.svg" alt="">
              </a>
-->
              <div>
                <a href="/my-account">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/profil.svg" alt="">
                </a>
              </div>
              <div class="xoo-wsc-cart-trigger">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cart.svg" alt="">
              </div>
            </div>
            
            
            <div class="col-12 col-md-6 order-md-3  position-static">
          <div class="new-main-menu">
                 <?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>
                  </div>
        </div>
            
        
        <div class="col-3 col-md-3 text-right order-md-last d-none">
          <ul class="side-right-menu">
                <li class="px-4">
                  <?php echo do_shortcode('[wcas-search-form]'); ?>
                </li>
          
          
			   <li class="pr-3">
			     <a href="/wishlist" class="wishlist-link">
			       <img src="<?php bloginfo('template_directory'); ?>/img/like.svg" alt="">
			     </a>
			   </li>
			    
			    
<!--
			    < ? php
                if ( is_user_logged_in() ) {
                  echo '<li><a href="/my-account/" class="nav-link">Заказы</a></li>';
                } else {
                   echo '<li><a href="/my-account/" class="nav-link">Аккаунт</a></li>';
                } ? >
			    
-->
			    
			    
			    <li><a href="#" class="nav-link xoo-wsc-cart-trigger"><img src="<?php bloginfo('template_directory'); ?>/img/car.svg" alt=""><span class="cart-customlocation"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a></li>
			  </ul>
        </div>
      
      </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
		




	</div><!-- #wrapper-navbar end -->




  <div class="header-bottom d-none">
    <div class="row">
      <div class="col-4">
        <?php echo do_shortcode( "[geoip_country]" ); ?>
      </div>
      <div class="col-4">

      </div>
      <div class="col-4">

      </div>
    </div>
  </div>
