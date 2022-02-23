
 /* jQuery Pre loader
  -----------------------------------------------*/
$(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets
});


$(document).ready(function() {

  /* Hide mobile menu after clicking on a link
    -----------------------------------------------*/
    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });

let ubicacion = window.pageYOffset;
window.onscroll = function(){
  let despla_act = window.pageYOffset;
  if(ubicacion >= despla_act){
    $(".navbar").collapse('show');
      $(".navbar-collapse").collapse('hide');
  //  document.getElementById('navbar').style.t op = '0';
  }
  else{
      $(".navbar").collapse('show');
    $(".navbar-collapse").collapse('hide');
  //  document.getElementById('navbar').style.top = '-100px';
  }
  ubicacion = despla_act;
}

  /* Smoothscroll js
  -----------------------------------------------*/
    $(function() {
        $('.navbar-default a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 49
            }, 1000);
            event.preventDefault();
        });
    });


 /* Home Slideshow Vegas
  -----------------------------------------------*/
  $(function() {
    $('body').vegas({
        slides: [
            { src: 'images/LETRERO.jpg' },
            { src: 'images/LIBRETA.jpg' },
            { src: 'images/tasa.jpg' }
        ],
        timer: false,
        transition: [ 'zoomIn','fade','faed2','swirlLeft','swirlLeft2','swirlRight','swirlRight2','blur','blur2'],
        animation: ['kenburns','kenburnsUp','kenburnsDown','kenburnsDown','kenburnsLeft','kenburnsRight','kenburnsUpLeft','kenburnsUpRight','kenburnsDownLeft','kenburnsDownRight']
    });
  });


  /* Team carousel
  -----------------------------------------------*/
  $(document).ready(function() {
      $("#team-carousel").owlCarousel({
          items : 3,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3],
          slideSpeed: 300,
          itemsDesktop : [1199,2],
          itemsTablet: [768,1],
          itemsTabletSmall: [985,2],
          itemsMobile : [479,1],
      });
    });


    /* Back to Top
    -----------------------------------------------*/
    $(window).scroll(function() {
      if ($(this).scrollTop() > 200) {
          $('.go-top').fadeIn(200);
            } else {
                $('.go-top').fadeOut(200);
           }
        });
          // Animate the scroll to top
        $('.go-top').click(function(event) {
          event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
    });


  /* wow
  -------------------------------*/
  new WOW({ mobile: false }).init();

  });
