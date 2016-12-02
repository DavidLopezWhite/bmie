"use strict";

var $j = jQuery.noConflict();

//=========== click on cart
jQuery(function($j) {

    "use strict";

    $j("header .cart").click(function() {
        $j("#slider").toggleClass('slider-button');
    });

	if ($j("html.touch").length > 0) {
		 $j(".product .product__inside__image a").click(function(event) {
	        event.preventDefault();
	    });
	}


});
