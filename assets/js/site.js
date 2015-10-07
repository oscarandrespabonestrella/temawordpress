$(window).on('resize', function(){
    $('#container').isotope('reLayout')
});

$('#nav').onePageNav({
    currentClass: 'active',
    changeHash: false,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
    begin: function() {
        //I get fired when the animation is starting
    },
    end: function() {
        //I get fired when the animation is ending
    },
    scrollChange: function($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
    }
});

$(window).load( function() {
  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.product'
  });

  // store filter for each group
  var filters = {};

  $('.filters').on( 'click', '.filters', function() {
    var $this = $(this);
    // get group key
    var $buttonGroup = $this.parents('.button-group1');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    // set filter for group
    filters[ filterGroup ] = $this.attr('data-filter');
    // combine filters
    var filterValue = concatValues( filters );
    // set filter for Isotope
    $grid.isotope({ filter: filterValue });
  });

  // change is-checked class on buttons


});

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}
