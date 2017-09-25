$(function() { 
    
    $('.parallax').imageScroll({
        coverRatio: 1,
        speed: 0.3
    });
    
   });
    
 $(function(){
    
	$("#cool").click(function() {

		$('html,body').animate({
	      scrollTop: $("#top").offset().top},'slow');
          
	   
	});
	

});