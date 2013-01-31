$(document).ready(function(){

  var categories = [
    { category: 'Regular Division',
      sites: [
        {name: 'Jellify',     url: 'http://jellify.herokuapp.com/', image: 'site_images/jellify.png'},
        {name: 'PsetParty',   url: 'http://psetparty.xvm.mit.edu:3333/login.html', image: 'site_images/psetparty.png'},
        {name: 'Notability',  url: 'http://www.notability.org/', image: 'site_images/notability.png'},
        {name: 'Trippr',      url: 'http://trippr.info', image: 'site_images/trippr.png'},
        {name: 'Happenline',  url: 'http://ckbaum.scripts.mit.edu/happenline/', image: 'site_images/happenline.png'},
        {name: 'Lapine',      url: 'http://edu.xvm.mit.edu/', image: 'site_images/lapine.png'},
        {name: 'YourTale',    url: 'http://yourtale.herokuapp.com/', image: 'site_images/yourtale.png'},
        {name: 'liveClass',   url: 'http://18.95.7.152:3000/', image: 'site_images/liveclass.png'},
        {name: 'Atlas',       url: 'http://agile-sands-2491.herokuapp.com/', image: 'site_images/atlas.png'},
        {name: 'Set-up',      url: 'http://set-up.mit.edu/', image: 'site_images/setup.png'},
        {name: 'TrippedUp',   url: 'http://trippedup.herokuapp.com/', image: 'site_images/trippedup.png'},
        {name: 'Carbonate',   url: 'http://felixsun.scripts.mit.edu/orgo', image: 'site_images/carbonate.png'},
        {name: 'Ultramarine', url: 'http://ultramarine.herokuapp.com/', image: 'site_images/ultramarine.png'},
      ],
    },
    { category: 'Rookie Division',
      sites: [
        {name: 'Test#Code', url: 'http://jains.scripts.mit.edu/testcode/', image:'site_images/testcode.png'},
        {name: 'SubmitQ',   url: 'http://harlin.scripts.mit.edu/submitq/', image: 'site_images/submitq.jpg'},
        {name: 'DreamTrip', url: 'http://jinala.scripts.mit.edu/tripideas.php', image: 'site_images/dreamtrip.png'},
        {name: 'Apparate',  url: 'http://liyihua.scripts.mit.edu/', image: 'site_images/apparate.png'},
        {name: 'Travelog',  url: 'http://wqian94.scripts.mit.edu/DWL/', image: 'site_images/travelog.png'},
      ]
    }
  ];

  // randomize category and site order
  //categories = _.shuffle(categories);
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
    var html = '<div class="category">'
      + '<h1>' + c.category + '</h1>'
      + '<h4>vote for your favourite(s) by <em>liking</em> a website</h2>';

    _.each(c.sites, function(o){
      html += '<div class="site">'
        +   '<div>'
        +     '<a href="' + o.url + '">' + o.name + '</a>'
        +     '<div class="clear"/>'
        +     '<div class="fb-like" data-href="' + o.url + '" data-send="true" data-layout="button_count" data-width="150" data-show-face="false" data-font="verdana"/>'
        +   '</div>'
        +   '<img src="' + o.image + '">'
        + '</div>';
    });

    html += '</div><div class="clear"/>'

    $('.jcarousel-container').append(html);

  });

});
