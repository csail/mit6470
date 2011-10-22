/*
/*	Dynamic design functions and onLoad events
/*	----------------------------------------------------------------------
/* 	Creates added dynamic functions and initializes loading.
*/


// ======================================================================
//
//	On document ready functions
//
// ======================================================================

$(document).ready(function() {
	
	
	// initialise main-menu (jQuery superfish plug-in)
	// -------------------------------------------------------------------
	
	if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) < 7) {
		// IE 6 has problem with supersubs plugin so we don't use it here...
		$('ul.sf-menu').superfish({  		// initialize superfish
				delay:       400,			// one second delay on mouseout 
				animation: {				// fade-in and slide-down animation 
					height:	'show'
				},
				speed:		275
			});
	} else {
		// all other browsers, include supersubs plugin.
		$('ul.sf-menu').supersubs({ 
	            minWidth:    12,	// minimum width of sub-menus in em units 
	            maxWidth:    27,	// maximum width of sub-menus in em units 
	            extraWidth:  0		// extra width for slight rounding differences in fonts 
	        }).superfish({  		// initialize superfish
	            delay:       400,	// one second delay on mouseout 
	            animation: {		// fade-in and slide-down animation 
					height:	'show'
				},
	            speed:		275
	        });
	}
	
		
	// initialize modal (fancybox)
	// -------------------------------------------------------------------
	var overlayColor = $('#fancy_overlay').css('background-color') || '#2c2c2c';
	
	$("a.zoom").fancybox({
		'padding': 12, 
		'overlayOpacity': 0.2,
		'overlayColor': overlayColor, 
		'zoomSpeedIn': 500, 
		'zoomSpeedOut': 500,
		'callbackOnShow': modalStart
	});
	
	// initialize login modal (fancybox)
	// -------------------------------------------------------------------
	$("a.login").fancybox({
		'padding': 12, 
		'overlayOpacity': 0.2,
		'overlayColor': overlayColor, 
		'showCloseButton': false,
		'frameWidth': 400,
		'frameHeight': 208,
		'hideOnContentClick': false,
		'callbackOnShow': modalStart		
	});
		

	// Slide down top content (topReveal) 
	// -------------------------------------------------------------------
	$('.topReveal').click( function() {
		$('#ContentPanel').slideToggle(800,'easeOutQuart');	// show/hide the content area
		$.scrollTo('#ContentPanel');
		return false;
	});
	

	// image hover effects	
	// -------------------------------------------------------------------
	$("a.img").hover( function () {
		if (jQuery.browser.msie && parseInt(jQuery.browser.version, 10) <= 8) {
			$(this).stop(false, true).toggleClass('imgHover');
		} else {
			$(this).stop(false, true).toggleClass('imgHover', 200);
		}
	});
	
	
	// Tooltip hover effect (jQuery clueTip)
	// -------------------------------------------------------------------
		$.fn.cluetip.defaults.cluetipClass	=	'skinned';		// added in the form of 'cluetip-' + clueTipClass
		$.fn.cluetip.defaults.cluezIndex	=	1234;			// z-index style property
		$.fn.cluetip.defaults.dropShadow	=	false;			// use drop shadow (off is best for image skinned tips)
		$.fn.cluetip.defaults.topOffset		=	35;				// px to offset clueTip from top
		//$.fn.cluetip.defaults.width 		=	250;			// default width
		//$.fn.cluetip.defaults.local		=	true;			// lets ontent from the same page act as tool tip (attribute for tip treated as jQuery selector)
		//$.fn.cluetip.defaults.splitTitle	=	"|";			// seperator title="Tip Title | Tip test after seperator"
		//$.fn.cluetip.defaults.leftOffset	=	15;				// px to offset clueTip from left

		$.fn.cluetip.defaults.fx = {							// effect and speed for opening clueTips
			open:		'fadeIn', 	// can be 'show' or 'slideDown' or 'fadeIn'
			openSpeed:	'100'		// speed of effect
		};
		$.fn.cluetip.defaults.hoverIntent	= {					// settings for hoverIntent plugin	
			sensitivity:  3,		
			interval:     100,		// delay before showing tip
			timeout:      80		// delay hiding tip
		};
		$.fn.cluetip.defaults.onShow		=	function(ct, c){
			// on display fix spacing for title only tips
			if ($('#cluetip-inner').html() == '') {
				// add helper class
				(jQuery.browser.msie) ? $('#cluetip').addClass('ieFix') : $('#cluetip').addClass('mozFix');				
			} else {
				// remove helper class
				(jQuery.browser.msie) ? $('#cluetip').removeClass('ieFix') : $('#cluetip').removeClass('mozFix');	
			}
		};
	
		// select items to apply tooltip function
		$('a[title != ""], .tip').cluetip({showtitle: false, arrows: true, splitTitle: '|'}); // default tips
		$('.tipInclude').cluetip({attribute: 'rel', showtitle: false, arrows: true}); // external file indluded tips
		
			
	// Text and password input styling
	// -------------------------------------------------------------------
	
	// This should be in the CSS file but IE 6 will ignore it.
	// If you have an input you don't want styles, add the class "noStyle"

	$("input[type='text']:not(.noStyle), input[type='password']:not(.noStyle)").each(function(){
		$(this).addClass('textInput');
	});


	// 3D ribbon scroll triggers
	// -------------------------------------------------------------------
	// trigger when scrolling occurs
	$(window).scroll(function () {
		ribbonPosition();
	});
	// run once on load
	ribbonPosition();	

						   
	// input lable replacement
	// -------------------------------------------------------------------
	$("label.overlabel").overlabel();

	// initialize anchor tag scrolling effect (scrollTo)
	// -------------------------------------------------------------------
	$.localScroll();
	
	// apply custom search input functions
	// -------------------------------------------------------------------
	searchInputEffect();
		
	// apply custom button styles
	// -------------------------------------------------------------------
	buttonStyles();
	
	// CSS Rounded Corners (not for IE)
	// -------------------------------------------------------------------
	if (!jQuery.browser.msie) {
		$("a.img, div.img, .textInput, input[type='text'], input[type='password'], textarea").addClass('rounded');	// items to add rounded class
		roundCorners(); // execute it!
	}
	
});




// ======================================================================
//
//	Design functions
//
// ======================================================================


	
// Modal after load functions
// -------------------------------------------------------------------

function modalStart() {
	// apply font replacement
	Cufon.replace('.fancy_title > div');
	
	// updated styles
	$('#fancy_inner').addClass('rounded');
	roundCorners();
}


// Ribbon scrolling effects 
// -------------------------------------------------------------------

function ribbonPosition() {
	var	t = $(window).scrollTop();
	var	h = $(window).height();
	
	// offset - increase or decrease size of middle (set to zero to disable)
	var	offset = $(window).height() / 25;	
	
	var	zoneSize = $(window).height() / 3;
	var	zoneOne = t + zoneSize + offset;
	var	zoneTwo = t + zoneSize * 2 - offset;
		
	$(".ribbon .wrapAround").each( function() {
		var obj = $(this);
		var objH = obj.height();
		var offset = obj.offset();
		if (offset.top + objH <= zoneOne) {
			$(this).css('background-position','0 0');
		} else if (offset.top >= zoneTwo) {
			$(this).css('background-position','0 -104px');
		} else {
			$(this).css('background-position','0 -52px');
		}
	});	
}



// Search input - custom effects for mouse over and focus.
// -------------------------------------------------------------------

// Search input - custom effects for mouse over and focus.
// -------------------------------------------------------------------

function searchInputEffect() {

	var	searchFocus = false,
		searchHover = false,
		searchCtnr = $('#Search'),
		searchInput = $('#SearchInput'),
		searchSubmit = $('#SearchSubmit');
	// Search input - mouse events
	if (searchCtnr.length > 0) {
		searchCtnr.hover(
			function () {	// mouseover
				if (!searchFocus) $(this).addClass('searchHover');
				searchHover = true; }, 
			function () {	// mouseout
				if (!searchFocus) $(this).removeClass('searchHover');
				searchHover = false;
		}).mousedown( function() {
			if (!searchFocus) $(this).removeClass('searchHover').addClass('searchActive');
		}).mouseup( function() {
			searchInput.focus();
			searchSubmit.show();
			searchFocus = true;
		});
		// set focus/blur events
		searchInput.blur( function() {
			if (!searchHover) {
				searchCtnr.removeClass('searchActive');
				searchSubmit.hide();
				searchFocus = false;
			}
		});
	}
}



// button styling function
// -------------------------------------------------------------------

function buttonStyles() {
	// Button styles
	
	// This will style buttons to match the theme. If you don't want a button
	// styled, give it the class "noStyle" and it will be skipped.
	$("button:not(:has(span),.noStyle), input[type='submit']:not(.noStyle), input[type='button']:not(.noStyle)").each(function(){
		var	b = $(this),
			tt = b.html() || b.val();
		
		// convert submit inputs into buttons
		if (!b.html()) {
			b = ($(this).attr('type') == 'submit') ? $('<button type="submit">') : $('<button>');
			b.insertAfter(this).addClass(this.className).attr('id',this.id);
			$(this).remove();	// remove input
		}
		b.text('').addClass('btn').append($('<span>').html(tt));	// rebuilds the button
	});
	
	// Get all styled buttons
	var styledButtons = $('.btn');
	
	// Fix minor problem with Mozilla and WebKit rendering (can also be done adding this to CSS, 
	// button::-moz-focus-inner {border: none;}
	// @media screen and (-webkit-min-device-pixel-ratio:0) { button span {margin-top: -1px;} }
	if (jQuery.browser.mozilla || jQuery.browser.webkit) {
		styledButtons.children("span").css("margin-top", "-1px");
	}
	
	// Button hover class (IE 6 needs this)
	styledButtons.hover(
		function(){ $(this).addClass('submitBtnHover'); },		// mouseover
		function(){ $(this).removeClass('submitBtnHover'); }	// mouseout
	);
}

// Rounded corner styles
// -------------------------------------------------------------------

function roundCorners() {
	$('.rounded, .ui-corner-all').css({
		'-moz-border-radius': '4px',
		'-webkit-border-radius': '4px',
		'border-radius': '4px'
	});
}
	
// Font replacement
// -------------------------------------------------------------------

Cufon.replace('h1, h2, h3, h4, h5, h6, .fancy_title div');

if ( !setBySkin ) {
	// we have an exception to allow custom styles to be applied by the demo.js
	// file if skinning is active. If skinning is not used the is not needed.
	Cufon.replace('.headline', {
				textShadow: '1px 1px rgba(255, 255, 255, 1)'})
			('.ribbon span', {
				hover: true,
				textShadow: '-1px -1px rgba(0, 0, 0, 0.4)'});
}

