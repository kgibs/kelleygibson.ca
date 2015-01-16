$(document).ready(function(){
  var bodyOffset = $('body').offset().top;
  var headerHeight = $('header').height();
  var viewportHeight = $(window).height();
  // console.log(viewportHeight/2);


  if(Modernizr.touch){
    $('header').addClass('scroll');
  }

  $(window).scroll(function(){
    if(!Modernizr.touch){
      if($('header').hasClass('scroll')){
        if($('header').offset().top <= $('header').height()){
          $('header').removeClass('scroll');
        }
        return;
      } 
      if($('header').offset().top > $('header').height()){
        $('header').addClass('scroll');
      }            
    }
  });

  //nav click functions
  $('header a').click(function(e){
    var href = $(this).attr('href').substring(1);
    var target = $('#'+href).offset().top;
    e.preventDefault();
    $('a.active').removeClass('active');
    $(this).addClass('active');
    $('body').scrollTo(target-headerHeight, 1000);
  });

  $('.nav-toggle').click(function(e){
    e.preventDefault();
    $('nav').toggleClass('show');
    if($('nav').hasClass('show')){
      $('nav').slideDown();
    } else {
      $('nav').slideUp();   
    }
    return false;
  });
});