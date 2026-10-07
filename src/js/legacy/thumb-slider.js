(function ($) {
  function bindThumbSlider($slider, $thumbs, activeClass, slickOptions) {
    $slider.slick(slickOptions);

    $slider.on('afterChange', function (event, slick, currentSlide) {
      $thumbs.removeClass(activeClass);
      $thumbs.eq(currentSlide).addClass(activeClass);
    });

    $thumbs.on('click', function () {
      $slider.slick('slickGoTo', $(this).data('slide'));
    });
  }

  function initGalleryThumbSliders() {
    $('.js-hasThumbSlider').each(function () {
      var $slider = $(this);
      var $scope = $slider.closest('section, .p-modelHouse__overview__gallery').first();
      var $thumbs = $scope.find('.c-hasThumbSlider__thumbnail__item');

      bindThumbSlider($slider, $thumbs, 'c-hasThumbSlider__active', {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: '<div class = "c-hasThumbSlider__prev"></div>',
        nextArrow: '<div class = "c-hasThumbSlider__next"></div>',
      });
    });
  }

  function initLocationThumbSliders() {
    $('.js-commonSlick').each(function () {
      var $slider = $(this);
      var $thumbs = $slider.closest('.p-location__content').find('.p-location__thumb__item');

      bindThumbSlider($slider, $thumbs, 'p-location__thumb__active', {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1300,
        arrows: false,
      });
    });
  }

  initGalleryThumbSliders();

  window.addEventListener('load', function () {
    initLocationThumbSliders();
  });
})(jQuery);
