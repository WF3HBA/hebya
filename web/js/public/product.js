$(function () {

  $('.parallax').imageScroll({
    coverRatio: 1,
    speed: 0.3
  });

  $(".overlay-button").click(function () {
    
    var $row = $(this).closest('.product-row');
    var name = $row.find('.product-name').html();
    var content = $row.find('.product-content').html();
    var picture = $row.find('.img-thumbnail').attr('src');

    $('#product-overlay h2').html(name);
    $('#product-overlay img').attr('src', picture);
    $('#product-detail').html(content);
    
    $('body').toggleClass('noscroll');
    $('#product-overlay').fadeIn(600);
  });
  
  $('#close-overlay').click(function(){
    $('#product-overlay').fadeOut();
    $('body').toggleClass('noscroll');
  });

  $("#filter-form").on('change', 'select', function () {
    var idCountry = $(".country-select").val();
    var field = $(".field-select").val();

    $.ajax({
      url: countrySelect,
      type: 'GET',
      data: {'idcountry': idCountry, 'field': field},
      dataType: 'html'
    }).done(function (data) {
      $('#product-list').html(data);
    });
  });
});