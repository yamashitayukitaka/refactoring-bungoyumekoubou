// 参照用（src/js/_deprecated）。旧 main.js。enqueue・Vite ビルド対象外。
(function ($) {
$('.other-month').remove();
$('.p-xo-event__list__item').hide();
const today = new Date();

const todayYear = today.getFullYear();
const todayMonth = today.getMonth() + 1;
const todayDate = today.getDate();

const formattedDate = `${todayYear}年${todayMonth.toString().padStart(2, '0')}月${todayDate.toString().padStart(2, '0')}日`;

$('.p-xo-event__time').html(formattedDate);

$('.p-xo-event__list__item').each(function () {
  let todayStartDate = $(this).find('.p-xo-event__list__startDate').text().trim();
  let todayMatches = todayStartDate.match(/(\d+)月\s*(\d+),\s*(\d+)/);

  if (todayMatches) {
    todayStartMonth = parseInt(todayMatches[1], 10);
    todayStartDay = parseInt(todayMatches[2], 10);
    todayStartYear = parseInt(todayMatches[3], 10);
  }

  let todayEndDate = $(this).find('.p-xo-event__list__endDate').text().trim();
  let todayMatches2 = todayEndDate.match(/(\d+)月\s*(\d+),\s*(\d+)/);

  if (todayMatches2) {
    todayEndMonth = parseInt(todayMatches2[1], 10);
    todayEndDay = parseInt(todayMatches2[2], 10);
    todayEndYear = parseInt(todayMatches2[3], 10);
  }

  if (
    (todayYear > todayStartYear ||
      (todayYear === todayStartYear && todayMonth > todayStartMonth) ||
      (todayYear === todayStartYear && todayMonth === todayStartMonth && todayDate >= todayStartDay)) &&
    (todayYear < todayEndYear ||
      (todayYear === todayEndYear && todayMonth < todayEndMonth) ||
      (todayYear === todayEndYear && todayMonth === todayEndMonth && todayDate <= todayEndDay))
  ) {
    $(this).show();
  }
});

$('.p-event__blog__noPost').hide();
$(document).on('click', '.xo-event-calendar table.xo-month .month-dayname td div', function () {
  $('p-event__blog__noPost').hide();
  $('.p-xo-event__list__item').hide();
  let day = parseInt($(this).html().trim(), 10);
  let captionText = $(this).closest('.xo-month').find('.calendar-caption').text().trim();
  let matches = captionText.match(/(\d+)年\s*(\d+)月/);

  let year = parseInt(matches[1], 10);
  let month = parseInt(matches[2], 10);

  $('.p-xo-event__time').text(`${year}/${month}/${day}/`);

  $('.p-xo-event__list__item').each(function () {
    let startDate = $(this).find('.p-xo-event__list__startDate').text().trim();
    let matches2 = startDate.match(/(\d+)月\s*(\d+),\s*(\d+)/);
    let startMonth = parseInt(matches2[1], 10);
    let startDay = parseInt(matches2[2], 10);
    let startYear = parseInt(matches2[3], 10);

    let endDate = $(this).find('.p-xo-event__list__endDate').text().trim();
    let matches3 = endDate.match(/(\d+)月\s*(\d+),\s*(\d+)/);
    let endMonth = parseInt(matches3[1], 10);
    let endDay = parseInt(matches3[2], 10);
    let endYear = parseInt(matches3[3], 10);

    if (
      (year > startYear ||
        (year === startYear && month > startMonth) ||
        (year === startYear && month === startMonth && day >= startDay)) &&
      (year < endYear ||
        (year === endYear && month < endMonth) ||
        (year === endYear && month === endMonth && day <= endDay))
    ) {
      $(this).show();
    }
  });
});

function dayColor() {
  let startYears = [];
  let startMonths = [];
  let startDays = [];
  let endYears = [];
  let endMonths = [];
  let endDays = [];

  $('.p-xo-event__list__item').each(function () {
    let startDateText = $(this).find('.p-xo-event__list__startDate').text().trim();
    let matches2 = startDateText.match(/(\d+)月\s*(\d+),\s*(\d+)/);
    startYears.push(parseInt(matches2[3], 10));
    startMonths.push(parseInt(matches2[1], 10));
    startDays.push(parseInt(matches2[2], 10));

    let endDateText = $(this).find('.p-xo-event__list__endDate').text().trim();
    let matches3 = endDateText.match(/(\d+)月\s*(\d+),\s*(\d+)/);
    endYears.push(parseInt(matches3[3], 10));
    endMonths.push(parseInt(matches3[1], 10));
    endDays.push(parseInt(matches3[2], 10));
  });

  $('.xo-event-calendar table.xo-month .month-dayname td div').each(function () {
    let day = parseInt($(this).html().trim(), 10);
    let captionText = $(this).closest('.xo-month').find('.calendar-caption').text().trim();
    let matches = captionText.match(/(\d+)年\s*(\d+)月/);
    let year = parseInt(matches[1], 10);
    let month = parseInt(matches[2], 10);

    for (let i = 0; i < startYears.length; i++) {
      let startYear = startYears[i];
      let startMonth = startMonths[i];
      let startDay = startDays[i];
      let endYear = endYears[i];
      let endMonth = endMonths[i];
      let endDay = endDays[i];

      if (
        (year > startYear ||
          (year === startYear && month > startMonth) ||
          (year === startYear && month === startMonth && day >= startDay)) &&
        (year < endYear ||
          (year === endYear && month < endMonth) ||
          (year === endYear && month === endMonth && day <= endDay))
      ) {
        $(this).css('background', '#EA6800');
        $(this).css('color', '#fff');
        $(this).addClass('js-slideToEvent');
      }
    }
  });
}
dayColor();

function checkEndDateAndShowTag(listItem) {
  $(listItem).each(function () {
    const endDateText = $(this).find('.js-end').text().trim();
    const endTag = $(this).find('.c-id--end');

    const match = endDateText.match(/(\d{1,2})月\s(\d{1,2}),\s(\d{4})/);
    if (match) {
      const endMonth = parseInt(match[1], 10);
      const endDay = parseInt(match[2], 10);
      const endYear = parseInt(match[3], 10);

      const today = new Date();
      const todayYear = today.getFullYear();
      const todayMonth = today.getMonth() + 1;
      const todayDay = today.getDate();

      if (
        todayYear > endYear ||
        (todayYear === endYear && todayMonth > endMonth) ||
        (todayYear === endYear && todayMonth === endMonth && todayDay > endDay)
      ) {
        endTag.css('display', 'inline-block');
      }
    }
  });
}

checkEndDateAndShowTag('.c-cardList__item');
checkEndDateAndShowTag('.p-xo-event__list__item');
checkEndDateAndShowTag('.js-searchEnd');

$('.js-slideToEvent').click(function () {
  const windowWidth = $(window).width();
  if (windowWidth < 768) {
    const targetPosition = $('.p-xo-event__content').offset().top;
    const headerHeight = document.getElementById('js-measure').offsetHeight;
    $('html, body').animate({ scrollTop: targetPosition - headerHeight }, 500);
  }
});

$(document).on('click', '.xo-event-calendar table.xo-month button span', function () {
  $('.p-xo-event__wrap').css('opacity', '0');
  $('#xo-event-calendar').ready(function () {
    setTimeout(function () {
      $('.other-month').remove();
      $('.p-xo-event__wrap').css('opacity', '1');
      dayColor();
    }, 1000);
  });
});

$(document).on('click', '.xo-event-calendar table.xo-month td a', function (event) {
  event.preventDefault();
});

function formatDate() {
  $('.js-DateOfPicture').each(function () {
    let singleStart = $(this).text().trim();
    let singleStartMatches = singleStart.match(/(\d+)月\s*(\d+),\s*(\d+)/);
    let singleStartMonth = parseInt(singleStartMatches[1], 10);
    let singleStartDay = parseInt(singleStartMatches[2], 10);
    let singleStartYear = parseInt(singleStartMatches[3], 10);
    $(this).html(`${singleStartYear}年${singleStartMonth}月${singleStartDay}日`);
  });
}
formatDate();
})(jQuery);
