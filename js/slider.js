jQuery(function(){
  jQuery('.p-top-visual--slider').slick({
    fade: true,
    accessibility: true,
    autoplay: true,
    arrows: true,
    pauseOnHover: false,
    autoplaySpeed: 2000,
    speed: 3500,
    lazyLoad: true,
    pauseOnFocus: false,
    prevArrow: '<i class="fas fa-chevron-left p-top-visual--slider-arrow p-top-visual--slider-arrow__prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right p-top-visual--slider-arrow p-top-visual--slider-arrow__next"></i>',
  });
});
