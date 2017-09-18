$(function(){
    
   $(".service-profil-button").click(function(e){
      
      e.preventDefault();
       
      var target = $(this).data('target');
       
      $.ajax({
          url: targetAjaxUrl,
          method: "GET",
          data: {"target": target}
      }).done(function(data){
          console.log(data);
          $('#service-content').hide().html(data.content).fadeIn(1000);
      })
   }); 
});


