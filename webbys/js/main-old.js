$(document).ready(function(){

  var categories = [
    { category: 'rookie',
      sites: [
        {name: 'Team Awesome', url: 'http://google.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Bawesome', url: 'http://facebook.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Cawesome', url: 'http://reddit.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Dawesome', url: 'http://technocratnews.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Ewesome', url: 'http://technocratnews.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Fawesome', url: 'http://technocratnews.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
      ],
    },
    { category: 'regular',
      sites: [
        {name: 'Team Gawesome', url: 'http://technocratnews.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Hawesome', url: 'http://technocratnews.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Iwesome', url: 'http://technocratnews.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Jawesome', url: 'http://google.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Kawesome', url: 'http://facebook.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
        {name: 'Team Lawesome', url: 'http://reddit.com', image: 'https://en.gravatar.com/userimage/30757388/95afa5ef5dbbef85eaeffdec69d1ea93.jpg'},
      ]
    }
  ];

  // randomize category and site order
  categories = _.shuffle(categories);
  _.each(categories, function(c){
    c.sites = _.shuffle(c.sites);
  });

  // utils
  var autoTime = 2000;
  var getCarouselCategory = function(self) {
    return _.filter(categories, function(c){
      return c.category == $(self).parents('.jcarousel-wrapper')[0].id;
    })[0];
  };

  // setup
  _.each(categories, function(c){
    var carousel, carouselAttrs;

    // construct carousel
    carousel = $(
      '<div class="jcarousel-wrapper" id="' + c.category + '">'
      + '<div class="prev"/>'
      + '<div class="jcarousel"><ul></ul></div>'
      + '<div class="next"/>'
      + '</div>'
      + '<div class="clear"/>'
    );
    _.each(c.sites, function(o){
      $(carousel).find('ul').append(
          '<li>'
        +   '<div>'
        +     '<a href="' + o.url + '">' + o.name + '</a>'
        +   '</div>'
        +   '<div class="fb-like" data-href="' + o.url + '" data-send="true" data-layout="button_count" data-width="150" data-show-face="false" data-font="verdana"/>'
        +   '<img width=100 src="' + o.image + '">'
        + '</li>'
      );
    });
    $('.jcarousel-container').append(carousel);

    // apply carouselLite
    carouselAttrs = {
      btnPrev: '#' + c.category + ' .prev',
      btnNext: '#' + c.category + ' .next',
      speed: 1000,
    }
    $('#' + c.category + ' .jcarousel').jCarouselLite(carouselAttrs);

    // fake autoscroll
    c.scrollAction = "$('" + carouselAttrs.btnNext + "').trigger('click');";
    c.autoScroll = setInterval(c.scrollAction, autoTime);

  });

  // don't autoscroll when carousel is hovered
  $('.jcarousel, .next, .prev')
  .hover(function() {
    clearInterval( getCarouselCategory(this).autoScroll );
  }).mouseleave(function() {
    var cat = getCarouselCategory(this);
    cat.autoScroll = setInterval(cat.scrollAction, autoTime);
  });
  
});
