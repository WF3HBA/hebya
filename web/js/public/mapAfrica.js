
 window.onload = function () {
        // Create canvas and define attributes shared by all paths.
        var R = Raphael("container", 620, 690),
          attr = {
          "fill": "#b9b9b9",
          "stroke": "#fff",
          "stroke-miterlimit": "4",
          "stroke-width": "1",
          "transform": "s0.06,0.06,60,0" // Scales the path to a useful size.
        }; 
        // Define map object. 
        var africaMap = {};
        for (var nation in africaPaths) {
          // Draw a path, then apply attributes to it.
          africaMap[nation] = R.path(africaPaths[nation]).attr(attr);
          // Name the internal Raphael id after the africaPaths property name.
          africaMap[nation].id = nation;
          // Name the element id after the africaPaths property name.
          africaMap[nation].node.id = nation;
        }
        // For an example of interaction via Raphael, uncomment the line below.
        // var demo1 = R.getById('tanzania').attr({"fill": "green"});
        // For an example of interaction via javascript, uncomment the line below.
        // var demo2 = document.getElementById('south_africa'); demo2.style.fill= "green";
      };
      
      
