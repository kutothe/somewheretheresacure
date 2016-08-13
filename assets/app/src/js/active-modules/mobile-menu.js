
;(function($) {
	"use strict";

	$(function() {
		var menu = $('#mobile-menu-bar'),
			menuButton = menu.find('.c-hamburger');

		menuButton.on('click', function(e) {
			e.preventDefault();

			menuButton.toggleClass('is-active');
			$('body').toggleClass('menuout');
		});
	});


})(jQuery);
