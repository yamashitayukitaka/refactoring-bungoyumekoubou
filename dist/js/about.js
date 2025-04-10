(function($){ 
  
  const staffWidth = document.querySelector('.js-staffImg').offsetWidth;
  document.documentElement.style.setProperty("--staffWidth", staffWidth + "px");

  window.addEventListener("resize", function () {
  const staffWidth = document.querySelector('.js-staffImg').offsetWidth;
  document.documentElement.style.setProperty("--staffWidth", staffWidth + "px");
  
});


})(jQuery);