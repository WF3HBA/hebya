$(function(){
    $('svg > path').click(function(){
          var id_country = $(this).attr("id");
        var country = id_country.split("_").join(" ");
        
        
        $.ajax({
           url: countrySelect,
           type: 'GET',
           data: {'name':country},
           dataType: 'html'
        }).done(function(data){
            //JSON.parse(data);
            console.log(data);
           $('#include').html(data);
       });
    });
})