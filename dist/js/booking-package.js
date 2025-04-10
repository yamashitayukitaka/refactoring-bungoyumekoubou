(function($){ 
  $('.selectable_time_slot > div ').prepend('.selectable_service_slot');
  $('#js-move').click(function() {
    const calenderHeight = document.getElementById('booking-package_calendarPage').offsetHeight;
    const headerHeight = document.getElementById("js-measure").offsetHeight;
    const target = $(this).offset().top - headerHeight + calenderHeight + 50; 
    $('html, body').animate({ scrollTop: target },0); // 0 はアニメーションの時間（ミリ秒）
    if(!($('.selectable_time_slot').find('.c-button--bookingTime').length > 0)){
      //.length > 0が必要な理由は$('.selectable_time_slot').find('.c-button--bookingTime')でc-button--bookingTimeが
     //存在しなくても、空のJQueryオブジェクトを返してしまい、存在するものと扱ってしまう為
    $('.selectable_time_slot').append('<div class = "c-button--bookingTime">この時間で予約する</div>')
    }
  })
})(jQuery);