(function() {
	//#region src/js/modules/accordion.js
	document.querySelectorAll(".accordion").forEach(function(element) {
		element.classList.remove("active");
		element.addEventListener("click", function() {
			this.classList.toggle("active");
			this.nextElementSibling.classList.toggle("panel-active");
		});
	});
	//#endregion
	//#region src/js/pages/about.js
	var staffImg = document.querySelector(".js-staffImg");
	if (staffImg) {
		const setStaffWidth = function() {
			document.documentElement.style.setProperty("--staffWidth", staffImg.offsetWidth + "px");
		};
		setStaffWidth();
		window.addEventListener("resize", setStaffWidth);
	}
	//#endregion
})();
