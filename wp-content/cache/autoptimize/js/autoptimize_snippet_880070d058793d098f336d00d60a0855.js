jQuery(document).ready(function(){if(jQuery(".main-navigation .menu-item-has-children").append('<span class="sub-toggle"> <i class="fa fa-angle-down"></i> </span>'),jQuery(".search-wrap .search-icon").on("click",function(){jQuery(".search-wrap .search-box").toggleClass("active")}),"undefined"!=typeof jQuery.fn.counterUp&&jQuery(".counter").counterUp({delay:10,time:1e3}),jQuery(".main-navigation .sub-toggle").on("click",function(){var a=jQuery(this).parent("li"),b=jQuery(this).closest(".menu").find(".menu-item-has-children");b.not(a).removeClass("mobile-menu--slided").children("ul").slideUp(1e3),a.toggleClass("mobile-menu--slided").children("ul").slideToggle(1e3)}),jQuery(document).ready(function(){jQuery("#scroll-up").hide(),jQuery(function(){jQuery(window).scroll(function(){jQuery(this).scrollTop()>1e3?jQuery("#scroll-up").fadeIn():jQuery("#scroll-up").fadeOut()}),jQuery("a#scroll-up").click(function(){return jQuery("body,html").animate({scrollTop:0},800),!1})})}),jQuery(window).load(function(){var a=jQuery("#masthead-sticky-wrapper").height()-1;jQuery("#site-navigation").onePageNav({currentClass:"current-flash-item",changeHash:!1,scrollSpeed:1500,scrollOffset:a,scrollThreshold:.5,filter:"",easing:"swing"})}),"undefined"!=typeof jQuery.fn.sticky){var a=jQuery("#wpadminbar");a.length?jQuery(".header-sticky .site-header").sticky({topSpacing:a.height()}):jQuery(".header-sticky .site-header").sticky({topSpacing:0})}jQuery("#preloader-background").length>0&&setTimeout(function(){jQuery("#preloader-background").hide()},600);var b=jQuery(".site-header"),c=b.height(),d=jQuery(window).height(),e=jQuery(".tg-slider-widget.full-screen .swiper-container");jQuery("body").hasClass("transparent")?e.css({height:d}):e.css({height:d-c})}),jQuery(window).load(function(){var a=Math.max(window.innerWidth,document.documentElement.clientWidth);if(a&&980>=a&&jQuery(".main-navigation .menu-toggle, .main-navigation a").click(function(){jQuery(".main-navigation .menu").slideToggle("slow")}),"function"==typeof Swiper){jQuery(".tg-section.tg-slider-widget").each(function(a,b){var c=jQuery(this).find(".swiper-container"),d=jQuery(this).find(".swiper-button-next"),e=jQuery(this).find(".swiper-button-prev");f="tgsliderinstance-"+a;var f=new Swiper(c,{paginationClickable:!0,slidesPerView:1,nextButton:d,prevButton:e,autoplay:4e3,speed:1e3,loop:!0});jQuery(this).on("mouseenter",function(){f.stopAutoplay()}),jQuery(this).on("mouseleave",function(){f.startAutoplay()})});new Swiper(".tg-testimonial-widget .swiper-container",{pagination:".swiper-pagination",paginationClickable:!0,paginationClickable:!0,direction:"horizontal",slidesPerView:2,spaceBetween:30,breakpoints:{1024:{slidesPerView:2,spaceBetween:30},768:{slidesPerView:1,spaceBetween:10},640:{slidesPerView:1,spaceBetween:10},320:{slidesPerView:1,spaceBetween:10}}}),new Swiper(".tg-client-widget .swiper-container",{paginationClickable:!0,slidesPerView:4,autoplay:1e3,direction:"horizontal"})}if("function"==typeof jQuery.fn.isotope){var b=jQuery(".grid").isotope({itemSelector:".element-item",layoutMode:"fitRows"}),c={numberGreaterThan50:function(){var a=jQuery(this).find(".number").text();return parseInt(a,10)>50},ium:function(){var a=jQuery(this).find(".name").text();return a.match(/ium$/)}};jQuery(".filters-button-group").on("click","button",function(){var a=jQuery(this).attr("data-filter");a=c[a]||a,b.isotope({filter:a})}),jQuery(".button-group").each(function(a,b){var c=jQuery(b);c.on("click","button",function(){c.find(".is-checked").removeClass("is-checked"),jQuery(this).addClass("is-checked")})})}});