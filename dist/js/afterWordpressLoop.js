(function($) {
  setTimeout(function() {
    $('.js-worksSlider').slick({
      autoplay: true, // 「オプション名: 値」の形式で書く
      dots: false, // 複数書く場合は「,」でつなぐ
      slidesToShow: 1,
      arrows: false,
      fade: true,
      autoplaySpeed: 3000,
      speed: 2000,
      pauseOnHover: false,
    });
  }, 2000);
})(jQuery);
