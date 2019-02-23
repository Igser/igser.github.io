$(document).ready(function() {
	$("#catalog-link").click(function() {
		$(".hamburger").toggleClass('is-active');
		$(".submenu-wrap").slideToggle();
	});

	//SLIDERS
	$('.slider-main').slick({
		fade: true,
 		cssEase: 'linear',
 		autoplay: true,
		prevArrow: '<div class="slick-prev arrows-2"></div>',
	  	nextArrow: '<div class="slick-next arrows-2"></div>'
	});

	$('.carousel__brands').slick({
		 prevArrow: '<div class="slick-prev arrows-1"></div>',
	  	 nextArrow: '<div class="slick-next arrows-1"></div>',
		 slidesToShow: 6,
 		 slidesToScroll: 1,
 		 responsive: [
 		 	{
 		 		breakpoint: 1220,
 		 		settings: {
 		 			slidesToShow: 5
 		 		}
 		 	},
 		 	{
 		 		breakpoint: 920,
 		 		settings: {
 		 			slidesToShow: 3
 		 		}
 		 	},
 		 	{
 		 		breakpoint: 550,
 		 		settings: {
 		 			slidesToShow: 2
 		 		}
 		 	},
 		 	{
 		 		breakpoint: 400,
 		 		settings: {
 		 			slidesToShow: 1
 		 		}
 		 	}
 		 ]
	});

	$('.compare-slider').slick({
		prevArrow: '<div class="slick-prev arrows-2"></div>',
	  	nextArrow: '<div class="slick-next arrows-2"></div>',
		slidesToShow: 3,
 		slidesToScroll: 1,
 		responsive: [
 			{
 				breakpoint: 1220,
 				settings: {
 					slidesToShow: 2
 				}
 			},
 			{
 				breakpoint: 920,
 				settings: {
 					slidesToShow: 1
 				}
 			}
 		]
	});

	$('.slider-content').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.slider-thumbs'
	});
	$('.slider-thumbs').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  asNavFor: '.slider-content',
	  prevArrow: '<div class="slick-prev arrows-3"></div>',
	  nextArrow: '<div class="slick-next arrows-3"></div>',
	  focusOnSelect: true
	});

	$('.carousel-product').slick({
		prevArrow: '<div class="slick-prev arrows-3"></div>',
	  	nextArrow: '<div class="slick-next arrows-3"></div>',
		slidesToShow: 4,
 		slidesToScroll: 1,
 		responsive: [
 			{
 				breakpoint: 1220,
 				settings: {
 					slidesToShow: 3
 				}
 			},
 			{
 				breakpoint: 920,
 				settings: {
 					slidesToShow: 2
 				}
 			},
 			{
 				breakpoint: 620,
 				settings: {
 					slidesToShow: 1
 				}
 			}
 		]
	})

	//FILTER
	$('.filter__box-header').click(function(){
		$(this).toggleClass('active').parent().find('.filter__box-body').slideToggle();
	});

	//FILTER MOBILE
	$('.filter-toggle').click(function(){
		$('.filter-box-wrap').slideToggle(function(){
			if ( $(this).css('display') === 'none' ) {
				$(this).removeAttr('style');
			}
		});
	});

	$('.filter-inner').mCustomScrollbar();

	//filter slider
	$('#filterPrice1').change(function() {
		var val = $(this).val();
		$('#slider').slider('values',0,val);
	});
	$('#filterPrice2').change(function() {
		var val = $(this).val();
		$('#slider').slider('values',1,val);
	});
	$("#slider").slider({
		values: [5000, 40000],
		min:0,
		max:50000,
		step:1000,
		range:true,
		slide: function( event, ui ) {
			$("#filterPrice1").val(ui.values[0]);
			$("#filterPrice2").val(ui.values[1]);
		}
	});
	$("#filterPrice1").val($('#slider').slider( "values",0 ));
	$("#filterPrice2").val($('#slider').slider( "values",1 ));

	//MOBILE MENU 
	$('.toggle-btn').click(function(){
		$('.top-bar-menu').css('left','0');
		$('body').addClass('menu');
	});
	$('.mobile-toggle').click(function(){
		$('.top-bar-menu').css('left','');
		$('body').removeClass('menu');
	});

	//FILE UPLOAD
	$('.file-upload input[type="file"]').change(function() {
		var filename = $(this).val().replace(/.*\\/, "");
		$('#filename').val(filename).css('height','20');
	});

	//top
	$('.q-wrap a').click(function(){
		var target = $(this).attr('href');
		$('html, body').animate({scrollTop:$(target).offset().top}, 500);
		return false;
	});

	$('.promo-cart-btn').click(function() {
		$('.form-promo').slideToggle();
	});

	$('.btn-edit').click(function(e){
		e.preventDefault();
		$(this).css('display','none').parents('.input-box').find('.data').removeAttr('disabled').focus().toggleClass('active');
		$(this).parents('.input-box').find('.btn-check').css('display','block');
	});
	$('.btn-check').click(function(e){
		e.preventDefault();
		$(this).css('display','none').parents('.input-box').find('.data').attr('disabled', 'disabled').blur().removeClass('active');
		$(this).parents('.input-box').find('.btn-edit').css('display','');
	});

	$(".sidebar-result").stick_in_parent({
    	offset_top: 15
    });

	$(".step-next").click(function(){
    	$(this).parents(".checkout-block").next().find(".checkout-inner").slideToggle();
    });

	//Tabs
    $('ul.tabs-list').on('click', 'li:not(.current)', function() {
        $(this).addClass('current').siblings().removeClass('current')
            .parents('div.tabs-wrap').find('div.box').eq($(this).index()).fadeIn(100).addClass('box-visible').siblings('div.box').hide().removeClass('box-visible');
    });

    $('.all-link').click(function(e) {
    	e.preventDefault();
    	$(this).css('display','none');
    	$('.product-details-hidden').slideToggle();
    });

    //MAP
    if ( $('#map').length ) {
		ymaps.ready(init);
		var myMap;

		function init(){     
	   	 	myMap = new ymaps.Map("map", {
	        center: [55.76212503372229,37.621406354492194],
	        zoom: 11
	    });
	    myMap.behaviors.disable('scrollZoom');
	   }
	}

});



