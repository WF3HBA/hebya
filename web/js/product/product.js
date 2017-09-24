$(function(){
    
   $(".boutton-products-body").click(function(){

       var $row = $(this).closest('.product-row');
       var name = $row.find('.product-name').html();
       var content = $row.find('.product-content').html();
       
       var $detail = $('.product-detail');
       $detail.find('h1').html(name);
       $detail.find('.product-detail-content').html(content);
       
       $(".product-detail").css('display','block');
   });
   
   $(".products-select-pays").change(function(){
       var idCountry = $(".products-select-pays option:selected").val();
       console.log(idCountry);

       $.ajax({
           url: countrySelect,
           type: 'GET',
           data: {'idcountry':idCountry}
       }).done(function(data){
           JSON.parse(data);
            console.log(data);
       });
   });
});