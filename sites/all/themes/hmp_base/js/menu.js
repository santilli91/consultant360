jQuery(function($) {

	setTimeout(function(){
		$('nav >ul >li').each(function(e) {
		if($(this).has('a.is-active').length) {
			$(this).addClass('active');
		}
	})},125);

	$(document).ready(function() {
		mobileToggle();
		moveMenuItems();
		$('nav >ul >li span').click(function() {
			var current = $(this).parent().children('ul').hasClass('expanded');
			var newClass = current?'':'expanded';
			$('nav >ul >li >ul').removeClass('expanded');
			$('#wipe').removeClass('expanded');
			$(this).parent().children('ul').addClass(newClass);
			$('#wipe').addClass(newClass);
			if($(window).width() < 768) {
				$('#wipe').height('');
			} else {
				var height = $('#block-hmp-base-main-menu ul li.active ul.expanded').height() + 5;
				$('#wipe').height(height);
			}
		});
	});
	$(window).resize(function() {
		$('.expanded').removeClass('expanded');
		$('.open-close').text('Menu');
		moveMenuItems();
	});


	function mobileToggle() {
		$('#mobile-toggle').click(function() {
			$('nav#block-hmp-base-main-menu >ul').toggleClass('expanded');
			$('#standard-nav').toggleClass('expanded');
			var newClass = $("#standard-nav").hasClass('expanded')?'expanded':'';
			$('#wipe').removeClass('expanded');
			$('#wipe').addClass(newClass);
			$('.x-menu').toggleClass('expanded');
		});
	}

	function moveMenuItems() {
		if($(window).width() < 768) {
			if($('#header-right #block-useraccountmenu').length) {
				$('#header-right #block-useraccountmenu').appendTo('#top-dropdown .header-right');
			}
			if($('#right-menu #search-toggle').length) {
				$('#right-menu #search-toggle').appendTo('#top-dropdown .search-toggle');
			}
		} else {
			if($('#top-dropdown .header-right #block-useraccountmenu').length) {
				$('#top-dropdown .header-right #block-useraccountmenu').appendTo('#header-right');
			}
			if($('#top-dropdown .search-toggle #search-toggle').length) {
				$('#top-dropdown .search-toggle #search-toggle').appendTo('#right-menu');
			}
		}
	}
});