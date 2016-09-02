
;(function($) {
	"use strict";

	$(function() {
		var menu = $('#mobile-menu-bar'),
			menuButton = menu.find('.c-hamburger'),
			bodyOverlay = $('#body-overlay');

		menuButton.on('click', function(e) {
			var isOut = menuButton.hasClass('is-active');

			e.preventDefault();

			menuButton.toggleClass('is-active');

			if (isOut) {
				$('body').removeClass('menuout');

				setTimeout(function() {
					bodyOverlay.hide();
				}, 250);
			} else {
				bodyOverlay.show();
				setTimeout(function() {
					$('body').addClass('menuout');
				}, 10);
			}
		});
	});


})(jQuery);
