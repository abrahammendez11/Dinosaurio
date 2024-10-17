var carousel = $('.carousel');
var seats = $('.carousel-seat');

function next(el) {
  return el.next().length > 0 ? el.next() : seats.first();
}

function prev(el) {
  return el.prev().length > 0 ? el.prev() : seats.last();
}

$('.toggle').on('click', function(e) {
  var el, new_seat;
  el = $('.is-ref').removeClass('is-ref');

  if ($(e.currentTarget).data('toggle') === 'next') {
    new_seat = next(el);
    carousel.removeClass('is-reversing');
  } else {
    new_seat = prev(el);
    carousel.addClass('is-reversing');
  }

  new_seat.addClass('is-ref').css('order', 1);

  var i;
  for (i = 2; i <= seats.length; i++) {
    new_seat = next(new_seat).css('order', i);
  }

  carousel.removeClass('is-set');
  setTimeout(function() {
    carousel.addClass('is-set');
  }, 50);
});