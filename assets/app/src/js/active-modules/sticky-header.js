/**
 * Sticky Header JS file
 * Theme: New Orange Template
 * Date: Jan, 2016
 */

;(function($) {
    'use strict';

    $(window).on('scroll', function() {
        var body = $('body'),
			top = $(this).scrollTop();

        if (Modernizr.mq('(min-width: 960px)')) {
            body.toggleClass('fixed-header', top > 0);
            body.toggleClass('shrunk-header', top > 100);
        } else if (Modernizr.mq('(min-width: 441px)')) {
            body.toggleClass('ritbar-site-logo', top > 119);
        } else {
            body.toggleClass('ritbar-site-logo', top > 79);
        }
    });
})(jQuery);
