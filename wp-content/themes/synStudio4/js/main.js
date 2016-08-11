$(document).ready(function(){
      $('.bxslider').bxSlider({
        captions: true,
        minSlides: 2,
        maxSlides: 10,
        slideWidth: 320,
        slideMargin: 1,
        pager: false,
        adaptiveHeight: 4000,
        hideControlOnEnd: false,
        touchEnabled: true,
      });
      $('.bxslider-sliding-text').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        speed: 1500,
        controls: false,
      });
      $('.bxslider-camera').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        controls: true,
        pager: false,
        speed: 1000,
        auto: true,
      });
       $('.bxslider-camera2').bxSlider({
        captions: true,
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        controls: true,
        pager: false,
        speed: 1000,
        auto: true,
        responsive: true,
      });
      $('.bxslider-testimonials').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        speed: 2000,
        controls: false,
        adaptiveHeight: true,
      });
      $('.bxslider-teachers').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        controls: true,
        pager:false,
        adaptiveHeight: true,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: '<img src="http://synstudio.ca/wp-content/themes/synStudio4/images/next.png" alt="Next" />',
        prevText: '<img src="http://synstudio.ca/wp-content/themes/synStudio4/images/prev.png" alt="Previous" />',
      });
      $('.bxslider-teacherbio').bxSlider({
        infiniteLoop: true,
        hideControlOnEnd: true,
        touchEnabled: true,
        controls: false,
        pager:false,
        adaptiveHeight: true,
      });
});


 

/**
 * Off-canvas menu toggle
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
(function(){
	var bodyEl = document.body,
	content = document.querySelector( '.main-content-container' ),
	openbtn = document.getElementById( 'open-button' ),
	closebtn = document.getElementById( 'close-button' ),
	isOpen = false;

	function init() {
		initEvents();
	}

	function initEvents(){
		openbtn.addEventListener( 'click', toggleMenu );
		if(closebtn){
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener('click',function(ev){
			var target = ev.target;
			if(isOpen && target !== openbtn){
				toggleMenu();
			}
		});
	}

	function toggleMenu(){
		if(isOpen){
			classie.remove( bodyEl, 'show-menu' );
		}
		else{
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}

	init();
})();