var windowHeight = $(window).height();
var balloonsHeight = $('.balloons img').height();

$(document).ready(function(){
  $('.container').css('min-height', windowHeight + 'px');

  $('.open-link').click(function(e){
    e.preventDefault();
    if($('body').not('open')){
      $('body').addClass('open');

      $('.balloons').animate({
        top: '-' + balloonsHeight + 'px'
      }, 2000);
    }
    return false;
  });

});