(function () {
	'use strict';

	xna.on('documentLoaded', function() {

		// Slider
		if(typeof(tns) === 'function') {
			document.querySelectorAll('.ce-hero-slider').forEach(function(node, index) {

				console.log(node);

				// // Event CeGallery_BeforeSliderInitialize ausfuehren
				// xna.fireEvent('CeGallery_BeforeSliderInitialize', {node: node});
				//
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

						// CSS Lazyload durch setzen der Klasse slider--initialized
						node.querySelector('.slider').classList.add('slider--initialized');
				//
				// 		node.querySelectorAll('.tns-item').forEach(function(item, index) {
				//
				// 			// Focus auf geklonte Eintraege verhindern
				// 			if(item.classList.contains('tns-slide-cloned') === true) {
				// 				item.querySelectorAll('a, button').forEach(function(element) {
				// 					element.setAttribute('tabindex', '-1');
				// 				});
				// 			} else {
				// 				item.removeAttribute('aria-hidden');
				// 			}
				//
				// 			// Beim Fokusieren eines Links / Buttons innerhalb eines Eintrags immer zu diesem Eintrag springen
				// 			item.querySelectorAll('a, button').forEach(function(element) {
				// 				element.addEventListener('focus', function() {
				// 					slider.goTo(item.getAttribute('data-index'));
				// 				});
				// 			});
				// 		});
				//
				// 		// Slider Controls wieder fixen
				// 		if(controls !== null) {
				// 			controls.removeAttribute('tabindex');
				// 			controls.removeAttribute('aria-label');
				// 		}
				//
				// 		// Slider Navigation wieder fixen
				// 		if(navigation !== null) {
				// 			navigation.querySelector('ul').removeAttribute('aria-label');
				//
				// 			navigation.querySelectorAll('li').forEach(function(item) {
				// 				item.removeAttribute('aria-label');
				// 			});
				// 		}
					}
				});
				//
				// // Event CeGallery_AfterSliderInitialize ausfuehren
				// xna.fireEvent('CeGallery_AfterSliderInitialize', {node: node, slider: slider});
			});
		}
	});
})();