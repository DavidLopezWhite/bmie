"use strict";

var $j = jQuery.noConflict();

//=========== click on cart
jQuery(function($j) {

    "use strict";

	if ($j("html.touch").length > 0) {
		 $j(".product .product__inside__image a").unbind('click');
	}


});
