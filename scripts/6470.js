var currentSlide = 1;
var numslides;

var slideChanger = function(slideNumber) {
	return function() {
		changeSlide(slideNumber);
		pauseCarousel();
	}
}

var changeSlide = function(slideNumber) {
	// get the outer width without margin
	var slideWidth = $("div#carousel_panel").outerWidth(); 
	numslides = $("div.slide").length;
	// where to start the slide
	var startx = slideWidth;
	// where to send the other slide
	var endx = -slideWidth;
	if(currentSlide > slideNumber) {
		startx = -slideWidth; // start it on the left
		endx = slideWidth;
	}
	$("div.slide_"+slideNumber).animate({
		left:startx
	}, 0);
	$("div.slide_"+slideNumber).animate({
		left:0
	}, 500);
	$("div.slide_"+currentSlide).animate({
		left:endx
	}, 500);
	
	currentSlide = slideNumber;
};

// pauses the carousel's auto sliding function
// for a while.
var pauseCarousel = function() {
	clearTimeout(autoplaytimer);
	autoplaytimer = setTimeout(autoPlay, 20000);
}

var autoplaytimer;
var autoPlay = function() {
	next = currentSlide + 1;
	if(next > numslides)
		next = 1;
	changeSlide(next);
	autoplaytimer = setTimeout(autoPlay, 5000);
}

$(document).ready(function () {
	var slideWidth = $("div#carousel_panel").outerWidth(); 
	// change all but the first slide
	console.log($("div.slide+div.slide"));
	$("div.slide+div.slide").css({"left":slideWidth+"px"});
	$("div.slide_1").css({"left":"0px"});
	currentSlide = 1;
	//changeSlide(2);
	
	for(var i = 1; i <= 4; i++)
		$("a.slide_"+i).click(slideChanger(i));
	
	autoplaytimer = setTimeout(autoPlay, 5000);
});