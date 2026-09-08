const goToTop = document.querySelector('.js-goToTop');

if (goToTop) {
  goToTop.style.display = 'none';

  window.addEventListener('scroll', function () {
    if (window.scrollY > window.innerHeight) {
      goToTop.style.display = '';
    } else {
      goToTop.style.display = 'none';
    }
  });
}
