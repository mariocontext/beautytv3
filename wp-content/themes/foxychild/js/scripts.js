(function($) {

	 

	    // target tables in primary content area. may need to change to limit scope more if there are conflicts
	    $(".mobilized-table").stacktable({myClass:'stacktable small-only'});

	       // Target your .container, .wrapper, .post, etc.

  $("#left-area").fitVids({ customSelector: "iframe[src^='https://maps.google.com']"});


})( jQuery );

