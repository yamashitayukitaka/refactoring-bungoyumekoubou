(function($){ 
  const staffImg = document.querySelector('.js-staffImg');
  if (!staffImg) {
    return;
  }

  const setStaffWidth = function () {
    document.documentElement.style.setProperty("--staffWidth", staffImg.offsetWidth + "px");
  };

  setStaffWidth();
  window.addEventListener("resize", setStaffWidth);
})(jQuery);
