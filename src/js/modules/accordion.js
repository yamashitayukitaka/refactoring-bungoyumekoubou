document.querySelectorAll('.js-accordion').forEach(function (element) {
  element.classList.remove('is-active');
  element.nextElementSibling.classList.remove('is-open');

  element.addEventListener('click', function () {
    this.classList.toggle('is-active');
    this.nextElementSibling.classList.toggle('is-open');
  });
});
