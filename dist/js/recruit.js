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
})();
