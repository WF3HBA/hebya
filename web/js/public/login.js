$(function(){
    $('#login').click(function(e){
        e.preventDefault();
        $('.register').hide().fadeOut(1000);
        $('.log-in').fadeIn(1000);
    
    });    
});
