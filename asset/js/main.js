!function(e){"use strict";function a(){if(e(".main-header").length){var a=e(window).scrollTop(),t=e(".main-header"),n=e(".scroll-to-top");a>=1?(t.addClass("fixed-header"),n.fadeIn(300)):(t.removeClass("fixed-header"),n.fadeOut(300))}}if(a(),e(".main-header li.dropdown ul").length&&(e(".main-header li.dropdown").append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>'),e(".main-header li.dropdown .dropdown-btn").on("click",(function(){e(this).prev("ul").slideToggle(500)})),e(".main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a").on("click",(function(e){e.preventDefault()})),e(".header-style-three .nav-toggler").on("click",(function(){e(".header-style-three .main-menu").fadeToggle(300)}))),e(".main-header .header-upper .option-box .nav-btn").length&&(e(".main-header .header-upper .option-box .nav-btn").on("click",(function(a){a.preventDefault(),e("body").addClass("appointment-form-visible")})),e(".appointment-box .inner-box .cross-icon,.form-back-drop").on("click",(function(a){a.preventDefault(),e("body").removeClass("appointment-form-visible")}))),e(".progress-line").length&&e(".progress-line").appear((function(){var a=e(this),t=a.data("width");e(a).css("width",t+"%")}),{accY:0}),e(".accordion-box").length&&e(".accordion-box").on("click",".acc-btn",(function(){var a=e(this).parents(".accordion-box"),t=e(this).parents(".accordion");if(!0!==e(this).hasClass("active")&&e(a).find(".accordion .acc-btn").removeClass("active"),e(this).next(".acc-content").is(":visible"))return!1;e(this).addClass("active"),e(a).children(".accordion").removeClass("active-block"),e(a).find(".accordion").children(".acc-content").slideUp(300),t.addClass("active-block"),e(this).next(".acc-content").slideDown(300)})),e(".main-slider-carousel").length&&e(".main-slider-carousel").owlCarousel({animateOut:"fadeOut",animateIn:"fadeIn",loop:!0,margin:0,nav:!0,autoHeight:!0,autoplayHoverPause:!0,smartSpeed:500,autoplay:6e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},600:{items:1},800:{items:1},1024:{items:1},1200:{items:1}}}),e(".area-carousel").length&&e(".area-carousel").owlCarousel({animateOut:"fadeOut",animateIn:"fadeIn",loop:!1,margin:10,nav:!0,autoHeight:!0,smartSpeed:500,autoplay:6e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},600:{items:2},800:{items:2},1024:{items:2},1200:{items:2},1400:{items:3},1500:{items:3},1600:{items:4}}}),e(".two-item-carousel").length&&e(".two-item-carousel").owlCarousel({animateOut:"fadeOut",animateIn:"fadeIn",loop:!0,margin:0,nav:0,smartSpeed:500,autoplay:6e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},600:{items:1},800:{items:2},1024:{items:2},1200:{items:2}}}),e(".services-carousel").length&&e(".services-carousel").owlCarousel({animateOut:"fadeOut",animateIn:"fadeIn",loop:!0,margin:6,nav:!0,smartSpeed:500,autoplay:6e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},400:{items:2},600:{items:2},800:{items:2},1024:{items:2},1200:{items:2}}}),e(".tabs-box").length&&e(".tabs-box .tab-buttons .tab-btn").on("click",(function(a){a.preventDefault();var t=e(e(this).attr("data-tab"));if(e(t).is(":visible"))return!1;t.parents(".tabs-box").find(".tab-buttons").find(".tab-btn").removeClass("active-btn"),e(this).addClass("active-btn"),t.parents(".tabs-box").find(".tabs-content").find(".tab").fadeOut(0),t.parents(".tabs-box").find(".tabs-content").find(".tab").removeClass("active-tab"),e(t).fadeIn(300),e(t).addClass("active-tab")})),e(".sticky-box").length)new StickySidebar(".business-section .title-column .inner-column",{topSpacing:80,bottomSpacing:0,containerSelector:".sticky-container",innerWrapperSelector:".sticky-box"});function t(){if(e(".sortable-masonry").length){var a=e(window),t=e(".sortable-masonry .items-container"),n=e(".filter-btns");t.isotope({filter:"*",masonry:{columnWidth:".masonry-item.col-lg-3"},animationOptions:{duration:500,easing:"linear"}}),n.find("li").on("click",(function(){var a=e(this).attr("data-filter");try{t.isotope({filter:a,animationOptions:{duration:500,easing:"linear",queue:!1}})}catch(e){}return!1})),a.bind("resize",(function(){var e=n.find("li.active").attr("data-filter");t.isotope({filter:e,animationOptions:{duration:500,easing:"linear",queue:!1}})}));var s=e(".filter-btns li");s.on("click",(function(){var a=e(this);a.hasClass("active")||(s.removeClass("active"),a.addClass("active"))}))}}(e(".testimonial-carousel").length&&e(".testimonial-carousel").owlCarousel({loop:!0,margin:35,nav:!0,smartSpeed:500,autoplay:5e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},600:{items:1},800:{items:2},1024:{items:2},1200:{items:2}}}),e(".count-box").length&&e(".count-box").appear((function(){var a=e(this),t=a.find(".count-text").attr("data-stop"),n=parseInt(a.find(".count-text").attr("data-speed"),10);a.hasClass("counted")||(a.addClass("counted"),e({countNum:a.find(".count-text").text()}).animate({countNum:t},{duration:n,easing:"linear",step:function(){a.find(".count-text").text(Math.floor(this.countNum))},complete:function(){a.find(".count-text").text(this.countNum)}}))}),{accY:0}),e(".gallery-carousel").length&&e(".gallery-carousel").owlCarousel({loop:!0,margin:50,nav:!0,autoHeight:!0,smartSpeed:500,autoplay:5e3,navText:['<span class="flaticon-left-arrow"></span>','<span class="flaticon-next-1"></span>'],responsive:{0:{items:1},600:{items:1},800:{items:1},1024:{items:1},1200:{items:1}}}),e(".single-item-carousel").length&&e(".single-item-carousel").owlCarousel({loop:!0,margin:0,nav:!0,smartSpeed:500,autoplay:5e3,navText:['<span class="flaticon-left-arrow"></span>','<span class="flaticon-next-1"></span>'],responsive:{0:{items:1},600:{items:1},800:{items:1},1024:{items:1},1200:{items:1},1600:{items:1},1920:{items:1}}}),e(".testimonial-carousel-two").length&&e(".testimonial-carousel-two").owlCarousel({loop:!0,margin:0,nav:!0,smartSpeed:500,autoplay:5e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},600:{items:1},800:{items:1},1024:{items:1},1200:{items:1},1600:{items:1},1920:{items:1}}}),e(".sponsors-carousel").length&&e(".sponsors-carousel").owlCarousel({loop:!0,margin:30,nav:!0,smartSpeed:500,autoplay:4e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},480:{items:2},600:{items:3},800:{items:4},1024:{items:6}}}),e(".three-item-carousel").length&&e(".three-item-carousel").owlCarousel({loop:!0,margin:30,nav:!0,smartSpeed:500,autoplay:4e3,navText:['<span class="fa fa-angle-left"></span>','<span class="fa fa-angle-right"></span>'],responsive:{0:{items:1},480:{items:2},600:{items:2},800:{items:3},1024:{items:3}}}),t(),e(".custom-select-box").length&&e(".custom-select-box").selectmenu().selectmenu("menuWidget").addClass("overflow"),e(".filter-list").length&&e(".filter-list").mixItUp({}),e(".lightbox-image").length&&e(".lightbox-image").fancybox({openEffect:"fade",closeEffect:"fade",helpers:{media:{}}}),e("#contact-form").length&&e("#contact-form").validate({rules:{firstname:{required:!0},email:{required:!0,email:!0},message:{required:!0}}}),e(".scroll-to-target").length&&e(".scroll-to-target").on("click",(function(){var a=e(this).attr("data-target");e("html, body").animate({scrollTop:e(a).offset().top},1500)})),e(".wow").length)&&new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0}).init();e(window).on("scroll",(function(){a()})),e(window).on("load",(function(){e(".preloader").length&&e(".preloader").delay(200).fadeOut(500),t()}))}(window.jQuery);