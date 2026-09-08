(function() {
	//#region src/js/modules/layoutVars.js
	function setLayoutVars() {
		const height = window.innerHeight;
		const headerHeight = document.getElementById("js-measure").offsetHeight;
		document.documentElement.style.setProperty("--windowHeight", height + "px");
		document.documentElement.style.setProperty("--headerHeight", headerHeight + "px");
	}
	setLayoutVars();
	window.addEventListener("resize", function() {
		setLayoutVars();
	});
	//#endregion
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
	//#region src/js/modules/goToTop.js
	var goToTop = document.querySelector(".js-goToTop");
	if (goToTop) {
		goToTop.style.display = "none";
		window.addEventListener("scroll", function() {
			if (window.scrollY > window.innerHeight) goToTop.style.display = "";
			else goToTop.style.display = "none";
		});
	}
	//#endregion
})();
