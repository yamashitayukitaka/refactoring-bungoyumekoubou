document.querySelectorAll('.accordion').forEach(function (element) {
  element.classList.remove('active');

  element.addEventListener('click', function () {
    this.classList.toggle('active');
    const panel = this.nextElementSibling;
    panel.classList.toggle('panel-active');
  });
});
