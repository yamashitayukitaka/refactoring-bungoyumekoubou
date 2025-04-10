(function($){ 
  /*画像がすべて読み込まれた後に実行させないと
  サムネイルクリックイベントが正しく実行されなかった 
  */
  window.onload = function() {
    var $slider = $('.js-commonSlick').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1300,
      arrows: true,
      // prevArrow: '<div class="c-hasThumbSlider__prev"></div>',
      // nextArrow: '<div class="c-hasThumbSlider__next"></div>',
    });

    // 現在のスライドに対応するサムネイルにクラスを付与
    $slider.on('afterChange', function(event, slick, currentSlide) {
      $('.p-location__thumb__item').removeClass('p-location__thumb__active');
      $('.p-location__thumb__item[data-slide="' + currentSlide + '"]').addClass('p-location__thumb__active');
    });

    // サムネイルクリックイベント
    $('.p-location__thumb__item').click(function() {
      var slideIndex = $(this).data('slide');
      $slider.slick('slickGoTo', slideIndex);
    });
  };

// 田村追加
  setTimeout(function() {
    $('.top_Slider').slick({ //{}を入れる
      fade: true,
      autoplay: true,
      speed: 1500,
      autoplaySpeed : 4000,
      pauseOnFocus: false,
      pauseOnHover: false,
      arrows: false,
    });
  }, 2000); 
  setTimeout(function() {
    $('.service_slider').slick({ //{}を入れる
      fade: true,
      autoplay: true,
      speed: 1500,
      autoplaySpeed : 4000,
      pauseOnFocus: false,
      pauseOnHover: false,
      arrows: false,
    });
  }, 2000); 

})(jQuery);