$(function() { 
    
    $('.parallax').imageScroll({
        coverRatio: 1,
        speed: 0.3
    });
    
    $( window ).resize(function() {

        if($(window).width() < 751){

            $(".emploi-form").hide();
            $("#affiner-recherche").show();

                $("#affiner-recherche").click(function(){
                    $(this).hide();
                    $('.icone-fermer').show();
                $(".emploi-form").show();

         });

        }
        else{
            $(".emploi-form").show();
            $("#affiner-recherche").hide();
            $('.icone-fermer').hide();
        }
    });


    $(".icone-fermer").click(function(){
        $(this).hide();
        $("#affiner-recherche").show();
        $(".emploi-form").hide(100);

    });
    
    function refresh() {
        var idCountry = $(".products-select-pays").val();
       var field = $(".products-select-field").val();
       var contrat = $("input[name=contrat]:checked").val();
       
       if (typeof contrat == 'undefined') {
           contrat = '';
       }

       $.ajax({
           url: countrySelect,
           type: 'GET',
           data: {'idcountry':idCountry, 'field': field, 'contrat_type':contrat},
           dataType: 'html'
       }).done(function(data){
           $('.emploi-annonce').html(data);
       });
    }
    
    $("#filter-form").on('change', 'select', function(){
       refresh();
   });
    
    $("#filter-form").on('change', 'input:radio', function(){
       refresh();
   });
});




