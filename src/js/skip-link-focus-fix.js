/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isWebkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    isOpera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    isIe     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( isWebkit || isOpera || isIe ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();





//jQuery(document).ready(function ($) { 
//
//
//});



jQuery(document).ready(function ($) { 







//$(function (){
//     if($('.archive .products').find('.product-category').length !== 0) {
//        $('.products-line-box').show();
//        var content = $('.product.type-product').detach();
//        $('.product-line').html(content);
//     };
//});
  
  
  
  
  
//  $(function (){
//    
//    var content = $('.up-sells ul.products').detach();
//    $('.products-list-under-product-content').html(content);
//});
  
  $(function (){
    var content = $('.tagged_as').detach();
    $('.tags-content').html(content);
});
   
  
  $(function (){
    var content = $('.archive .product-category').detach();
    $('.products-category-list-archive').html(content);
});
  
//  $(function (){
//     if($('.archive .products').find('.product-category').length !== 0) {
//        $('.product-category').last().after('<li class="full-width-demiter"><p class="mt-3 mb-2 pl-4 opacity-0">В этих категориях:</p></li>');
//        $('body').addClass('size-product-small');
//     };
//});
//  
  
  
  
 
  $(function(){
    
  if ($(".main-product-line")[0]){
    $(".main-product-line").prepend('<button class="scroll-left">←</button>');
    $(".main-product-line").append('<button class="scroll-right">→</button>');
  } else {
      
  }
  });
  
    $(function(){
  
  $('.scroll-right').click(function() {
      event.preventDefault();
      var c = $(this).parent().find('.products').width() / 2;
      $(this).parent().find('.products').animate({
        scrollLeft: "+=" + c + "px"
      }, 300);

   });
   
     $('.scroll-left').click(function() {
      event.preventDefault();
      var c = $(this).parent().find('.products').width() / 2;
      $(this).parent().find('.products').animate({
        scrollLeft: "-=" + c + "px"
      }, 300);

   });
   });
  
  
  
  
  
  
  
  
  $(function(){
    
    var d = $('.woocommerce-product-attributes-item--attribute_pa_country .woocommerce-product-attributes-item__value p').html();
    $('.product-counrty').html(d);
  
});
  
  $(function(){
    
    var d = $('.woocommerce-product-attributes-item--attribute_pa_nett-weight .woocommerce-product-attributes-item__value').html();
    $('.product-weight').html(d);
  
});
  $(function(){
    
    var d = $('.pwb-single-product-brands a');
    $('.product-brand').html(d);
  
});
  
  $(function(){
    
    var d = $('.posted_in a');
    $('.product-cats').html(d);
  
});
  
  
  
  
$(function(){
    var header = Array();
  $(".wdp_pricing_table thead tr td").each(function(i, v){
    header[i] = $(this).text();
  })
  var data = Array();
  $(".wdp_pricing_table tbody tr td").each(function(i, v){
    data[i] = $(this).text();
  })
header.forEach((num1, index) => {
  const num2 = data[index];
  $('.product-card-bottom-content').append('<span>При покупке <strong>' +num1 + '</strong> цена за товар: <strong>' + num2 + '</strong></span>');
});

});


  
  
  
  
  
  
  
  
  $(function(){
    $('#ship-to-different-address span').text('Адрес доставки (если не совпадает с указанным выше)');
  
});
  
  
  
  
  
  
  $(function() {

    $(".quantity").append(' <input type="button" value="-" class="button-minus" data-field="quantity"><input type="button" value="+" class="button-plus" data-field="quantity">');

 
  function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

$('.quantity').on('click', '.button-plus', function(e) {
  incrementValue(e);
});

$('.quantity').on('click', '.button-minus', function(e) {
  decrementValue(e);
});



});
  
  
  
  
  
  
  
  
  $('.open-mobil').click(function() {
      
      $(this).toggleClass('show');
      $('.side-left-menu').toggleClass('show');

   });
  
  
  
  $('.open-filters').click(function() {
      
      $(this).toggleClass('show');
      $('.archive-products-list').toggleClass('filter');

   });
 
  
//  if ($(window).width() < 661) {
//    $('.side-right-menu li:first-child, .side-right-menu li:nth-child(2)').appendTo('.side-left-menu');
//  }
//  else {
//     
//  }
  
  
  
 
  
//   $(function(){
//    
//    $('.cart-subtotal .left-corner').text('Подытог');
//    $('.shipping-total .left-corner').text('Доставка');
//    $('.order-total .left-corner').text('Итого');
//  
//});

    $(function(){
     if ($('.geo-detected:contains("Россия")').length > 0) {
      $(".ua-phones").addClass("d-none");
      $(".ru-phones").removeClass("d-none");
      } else {
        
      };
  
      
  
      
      
});
  
  
  
  
  
  
//  $(function(){
//     if ($('.phone-numbers:contains("Украина")').length > 0) {
//    $(".ua-phones").addClass("d-inline-block");
//    $(".ua-text").addClass("d-block");
//      } else {
//        $(".ru-phones").addClass("d-inline-block");
//        $(".ru-text").addClass("d-block");
//      };
//  
//  
//});
  
  
 
//  woocommerce-order-pay 
  
  
  
 
  
//  $('select.orderby').change(function(){
//  var text = $(this).find('option:selected').text()
//  var $aux = $('<select/>').append($('<option/>').text(text))
//  $(this).after($aux)
//  $(this).width($aux.width())
//  $aux.remove()
//}).change()
  
  
  
//  
//$('div[data-filter-type=wpfPrice]').prepend('<h4>Цена</h4>');
//$('div[data-slug=brand]').prepend('<h4>Бренд</h4>');
//$('div[data-slug=tag]').prepend('<h4>Особенности</h4>');
//$('div[data-slug=category]').prepend('<h4>Подкатегории</h4>');
//$('div[data-slug=rating]').prepend('<h4>Рейтинг</h4>');

  
  
  
  
  
  
  
  
  
  $(document).ready(function(){
	
	$('ul.tabsz li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabsz li').removeClass('current');
		$('.tabz-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
  
  
  
  

  $(function (){
    var contentz = $('.releted-priducts-content .products');
    $('#tab-1').html(contentz);
    });
  
  
   $(function (){
    var contentz = $('.in-this-cat .products');
    $('#tab-2').html(contentz);
    });
  
  $(function (){
    var contentz = $('.recent_products .products');
    $('#tab-3').html(contentz);
    });
   
  

});





