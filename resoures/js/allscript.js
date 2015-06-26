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
       $('#camp_poe .camp_baner img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
      });
    
        $('#rooms_cover .hotel_baner img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
      });
    
     $('#team_poe .team_baner img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
      });
   
    $('#Shop_content .cart_baner img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
      });
    
       $('#Shop_content .room_baner img').each(function() {
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
/*	camp poe image resizing 
/* ========================================================================= */
      
//ground

	var slideHeight = $('#ground, .ground-info').height();
	
	$('#ground, .ground-info').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		
        $('#ground,  .ground-img .img-rounded').css('height',slideHeight);
                                
                                
                                
	});

//lobby

	var slideHeight = $('#lobby, .ground-lobby').height();
	
	$('#lobby, .ground-lobby').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		
                                
    $('#lobby,  .lobby-img .img-rounded').css('height',slideHeight);
                                
                                
	});

//pool-and-arbor

	var slideHeight = $('#pool-and-arbor, .fool-info').height();
	
	$('#pool-and-arbor, .fool-info').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		
                                
    $('#lobby,  .fool-img .img-rounded').css('height',slideHeight);
                                
                                
	});




  
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

   $('#camp_poe .img-rounded img').each(function() {
        var imgSrc = $(this).attr('src');
        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
        $(this).remove();
      });


/* ========================================================================= */
/**	item viwe
/* ========================================================================= */


/* ========================================================================= */
/**	owl slider
/* ========================================================================= */

$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});

/* ========================================================================= */
/**	owl slider end
/* ========================================================================= */






    //team 
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});

/* ========================================================================= */
/**	item viwe end
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
/**	data pickers
/* ========================================================================= */
 $(function() {
    $( "#datepicker_1" ).datepicker();
  });
$(function() {
    $( "#datepicker_2" ).datepicker();
  });

/* ========================================================================= */
/*	data pickers end
/* ========================================================================= */


"use strict";

function parallaxInit() {
	$('#hotel_cover').parallax("50%", 0);
    $('.hotel_baner').parallax("50%", 0);
    $('.team_baner').parallax("50%", 0);
   $('.room_baner').parallax("50%", 0);

    

}

$(window).bind("load", function () {
    parallaxInit()
});

