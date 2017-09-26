$(function(){
    
    $('.parallax').imageScroll({
        coverRatio: 1,
        speed: 0.3
    });
    
   $(".boutton-products-body").click(function(){

       var $row = $(this).closest('.product-row');
       var name = $row.find('.product-name').html();
       var content = $row.find('.product-content').html();
         
       console.log(name);
       
       var $detail = $('.product-detail');
       $detail.find('h1').html(name);
       $detail.find('.product-detail-content').html(content);
       
       $(".product-detail").css('display','block');
   });
   
   $("#filter-form").on('change', 'select', function(){
       var idCountry = $(".products-select-pays").val();
       var field = $(".products-select-field").val();

       $.ajax({
           url: countrySelect,
           type: 'GET',
           data: {'idcountry':idCountry, 'field': field},
           dataType: 'html'
       }).done(function(data){
           $('#product-list').html(data);
       });
   });
});