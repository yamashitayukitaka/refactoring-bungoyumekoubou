(function() {
	//#region src/js/modules/hamburger.js
	function closeHamburgerSlides() {
		document.querySelectorAll(".js-hamburgerSlide").forEach(function(childList) {
			childList.style.height = "0px";
		});
	}
	document.getElementById("js-openHamburger").addEventListener("click", function() {
		const hamburger = document.getElementById("js-hamburger");
		hamburger.classList.toggle("show");
		this.classList.toggle("open");
		if (!hamburger.classList.contains("show")) closeHamburgerSlides();
		setTimeout(function() {
			document.getElementById("js-hamburger__nav").classList.toggle("navOpen");
		});
	});
	window.addEventListener("resize", function() {
		if (window.innerWidth > 1200) {
			document.getElementById("js-hamburger").classList.remove("show");
			document.getElementById("js-openHamburger").classList.remove("open");
			document.getElementById("js-hamburger__nav").classList.remove("navOpen");
			closeHamburgerSlides();
		}
	});
	document.querySelectorAll(".js-hamburgerOpen").forEach(function(element) {
		element.addEventListener("click", function() {
			const slide = this.nextElementSibling;
			if (!slide || !slide.classList.contains("js-hamburgerSlide")) return;
			if (slide.style.height && slide.style.height !== "0px") {
				slide.style.height = "0px";
				return;
			}
			slide.style.height = slide.scrollHeight + "px";
		});
	});
	//#endregion
})();
