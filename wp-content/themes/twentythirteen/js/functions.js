/**
 * Functionality specific to Twenty Thirteen.
 *
 * Provides helper functions to enhance the theme experience.
 */

( function( $ ) {
	var body    = $( 'body' ),
	    _window = $( window ),
            scrollTop = 0,
            scrollThreshold = 150,
            scrollTopLink = $('#scroll-top').hide();

	/**
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.twentythirteen', function() {
		var element = document.getElementById( location.hash.substring( 1 ) );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
				element.tabIndex = -1;

			element.focus();
		}
	} );
        
        function scrollPage(topOffset) {
            $('body,html').stop().animate({
                scrollTop: topOffset
            }, 1000);
        }

	//show the scroll to top button
        _window.on('scroll', function() {
            scrollTop = _window.scrollTop();
            if(scrollTop > scrollThreshold) {
                scrollTopLink.fadeIn(250);
            } else {
                if(scrollTopLink.css('display') !== 'none'){
                    scrollTopLink.fadeOut(250);
                }
            }
        });
        
        scrollTopLink.click(function(){
            scrollPage(0);
            return false; 
        });
} )( jQuery );