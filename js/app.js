var logoOffset = jQuery('.main-container .logo').offset().top;

jQuery(document).ready(function($){
  // scroll nav
  showNav();
  $(window).on('scroll', function(event) {
    showNav();
  });

  // mobile menu
  $('.mobile-menu').click(function(){
    $(this).toggleClass('active');
  });

  // scroll link functionality
  $(".scroll-link").click(function() {
    var target = $(this).attr('href');
    var scrollPoint = $('#' + target).offset().top - 60;
    $('.mobile-menu').removeClass('active');
    $('html, body').animate({
        scrollTop: scrollPoint
    }, 1500, function(){
    });
    return false;
  });

  // testimonials slideshow
  $('.testimonial-container').flickity({
    pageDots: false,
    cellSelector: '.single-testimonial',
    wrapAround: true,
    contain: true
  });
});

function showNav(){
  if($(window).scrollTop() >= logoOffset){
    if($('nav').hasClass('active')){
      return;
    } else {
      $('nav').addClass('active');
    }
  } else {
    $('nav, .mobile-menu').removeClass('active');
  }
}