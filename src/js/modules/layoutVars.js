// 画面の高さとヘッダーの高さをカスタムプロパティに入れておく（スマホのアドレスバー対策）
function setLayoutVars() {
  const height = window.innerHeight;
  const headerHeight = document.getElementById('js-measure').offsetHeight;

  document.documentElement.style.setProperty('--windowHeight', height + 'px');
  document.documentElement.style.setProperty('--headerHeight', headerHeight + 'px');
}

setLayoutVars();

window.addEventListener('resize', function () {
  setLayoutVars();
});
