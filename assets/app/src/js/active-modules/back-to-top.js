;(function($) {
    'use strict';

    var backToTopBtn = $('<div id="back-to-top-button"></div>');

    $(function(){
        $('body').append(backToTopBtn);
    });

    backToTopBtn.on('click', function(){
		$('html, body').animate({scrollTop: 0}, 500);
	});

    $(window).on('scroll', function() {
        backToTopBtn.toggleClass('shown', ($(this).scrollTop() > 400));
    });

})(jQuery);
