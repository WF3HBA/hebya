$(function(){
      
     var browserWidth = $( window ).width();
    
     if (browserWidth > 991) {
            $(".info > button").hide();
     } else if (browserWidth < 992) {
             $(".info > button").show();
     }
      
    $("svg > path").click(function(){
        
        var id_country = ($(this).attr("id"));
        var country = id_country.split("_").join(" ");
        var browserWidth = $( window ).width();
         
        $(".info h3").hide().html(country).fadeIn();

        if (browserWidth < 991) {
            $('html, body').animate({
                scrollTop: $(".info").offset().top-50
            }, 800);
        };
    });
        
    $( window ).resize(function() {
        var browserWidth = $( window ).width();
        
        if (browserWidth > 991) {
            $(".info > button").hide();
        } else if(browserWidth < 992) {
             $(".info > button").show();
        }
    });
    
    $(".info > button").click(function(){
        $('html, body').animate({
            scrollTop: $("#container").offset().top-50
        }, 800);
    });
    
});


