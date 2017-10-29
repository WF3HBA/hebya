$(function () {

  $(window).scroll(function () {
    posScroll = $(document).scrollTop();
    if (posScroll >= 260)
      $('.glyphicon-chevron-up').fadeIn(600);
    else
      $('.glyphicon-chevron-up').fadeOut(600);
  });

  $(".glyphicon-chevron-up").click(function () {

    $('html,body').animate({
      scrollTop: $("#top").offset().top}, 'slow');
  });

});