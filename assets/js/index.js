// Globals
var $win = $( window );
var body = $('body');
var animEndEv = 'webkitAnimationEnd animationend';

// Search Form
// var navbar_search_form = $('.navbar-search-form input')
// navbar_search_form.on('focus blur', function(e) {
// 	var form = $(this).parents('form');

// 	form.toggleClass('expanded');
// })

// Services slider
var services_slider = $('.services-slider'),
	navtabs = services_slider.find('.nav-tabs > li > a'),
	selected = services_slider.find('.nav-tabs > li.active > a'),
	arrow = services_slider.find('.arrow'),
	arrowSize = (arrow.width() / 2) - 2,
	companyTitle = services_slider.find('.company-title'),
	moveArrow = function(item) {
		if (item && item.length) {
			var li = item.parent();

			companyTitle.html(item.find('span').html());
			arrow.stop().animate({
				'left' : (li.position().left + arrowSize) + (li.width() / 2)
			});
		}
	};

navtabs.on('click', function(e) {
	selected = $(this);
	moveArrow(selected);
});

if (selected) {
	moveArrow(selected);

	$win.on('resize', function() {
		moveArrow(selected);
	})
}


// Navbar
var navbar_transparent = $('.navbar-theme-transparent');
if (navbar_transparent.length) {
	var navbar_white = $('.navbar-theme-white');
	var controller = new ScrollMagic.Controller();

	var a = ['enter','start','progress','end','leave'];
	var scene = new ScrollMagic.Scene({
		offset: 200
	})
	.addTo(controller)
	.on('enter', function(event) {
		navbar_transparent.removeClass('slideDown').addClass('slideUp');
		navbar_white.removeClass('slideUp').addClass('slideDown');
	})
	.on('leave', function(event) {
		navbar_transparent.removeClass('slideUp').addClass('slideDown');
		navbar_white.removeClass('slideDown').addClass('slideUp');
	})
}

$('[data-scrollrama=true]').each(function() {
	var carousel = $(this);
	var addclass = carousel.data('addclass');
	var scene = new ScrollMagic.Scene({
		offset: carousel.data('offset')
	})
	.addTo( new ScrollMagic.Controller() )
	.on('enter', function(event) {
		carousel.addClass(addclass);
	})
	.on('leave', function(event) {
		carousel.removeClass(addclass);
	})
})

// Carousel
var $myCarousel = $('.carousel').carousel();

// Touche events
$myCarousel.find('.carousel-inner').swipe({
	//Generic swipe handler for all directions
	swipeLeft:function(event, direction, distance, duration, fingerCount) {
		$(this).parent().carousel('next');
	},
	swipeRight: function() {
		$(this).parent().carousel('prev');
	},
	//Default is 75px, set to 0 for demo so any distance triggers swipe
	threshold:0
});

// Carousel animation
// Source: http://www.sitepoint.com/bootstrap-carousel-with-css3-animations/
function doAnimations(elems) {

  elems.each(function () {
    var $this = $(this),
        $animationType = $this.data('animation');

    // Add animate.css classes to
    // the elements to be animated
    // Remove animate.css classes
    // once the animation event has ended
    $this.addClass($animationType).one(animEndEv, function () {
      $this.removeClass($animationType);
    });
  });
}

// Select the elements to be animated
// in the first slide on page load
var $firstAnimatingElems = $myCarousel.find('.item:first')
                           .find('[data-animation ^= "animated"]');

// Apply the animation using our function
doAnimations($firstAnimatingElems);

// Pause the carousel
$myCarousel.carousel('pause');

// Attach our doAnimations() function to the
// carousel's slide.bs.carousel event
$myCarousel.on('slide.bs.carousel', function (e) {
  // Select the elements to be animated inside the active slide
  var $animatingElems = $(e.relatedTarget)
                        .find("[data-animation ^= 'animated']");
  doAnimations($animatingElems);
});

// Map
var gmap = $('.gmap');
if (gmap.length) {
	var gmap_coordinates = [gmap.data('coord-x'), gmap.data('coord-y')];
	gmap.gmap3({
		map:{
			options:{
				center:gmap_coordinates,
				zoom: gmap.data('zoom'),
				mapTypeControl: false,
				navigationControl: false,
				scrollwheel: false,
				streetViewControl: false,
                draggable: false
			}
		}
	});
}

// Parallax
$('.parallax').each(function(){
	var div = $(this);

	// Parallax
	var controller = new ScrollMagic.Controller({
		globalSceneOptions: {triggerHook: "onEnter", duration: "100%"}
	});

	// build scenes
	var scene = new ScrollMagic.Scene({
		// triggerElement: div.parent()
	})
	.setTween(div, {
		y: "80%",
		opacity: 0,
		ease: Linear.easeNone
	})
	.addTo(controller);
});

// Animation
$(function() {
	var setupScrollmagic = function(el) {
		var options = el.data('scrollmagic')
		var controller = new ScrollMagic.Controller({
			globalSceneOptions: {triggerHook: "onCenter", duration: "100%", triggerElement: el}
		});
		var initial = el.data('initalstyle')
		if (initial) {
			initial = eval(initial);
			el.css(initial);
		}

		if (options) {
			options = eval(options);
			var scene = new ScrollMagic.Scene()
				.setTween(el, options)
				.addTo(controller);
		}
	}

	$('.to_animate').each(function(){
		var el = $(this);
		el.addClass("animated").addClass(el.data('to-animate')).one(animEndEv, function() {
			el.removeClass('to_animate');
			el.css('animation-name', 'no-animation');

			if (el.hasClass('doscrollmagic')) {
				setupScrollmagic(el);
			}
		});
	});

	$('.doscrollmagic').not('.to_animate').each(function(){
		var el = $(this);
		setupScrollmagic(el);
	});
});

// Face detection an Focus point

$('.facefocus').each(function(){
	var el = $(this),
		img = el.find('> img');
	img.faceDetection({
		complete: function (faces) {
			if (faces) {
				var face = faces[0],
					w = img.width(),
					h = img.height(),
					faceX = face.x,
					faceY = face.y,
					x = ((faceX)/w),
					y = ((faceY)/h);

				el.data('focus-x', x);
				el.data('focus-y', y);

				el.focusPoint();
			};
		}
	});
});

// Full Search bar

$('.show-full-search').on('click', function(e) {
	e.preventDefault();

	var search = $('.navbar-full-search');

	search.fadeIn(function() {
		search.find('input').focus();
	});

	search.find('.close').one('click', function(e) {
		e.preventDefault();
		search.fadeOut(function() {
			search.hide();
		});
	});

})


//FAQ Tab
$('.panel').addClass('collapse in');
$('.faq-3 label[role="filter"]').click(function(e){
  var filter = $(this).attr('data-filter') || '.panel';
  $('.panel' + filter ).collapse('show');
  $('.panel:not(' + filter + ')').collapse('hide');
});

//downloads filter
$('.download-item').addClass('collapse in');
$('.downloads label[role="filter"]').click(function(e){
  var filter = $(this).attr('data-filter') || '.download-item';
  $('.download-item' + filter ).addClass('in');
  $('.download-item:not(' + filter + ')').removeClass('in');
});