var target_url = getParameterByName('url');

var fullCount = 0;

jQuery(function($) {


	runCount();

	$('#ajax-results').html('<div id="start-import"><h2>Start Import</h2></div>');
	$('#start-import h2').css({'padding':'12px 18px','border-top-left-radius':'18px','border-bottom-right-radius':'12px','background':'green','color':'white','display':'inline-block','cursor':'pointer'})
		


	$('#start-import').click(function() {
		runImport();
	});



	

	$('#ajax-results').css({'height':'400px'});
	

	function runCount() {
		$.ajax({
		  url: 'https://www.consultant360.com/api/export/node-count',
		})
		  .done(function( data ) {
		  	fullCount = data;
		});	
	}


	function runImport(offset = 0,qty = 25) {
		console.log(offset);
		console.log(fullCount);
		$('#ajax-results').html('<img src="/loading.gif">');
		console.log('start');
		var path = "/import/nodes/d7/import/" + offset + '/' + qty;
		if(target_url)
			path += '?url=' + target_url;

		
		$.ajax({
		  url: path,
		})
		  .done(function( data ) {
		  	console.log('finish');
		  	if(data == 'complete') {
		  		console.log('complete');
		  		console.log(offset);
				console.log(fullCount);
		  		$('#ajax-results').html('We\'re done here.');
		  		$('#percent').html('<h3>100%</h3>');
		  		$('#percent h3').css({'width':'100%','background':'green','margin':'0','color':'#fff'})
		  	}else {
		  		if(isNaN(data)) {
		  			console.log(data);
		  		} else {
				    var percent = Math.ceil((data/fullCount)*100);
				    if(percent >= 100)
				    	percent = 99.99;
				    $('#percent').html('<h3>' + (percent) + '%</h3>');
				    $('#percent').css({'width':'450px','background':'#EEEEEE','border':'2px solid #000','border-radius':'3px','text-align':'center'});
				    $('#percent h3').css({'width':percent + '%','background':'green','margin':'0'});
				    if(percent > 10)
				    	$('#percent h3').css({'color':'#fff'});
				    setTimeout(function() {runImport(data,qty)},500);
				}
			}
		});	
	}

});



function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}