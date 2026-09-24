document.addEventListener('click', function (event) {
  const link = event.target.closest("a[href^='#']");
  if (!link) {
    return;
  }

  const href = link.getAttribute('href');
  const target = !href || href === '#' ? document.documentElement : document.querySelector(href);
  if (!target) {
    return;
  }

  const header = document.getElementById('js-measure');
  const headerHeight = header ? header.offsetHeight : 0;

  event.preventDefault();
  window.scrollTo({
    top: target.getBoundingClientRect().top + window.scrollY - headerHeight - 20,
    behavior: 'smooth',
  });
});
