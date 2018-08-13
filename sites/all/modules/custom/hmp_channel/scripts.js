var inter_enc_npi = '';
var npi = '';
jQuery(function($) {

		
	$(document).ready(function() {
		 AIM.ready(function(){
		  AIM.ondetect(cb_ondetect);
		}); 
	});



	//AIM Signal Handler
	function cb_ondetect(json){
		var _npi = json.npi_number; 
		if(_npi) {
			npi = _npi;
			document.cookie = "tar_enc_npi=" + npi;
		}
		//console.log('tester-9999999990');
			document.cookie = "tar_enc_npi=" + 9999999990;
		
	}

	function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

});


