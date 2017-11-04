$(function(){
    
    $('.parallax').imageScroll({
        coverRatio: 1,
        speed: 0.3
    });
    
    $(document).on("click", ".button-detail", function () {
    
    var $client = $(this).closest('.client-box');
    var name = $client.find('.client-name').html();
    var content = $client.find('.client-description').html();
    var picture = $client.find('img').attr('src');
    
    console.log(name);

    $('#client-overlay h2').html(name);
    $('#client-overlay img').attr('src', picture);
    $('#client-detail').html(content);
    
    $('body').toggleClass('noscroll');
    $('#client-overlay').fadeIn(600);
    
  });
  
  $('#close-overlay').click(function(){
    
    $('#client-overlay').animate({scrollTop:0},200);
    $('#client-overlay').fadeOut();
    $('body').toggleClass('noscroll');
  });
    
});


