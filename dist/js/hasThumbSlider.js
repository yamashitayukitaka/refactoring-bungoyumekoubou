(function($){ 
  var $slider = $('.js-hasThumbSlider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed:5000,
  arrows:true,
  prevArrow:'<div class = "c-hasThumbSlider__prev"></div>',
  nextArrow:'<div class = "c-hasThumbSlider__next"></div>',
});

// 現在のスライドに対応するサムネイルにクラスを付与
$slider.on('afterChange', function(event, slick, currentSlide){
  $('.c-hasThumbSlider__thumbnail__item').removeClass('c-hasThumbSlider__active');
  $('.c-hasThumbSlider__thumbnail__item[data-slide="' + currentSlide + '"]').addClass('c-hasThumbSlider__active');
});

// サムネイルクリックイベント
$('.c-hasThumbSlider__thumbnail__item').click(function(){
  var slideIndex = $(this).data('slide');
  $slider.slick('slickGoTo', slideIndex);
});

})(jQuery);