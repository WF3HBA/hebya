$(function(){
    
    $('.parallax').imageScroll({
        coverRatio: 1,
        speed: 0.3  
    });
    
   $(".service-profil-button").click(function(e){
      
      e.preventDefault();
       
      var id = $(this).data('id').trim();
      console.log(id);
       
      $.ajax({
          url: targetAjaxUrl,
          method: "GET",
          data: {"id": id}
      }).done(function(data){
          console.log(data);
          $('#service-content').hide().html(data.content).fadeIn(1000);
      })
   }); 
   
});
 
