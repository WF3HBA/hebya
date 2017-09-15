$(function(){
    
   $(".service-profil-button").click(function(e){
      
      e.preventDefault();
       
      var target = $(this).data('target');
       
      $.ajax({
          url: descriptionAjaxUrl,
          method: "GET",
          data: {"target": target}
      }).done(function(data){
          console.log(data);
          $('#service-header').html(data.header);
          $('#service-content').html(data.content);
      })
   }); 
});


