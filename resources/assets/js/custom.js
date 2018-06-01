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


$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});

$('#dropdown01').on('click', function () {
  $('li.dropdown-submenu ul.dropdown-menu').removeClass('show');
});