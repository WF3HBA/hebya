$(function(){
   
    $('.parallax').imageScroll({
        coverRatio: 1,
        speed: 0.3
    });
    
    $("#filter-form").on('change', 'select', function(){
       var idCountry = $(".innovators-select-pays").val();
//       var field = $(".products-select-field").val();

       $.ajax({
           url: countrySelect,
           type: 'GET',
           data: {'country':idCountry},
           dataType: 'html'
       }).done(function(data){
           $('#innovator-list').html(data);
       });
   });
});
