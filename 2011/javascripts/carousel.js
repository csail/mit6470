var currentSlide = 1;
var numslides;

/**
 * Returns a function that changes the carousel
 * to the slide given by slide number.
 * @param slideNumber
 * @returns
 */
var slideChanger = function(slideNumber) {
	return function() {
		changeSlide(slideNumber);
		pauseCarousel();
	}
}

/**
 * Causes the carousel to switch to the next slide.
 */
var nextSlide = function() {
	var slide = currentSlide+1;
	if(slide > numslides)
		slide = 1;
	changeSlide(slide);
	pauseCarousel();
}

var prevSlide = function() {
	var slide = currentSlide - 1;
	if(slide < 1)
		slide = numslides;
	changeSlide(slide);
	pauseCarousel();
}

/**
 * Changes the carousel to show slide given by
 * slide number.
 */
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

	
	if (currentSlide != slideNumber) {
		$("div.slide_" + slideNumber).animate({
			left : startx
		}, 0);
		$("div.slide_" + slideNumber).animate({
			left : 0
		}, 500);
		// Hide current slide.
		$("div.slide_" + currentSlide).animate({
			left : endx
		}, 500);
	}
	
	currentSlide = slideNumber;
};


/**
 *  pauses the carousel's auto sliding function
 *  for a while.
 */
var pauseCarousel = function() {
	clearTimeout(autoplaytimer);
	autoplaytimer = setTimeout(autoPlay, 20000);
}

var autoplaytimer;
/**
 * Autoplays the carousel's slides
 * @returns
 */
var autoPlay = function() {
	next = currentSlide + 1;
	if(next > numslides)
		next = 1;
	changeSlide(next);
	autoplaytimer = setTimeout(autoPlay, 5000);
}

/*********
 * Initialize the carousel.
 */
$(document).ready(function () {
	var slideWidth = $("div#carousel_panel").outerWidth(); 
	// change all but the first slide
	$("div.slide + div.slide").css({ "left" : slideWidth + "px" });
	$("div.slide_1").css({ "left" : "0px" });
	currentSlide = 1;
	//changeSlide(2);
	numslides = $("div.slide").length;
	
	for(var i = 1; i <= 4; i++)
		$("a.slide_" + i).click(slideChanger(i));
	$("a.slide_next").click(nextSlide);
	$("img[src=images\\/right_arrow\\.png]").click(nextSlide);
	$("a.slide_prev").click(prevSlide);
	$("img[src=images\\/left_arrow\\.png]").click(prevSlide);
	
	autoplaytimer = setTimeout(autoPlay, 5000);
});