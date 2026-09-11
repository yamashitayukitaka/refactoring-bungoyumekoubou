// 画面の高さとヘッダーの高さをカスタムプロパティに入れておく（スマホのアドレスバー対策）
function setLayoutVars() {
  const height = window.innerHeight;
  const headerHeight = document.getElementById('js-measure').offsetHeight;
  const navListHeight = document.querySelector('.js-navList').offsetHeight;

  document.documentElement.style.setProperty('--windowHeight', height + 'px');
  document.documentElement.style.setProperty('--headerHeight', headerHeight + 'px');
  document.documentElement.style.setProperty('--navListHeight', navListHeight + 'px');
}

setLayoutVars();

window.addEventListener('resize', function () {
  setLayoutVars();
});
