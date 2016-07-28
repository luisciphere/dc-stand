(function ($) {
	// Colorbox
	if($('.cbox').length > 0){
		$('.cbox').colorbox({height: '90%'});
	} 
	
	// Main slider
	$('.main-slider').each(function(index){
		$('.main-slider').eq(index).flexslider({
			animation: "slide",
			slideshow: false,
			animationLoop: false,
			pausePlay: false,
			direction: "vertical", 
			controlNav: false,
			directionNav: false,
			move: 1
		});

		$('.sl-next').eq(index).on('click', function(){
			var href = $(this).attr('href').split('#');

			$('.main-slider').eq(index).flexslider(href[1]);
			return false;
		})
		
		$('.sl-prev').eq(index).on('click', function(){
			var href = $(this).attr('href').split('#');

			$('.main-slider').eq(index).flexslider(href[1]);
			return false;
		})
	});
	
	if($('.slides li a').length > 0){
		$('.slides li a').click(function(){
			var $slimg = $(this).closest('.row').find('.slider-img');
			var href = $(this).attr('href');
			var src = $(this).find('img').attr('src');

			$slimg.find('img').fadeOut(500, function() {
				$slimg.find('img').attr("src", href);
				$slimg.find('img').attr("srcset", '');
				$slimg.find('a').attr("href", href);
				$slimg.find('img').fadeIn(500);
			});
			return false;
		});
	}
	
	// Gallery slider
	function iniflexslider(id){
		if(id == '#complect'){
			el = id+" .gallery-slider";

			if($(el).find('.flex-viewport').length == 0){	
				$(el).flexslider({
					animation: 'slide',
					animationLoop: false,
					move: 1,
					slideshow: false,
					controlNav: false,
					directionNav: false,
					autoplay: false,
					selector: '.imglist > li'
				});
				
				if($(el).find('ul li').length <= 1){
					
					$(el).find('.gl-next, .gl-prev').hide();
				}	
				
				$('.gl-next, .gl-prev').on('click', function(){
					var href = $(this).attr('href').split('#');

					$(el).flexslider(href[1]);
					return false;
				})
			}
		}
	}
	
	$('.tabs-style-linemove nav ul li a').on('click', function(){
		var id = $(this).attr('href');
		iniflexslider(id);
	});

	// Callback form
	if($('#callback-hidden-form').length > 0){
		$(document).ready(function () {
			$('.cbox-inline').colorbox({
				inline: true, 
				onOpen: function(i) {
					var order_name = $(i.el).data('order');
					if(order_name){
						$(i.el.hash).find('.your-order input').val(order_name).text(order_name);
					}
					$(i.el.hash).show();
				},
				onCleanup: function(i) {
					var order_name = $(i.el).data('order');
					if(order_name){
						$(i.el.hash).find('.your-order input').val('').text('');
					}
					$(i.el.hash).hide();
				}
			});
			
			$('.cbox-close').on('click', function(){
				$.colorbox.close();
				return false;
			});		

			// Mask for phone
			$('.mask-phone').mask('+7 (000) 000-0000');	
		});	
	}
	
	// Paymentform
	if($('#payment-form').length > 0){
		$(document).ready(function () {
			// paymanet select
			$('#payment-select').ddslick();

			// Mask for phone
			$('.mask-phone').mask('+7 (000) 000-0000');	
		});	
	}
	
	// Sticky menu
	$("#newsupermenu").sticky({topSpacing: 0});
	$("#leftstickmenu").sticky({topSpacing: 50});
	$("#flbtnn").sticky({topSpacing: 50});


	// To TOP
	$(window).scroll(function(){
		if ($(this).scrollTop() > 250) {
			$('#totop').fadeIn(300);
			//$('.flbtn').css({top: '50px'});
			//$('.flbtn').animate({top: 50}, 'fast');
		} else {
			$('#totop').fadeOut(300);
			//$('.flbtn').css({top: '200px'});
			//$('.flbtn').animate({top: 200}, 'fast');
		}
	});
	
	$(document).ready(function(){
		$('#totop').click(function(){
			$('html, body').animate({ scrollTop: 0 }, 600);
			return false;
		});
	});
	
})(jQuery);

// Production tabs
(function() {

	[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
		new CBPFWTabs( el );
	});

})();