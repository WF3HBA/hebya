$(function(){
   
    $('.parallax').imageScroll({
        coverRatio: 1,
        speed: 0.3
    });
    
    $(document).on('click', '.provider-detail', function(){

       var $provider = $(this);
       var name = $provider.find('.provider-name').html();
       var company = $provider.find('.provider-company').html();
       var picture = $provider.find('img').attr('src');
       var content = $provider.find('.provider-content').html();
         
       console.log(name);
       
       var $detail = $('.provider-modal');
       $detail.find('h2').html(name);
       $detail.find('h3').html(company);
       $detail.find('.provider-detail-content').html('<img src="'+picture+'">').append(content);
       
       $(".provider-modal").css('display','block');
    });
    
    $("#filter-form").on('change', 'select', function(){
       var idCountry = $(".providers-select-pays").val();
//       var field = $(".products-select-field").val();

       $.ajax({
           url: countrySelect,
           type: 'GET',
           data: {'country':idCountry},
           dataType: 'html'
       }).done(function(data){
           $('#provider-list').html(data);
       });
   });
});
