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
	/*	Google Map Customization
	/* =========================================================================  */

	function initialize() {

		var myLatLng = new google.maps.LatLng(6.046638, 80.671043);

		var roadAtlasStyles = [{
			"featureType": "landscape",
			"elementType": "geometry.fill",
			"stylers": [{
				"color": "##00C7FC"
			}]
		}, {
			"elementType": "labels.text.fill",
			"stylers": [{
				"color": "#000000"
			}]
		}, {
			"elementType": "labels.text.stroke",
			"stylers": [{
				"visibility": "off"
			}]
		}, {
			"featureType": "road",
			"elementType": "geometry.fill",
			"stylers": [{
				"color": "#c5670a"
			}]
		}, {
			"featureType": "road",
			"elementType": "geometry.stroke",
			"stylers": [{
				"visibility": "on"
			}, {
				"color": "#808080"
			}]
		}, {
			"featureType": "poi",
			"elementType": "labels",
			"stylers": [{
				"visibility": "off"
			}]
		}, {
			"featureType": "transit",
			"elementType": "labels.icon",
			"stylers": [{
				"visibility": "off"
			}]
		}, {
			"featureType": "poi",
			"elementType": "geometry",
			"stylers": [{
				"color": "#808080"
			}]
		}, {
			"featureType": "water",
			"elementType": "geometry.fill",
			"stylers": [{
				"color": "#226666"
			}, {
				"saturation": -65
			}]
		}, {
			"featureType": "road",
			"elementType": "labels.icon",
			"stylers": [{
				"visibility": "off"
			}]
		}, {
			"featureType": "landscape",
			"elementType": "geometry.stroke",
			"stylers": [{
				"color": "#bbbbbb"
			}]
		}];

		var mapOptions = {
			zoom: 11,
			center: myLatLng,
			disableDefaultUI: true,
			scrollwheel: false,
			navigationControl: false,
			mapTypeControl: false,
			scaleControl: false,
			draggable: false,
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'roadatlas']
			}
		};

		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			icon: 'img/location-icon.png',
			title: '',
		});


		google.maps.event.addListener(marker, 'click', function () {
			infowindow.open(map, marker);
		});

		var styledMapOptions = {
			name: 'US Road Atlas'
		};

		var usRoadMapType = new google.maps.StyledMapType(
			roadAtlasStyles, styledMapOptions);

		map.mapTypes.set('roadatlas', usRoadMapType);
		map.setMapTypeId('roadatlas');
	}

	google.maps.event.addDomListener(window, "load", initialize);

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

