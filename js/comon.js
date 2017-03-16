$(document).ready(function(){
  $('#bank').hide();
  $('#rating-micro').addClass('active-rating');
  $('#rating-bank').click(function() {
    $('#micro-zaim').hide();
    $('#rating-micro').removeClass('active-rating');
    $('#rating-bank').addClass('active-rating');
    $('#bank').show();

  });

  $('#rating-micro').click(function() {
    $('#bank').hide();
    $('#rating-bank').removeClass('active-rating');
    $('#rating-micro').addClass('active-rating');
    $('#micro-zaim').show();

  });

  $("#slider").slider();
});


