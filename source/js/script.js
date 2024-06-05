// @codekit-prepend "extern/swiper-min.js"
// @codekit-prepend "extern/bootstrap.bundle.min.js"
// @codekit-prepend "extern/jquery.justifiedGallery.js"
// @codekit-prepend "extern/jquery.fancybox.js"
// @codekit-prepend "extern/inview.js"
// @codekit-prepend "extern/anchorscroll.js"

jQuery(document).ready(function($) {

	// CLICK FUNCTIES +++++++++++++++++++++++++++ //

	// Hamburger toggle
	$('.hamburger').on("click", function() {
		$(this).toggleClass("actief");
		$('.nav-mobile-menu').toggleClass("actief");
	});

	// Remove 'actief' class when a link in the mobile menu is clicked
	$('.nav-mobile-menu a').on("click", function() {
		$('.hamburger').removeClass("actief");
		$('.nav-mobile-menu').removeClass("actief");
	});

	// SCROLL FUNCTIES ++++++++++++++++++++++++++ //

	// Back to top -----------
	$('.backtotop').click(function(){$("html, body").animate({ scrollTop: 0 }, 600);return false;});
	$(window).scroll(function() {var scroll = $(window).scrollTop();
		if ($(window).scrollTop() > 400) {$(".backtotop").addClass("toon");}
	   else if ($(window).scrollTop() <= 400) {$(".backtotop").removeClass("toon"); }
	});

	// VASTE VENDORS +++++++++++++++++++++++++++ //

	// Toewijzen justified gallery -----------
	if ($(".acf-justigal")[0]){ $(".acf-justigal").justifiedGallery(); }

	// CUSTOM SCRIPTS KOMEN HIER ONDER --------------------------------------------------------------------------//
	//-----------------------------------------------------------------------------------------------------------//

	//swiper-heroe --------------------------------------
	const swiper = new Swiper('.swiper-heroe', {
		autoplay: false,
		speed: 300,
		autoHeight: false,
		grabCursor: true,
		loop: false,
		watchOverflow: true,
		centeredSlides: false,
		slidesOffsetBefore: 0,
		slidesOffsetAfter: 0,
		direction: 'horizontal',
		effect: 'slide', // 'slide', 'fade', 'cube', 'coverflow' or 'flip'
		breakpoints: { // breakpoints gelden voor alles erboven
			0: { 
				slidesPerView: 1,
				spaceBetween: 0
			},
			767: {
				slidesPerView: 1,
				spaceBetween: 0
			},
			992: {
				slidesPerView: 1,
				spaceBetween: 0
			}
		},	
		navigation: {
			nextEl: '.heroe-next',
			prevEl: '.heroe-prev',
		},
	});

	//swiper-heroe --------------------------------------
	const swiper_2 = new Swiper('.swiper-home', {
		autoplay: {delay: 5000,},
		speed: 1000,
		autoHeight: false,
		grabCursor: true,
		loop: true,
		watchOverflow: true,
		centeredSlides: false,
		slidesOffsetBefore: 0,
		slidesOffsetAfter: 0,
		direction: 'horizontal',
		effect: 'slide', // 'slide', 'fade', 'cube', 'coverflow' or 'flip'
		breakpoints: { // breakpoints gelden voor alles erboven
			0: { 
				slidesPerView: 1,
				spaceBetween: 0
			},
			767: {
				slidesPerView: 1,
				spaceBetween: 0
			},
			992: {
				slidesPerView: 1,
				spaceBetween: 0
			}
		},	
		navigation: {
			nextEl: '.home-next',
			prevEl: '.home-prev',
		},
	});
	

});