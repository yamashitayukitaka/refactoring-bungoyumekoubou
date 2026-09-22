(function() {
	//#region src/js/modules/accordion.js
	document.querySelectorAll(".js-accordion").forEach(function(element) {
		element.classList.remove("is-active");
		element.nextElementSibling.classList.remove("is-open");
		element.addEventListener("click", function() {
			this.classList.toggle("is-active");
			this.nextElementSibling.classList.toggle("is-open");
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
