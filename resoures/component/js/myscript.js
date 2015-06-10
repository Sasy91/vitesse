jQuery(function ($) {
    "use strict";


    /* ========================================================================= */
    /*	Nice Scroll - Custom Scrollbar
     /* ========================================================================= */

    var nice = $("html").niceScroll({
        cursorborderradius: 0,
        cursorwidth: "8px",
        cursorfixedheight: 150,
        cursorcolor: "#6CB670",
        zindex: 9999,
        cursorborder: 3,
    });

    /* ========================================================================= */
    /*	Portfolio Filtering Hook
     /* =========================================================================  */

    $('#og-grid').mixItUp(); // Portfolio filter

    Grid.init(); //Portfolio Grid Expand



    /* ========================================================================= */
    /*	Parallax Sections
     /* ========================================================================= */


    "use strict";

    function parallaxInit() {
        $('#welcome').parallax("50%", 0.3);
        $('#twitter').parallax("50%", 0.3);
    }

    $(window).bind("load", function () {
        parallaxInit()
    });
});