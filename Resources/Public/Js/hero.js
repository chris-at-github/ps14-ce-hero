(function () {
	'use strict';

	xna.on('documentLoaded', function() {

		// Slider
		if(typeof(tns) === 'function') {
			document.querySelectorAll('.ce-hero-slider').forEach(function(node, index) {

				// Event CeHero_BeforeSliderInitialize ausfuehren
				xna.fireEvent('CeHero_BeforeSliderInitialize', {node: node});

				// Controls | Navigation anzeigen
				let controls = node.querySelector('.slider--controls .slider--controls-inner');
				let navigation = node.querySelector('.slider--navigation .slider--navigation-inner');

				let slider = tns({
					container: node.querySelector('.slider--container'),
					mode: 'gallery',
					center: false,
					loop: true,
					autoWidth: false,
					items: 1,
					gutter: 0,
					autoplay: true,
					autoplayButtonOutput: false,
					animateIn: 'tns-fadeIn',
					animateOut: 'tns-fadeOut',
					controls: (controls !== null),
					controlsContainer: node.querySelector('.slider--controls .slider--controls-inner'),
					nav: (navigation !== null),
					navContainer: node.querySelector('.slider--navigation .slider--navigation-inner ul'),
					onInit: function() {
						xna.addSliderInitializedClass(node);
						xna.fixFocusInSlider(node, slider);
						xna.fixSliderControls(node, controls);
						xna.fixSliderNavigation(node, navigation);
					}
				});

				// Event CeGallery_AfterSliderInitialize ausfuehren
				xna.fireEvent('CeHero_AfterSliderInitialize', {node: node, slider: slider});
			});
		}
	});
})();