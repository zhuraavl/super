<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>



<section class="phone-numbers d-none">
  <div class="container">
    <div class="row">
      <div class="col-4 text-center">
       <div class="geo-detected d-none">
        <?php echo do_shortcode( "[geoip_country]" ); ?>
        </div>
        <h3> <span class="ua-phones">
          <a href="tel:+380678150999">+38 067 815 09 99</a>
          
        <a href="tel:+380500150999">+38 050 015 09 99</a>
        </span>
        <span class="ru-phones d-none">
          <a href="tel:+74993401489">+7 499 340 14 89</a>
        </span></h3>
      </div>
      <div class="col-6 py-md-5 py-4 text-center">
      
       
        <p class="mb-3">Или мы можем вам</p>
        
      </div>
    </div>
  </div>
 
</section>


<div class="wrapper" id="wrapper-footer">

	<div class="container-fluid">

		<div class="row">
     <div class="col-6 col-md-4 pl-md-5">
        
        <a class="bingc-phone-button bingc-language-ru bingc-show" id="bingc-phone-button">
        <span>Перезвонить мне</span><svg id="bingc-phone-button-icon-icon" class="bingc-phone-button-icon-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17.544 25.215" enable-background="new 0 0 17.544 25.215" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M12.22,6.784c-0.135,0.871-1.654,4.073-2.084,4.89c-0.576,1.087-2.779,4.344-3.724,5.065l0,0l-0.775,0.532l-1.879-0.616L0,20.653l0.129,1.043l2.123,2.832l0.916,0.687c0,0,13.474-8.596,14.376-24.03c0,0-0.266-0.297-0.777-0.87L13.228,0l-1.16,0.454l-1.029,4.941l1.127,1.23"></path></svg></a>
      </div>
      
      <div class="col-4 d-none d-md-block">
       <p class="text-center">
         <?php the_custom_logo(); ?>
       </p>
      
       </div>
      <div class="col-6 col-md-4 text-right pr-md-5">
       <div class="geo-detected d-none">
        <?php echo do_shortcode( "[geoip_country]" ); ?>
        </div>
        <h3> <div class="ua-phones">
          
          
          <a href="tel:+380500150999">+38 050 015 09 99</a><br><a href="tel:+380678150999">+38 067 815 09 99</a>
        </div>
        <span class="ru-phones d-none">
          <a class="d-block mt-4" href="tel:+74993401489">+7 499 340 14 89</a>
        </span></h3>
      </div>
      
      
		</div><!-- row end -->
   
    <div class="row">
        <div class="col-12 text-center">
          
       
  
       
        <h2 class="footer-title py-5">Подпишись на наши соцcети, чтобы узнать о вкусных новинках</h2>
        <div class="pt-md-2 pb-md-1 social-footer text-center">
          <a href="https://www.instagram.com/superalex.co" target="_blank" class="ua-phones"><img src="<?php bloginfo('template_directory'); ?>/img/instagram.svg" alt=""></a>
          
          
          
          <a href="https://www.instagram.com/superalex_ru" target="_blank" class="ru-phones d-none"><img src="<?php bloginfo('template_directory'); ?>/img/instagram.svg" alt=""></a>
          
          
          
          <a href="https://www.facebook.com/superalex.co"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.svg" alt=""></a>
          
          
          <a href="https://www.vk.com/superalex_ru"  target="_blank"  class="ru-phones d-none"><img src="<?php bloginfo('template_directory'); ?>/img/vk.svg" alt=""></a>
          
          
          <a href="https://t.me/SA_SuperAlex"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/telegram.svg" alt=""></a>
          
          
          <a href="viber://chat?number=+380500150999"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/viber.svg" alt=""></a>
          
          
<!--          <a href="" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/telegram.svg" alt=""></a>-->
<!--          <a href=""><img src="<?php bloginfo('template_directory'); ?>/img/youtube-2.svg" alt=""></a>-->
          
        </div>
        </div>
      </div>
   
   
   
    <div class="row pt-2 pb-5 mt-md-5 mt-4">
      <div class="col-6 col-md-3 py-md-0">
        <ul class="footer-menu">
        <li><a href="/contact">Контакты</a></li>
        <li><a href="/offer/">Публичная оферта</a></li>
        <li><a href="/privacy-policy/">Политика конфиденциальности</a></li>
        <li><a href="/cookie/">Политика cookie</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 py-md-0">
      <ul class="footer-menu">  
         
          <li><a href="/my-account#customer_login">Регистрация
</a></li>
          
        
          <li><a href="/my-account/">Вход в аккаунт</a></li>
          <li><a href="/my-account/lost-password/">Забыл пароль</a></li>
           <li><a href="/help">Помощь</a></li>
        </ul>
       
      </div>
      <div class="col-6 col-md-3 py-md-0">
       <ul class="footer-menu">  
<!--
          <li><a href="/sitemap_index.xml">Карта сайта
</a></li>
-->
          <li><a href="/delivery">Информация о доставке</a></li>
          <li><a href="/payments">Оплата</a></li>
          <li><a href="/quotes">Отзывы о нас
</a></li>
         <li><a href="/blog/">Блог</a></li>
         
        
          </ul>
        
      </div>
      <div class="col-6 col-md-3 py-md-0">
       <ul class="footer-menu">  
        <li><a href="/beasupplier">Станьте поставщиком</a></li>
         <li><a href="/ad">Реклама и Партнерство
</a></li>
          
          <li><a href="/wholesale">Оптовая служба</a></li>
          <li><a href="/about/">О нас</a></li>
         
        </ul>
        
      </div>
    </div>
    
   
    
    <div class="row mt-4">
      
      <div class="col-12 copyright">
         <div class="pay-img text-center mb-3">
      <img src="<?php echo get_template_directory_uri(); ?>/img/foot-pay-sys.png" alt="" width="320px" style="margin:auto">
      </div>
        <p>Copyright © INTERTRADE SUPPLIES LIMITED 2021. All rights reserved.</p>
        <p> Stasinou 1, Mitsi building 1, 1st  floor, Flat/Office 4, Plateia eleftherias, 1060, Nicosia, CYPRUS reg #: HE 385874</p>
      </div>
    </div>
    
	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.addEventListener('load', function(){
  window.cookieconsent.initialise({
   revokeBtn: "<div class='cc-revoke'></div>",
   type: "opt-in",
   position: "bottom-left",
   theme: "classic",
   palette: {
       popup: {
           background: "#28f",
           text: "#fff"
        },
       button: {
           background: "#fff",
           text: "#28f"
        }
    },
   content: {
       message: "Этот сайт использует cookies файлы, чтобы обеспечить вам лучшее впечатление от нашего сайта",
       link: "Cookies",
       allow: "Разрешить",
       deny: "Отклонить",
       href: "https://superalex.co/cookie/"
    },
    onInitialise: function(status) {
      if(status == cookieconsent.status.allow) myScripts();
    },
    onStatusChange: function(status) {
//      if (this.hasConsented()) myScripts();
    }
  })
});
//function myScripts() {
//
//   // Paste here your scripts that use cookies requiring consent. See examples below
//
//   // Google Analytics, you need to change 'UA-00000000-1' to your ID
//      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
//      ga('create', 'UA-00000000-1', 'auto');
//      ga('send', 'pageview');
//
//
//   // Facebook Pixel Code, you need to change '000000000000000' to your PixelID
//      !function(f,b,e,v,n,t,s)
//      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
//          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
//          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
//          n.queue=[];t=b.createElement(e);t.async=!0;
//          t.src=v;s=b.getElementsByTagName(e)[0];
//          s.parentNode.insertBefore(t,s)}(window, document,'script',
//          'https://connect.facebook.net/en_US/fbevents.js');
//      fbq('init', '000000000000000');
//      fbq('track', 'PageView');
//
//}

</script>







<?php wp_footer(); ?>
<script type="text/javascript">
  (function(d, w, s) {
  var widgetHash = 'cc02fu2g7vf109atjb0i', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
  gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
  var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
  })(document, window, 'script');
</script>

</body>

</html>

