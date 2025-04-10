(function($){ 
  // const mvTxtHeight = document.querySelector('.js-mvTxtHeight').offsetHeight;
  const navListHeight = document.querySelector('.js-navList').offsetHeight;
  const mvHeight = document.querySelector('.js-mvHeight').offsetHeight;

  // document.documentElement.style.setProperty("--mvTxtHeight", mvTxtHeight  + "px");
  document.documentElement.style.setProperty("--navListHeight", navListHeight + "px");
  document.documentElement.style.setProperty("--mvHeight", mvHeight + "px");
  
  window.addEventListener("resize", function () {
    // const mvTxtHeight = document.querySelector('.js-mvTxtHeight').offsetHeight;
    const navListHeight = document.querySelector('.js-navList').offsetHeight;
    const mvHeight = document.querySelector('.js-mvHeight').offsetHeight;

    // document.documentElement.style.setProperty("--mvTxtHeight", mvTxtHeight  + "px");
    document.documentElement.style.setProperty("--navListHeight", navListHeight + "px");
    document.documentElement.style.setProperty("--mvHeight", mvHeight + "px");
  });

})(jQuery);