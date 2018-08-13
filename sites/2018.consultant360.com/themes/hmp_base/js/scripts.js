jQuery(function($) {
	$('#search-toggle').click(function() {
		$('#search-bar').slideToggle('fast');
	});
	outsideClick();

	function outsideClick() {
		$(document).mouseup(function(e) 
		{
		    var container = $("#search-toggle");

		    // if the target of the click isn't the container nor a descendant of the container
		    if (!container.is(e.target) && container.has(e.target).length === 0) 
		    {
		        $('#search-bar').slideUp('fast');
		    }
		});
	}
});