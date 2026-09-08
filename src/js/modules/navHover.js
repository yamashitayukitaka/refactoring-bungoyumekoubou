document.querySelectorAll('.js-toggle').forEach(function (element) {
  element.style.display = 'none';
});

document.querySelectorAll('.js-hover').forEach(function (element) {
  const target = element.querySelector('.js-toggle');

  element.addEventListener('mouseover', function () {
    document.querySelectorAll('.js-toggle').forEach(function (toggle) {
      toggle.style.display = 'none';
    });
    target.style.display = '';
  });

  target.addEventListener('mouseout', function () {
    target.style.display = 'none';
  });
});
