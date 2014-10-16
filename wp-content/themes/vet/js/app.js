(function($) { // Add java script to footer so all Foundation scripts will work - @since WP-Forge 5.4
    $(document).foundation()

    // Add button class to all submit buttons
    $('input[type="submit"]').addClass('button');

    // Adds flex video to embeded video: http://foundation.zurb.com/docs/components/flex-video.html
    $('iframe[src*="vimeo.com"]').wrap('<div class="flex-video widescreen vimeo" />');
    $('iframe[src*="dailymotion.com"]').wrap('<div class="flex-video widescreen" />');
    $('iframe[src*="youtube.com"]').wrap('<div class="flex-video widescreen" />');


    $(document).animateScroll();
	var grid = new hashgrid({ numberOfGrids: 2 });
    // $('[data-parallax-scroll]').parallaxScroll();
    // end loading all functions

})(jQuery);
