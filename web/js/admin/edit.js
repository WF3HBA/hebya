// $(function($) {
//   var temps = $.ajax({
//   url : "http://api.wunderground.com/api/08eeb597d7e76460/geolookup/conditions/q/SN/Dakar.json",
//   dataType : "jsonp",
//   success : function(parsed_json) {
//   var location = parsed_json['location']['city'];
//   var temp_c = parsed_json['current_observation']['temp_c'];
  
     
//         if(temp_c > 15){
//             $('.asset1').html('<i class="fa fa-sun-o" aria-hidden="true"></i>').append("         " + temp_c + " C° " + location + ", Senegal");
//             $('.fa-sun-o').css({"color": "orange", "font-size": "25px"});
//         }
//         else {
//             $('.asset1').html('<i class="fa fa-cloud" aria-hidden="true"></i>').append("  Current temperature in " + location + " is: " + temp_c + ' C°');
//             $('.fa-cloud').css('color','blue');
//         }
//   }
//   });
  
//   var temps  = $.ajax({
//   url : "http://api.wunderground.com/api/08eeb597d7e76460/geolookup/conditions/q/MA/Meknes.json",
//   dataType : "jsonp",
//   success : function(parsed_json) {
//   var location = parsed_json['location']['city'];
//   var temp_c = parsed_json['current_observation']['temp_c'];
  
     
//         if(temp_c > 15){
//             $('.asset2').html('<i class="fa fa-sun-o" aria-hidden="true"></i>').append(" " + temp_c + " C° " + location + ", Maroc");
//             $('.fa-sun-o').css({"color": "orange", "font-size": "25px"});
//         }
//         else {
//             $('.asset2').html('<i class="fa fa-cloud" aria-hidden="true"></i>').append(" " + temp_c + " C° " + location + ", Maroc");
//             $('.fa-cloud').css({"color": "dodgerblue", "font-size": "25px"});
//         }
//   }
//   });
  
//   var temps  = $.ajax({
//   url : "http://api.wunderground.com/api/08eeb597d7e76460/geolookup/conditions/q/BF/Ouagadougou.json",
//   dataType : "jsonp",
//   success : function(parsed_json) {
//   var location = parsed_json['location']['city'];
//   var temp_c = parsed_json['current_observation']['temp_c'];
  
     
//         if(temp_c > 15){
//             $('.asset3').html('<i class="fa fa-sun-o" aria-hidden="true"></i>').append(" " + temp_c + " C° " + location + ", Burkina");
//             $('.fa-sun-o').css({"color": "orange", "font-size": "25px"});
//         }
//         else {
//             $('.asset3').html('<i class="fa fa-cloud" aria-hidden="true"></i>').append(" " + temp_c + " C° " + location + ", Burkina");
//             $('.fa-cloud').css({"color": "dodgerblue", "font-size": "25px"});
//         }
//   }
//   });
  
//   var temps  = $.ajax({
//   url : "http://api.wunderground.com/api/08eeb597d7e76460/geolookup/conditions/q/DZ/Alger.json",
//   dataType : "jsonp",
//   success : function(parsed_json) {
//   var location = parsed_json['location']['city'];
//   var temp_c = parsed_json['current_observation']['temp_c'];
  
     
//         if(temp_c > 15){
//             $('.asset4').html('<i class="fa fa-sun-o" aria-hidden="true"></i>').append(" " + temp_c + " C° " + location + ", Algerie");
//             $('.fa-sun-o').css({"color": "orange", "font-size": "25px"});
//         }
//         else {
//             $('.asset4').html('<i class="fa fa-cloud" aria-hidden="true"></i>').append(" " + temp_c + " C° " + location + ", Algerie");
//             $('.fa-cloud').css({"color": "dodgerblue", "font-size": "25px"});
//         }
//   }
//   });
 
// });