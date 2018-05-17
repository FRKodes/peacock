console.log('ok!');

$('.main-banners-container').slick({
	autoplay: true,
	autoplaySpeed: 4000,
	infinite: true,
	dots: true
});


$('.featured-products-container').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    console.log(scroll);
    $('.sunshine-banner').css('background-position', 'center ' + (scroll*-.15) + 'px');
    $('.back-cow').css('background-position', 'center ' + (scroll*-.06) + 'px');
});
