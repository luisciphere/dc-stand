function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};

function number_format(number, decimals, decPoint, thousandsSep){
	decimals = decimals || 0;
	number = parseFloat(number);
 
	if(!decPoint || !thousandsSep){
		decPoint = '.';
		thousandsSep = ',';
	}
 
	var roundedNumber = Math.round( Math.abs( number ) * ('1e' + decimals) ) + '';
	var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
	var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
	var formattedNumber = "";
 
	while(numbersString.length > 3){
		formattedNumber += thousandsSep + numbersString.slice(-3)
		numbersString = numbersString.slice(0,-3);
	}
 
	return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
}

/* Colorbox 
 ========================================================*/
//include('/wp-content/themes/akademiya/js/jquery.colorbox-min.js');



/* Fix admin bar
 ========================================================*/
 ;
(function ($) {
	if($('#admin-bar-css').length > 0){
		$('.sticky_menu').css({'top':'30px'});
	} 
})(jQuery);

/* isotope
 ========================================================*/
//include('/wp-content/themes/akademiya/js/isotope.pkgd.min.js');

/* cookie.JS
 ========================================================*/
//include('/wp-content/themes/akademiya/js/jquery.cookie.js');

/* Easing library
 ========================================================*/
//include('/wp-content/themes/akademiya/js/jquery.easing.1.3.js');

/* Parallax 
=============================================*/ 
//include('/wp-content/themes/akademiya/js/jquery.rd-parallax.js'); 

/* ToTop
 ========================================================*/
;
(function ($) {
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 250) {
                $('#totop').fadeIn(300);
            } else {
                $('#totop').fadeOut(300);
            }
        });
 
        $('#totop').click(function(){
            $('html, body').animate({ scrollTop: 0 }, 600);
            return false;
        });
    });
})(jQuery);

/* EqualHeights
 ========================================================*/
;
(function ($) {
    var o = $('[data-equal-group]');
    if (o.length > 0) {
        include('/wp-content/themes/akademiya/js/jquery.equalheights.js');
    }
})(jQuery);

/* SMOOTH SCROLLIG
 ========================================================*/
;
(function ($) {
    var o = $('html');
    if (o.hasClass('desktop')) {
	/*
        include('/wp-content/themes/akademiya/js/jquery.mousewheel.min.js');
        include('/wp-content/themes/akademiya/js/jquery.simplr.smoothscroll.min.js');

        $(document).ready(function () {
            $.srSmoothscroll({
                step: 150,
                speed: 800
            });
        });
	*/
    }
})(jQuery);

/* Copyright Year
 ========================================================*/
;
(function ($) {
    var currentYear = (new Date).getFullYear();
    $(document).ready(function () {
        $("#copyright-year").text((new Date).getFullYear());
    });
})(jQuery);


/* Superfish menus
 ========================================================*/
;
(function ($) {
    //include('/wp-content/themes/akademiya/js/superfish.js');    
})(jQuery);

/* Navbar
 ========================================================*/
;
(function ($) {
    //include('/wp-content/themes/akademiya/js/jquery.rd-navbar.js');
})(jQuery);


/* Google Map
 ========================================================
;
(function ($) {
    var o = document.getElementById("google-map1");
    if (o) {
        include('//maps.google.com/maps/api/js?sensor=false');
        include('/wp-content/themes/akademiya/js/jquery.rd-google-map.js');

        $(document).ready(function () {
            var o = $('#google-map1');
            if (o.length > 0) {
                o.googleMap({
                    styles: [{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]}]
                });
            }
        });
    }
})
(jQuery);
*/


/* WOW
 ========================================================*/
;
(function ($) {
	/*
    var o = $('html');

    if ((navigator.userAgent.toLowerCase().indexOf('msie') == -1 ) || (isIE() && isIE() > 9)) {
        if (o.hasClass('desktop')) {
            include('/wp-content/themes/akademiya/js/wow.js');

            $(document).ready(function () {
                new WOW().init();
            });
        }
    }
	*/
})(jQuery);

/* Contact Form
 ========================================================*/
;
(function ($) {
    var o = $('.contact-form');
    if (o.length > 0) {
        include('/wp-content/themes/akademiya/js/modal.js');
        include('/wp-content/themes/akademiya/js/TMForm.js'); 
    }
})(jQuery);

/* Orientation tablet fix
 ========================================================*/
$(function () {
	/*
    // IPad/IPhone
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,

        gestureStart = function () {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
        },

        scaleFix = function () {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };

    scaleFix();
    // Menu Android
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM);
        if (!result) {
            $('.sf-menus li').each(function () {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(
                        function () {
                            return false;
                        },
                        function () {
                            window.location.href = $(this).attr("href");
                        }
                    );
                }
            })
        }
    }
	*/
});
/*
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');
*/

/* JQuery UI Accordion
 ========================================================*/
;
(function ($) {
	/*
    var o = $('.accordion');
    if (o.length > 0) {
        include('/wp-content/themes/akademiya/js/jquery.ui.accordion.min.js');

        $(document).ready(function () {
            o.accordion({
                active: false,
                header: '.accordion_header',
                heightStyle: 'content',
                collapsible: true
            });
        });
    }
	*/
})(jQuery);

/* Subscribe Form
 ========================================================
;
(function ($) {
    var o = $('#subscribe-form');
    if (o.length > 0) {
        include('/wp-content/themes/akademiya/js/sForm.js');
    }
})(jQuery);
*/

/* Booking Form
 ========================================================
;
(function ($) {
    var o = $('#bookingForm');
    if (o.length > 0) {
        include('/wp-content/themes/akademiya/js/booking/booking.js');
        include('/wp-content/themes/akademiya/js/booking/jquery-ui-1.10.3.custom.min.js');
        include('/wp-content/themes/akademiya/js/booking/jquery.fancyform.js');
        include('/wp-content/themes/akademiya/js/booking/jquery.placeholder.js');
        include('/wp-content/themes/akademiya/js/booking/regula.js');
        $(document).ready(function () {
            o.bookingForm({
                ownerEmail: '#'
            });
        });
    }
})(jQuery);
*/

/* Contact map 2gis 
=============================================*/ 
;
(function ($) {
	/*
    if($('#google-map').length > 0){
		DG.then(function() {
			var map = DG.map('google-map', {
				center: [60.944251029832806, 76.5255180001259],
				zoom: 16
			});

			DG.marker([60.944251029832806, 76.5255180001259]).addTo(map).bindPopup('');
		});
	} 
	*/
})(jQuery);

/* Colorbox feedback form
=============================================*/ 
;

if($('#callback-hidden-form').length > 0){
	$(document).ready(function () {
		$('.cbox-inline').colorbox({
			inline: true, 
			onOpen: function(i) {
				var fio = $(i.el).data('fio');
				if(fio){
					$(i.el.hash).find('input.fio').val(fio);
					$(i.el.hash).find('span.fio-title').text(fio);
				}
				$(i.el.hash).show();
			},
			onCleanup: function(i) {
				var fio = $(i.el).data('fio');
				if(fio){
					$(i.el.hash).find('input.fio').val('');
					$(i.el.hash).find('span.fio-title').text('');
				}
				$(i.el.hash).hide();
			}
		});
		
		$('.cbox-close').on('click', function(){
			$.colorbox.close();
			return false;
		});		
	});	
} 





/* Calculator
 ========================================================*/
;
(function ($) {
	function total_calc(){
		var price_btn = 0, price_inp = 0, total = 0;
		$('.calc_btn').each(function(){
			if($(this).hasClass('on')){
				if($(this).hasClass('calc_fact')){
					price_btn = price_btn * $(this).data('price');
				}
				else{
					price_btn += 1 * $(this).data('price');
				}
			}
		})

		$('.calc_input').each(function(){
			var inp = $(this).val();
			if(inp > 0){
				price_inp += inp * $(this).data('price');
			}
		})
		
		total = (1 * price_btn) + (1 * price_inp);
		$('#calc_result').text(number_format(total, 0, '.', ' '));
	}
	
	$('.calc_btn').on('click', function(){
		// Только 1 параметр
		if($(this).parent().hasClass('calc_single')){     
			$(this).addClass('on').siblings().removeClass('on');				
		}
		// Все остальные параметры
		else {
			$(this).toggleClass('on');
		}
		
		total_calc();
	})
	
	total_calc();
	
	$('.calc_input').on('keyup', function(){
		total_calc();
	});
	
})(jQuery);

/* Fix admin bar
 ========================================================*/
 ;
(function ($) {
	if($('#admin-bar-css').length > 0){
		$('.sticky_menu').css({'top':'30px'});
	} 
})(jQuery);

/* isotope 
 ========================================================*/
 ;

if($('.emp-list').length > 0){
	// Изотоп для продукции
	var $container = $('.emp-list').isotope({
		itemSelector: '.emp-item',
		layoutMode: 'vertical',
		transitionDuration: 0
	});
	
	// Работаем с категориями
	$('.spec li').on('click', 'a', function() {
		var filterValue = $(this).attr('data-filter');
		$container.isotope({
			filter: filterValue
		});		
		return false;
	});
}

$('.menu li').hover(function() {
    $(this).find('.sub-menu').stop().fadeIn(255);
},
function() {
    $(this).find('.sub-menu').stop().fadeOut(300);
});

/* YouTube link to screen
=============================================*/ 
;

function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    if (match&&match[7].length==11){
        return match[7];
    }else{
        false;
    }
}

if($('.YTvideo, .YTvideo2').length > 0){
	$(document).ready(function () {
		$('.YTvideo, .YTvideo2').each(function(){
			var el = $(this);
			var id = youtube_parser(el.text());
			if(id != false){
				el.html('<a class="cbox-youtube" href="http://www.youtube.com/embed/'+id+'?rel=0&amp;wmode=transparent&amp;autoplay=true&amp;allowfullscreen=true"><span class="YTlink-btn"></span><img src="http://img.youtube.com/vi/'+id+'/hqdefault.jpg" /></a>');
			}
		});	
		
		$('.cbox-youtube').colorbox({iframe:true, innerWidth:640, innerHeight:370, title: false});
	});	
} 

if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))){
	$('.leftpan').css({'display': 'none'});
}


/* Flexslider for recommendations
=============================================*/ 
;
if($('.slider-rec').length > 0){
	$('.slider-rec').each(function(index){
		$('.slider-rec').eq(index).flexslider({
			animation: 'slide',
			animationLoop: false,
			move: 1,
			slideshow: false,
			controlNav: false,
			directionNav: false,
			autoplay: false
		});
		
		if($(this).find('ul li').length <= 1){
			$(this).find('.rec-slider-prev, .rec-slider-next').hide();
		}
		
		$('.slider-rec').eq(index).find('.rec-slider-prev, .rec-slider-next').on('click', function(){
			var href = $(this).attr('href').split('#');

			$('.slider-rec').eq(index).flexslider(href[1]);
			return false;
		})	
	});
}

/* Colorbox img
=============================================*/ 
;
if($('.cbox').length > 0){
	$('.cbox').colorbox({height: '90%'});
} 

/* Perfect scrollbar for main page
=============================================*/ 
;
if($('.listdoc').length > 0){
	$('.listdoc').perfectScrollbar({
		suppressScrollY: true,
		maxScrollbarLength: '400'
		
	});
} 

/* Services Tabs
=============================================*/ 
;
if($('.stabs').length > 0){
	var $stabs = $(".stabs").hashTabs({
		tabPanelSelector: '.services-tabs',
		tabNavSelector: '.stabs-nav',
		keyboard: true,
		history: false
	});
} 

/* main page top slider
=============================================*/ 
;
if($('.main-slider').length > 0){
	$('.main-slider').flexslider({
		animation: 'slide',
		animationLoop: false,
		move: 1,
		slideshow: true,
		controlNav: false,
		autoplay: true
	});
	
	$('.main-slider-prev, .main-slider-next').on('click', function(){
		var href = $(this).attr('href').split('#');

		$('.main-slider').flexslider(href[1]);
		return false;
	})
} 


/* Specialist main page slider
=============================================*/ 
;
if($('.spec-slider').length > 0){
	$('.spec-slider').flexslider({
		animation: 'slide',
		animationLoop: false,
		move: 1,
		slideshow: false,
		controlNav: false,
		autoplay: false
	});
	
	$('.spec-slider-prev, .spec-slider-next').on('click', function(){
		var href = $(this).attr('href').split('#');

		$('.spec-slider').flexslider(href[1]);
		return false;
	})
} 


/* Project slider and tabs
=============================================*/ 
;
if($('.ptabs').length > 0){
	var $ptabs = $('.ptabs').hashTabs({
		tabPanelSelector: '.project-tab',
		tabNavSelector: '.ptabs-nav',
		keyboard: false,
		history: true,
		delhash: true
	});

	function iniflexslider(id){
		var el = '';
		if(id === -1){
			el = ".project-slider";
		}
		else{
			el = ".project-tab[aria-labeledby='"+id+"'] .project-slider";
		}
		
		if($(el).find('.flex-viewport').length == 0){	
			$(el).flexslider({
				animation: 'slide',
				animationLoop: false,
				move: 1,
				slideshow: false,
				controlNav: false,
				directionNav: false,
				autoplay: false
			});
			
			if($(el).find('ul li').length <= 1){
				
				$(el).find('.proj-slider-prev, .proj-slider-next').hide();
			}	
			
			$('.proj-slider-prev, .proj-slider-next').on('click', function(){
				var href = $(this).attr('href').split('#');

				$(el).flexslider(href[1]);
				return false;
			})
		}
	}
	
	iniflexslider(0);
	
	$('.ptabs-nav a').on('click', function(){
		var id = $(this).attr('id');
		iniflexslider(id);
	});		

} 

/* Sticky menu
=============================================*/ 
;
$(document).ready(function () {
	var top = 0;
	if($('#admin-bar-css').length > 0){
		top = 32;
	} 

	$('.sticky_menu').sticky({topSpacing: top});
});

/* Get ajax info for main page
=============================================*/ 
$(document).ready(function () {
	$('.proj_main_ajax_info').on('click', function() {
		var $el = $(this);
		var pid = $el.data('id');
		
		if(pid > 0){
			$.ajax({
				url: ajaxurl,
				type: 'POST',
				dataType: 'JSON',
				data: {
					action: 'get_proj_info',
					id: pid
				},
				success: function(data) {
					if(data.error == 1){
						alert(data.html);
					}
					else{
						$('.proj_main_ajax_info').removeClass('active');
						$el.addClass('active');
						
						$.each(data, function(key, item) {
							$('.res_post_'+key).html(item);
						});
					}
				}
			});
		}
		return false;
	});

	if($('.proj_main_ajax_info.active').length > 0){
		var slind = $('.proj_main_ajax_info.active').parents('.project-tab').index();
		console.log(slind);
		$('.proj_main_ajax_info.active').click();
		$('.ptabs-nav a#'+slind).click();
	}
});

/* Buttons for scroll main slider text
=============================================*/ 
;
if($('.main-slider-text').length > 0){
	$('.main-slider-text').each(function(index){
		var el = $('.main-slider-text').eq(index);
		var speed = 25, step = 2, scroll;

		el.find('.slidein-up, .slidein-down').mousedown(function(){
			var href = $(this).attr('href').split('#');

			if(href[1] == 'up'){
				scroll = window.setInterval(function() {
					el.find('.slidein').scrollTop(el.find('.slidein').scrollTop() - step);
				}, speed);
			}
			else{
				scroll = window.setInterval(function() {
					el.find('.slidein').scrollTop(el.find('.slidein').scrollTop() + step);
				}, speed);
			}
		}).mouseup(function() {
			if (scroll) {
				window.clearInterval(scroll);
				scroll = false;
			}
		});
		
		el.find('.slidein-up, .slidein-down').bind('click', function(){
			return false;
		});
	});
}
