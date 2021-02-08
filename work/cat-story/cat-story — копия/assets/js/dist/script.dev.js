"use strict";

// TODO Preloader
$(window).on('load', function () {
  $('.preloader').fadeOut().end().delay(4000).fadeOut('slow');
}); // TODO Preloader End
// TODO Search Start

$('input').focus(function () {
  $('label').hide();
});
$('input').blur(function () {
  $('label').show();
}); // TODO Search End