 'use strict';
    $(function() {
    
                                                           //SLIDER on the index page
    //slider configuration                                      
    var width = 750;
    var switchingSpeed = 1000;
    var pause = 6000;  
    //var currentSlidePosition = 1; 
    var beginningOfSliderPos = '0px';
    var endOfSliderPos = '-1500px';
    

    //cash DOM
    var $sliderPositioner =$('.slider-positioner');
    var $container = $('.container-content-wrapper');
    var $lineOfSlides = $container.find('.container-content-wrapper-long');

    
                                                   //switch buttons
    $('.slider-button').css('cursor', 'pointer');
    
    //left-button 
      $('.slider-button-left').on('click', function() {
      	         event.preventDefault();
                 //prevent 'fast clicking' bugs
      	         if($lineOfSlides.is(':animated')) { 
                             return false; 
                           };
     	    
     	      if ($lineOfSlides.css('margin-left') == beginningOfSliderPos) {
     		                 $lineOfSlides.animate({'margin-left': '+=200px'}, 120).animate({'margin-left': '0px'}, 120);
     	    } else {
                    $lineOfSlides.animate({'margin-left': '+=750px'}, 300);
                 };
     	});
     
 
      //right-button
      $('.slider-button-right').on('click', function() {
      	        event.preventDefault();
                //prevent fast clicking bugs
      	        if($lineOfSlides.is(':animated')) { 
                     return false; 
                   };
                 
     	      if ($lineOfSlides.css('margin-left') == endOfSliderPos) {
     		                $lineOfSlides.animate({'margin-left': '-=200px'}, 120).animate({'margin-left': '-1500px'}, 120);
     	    } else {
                    $lineOfSlides.animate({'margin-left': '-=750px'}, 300);
                 };
                 
     	});

    //setInterval
         var interval;  
         var i = $lineOfSlides.css('margin-left');
        

        function startSlider() {
                   
                            interval = setInterval(function() {
                              
                              if ($lineOfSlides.css('margin-left') == endOfSliderPos) {

                          	$lineOfSlides.animate({'margin-left': '0px'}, 500);
                          };
                              if ($lineOfSlides.css('margin-left') !== endOfSliderPos) { 
    	                      $lineOfSlides.animate({'margin-left': '-='+width}, switchingSpeed);
    	                    };

    	                                                        }, pause);
                    };
    	      

    	    
     




       function stopSlider() {
       	clearInterval(interval);
       }
   
    //listen to mouseenter and pause
    //resume on mouseleave
    $sliderPositioner.on('mouseenter', stopSlider).on('mouseleave', startSlider);

    startSlider();
  
   



                                                     //TAB PANEL on the index page
    //fake link behaviour

     $(".text-container .service-nav li").css('cursor', 'pointer');

    //jquery tap panel

     $(".text-container .service-nav li").on('click', function() {
      
  	  //we take the index of the clicked button and show the article with the same index
  	 var number = $(this).index();
  
  	  //hide current article and show the selected one
    	$('.service-description').hide().eq(number).fadeIn(500); 

      //mark the selected button
      $(this).addClass('selected-button');
      $(".text-container .service-nav li").not(this).removeClass('selected-button');

    });
    	//hide all articles except the first one
   	$('.service-description').not(":first").hide();



});//$(document).ready(function(){}) CLOSURE
