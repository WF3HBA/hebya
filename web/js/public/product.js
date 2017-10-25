$(function () {

  $('.parallax').imageScroll({
    coverRatio: 1,
    speed: 0.3
  });

  $(".boutton-products-body").click(function () {
    
    console.log("click");
    
    var name = $('.product-name').html();
    var content = $('.product-content').html();
    
    console.log(name);
    console.log(content);

    $('#product-overlay h2').html(name);
    $('#product-detail').html(content);

    $('#product-overlay').fadeIn(600);
  });

  $("#filter-form").on('change', 'select', function () {
    var idCountry = $(".products-select-pays").val();
    var field = $(".products-select-field").val();

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