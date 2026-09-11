// 会社概要のエントリ。modules/ から import する
import '../modules/accordion.js';

const staffImg = document.querySelector('.js-staffImg');

if (staffImg) {
  const setStaffWidth = function () {
    document.documentElement.style.setProperty('--staffWidth', staffImg.offsetWidth + 'px');
  };

  setStaffWidth();
  window.addEventListener('resize', setStaffWidth);
}
