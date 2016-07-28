	$('.gallery-slider').each(function(index){
		$('.gallery-slider').eq(index).flexslider({
			animation: 'slide',
			animationLoop: false,
			move: 1,
			slideshow: false,
			controlNav: false,
			directionNav: false,
			autoplay: false,
			selector: '.imglist > li'
		});
		
		if($('.gallery-slider').eq(index).find('ul li').length <= 1){
			$('.gallery-slider').eq(index).find('.gl-next').hide();
			$('.gallery-slider').eq(index).find('.gl-prev').hide();
		}
		
		$('.gl-next').eq(index).on('click', function(){
			var href = $(this).attr('href').split('#');

			$('.gallery-slider').eq(index).flexslider(href[1]);
			return false;
		})
		
		$('.gl-prev').eq(index).on('click', function(){
			var href = $(this).attr('href').split('#');

			$('.gallery-slider').eq(index).flexslider(href[1]);
			return false;
		})
	});