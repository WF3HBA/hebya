$(function(){
    
    $('.parallax').imageScroll({
        coverRatio: 1,
        speed: 0.3
    });
   
    $('.team-member a').click(function(e){
        
        e.preventDefault();
        
        var idteam_member = $(this).attr('id');
        console.log(idteam_member);
    });
      
   $(".team-member").click(function(){

       var memberName = $(this).find('.team-member-name').html();
       var memberTitle = $(this).find('.team-member-title').html();
       var memberDescription = $(this).find('.team-member-description').html();
       
       var fullDescription = $('.full-description');
       fullDescription.find('h1').html(memberName);
       fullDescription.find('h2').html(memberTitle);
       fullDescription.find('.team-member-full-description').html(memberDescription);
       
       $(".full-description").css('display','block');
   });
   
});


