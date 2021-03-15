<?php
/**
 * Template Name: Main page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

  <?php if ( is_front_page() ) : ?>
    <?php get_template_part( 'global-templates/hero' ); ?>
      <?php endif; ?>


        <div class="wrapper" id="full-width-page-wrapper">



          <main class="site-main" id="main" role="main">

           
           <section class="hero-main">
             
             
             <div class="container-fluid py-3">
               <div class="row align-items-center">
                 <div class="col-12 col-md-7 pb-3 order-md-last px-md-5"><img src="https://superalex.co/wp-content/uploads/2021/02/example-2-1-1.png" alt=""></div>
                 
                 <div class="col-12 col-md-5 text-center pb-4 pb-md-0">
                 <h1 class="mb-md-5 pb-0 new-hero-title">Онлайн супермаркет продуктов из Европы от лучших поставщиков</h1>
                 
                 <a href="/shop" class="button-big">Начать покупки</a>
                 </div>
                 
               </div>
             </div>
           </section>
           
           
           
            
            <section class="pb-2 position-relative">
                    
                    <div class="main-product-line">
                      <?php echo do_shortcode( "[featured_products per_page=”12″ columns=”4″ orderby=”date” order=”ASC”]" ); ?>
                    </div>


                  </section>
           
           
           
            <?php echo adrotate_ad(7); ?>
           
           
         

           




              <div class="container-fluid my-5">
                <div class="row pt-3 justify-content-center">
                  <div class="col-12 col-md-6">
                    <h2 class="pb-4">SUPERALEX - Ваше окно в Европу!</h2>
                    <p>Наш маркет позволяет вам купить настоящие европейские товары, которых нет в соседнем супермаркете. Доставляем Вам все, что вы выберете напрямую с территории Европы и Англии</p>
                    <div class="pt-4 pb-5">
                      <a href="/about" class="button-big">Подробней о нас</a>
                    </div>
                    
                  </div>
                  <div class="col-12 mt-3">

                    <?php echo do_shortcode( '[product_categories parent="0" per_page="12" column="2" orderby="id" order="DESC"]' ); ?>

                  </div>
                </div>
              </div>




              <?php echo adrotate_ad(4); ?>



 <section class="top-new-products my-5 position-relative">
              <h3 class="mb-4">Новинки:</h3>
              <div class="main-product-line">
                <?php echo do_shortcode( '[recent_products per_page="30" column="3" orderby="rand" order="rand"]' ); ?>
              </div>
            </section>


                

                


                   <div class="container-fluid mt-5 pt-5">
                    <div class="row justify-content-center">
                      <div class="col-12 col-md-6">
                        <h2 class="pb-4 px-5">Почему вам стоит совершить покупку в SUPERALEX?</h2>
                        <p>Все просто - комфорт! Вы покупаете интересующие вас товары по хорошим европейским ценам, а как их к вам доставить — это уже наша забота. Оригинальные вкусы и качество старой Европы, наилучшие цены, индивидуальная доставка для Вас из европейских стран.</p>

                        <div class="row pt-4 features-main">
                          <div class="col-4">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mi1.png" alt="">
                            <p>Лучший вкус</p>
                          </div>
                          <div class="col-4">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mi2.png" alt="">
                            <p>Оригинальные продукты</p>
                          </div>
                          <div class="col-4">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mi3.png" alt="">
                            <p>Выгодная цена</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


 <section class="pt-5 position-relative">
                  <h3 class="mb-4">Популярное:</h3>
                  <div class="main-product-line">
                    <?php echo do_shortcode( '[best_selling_products per_page="30" column="3" orderby="rand" order="rand"]' ); ?>
                  </div>
                </section>
                 




                   <section class="mt-5 pt-3">
                    <h3 class="mb-5">Наши бренды:</h3>
                    <div class="main-brands-list">

                      <?php echo do_shortcode( "[pwb-all-brands image_size='medium' per_page='20']" ); ?>
                    </div>


                  </section>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  



          </main>
          <!-- #main -->



        </div>
        <!-- #full-width-page-wrapper -->

        <?php get_footer(); ?>
