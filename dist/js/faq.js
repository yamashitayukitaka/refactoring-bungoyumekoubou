let acc = document.getElementsByClassName("accordion");

for (let i = 0; i < acc.length; i++) {
  acc[i].classList.remove("active");
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    // if (panel.style.maxHeight) {
    //   panel.style.maxHeight = null;
    // } else {
    //   panel.style.maxHeight = panel.scrollHeight + "px";
    // }
    panel.classList.toggle("panel-active");
  });
}
