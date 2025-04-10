(function($){ 
  setTimeout(function() {
    //$('.p-top__mv__sliderItem').eq(0).addClass('u-scale');
    $('.js-comSlider').slick({ //{}を入れる
      autoplay: true, //「オプション名: 値」の形式で書く
      dots: false, //複数書く場合は「,」でつなぐ
      slidesToShow:1,
      arrows:false,
      autoplaySpeed: 8000,
      fade: true, // フェードインアニメーションを有効にする
      pauseOnHover:true,
    });
     // $('.js-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
      ////$('.p-top__mv__sliderItem').eq(currentSlide).removeClass('u-scale');
      //$('.p-top__mv__sliderItem').eq(nextSlide).addClass('u-scale');
    //});
  }, 2000); 
})(jQuery);