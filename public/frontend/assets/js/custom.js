/*=========================================
* Header Sticky
* Mobile Menu
* Menu Bar Popup Icon
* Search Icon Popup
* Sidebar Popup
* Item Active Hover
* Team Active Hover
* CounterUp
* Video Popup
* Image Popup
* Preloader
* Team Slider
* Testimonial One Slider
* Testimonial Two Slider
* WOW
* Scroll To Top
=========================================*/
(function ($) {
	"use strict"
	///=============  * Header Sticky  =============\\\
	let header = document.querySelector('.header__sticky');
	if (header) {
		window.addEventListener('scroll', () => {
			if (window.scrollY > 200) {
			header.classList.add('sticky-menu');
			} else {
			header.classList.remove('sticky-menu');
			}
		});
	}
	

	///=============  * Mobile Menu  =============\\\
	document.addEventListener("DOMContentLoaded", function() {
		var mobileMenu = document.getElementById("mobilemenu");
		var mainMenu = document.querySelector(".vertical_menu");
		var clonedMenu = mobileMenu.cloneNode(true);
		mainMenu.appendChild(clonedMenu);
	});
	jQuery(document).ready(function($) {
		$('.vertical_menu ul li.menu-item-has-children').append('<span class="mobile-arrows far fa-plus"></span>');

		$(".vertical_menu .mobile-arrows").click(function() {
			$(this).parent().find('ul:first').slideToggle(300);
			$(this).toggleClass('is-open');
		});
	});

	///=============  * Menu Bar Popup Icon  =============\\\
	$('.menu__bar i').on("click", function() {
		$(this).toggleClass('clicked');
		$('.menu__bar-popup').toggleClass('show');
		$('.menu__bar-popup-overlay').addClass('show');
	});	  
	$('.menu__bar-popup .close').on("click", function() {
		$('.menu__bar i').removeClass('clicked');
		$('.menu__bar-popup').removeClass('show');
		$('.menu__bar-popup-overlay').removeClass('show');
	});

    ///=============  * Search Icon Popup  =============\\\
	$(".header-one__right-search-box").hide();
	$(".header-one__right-search-icon.open").on("click", function () {
    $(".header-one__right-search-box")
        .fadeIn()
        .addClass("active");
	});
	$(".header-one__right-search-box-icon i").on("click", function () {
		$(".header-one__right-search-box")
        .fadeOut()
        .removeClass("active");
	});

	///=============  * Sidebar Popup  =============\\\
	$(document).on("click", ".header-one__right-sidebar-popup-icon", function () {
		$('.header-one__right-sidebar-popup').addClass('active');
		$('.sidebar-overlay').addClass('show');
	});
	$(document).on("click", ".header-one__right-sidebar-popup .sidebar-close-btn", function () {
		$('.header-one__right-sidebar-popup').removeClass('active');
		$('.sidebar-overlay').removeClass('show');
	});

	///============= * Item Active Hover  =============\\\
	$(document).on("mouseenter", ".active_hover", function () {
		$(".active_hover").removeClass("active");
		$(this).addClass("active");
	});

	///============= * Team Active Hover  =============\\\
	$(document).on("mouseenter", ".team_active_hover", function () {
		$(".team_active_hover").removeClass("active");
		$(this).addClass("active");
	});

	///=============  * CounterUp  =============\\\
	var counter = $('.counter');
	counter.counterUp({
		time: 2500,
		delay: 100
	});

	///=============  * Video Popup  =============\\\
	$('.video-popup').magnificPopup({
		type: 'iframe'
	});

	///=============  * Image Popup  =============\\\
	$('.img-popup').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

    ///=============  * Preloader  =============\\\
	$(document).ready(function () {
		$('#container').addClass('loaded');
		if ($('#container').hasClass('loaded')) {
			$('#preloader').delay(1000).queue(function () {
				$(this).remove();
			});
		}
	});

	/*========== Portfolio One Active Hover  ==========*/
	$('.services__one-list a:nth-child(2)').addClass('active').siblings().removeClass('active');

	$('.services__one-list-item').on('mousemove', function (e) {
		var service_id = $(this).data("service");
		$('.services__one-right-image.item-' + service_id).addClass('active').siblings().removeClass('active');
	});

	$('.services__one-list-item').on('mousemove', function (e) {
		var service_id = $(this).data("service");
		$('.services__one-list a:nth-child(' + service_id + ')').addClass('active').siblings().removeClass('active');
	});	
	
	///=============  * Team Slider  =============\\\
	$(document).ready(function () {
		var swiper = new Swiper(".team_slider", {
			spaceBetween: 30,
			slidesPerView: 3,
			speed: 2000,
			loop: true,
			autoplay: {
				delay: 4500,
				reverseDirection: false,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".team_pagination",
				clickable: true,
			},
			breakpoints: {
				0: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 2,
				},
				1200: {
					slidesPerView: 3,
				},
			}
		});
	});

	///=============  * Testimonial One Slider  =============\\\
	$(document).ready(function () {
		var swiper = new Swiper(".testimonial_slider", {
			loop: true,
			spaceBetween: 30,
			slidesPerView: 1,
			speed: 2000,
			loop: true,
			navigation: {
				nextEl: '.testimonial_next',
				prevEl: '.testimonial_prev',
			},
			autoplay: {
				delay: 4500,
				reverseDirection: false,
				disableOnInteraction: false,
			},
		});
	});

	///=============  * Testimonial Two Slider  =============\\\
	$(document).ready(function () {
		var swiper = new Swiper(".testimonial_slider_two", {
			loop: true,
			spaceBetween: 30,
			slidesPerView: 2,
			speed: 2000,
			loop: true,
			pagination: {
				el: ".testimonial_pagination",
				clickable: true,
			},
			autoplay: {
				delay: 4500,
				reverseDirection: false,
				disableOnInteraction: false,
			},
			breakpoints: {
				0: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 1,
				},
				992: {
					slidesPerView: 2,
				},
			},
		});
	});

    ///=============  * WOW  =============\\\
	new WOW().init();

    ///=============  * Blog Hover  =============\\\
	document.addEventListener("DOMContentLoaded", function () {
		const blogItems = document.querySelectorAll(".blog__two-item");
		if (blogItems.length > 0) {
			blogItems.forEach(item => {
				const titleLinks = item.querySelectorAll(".mouseover");
				if (titleLinks.length > 0) {
					titleLinks.forEach(link => {
						link.addEventListener("mouseover", function () {
							item.classList.add("active");
						});
						link.addEventListener("mouseout", function () {
							item.classList.remove("active");
						});
					});
				}
			});
		}
	});	

    ///=============  * Scroll To Top  =============\\\
	var scrollPath = document.querySelector(".scroll-up path");
	var pathLength = scrollPath.getTotalLength();
	scrollPath.style.transition = scrollPath.style.WebkitTransition = "none";
	scrollPath.style.strokeDasharray = pathLength + " " + pathLength;
	scrollPath.style.strokeDashoffset = pathLength;
	scrollPath.getBoundingClientRect();
	scrollPath.style.transition = scrollPath.style.WebkitTransition = "stroke-dashoffset 10ms linear";
	var updatescroll = function () {
		var scroll = $(window).scrollTop();
		var height = $(document).height() - $(window).height();
		var scroll = pathLength - (scroll * pathLength) / height;
		scrollPath.style.strokeDashoffset = scroll;
	};
	updatescroll();
	$(window).scroll(updatescroll);
	var offset = 50;
	var duration = 950;
	jQuery(window).on("scroll", function () {
		if (jQuery(this).scrollTop() > offset) {
			jQuery(".scroll-up").addClass("active-scroll");
		}
		else {
			jQuery(".scroll-up").removeClass("active-scroll");
		}
	});	
	jQuery(".scroll-up").on("click", function (event) {
	  	event.preventDefault();
	  	jQuery("html, body").animate(
			{ scrollTop: 0, } , duration
		);
	  	return false;
	});
})(jQuery);