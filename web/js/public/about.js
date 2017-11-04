$(function(){
    
    $('.parallax').imageScroll({
        coverRatio: 1,
        speed: 0.3
    });
   
    $(document).on('click', '.about-detail', function(){

       var $teamMember = $(this).closest('.box');
       var name = $teamMember.find('.name').html();
       var title = $teamMember.find('.title').html();
       var picture = $teamMember.find('img').attr('src');
       var content = $teamMember.find('.team-content').html();
         
       console.log(picture);
       
       var $detail = $('.team-modal');
       $detail.find('h2').html(name);
       $detail.find('h3').html(title);
       $detail.find('.team-detail-content').html('<img src="'+picture+'">').append(content);
       
       $(".team-modal").css('display','block');
    });
   
});


