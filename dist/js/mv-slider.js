(function() {
	//#region src/js/legacy/mv-slider.js
	(function($) {
		window.addEventListener("load", function() {
			$(".js-mvSlider").slick({
				fade: true,
				autoplay: true,
				speed: 1500,
				autoplaySpeed: 4e3,
				pauseOnFocus: false,
				pauseOnHover: false,
				arrows: false
			});
		});
	})(jQuery);
	//#endregion
})();
