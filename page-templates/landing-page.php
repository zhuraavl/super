<?php
/**
 * Template Name: landing page
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

           
           
           <div class="bg_heart">
</div>
           
           
           
           <section class="heart-hero">
               <div class="heart-hero-bg"></div>
              <div class="heart-one"></div>
              
              <h2>Специальное предложение ко Дню Святого Валентина!</h2>
             
             <h4>Бесплатная доставка праздничных наборов.</h4>
           </section>
           
           
           
          
            

            




              <div class="container my-5">
                <div class="row pt-3 justify-content-center">
                  <div class="col-12 col-md-6 text-center">
                    <p class="pb-4">14 февраля не за горами. Да и только ли в День Влюблённых хочется баловать себя? Локдауны, 😷 пандемия, зима... а так хочется оказаться в солнечной Италии или туманной Англии и неторопливо провести с самыми близкими людьми ещё один лучший день в жизни.

                    <br>
                    <br>
                    Вы не можете поехать в путешествие на один день, мы вам доставим эти эмоции прямо к вам в дом!
                    </p>
                   
                    
                    
                  </div>
            
                </div>
              </div>







              <section>
                <div class="content-fluid">
    <?php               
while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
                  ?>
                </div>
              </section>
             


                  
                  
                  <section class="py-5">
                    <div class="container">
                      <div class="row justify-content-center">
                       <div class="col-12 col-md-6">
                         <p style="font-size: 14px; opacity: .6;">*специальное предложение распространяется только на набор из данных продуктов, в случае если вы хотите приобрести продукты из набора отдельно вы можете это сделать на страницах товара, без специальных условий.</p>
                         
                       </div>
                        
                      </div>
                    </div>
                  </section>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  



          </main>
          <!-- #main -->



        </div>
        <!-- #full-width-page-wrapper -->

       
        <style>
          .product-info-content, .related.products, .in-this-cat, .recent-view, .a-single, .category-product, .product-card-under-content, .woosb-price, .header-topbar {
            display: none !important;
          }
          
          
          .summary.entry-summary .price del {
            display: none !important;
          }
          .woosb-wrap .woosb-products {
           
          }
          .woosb-title-inner, .woosb-title-inner a {
            font-size: 12px;
          }
          .woosb-products .woosb-product {
            border-bottom: 0;
            padding: 0;
            justify-content: center;
          }
          
          .woocommerce button.button.single_add_to_cart_button {
            background: rgb(219, 46, 46) !important; 
            padding: 18px 50px !important;
            font-weight: 600 !important;
            border-radius: 10px !important;
          }
          
          
          .onsale {
            display: none;
          }
          
           .heart-hero {
            height: 200px; 
            
             
          }
          
          .heart-hero h2:before {
            content: '*';
            color: red;
          }
          
          .post-2179 .row {
            flex-direction: row-reverse;
          }
          
          
          .heart-hero-bg {
            position: absolute;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
             background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(253,45,45,1) 100%);
           z-index: -1;  
            opacity: .6;
          }
          
          .heart-hero h2 {
            max-width: 600px;
            text-align: center;
            margin: auto;
            margin-top: 140px;
            z-index: 10;
            position: relative;
          }
          .heart-hero h4 {
            text-align: center;
            margin-top: 35px;
            position: relative;
            z-index: 10;
          }
          .heart-one
            {
              position: absolute;
              width: 200px;
              height: 200px;
              background: #e80202;
              transform: rotate(45deg);
              box-shadow: 30px 30px 200px rgba(0,0,0,.5);
              animation: animate 25s linear infinite;
              top: -200px;
              left: 0;
              bottom: 0;
              right: 0;
              margin: auto;
            }
            @keyframes animate
            {
              0%
              {
                transform: rotate(45deg) scale(1);
              }
              20%
              {
                transform: rotate(45deg) scale(.8);
              }
              40%
              {
                transform: rotate(45deg) scale(1.3);
              }
              60%
              {
                transform: rotate(45deg) scale(1);
              }
              80%
              {
                transform: rotate(45deg) scale(1.2);
              }
              100%
              {
                transform: rotate(45deg) scale(1);
              }
            }
            .heart-one::before
            {
              content: '';
              position: absolute;
              top: -100px;
              width: 200px;
              height: 200px;
              background: #e80202;
              border-top-left-radius: 100px;
              border-top-right-radius: 100px;
            }
            .heart-one::after
            {
              content: '';
              position: absolute;
              left: -100px;
              width: 100px;
              height: 200px;
              background: #e80202;
              border-top-left-radius: 100px;
              border-bottom-left-radius: 100px;
            }

          .dgwt-wcas-sf-wrapp input[type=search].dgwt-wcas-search-input {
            background: transparent !important;
          }
         
          #wrapper-header-full {
            display: none;
          }
          
          
          .bg_heart{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            overflow:hidden;
            pointer-events: none;
          }

.heart{position:absolute;top:-50%;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-m-transform:rotate(-45deg);transform:rotate(-45deg)}
.heart:before{position:absolute;top:-50%;left:0;display:block;content:"";width:100%;height:100%;background:inherit;border-radius:100%;}
.heart:after{position:absolute;top:0;right:-50%;display:block;content:"";width:100%;height:100%;background:inherit;border-radius:100%;}

@-webkit-keyframes love {
  0%{top:110%}
}
@-moz-keyframes love {
  0%{top:110%}
}
@-ms-keyframes love {
  0%{top:110%}
}
@keyframes love {
  0%{top:110%}
}
          
          
          
          .woosb-products .woosb-product .woosb-title {
            flex-grow: 0;
          }
          
          
          
          
          
        </style>
        
        <script>

var love = setInterval(function(){
  var r_num = Math.floor(Math.random() * 40) + 1;
	var r_size = Math.floor(Math.random() * 15) + 5;
	var r_left = Math.floor(Math.random() * 100) + 1;
	var r_bg = Math.floor(Math.random() * 25) + 100;
  var r_time = Math.floor(Math.random() * 5) + 5;
  
  $('.bg_heart').append("<div class='heart' style='width:"+r_size+"px;height:"+r_size+"px;left:"+r_left+"%;background:rgba(253,45,45,1);-webkit-animation:love "+r_time+"s ease;-moz-animation:love "+r_time+"s ease;-ms-animation:love "+r_time+"s ease;animation:love "+r_time+"s ease'></div>");
  
  $('.bg_heart').append("<div class='heart' style='width:"+(r_size-10)+"px;height:"+(r_size-10)+"px;left:"+(r_left+r_num)+"%;background:rgba(253,45,45,1);-webkit-animation:love "+(r_time+5)+"s ease;-moz-animation:love "+(r_time+5)+"s ease;-ms-animation:love "+(r_time+5)+"s ease;animation:love "+(r_time+5)+"s ease'></div>");
  
  $('.heart').each(function(){
    var top = $(this).css("top").replace(/[^-\d\.]/g, '');
    var width = $(this).css("width").replace(/[^-\d\.]/g, '');
    if(top <= -100 || width >= 150){
      $(this).detach();
    }
  });
},500);

</script>
        
        
       
        <?php get_footer(); ?>
