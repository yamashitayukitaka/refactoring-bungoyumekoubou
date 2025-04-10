(function($){ 
  $('.js-staffSlider').slick({ //{}を入れる
  infinite: true,
  slidesToShow: 6,
  centerMode: true,   
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed:0, 
  speed:5000,
  cssEase: 'linear', 
  pauseOnHover: false,
  arrows:false,
  dots:false,
  responsive: [
    {
        breakpoint: 1200,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 3,
            infinite: true,
            
        }
    },
    {
      breakpoint:768,
      settings: {
          slidesToShow:3,
          slidesToScroll: 3,
          infinite: true,
      }
    },
    {
      breakpoint:400,
      settings: {
          slidesToShow:2,
          slidesToScroll: 3,
          infinite: true,
      }
    },
  ]
});



$('.js-staffSlider--reverse').slick({ //{}を入れる
  infinite: true,
  slidesToShow:6,
  centerMode: true,   
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed:0, 
  speed:5000,
  cssEase: 'linear', 
  pauseOnHover: false,
  rtl:true,
  arrows:false,
  dots:false,
  responsive: [
    {
        breakpoint: 1200,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 3,
            infinite: true,
        }
    },
    {
      breakpoint:768,
      settings: {
          slidesToShow:3,
          slidesToScroll: 3,
          infinite: true,
      }
    },
    {
      breakpoint:400,
      settings: {
          slidesToShow:2,
          slidesToScroll: 3,
          infinite: true,
      }
    },
  ]
});
})(jQuery);