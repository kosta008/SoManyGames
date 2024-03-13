jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       0,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

// scroll
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 0) {
      jQuery('#scroll-top').fadeIn();
    } else {
      jQuery('#scroll-top').fadeOut();
    }
  });
  jQuery(window).on("scroll", function () {
    document.getElementById("scroll-top").style.display = "block";
  });
  jQuery('#scroll-top').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
  });

  creative_one_page_MobileMenuInit();

  creative_one_page_search_focus();
});

(function( $ ) {

  $(window).scroll(function(){
    var sticky = $('.sticky-header'),
    scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed-header');
    else sticky.removeClass('fixed-header');
  });

})( jQuery );

// preloader
jQuery(function($){
  setTimeout(function(){
    $("#loader-wrapper").delay(1000).fadeOut("slow");
  });
});

function creative_one_page_MobileMenuInit() {

  /* First and last elements in the menu */
  var creative_one_page_firstTab = jQuery('.main-menu-navigation ul:first li:first a');
  var creative_one_page_lastTab  = jQuery('a.closebtn'); /* Cancel button will always be last */

  jQuery(".mobiletoggle").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').addClass("noscroll");
    creative_one_page_firstTab.focus();
  });

  jQuery("a.closebtn").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').removeClass("noscroll");
    jQuery(".mobiletoggle").focus();
  });

  /* Redirect last tab to first input */
  creative_one_page_lastTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('noscroll'))
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      creative_one_page_firstTab.focus();
    }
  });

  /* Redirect first shift+tab to last input*/
  creative_one_page_firstTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('noscroll'))
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      creative_one_page_lastTab.focus();
    }
  });

  /* Allow escape key to close menu */
  jQuery('.sidebar').on('keyup', function(e){
    if (jQuery('body').hasClass('noscroll'))
    if (e.keyCode === 27 ) {
      jQuery('body').removeClass('noscroll');
      creative_one_page_lastTab.focus();
    };
  });
}

function creative_one_page_search_focus() {

  /* First and last elements in the menu */
  var creative_one_page_search_firstTab = jQuery('.serach_inner input[type="search"]');
  var creative_one_page_search_lastTab  = jQuery('button.search-close'); /* Cancel button will always be last */

  jQuery(".search-open").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').addClass("search-focus");
    creative_one_page_search_firstTab.focus();
  });

  jQuery("button.search-close").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery('body').removeClass("search-focus");
    jQuery(".search-open").focus();
  });

  /* Redirect last tab to first input */
  creative_one_page_search_lastTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('search-focus'))
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      creative_one_page_search_firstTab.focus();
    }
  });

  /* Redirect first shift+tab to last input*/
  creative_one_page_search_firstTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('search-focus'))
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      creative_one_page_search_lastTab.focus();
    }
  });

  /* Allow escape key to close menu */
  jQuery('.serach_inner').on('keyup', function(e){
    if (jQuery('body').hasClass('search-focus'))
    if (e.keyCode === 27 ) {
      jQuery('body').removeClass('search-focus');
      creative_one_page_search_lastTab.focus();
    };
  });
}


jQuery('document').ready(function(){
  var owl = jQuery('#home-services .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 5000,
    dots:true,
    loop:false,
    autoplayHoverPause:true,
    navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      },
      1100: {
        items: 3
      },
      1201: {
        items: 3
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});


jQuery(document).ready(function () {
  jQuery( ".tablinks" ).first().addClass( "active" );
});

function creative_one_page_category_tab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  jQuery('#'+ cityName).show()
  evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
  jQuery('.tabcontent').hide();
  jQuery('.tabcontent:first').show();
});