jQuery(function($) {

/*

	function skyscraper() {
		var mainoffset = $('#main').offset();
		var head = $('#navigation-wrap').offset();
		var headoffset = $('#navigation-wrap').height() + head.top;
		var topLoco = (mainoffset.top - head.top)+$('#navigation-wrap').height()+25;
		if(topLoco > 108) {
			$('#skyscraper').css({'top':topLoco});
		} else {
			$('#skyscraper').css({'top':108});
		}
	}


var itemWidth,totalWidth,marginLeft;
var current = 1;

	$(window).on('load', function() {
		skyscraper();
		setTimeout(function(){adjustSlider();},325);
	});
	$(window).on('resize',function() {
		adjustSlider();
	});
	$(window).on('scroll',function() {
		skyscraper();
	});

	$('#homepage-slider-right').on('click',function(){
		if(window.innerWidth < 968) {
			$('#block-views-block-videos-block-1 ul li.row-count-' + current).css({'left':(-totalWidth)});
			current++;
			if(current > 9) {
				current = 1;
				adjustSlider();
			}
			$('#block-views-block-videos-block-1 ul li.row-count-' + current).css({'left':0,'margin-left':marginLeft});
		} else {
			if(current == 3)
				adjustSlider();
			else {
				var count = 0;
				var poCount = 0;
				$('#block-views-block-videos-block-1 ul li').each(function() {
					if(count < current*3)
						$(this).css({'left':(-totalWidth)});
					else if(count < (current*3)+3) {
						$(this).css({'left':(poCount * itemWidth)+(poCount*25)});
						poCount++;
					}
					count++;
				});
				current++;
			}
		}
	});
	$('#homepage-slider-left').on('click', function() {
		if(window.innerWidth < 968) {
			$('#block-views-block-videos-block-1 ul li.row-count-' + current).css({'left':(totalWidth)});
			current--;
			if(current < 1) {
				current = 9;
				$('#block-views-block-videos-block-1 ul li').css({'left':(-totalWidth)});
			}
			$('#block-views-block-videos-block-1 ul li.row-count-' + current).css({'left':0,'margin-left':marginLeft});
		} else {
			current --;
			if(current == 0) {
				current = 3;
			}	
			var tmpC = current - 1;
			var count = 0;
			var poCount = 0;
			$('#block-views-block-videos-block-1 ul li').each(function() {
				if(count >= (tmpC*3)+3)
					$(this).css({'left':(totalWidth)});
				else if(count <tmpC*3) {
					$(this).css({'left':(-totalWidth)});
				}
				else if(count >= (tmpC*3)) {
					$(this).css({'left':(poCount * itemWidth)+(poCount*25)});
					poCount++;
				}
				count++;
			});
		}
	});



	function adjustSlider() {
		itemWidth = $('#block-views-block-videos-block-1 ul li').width();
		current = 1;
		marginLeft = ($('#block-views-block-videos-block-1').width()-itemWidth)/2
		totalWidth = $('#block-views-block-videos-block-1').width();
		var count = 0;
		if(window.innerWidth < 992) {
			$('#block-views-block-videos-block-1 ul li').each(function() {
				if(count == 0)
					$(this).css({'left':0,'margin-left':marginLeft});
				else
					$(this).css({'left':(totalWidth)});
				count++;
			});
		} else {
			$('#block-views-block-videos-block-1 ul li').each(function() {
				if(count < 3)
					$(this).css({'left':(count * itemWidth)+(count*25),'margin':0});
				else
					$(this).css({'left':(totalWidth),'margin':0});
				count++;
			});
		}
		$('#block-views-block-videos-block-1 ul').css({'visibility':'visible'});
		$('#block-views-block-videos-block-1 footer').css({'visibility':'visible'});
	}*/

});