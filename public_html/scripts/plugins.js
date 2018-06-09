// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

// Place any jQuery/helper plugins in here.

$(document).ready(function () {
  var $grid = $('.grid').packery({
    // options
    itemSelector: '.grid-item',
    gutter: '.gutter-sizer',
    columnWidth: '.grid-sizer',
    percentPosition: true,
  });

  $grid.imagesLoaded().progress(function() {
    $grid.packery('layout');
  });

  var pckry = $grid.data('packery');

  $grid.infiniteScroll({
    append: '.grid-item',
    outlayer: pckry,
    
  })

  //Disable right-click
  $('.grid-item').on('contextmenu',function(e){
    return false;
  });

  //Disable cut, copy, paste
  $('.grid-item').bind('cut copy paste', function (e) {
    e.preventDefault();
  });
});

