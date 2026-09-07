document.getElementById('js-openHamburger').addEventListener('click', function () {
  document.getElementById('js-hamburger').classList.toggle('show');
  this.classList.toggle('open');

  setTimeout(function () {
    document.getElementById('js-hamburger__nav').classList.toggle('navOpen');
  });
});

window.addEventListener('resize', function () {
  const width = window.innerWidth;

  if (width > 1200) {
    document.getElementById('js-hamburger').classList.remove('show');
    document.getElementById('js-openHamburger').classList.remove('open');
    document.getElementById('js-hamburger__nav').classList.remove('navOpen');
  }
});

document.querySelectorAll('.js-hamburgerOpen').forEach(function (element) {
  element.addEventListener('click', function () {
    const slide = this.nextElementSibling;

    if (!slide || !slide.classList.contains('js-hamburgerSlide')) {
      return;
    }

    slide.style.setProperty('--slide-height', slide.scrollHeight + 'px');

    if (slide.classList.contains('slideOpen')) {
      slide.classList.remove('slideOpen');
      slide.classList.add('slideClose');
    } else {
      slide.classList.remove('slideClose');
      slide.classList.add('slideOpen');
    }
  });
});
