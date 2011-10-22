
/* 
/*	The following code is being included only to make special features work in the online demo. 
/*	This includes things like the skin changer and other not theme related items. You do not 
/*	need to have this file in your production website.
*/

//
// Load after the page is completed
// --------------------------------

$(document).ready(function() {
	
	// theme changer 
	// -------------------------------------------------------------------
	
	if ($('#SkinPreview').length > 0) {
		$('#SkinPreview').cycle({ 
			fx: 'scrollHorz',
			speed: 600,
			randomizeEffects: false, 
			easing: 'easeOutCubic',
			timeout: 0 
		});
		
		var skinCnt = 5;	// total skins available
		$(function() {
	
			$("#SkinSlider").slider({
				value:	$.cookie("skin") || Math.ceil(skinCnt/2),
				min:	1,
				max:	skinCnt,
				step:	1,
				slide: function(event, ui) {
					$('#SkinPreview').cycle(parseInt(ui.value-1));
				},
				stop: function(event, ui) {
					if (skin != ui.value) {
						//alert('Loading skin # ' + ui.value);
						//currentSkinNo = ui.value;
						// change skin and reload page
						switchSkin(ui.value);
					}
				}
			});
		
		});
		
		var currentSkinNo = $("#SkinSlider").slider("value");
		$('#SkinPreview').cycle(parseInt( currentSkinNo - 1 ));
	}


	// prevent demo links using placeholder href="#" from jumping to top
	$("a[href='#']").click( function(){
		return false;
	});	
	
	
});



/**
 * Cookie plugin
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};


//
// Skin switch function
// ---------------------------
function switchSkin(skin) {
	$.cookie("skin", skin);
	document.location.reload(true);
}

//
// Include skin style sheet
// ---------------------------
	var skin = $.cookie("skin") || "1";
	document.write('<link rel="stylesheet" href="css/skins/skin-'+ skin +'.css" type="text/css" />');
	
	var setBySkin = false; // used to track Cufon being set in this file (so onLoad knows what to do)	
		
	// cufon - skin specific styling
	switch(parseInt(skin)) {
		case 2:
			Cufon.replace
				('.headline')
				('.ribbon span', {
					hover: true,
					textShadow: '-1px -1px rgba(238, 152, 15, 0.9)'});
			setBySkin = true;
			break;
		case 3:
			Cufon.replace
				('.headline')
				('.ribbon span', {
					hover: true,
					textShadow: '-1px -1px rgba(0, 0, 0, 0.3)'});
			setBySkin = true;
			break;
		case 4:
			Cufon.replace
				('.headline')
				('.ribbon span', {
					hover: true,
					textShadow: '-1px -1px rgba(136, 78, 43, 0.6)'});
			setBySkin = true;
			break;
		default: // default already happened in onLoad.js
	}


