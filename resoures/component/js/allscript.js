$(function() {
    
alert();

  "use strict";
    
        var nice = $("html").niceScroll({
        cursorborderradius: 0,
        cursorwidth: "8px",
        cursorfixedheight: 150,
        cursorcolor: "#6CB670",
        zindex: 9999,
        cursorborder: 3,
    });

   var wheight = $(window).height(); //get the height of the window
       
        $('.fullheight').css('height', wheight); //set to window tallness  
         //adjust height of .fullheight elements on window resize
    
          //replace IMG inside carousels with a background image
//      $('.carousel-inner .item img').each(function() {
//        var imgSrc = $(this).attr('src');
//        $(this).parent().css({'background-image': 'url('+imgSrc+')'});
//        $(this).remove();
//      });
   
    $(window).resize(function() {
     wheight = $(window).height(); //get the height of the window
     $('.fullheight').css('height', wheight); //set to window tallness  
  });







});