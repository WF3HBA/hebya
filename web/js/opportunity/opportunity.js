$(function() { 
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
    
    
});




