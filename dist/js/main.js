(function($){ // 画面の高さとヘッダーの高さをカスタムプロパティに入れておく（スマホのアドレスバー対策）
const height = window.innerHeight;
const headerHeight = document.getElementById("js-measure").offsetHeight;

document.documentElement.style.setProperty("--windowHeight", height + "px");
document.documentElement.style.setProperty(
  "--headerHeight",
  headerHeight + "px"
);

window.addEventListener("resize", function () {
  const height = window.innerHeight;
  const headerHeight = document.getElementById("js-measure").offsetHeight;
  document.documentElement.style.setProperty("--windowHeight", height + "px");
  document.documentElement.style.setProperty(
    "--headerHeight",
    headerHeight + "px"
  );
  
});

// //iphone SE用の新年の挨拶サイズ可変
// function updateStyles() {
//   const height = window.innerHeight;
//   const width = window.innerWidth;

//   if (height < 900) {
//     if (width < 1281) {
//       $('.p-newYear').addClass('p-newYear__forIPSE');
//       $('.p-newYear__TemporaryChange__mb').attr('style', 'margin-bottom: 50rem !important;');
//     } else {
//       $('.p-newYear__TemporaryChange__mb').removeAttr('style');
//     }
//   } else {
//     $('.p-newYear__TemporaryChange__mb').removeAttr('style');
//     $('.p-newYear').removeClass('p-newYear__forIPSE');
//   }
// }

// // 初回実行
// updateStyles();

// // リサイズ時にも実行
// $(window).on('resize', function() {
//   updateStyles();
// });


$('.js-top').hide();
$(window).scroll(function (){
  var scroll = $(window).scrollTop();
  var windowHeight = $(window).height();
  if(scroll > windowHeight){
    $('.js-top').show();
  }else{
    $('.js-top').hide();
  }
});

$("a[href^='#']").on("click", function () {
  const href = $(this).attr("href");
  const target = $(href == "#" || href == "" ? "html" : href);
  const position = target.offset().top - headerHeight - 20; //ヘッダの高さ分位置をずらす
  $("html, body").animate({ scrollTop: position }, 550, "swing");
  return false;
});

/*ハンバーガーメニュー*/

$('#js-openHamburger').click(function(){
  $('#js-hamburger').toggleClass('show');
  $(this).toggleClass('open');
  setTimeout(function() {
    $('#js-hamburger__nav').toggleClass('navOpen');
  });
});

window.addEventListener("resize", function () {
  const width = $(window).width();
  if(width > 1200){
    $('#js-hamburger').removeClass('show');
    $('#js-openHamburger').removeClass('open')
    $('#js-hamburger__nav').removeClass('navOpen');
  }
});


// .js-toggleクラスの要素を隠す
$('.js-toggle').hide();

// .js-hoverクラスの各要素に対して処理を行う
$('.js-hover').each(function(){
  const target = $(this).find('.js-toggle');

  // .js-hover要素にマウスオーバーしたときにtargetを表示し、他のtargetを隠す
  $(this).mouseover(function() {
    // すべての.js-toggle要素を隠す
    $('.js-toggle').hide();
    // 現在のtargetを表示
    target.show();
  });

  // .js-toggle要素にマウスアウトしたときにtargetを隠す
  target.mouseout(function() {
    target.hide();
  });
});


$('.js-slide').hide();

$('.js-open').each(function(){
  $(this).click(function(){
    $(this).siblings('.js-slide').slideToggle();
  });
});


//ふわっと浮かぶ
function fadeAnime(){
  $('.js-up').each(function(){ //fadeUpTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('u-up');// 画面内に入ったらfadeUpというクラス名を追記
    }else{
    $(this).removeClass('u-up');// 画面外に出たらfadeUpというクラス名を外す
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function (){
  fadeAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

setTimeout(function() {
fadeAnime();/* アニメーション用の関数を呼ぶ*/
// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
}, 2000);




//window.addEventListener('load', () => {
  // ローディングアニメーション
  // const spinner = document.getElementById('u-loading');
  // setTimeoutを使用してクラスを遅延実行で追加
  // setTimeout(() => {
  //   spinner.classList.add('loaded');
  // },1500); // 2000ミリ秒（2秒）後にクラスを追加
//});





$('.other-month').remove();
$('.p-xo-event__list__item').hide();
const today = new Date();

// 年、月、日を取得
const todayYear = today.getFullYear();
const todayMonth = today.getMonth() + 1; // 0から始まるため+1が必要
const todayDate = today.getDate();

const formattedDate = `${todayYear}年${todayMonth.toString().padStart(2, '0')}月${todayDate.toString().padStart(2, '0')}日`;

$('.p-xo-event__time').html(formattedDate);

$('.p-xo-event__list__item').each(function(index, element) {

    let todayStartDate = $(this).find('.p-xo-event__list__startDate').text().trim();
    let todayMatches = todayStartDate.match(/(\d+)月\s*(\d+),\s*(\d+)/);

    if (todayMatches) {
      todayStartMonth = parseInt(todayMatches[1], 10);
      todayStartDay = parseInt(todayMatches[2], 10);
      todayStartYear = parseInt(todayMatches[3], 10); // 年を取得
    }
    
    let todayEndDate = $(this).find('.p-xo-event__list__endDate').text().trim();
    let todayMatches2 = todayEndDate.match(/(\d+)月\s*(\d+),\s*(\d+)/);
  
    if (todayMatches2) {
      todayEndMonth = parseInt(todayMatches2[1], 10);
      todayEndDay = parseInt(todayMatches2[2], 10);
      todayEndYear = parseInt(todayMatches2[3], 10); // 年を取得
    }

    if ((todayYear > todayStartYear || (todayYear === todayStartYear && todayMonth > todayStartMonth) || (todayYear === todayStartYear && todayMonth === todayStartMonth && todayDate >= todayStartDay)) &&
        (todayYear < todayEndYear || (todayYear === todayEndYear && todayMonth < todayEndMonth) || (todayYear === todayEndYear && todayMonth === todayEndMonth && todayDate <= todayEndDay))) {
      $(this).show();
    }
  
});



/*const items = document.querySelectorAll('.p-xo-event__list__item');
for(let i = 0; i < items.length; i++){
  if( i >= 3){
    items[i].style.display = 'none';
  }
}*/


$('.p-event__blog__noPost').hide();
$(document).on('click', '.xo-event-calendar table.xo-month .month-dayname td div', function () {
  $('p-event__blog__noPost').hide();
  $('.p-xo-event__list__item').hide();
  let day = parseInt($(this).html().trim(), 10);
  let captionText = $(this).closest(".xo-month").find(".calendar-caption").text().trim();
  let matches = captionText.match(/(\d+)年\s*(\d+)月/);

  let year = parseInt(matches[1], 10);
  let month = parseInt(matches[2], 10);

  $('.p-xo-event__time').text(`${year}/${month}/${day}/`);

  $('.p-xo-event__list__item').each(function() {
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

      if ((year > startYear || (year === startYear && month > startMonth) || (year === startYear && month === startMonth && day >= startDay)) &&
          (year < endYear || (year === endYear && month < endMonth) || (year === endYear && month === endMonth && day <= endDay))) {
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

$('.p-xo-event__list__item').each(function() {
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

$('.xo-event-calendar table.xo-month .month-dayname td div').each(function() {
  let day = parseInt($(this).html().trim(), 10);
  let captionText = $(this).closest(".xo-month").find(".calendar-caption").text().trim();
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

    if ((year > startYear || (year === startYear && month > startMonth) || (year === startYear && month === startMonth && day >= startDay)) &&
        (year < endYear || (year === endYear && month < endMonth) || (year === endYear && month === endMonth && day <= endDay))) {
        $(this).css('background','#EA6800');
        $(this).css('color','#fff');
        $(this).addClass('js-slideToEvent');
     }
   }
  });
}
dayColor();


function checkEndDateAndShowTag(listItem) {
$(listItem).each(function() {
  // .js-end から日付のテキストを取得 (例: "11月 24, 2024")
  const endDateText = $(this).find('.js-end').text().trim();
  const endTag = $(this).find('.c-id--end')

  // 正規表現で年、月、日を抽出
  const match = endDateText.match(/(\d{1,2})月\s(\d{1,2}),\s(\d{4})/);
  if (match) {
    const endMonth = parseInt(match[1], 10);  // 月
    const endDay = parseInt(match[2], 10);    // 日
    const endYear = parseInt(match[3], 10);   // 年

    // 今日の日付を取得
    const today = new Date();
    const todayYear = today.getFullYear();    // 今日の年
    const todayMonth = today.getMonth() + 1;  // 今日の月 (JavaScriptの月は0から始まるので+1する)
    const todayDay = today.getDate();         // 今日の日

    // 年、月、日を比較
    if (todayYear > endYear || 
        (todayYear === endYear && todayMonth > endMonth) || 
        (todayYear === endYear && todayMonth === endMonth && todayDay > endDay)) {
      // 今日が終了日を過ぎている場合
      endTag.css('display', 'inline-block');
    }
  }
});
}

checkEndDateAndShowTag('.p-content__list__item');
checkEndDateAndShowTag('.p-xo-event__list__item');
checkEndDateAndShowTag('.js-searchEnd');



$('.js-slideToEvent').click(function() {
  const windowWidth = $(window).width();
  if(windowWidth < 768){
    const targetPosition = $('.p-xo-event__content').offset().top;
    const headerHeight = document.getElementById("js-measure").offsetHeight;
    $('html, body').animate({ scrollTop: targetPosition - headerHeight},500); 
  }
})
// scrollTopはanimateメソッドが保持している連想配列のキー




$(document).on('click', '.xo-event-calendar table.xo-month button span', function(){
  $('.p-xo-event__wrap').css('opacity','0');
  $('#xo-event-calendar').ready(function() {
    setTimeout(function() {
      $('.other-month').remove();
      $('.p-xo-event__wrap').css('opacity','1');
      dayColor();
    },1000);
  });
});


$(document).on('click', '.xo-event-calendar table.xo-month td a', function(event){
  event.preventDefault(); // デフォルトの動作を無効化
});


//イベント詳細ページの日つけを取得して表示を整理し別の要素へ挿入する//
/*function formatDate(dateElementSelector, dateElementClass) {
  $(dateElementSelector).each(function() {
    let singleStart = $(this).text().trim();
    let singleStartMatches = singleStart.match(/(\d+)月\s*(\d+),\s*(\d+)/);
    let singleStartMonth = parseInt(singleStartMatches[1], 10);
    let singleStartDay = parseInt(singleStartMatches[2], 10);
    let singleStartYear = parseInt(singleStartMatches[3], 10);
    $(dateElementClass).prepend(`${singleStartYear}年${singleStartMonth}月${singleStartDay}日`);
    $(this).remove();
  });
}
// 使用例
formatDate('.p-event__start__date', '.p-event__single__startDate');
formatDate('.p-event__end__date', '.p-event__single__endDate');*/

function formatDate() {
  $('.js-DateOfPicture').each(function() {
    let singleStart = $(this).text().trim();
    let singleStartMatches = singleStart.match(/(\d+)月\s*(\d+),\s*(\d+)/);
    let singleStartMonth = parseInt(singleStartMatches[1], 10);
    let singleStartDay = parseInt(singleStartMatches[2], 10);
    let singleStartYear = parseInt(singleStartMatches[3], 10);
    $(this).html(`${singleStartYear}年${singleStartMonth}月${singleStartDay}日`);
  });
}
formatDate();

/*
$('.c-id').each(function() {
  const thisHtml = $(this).html();
  switch (thisHtml) {
  case 'イベント':
    $(this).css('background', '#0174BE');
    break;
  case '完成見学会':
    $(this).css('background', '#8ECDDD');
    break;
  case '期間限定':
    $(this).css('background', '#22668D');
    break;
  case 'リノベーション住宅販売会':
    $(this).css('background', '#0174BE');
    break;
  case '中古住宅販売会':
    $(this).css('background', '#0174BE');
    break; 
  case 'リフォーム相談会':
    $(this).css('background', '#0174BE');
    break; 
  case '子供部屋':
    $(this).css('background', '#0174BE');
    break; 
  }
});
*/

})(jQuery);


