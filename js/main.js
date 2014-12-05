$(document).ready(function(){
  var bodyOffset = $('body').offset().top;
  var headerHeight = $('header').height();

  $(window).scroll(function(){
    if($('header').hasClass('scroll')){
      if($('header').offset().top <= $('header').height()){
        $('header').removeClass('scroll');
      }
      return;
    } 
    if($('header').offset().top > $('header').height()){
      $('header').addClass('scroll');
    }
  });
});