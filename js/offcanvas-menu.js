

(function ($) {

$(document).ready(function() {

    // This is some code for the off canvas nav
    // More info about this method here:
    // http://coding.smashingmagazine.com/2013/01/15/off-canvas-navigation-for-responsive-website/
    var nav_open = false;
    $('#main-menu-toggle').click(function() {
        if (!nav_open) {
            $(document.documentElement).addClass("js-nav");
            nav_open = true;
            return false;
        }
    });

    $('#main-menu-close').click(function() {
        if (nav_open) {
            $(document.documentElement).removeClass("js-nav");
            nav_open = false;
            return false;
        }
    });

});


})(jQuery);