$(window).on('load', function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(1350).fadeOut('slow'); // will fade out the white DIV that covers the website.
  $('body').delay(1350).css({
    'overflow': 'visible'
  });
  $('#preloader').fadeOut('slow', function() {
    $(this).remove();
  });
})
