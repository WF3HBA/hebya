$(function(){
   
    $('.team-member a').click(function(e){
        
        e.preventDefault();
        
        var idteam_member = $(this).attr('id');
        console.log(idteam_member);
    })
    
});


