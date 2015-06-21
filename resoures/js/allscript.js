jQuery(function ($) { 
    
    "use strict";
    	/* ========================================================================= */
	/*	Nice Scroll - Custom Scrollbar
	/* ========================================================================= */

	var nice = $("html").niceScroll({
		cursorborderradius: 0,
		cursorwidth: "18px",
		cursorfixedheight: 150,
		cursorcolor: "rgba(62, 202, 255, 0.8)",
		zindex: 9999,
		cursorborder: 0,
	});
//    	var nice = $(".room-info").niceScroll({
//		cursorborderradius: 0,
//		cursorwidth: "18px",
//		cursorfixedheight: 150,
//		cursorcolor: "#000",
//		zindex: 9999,
//		cursorborder: 10,
//	});
    
   /* ========================================================================= */
	/*	cover full size
	/* ========================================================================= */
     var wheight = $(window).height(); //get the height of the window
      
        $('.fullheight').css('height', wheight); //set to window tallness  
         //adjust height of .fullheight elements on window resize
    
        //replace IMG inside carousels with a background image
       $('#camp_poe .hotel_baner img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
      });
    
        $('#rooms_cover .hotel_baner img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
      });
   
    $(window).resize(function() {
     wheight = $(window).height(); //get the height of the window
     $('.fullheight').css('height', wheight); //set to window tallness  
  });
});

  
/* ========================================================================= */
/*	hotel img Sections
/* ========================================================================= */



  
/* ========================================================================= */
/**	hotel img Sections end
/* ========================================================================= */

/* ========================================================================= */
/*	set the full cover size for the rooms pages
/* ========================================================================= */

        $('#room_one .room_baner img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
      });

   $('#camp_poe .ground-info img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
      });


  
/* ========================================================================= */
/**	set the full cover size for the rooms pages end
/* ========================================================================= */


/* ========================================================================= */
/**	adding inbody class
/* ========================================================================= */

/* ========================================================================= */
/**	navigation hide background-color: rgba(62, 202, 255, 0.4);
/* ========================================================================= */
  jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 550) {
            jQuery("#navigation").css("background-color","rgba(62, 202, 255, 0.4)");
            jQuery("#navigation").addClass("animated-nav");
        } else {
            jQuery("#navigation").css("background-color","transparent");
            jQuery("#navigation").removeClass("animated-nav");
        }
    });


/* ========================================================================= */
/**		navigation hide end
/* ========================================================================= */

/* ========================================================================= */
/**	adding inbody class end
/* ========================================================================= */


/* ========================================================================= */
/*	Parallax Sections
/* ========================================================================= */
 $(function() {
    $( "#datepicker_1" ).datepicker();
  });
$(function() {
    $( "#datepicker_2" ).datepicker();
  });

"use strict";

function parallaxInit() {
	$('#hotel_cover').parallax("50%", 0.3);
    $('.hotel_baner').parallax("50%", 0.3);

}

$(window).bind("load", function () {
    parallaxInit()
});

