jQuery(function($) {
/*
	if($('#block-views-block-article-page-block-1').length) {
		$('#block-views-block-article-page-block-1').appendTo('#block-articlesidebarheader');
		$('#block-views-block-article-page-block-2').appendTo('#block-articlesidebarheader');
		handleGoto();
		handleSelector();
		$('#sidebar').addClass('article-sections');
		$('#sidebar').addClass('article-active');

	}
	$(window).on('load', function() {handleScroll()});
	$(window).on('scroll',function() {handleScroll()});
	$(window).on('resize',function() {handleScroll()});

	function handleGoto() {
		//Setup Article Section Locations
		var count = 1;
		$('.article-body').each(function() {
			$(this).addClass("article-body-" + count);
			if($(this).children('.paragraph').children('h2').text() == 'Abstract')
				$(this).addClass("article-body-abstract");
			count++;
		});
		//Setup Action Selectors
		count = 1;
		$('#block-views-block-article-page-block-1 .views-row').each(function() {
			$(this).attr('content-location',count);
			count++;
		});
		//Perform action, scroll to location indicated by action selector
		$('#block-views-block-article-page-block-1 .views-row').on('click',function() {
			var item = '.article-body-' + $(this).attr('content-location');
			var offset = $(item).offset();
			var location = offset.top - ($('#header-wrap').height() + $('#navigation').height() + 15);
			$('html,body').animate({
				scrollTop: location,
			},400);
		});
	}

	function handleSelector() {
		$('#block-articlesidebarheader .selector').on('click',function() {
			$('.selector').removeClass('active');
			$(this).addClass('active');
			if($(this).attr('id') == 'article-sections') {
				$('#sidebar').addClass('article-sections');
				$('#sidebar').removeClass('article-references');
			} else {
				$('#sidebar').addClass('article-references');
				$('#sidebar').removeClass('article-sections');
			}
		});
	}

	function handleScroll() {
		var sideOffset = $('#sidebar').offset();
		var head = $('#navigation-wrap').offset();
		var headOffset = $('#navigation-wrap').height() + head.top;
		var topLoco = (sideOffset.top - head.top)+$('#navigation-wrap').height()+25 + (300);
		if(topLoco > 110) {
			$('#block-articlesidebarheader').css({'position':'relative','top':'','left':''});
		} else {
			$('#block-articlesidebarheader').css({'position':'fixed','top':108,'left':(sideOffset.left + 15)});
		}
	}*/
});