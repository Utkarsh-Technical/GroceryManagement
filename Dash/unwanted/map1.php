<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>DOT | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="favicon.ico">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.07a59de7b920cd76b874.css" rel="stylesheet"></head>
    <title>Complex Marker Icons</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOLGMwJeN9KX2et9cj77cIc1ygvHDr7mU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        width: 70%;
        margin: 25px;
        margin-left: 25%;

      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>// The following example creates complex markers to indicate beaches near
// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
// to the base of the flagpole.

function initMap() {
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: { lat: -33.9, lng: 151.2 }
  });

  setMarkers(map);
}

// Data for the markers consisting of a name, a LatLng and a zIndex for the
// order in which these markers should display on top of each other.
var beaches = [
  ["Bondi Beach", -33.890542, 151.274856, 4],
  ["Coogee Beach", -33.923036, 151.259052, 5],
  ["Cronulla Beach", -34.028249, 151.157507, 3],
  ["Manly Beach", -33.80010128657071, 151.28747820854187, 2],
  ["Maroubra Beach", -33.950198, 151.259302, 1]
];

function setMarkers(map) {
  // Adds markers to the map.

  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.

  // Origins, anchor positions and coordinates of the marker increase in the X
  // direction to the right and in the Y direction down.
  var image = {
    src:"assets\Map\store2.png",
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(20, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32)
  };
  // Shapes define the clickable region of the icon. The type defines an HTML
  // <area> element 'poly' which traces out a polygon as a series of X,Y points.
  // The final coordinate closes the poly by connecting to the first coordinate.
  var shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: "poly"
  };
  for (var i = 0; i < beaches.length; i++) {
    var beach = beaches[i];
    var marker = new google.maps.Marker({
      position: { lat: beach[1], lng: beach[2] },
      map: map,
      icon: image,
      shape: shape,
      title: beach[0],
      zIndex: beach[3]
    });
  }
}</script>
<!--
   <script>
    function initMap(){
       // map options
        var options = {
            zoom:8,
            center:{ lat: 28.7041, lng: 77.1025},
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
        }
        
        // New Map
        var map=new google.maps.Map(document.getElementById('map'), options);
//         This is for one Marker
        // add Maker
        var marker = new google.maps.Marker({
            position:{lat:<?php echo 26.8467 ?>, lng:<?php echo 80.9462?>},
            map: map,
            icon: 'https://lh3.googleusercontent.com/LX7ksv8ckmTMu0HPw0b2-90pL1tZB6F9df2Wuq6WGodTaDfNscxcVlbDJoUPwojEdh_GR9uc1K4WEgRVnvVZk7dBLEnuwe9OHv7yQFyOjNIFvyHihxl93phKTLq78wzYHlDJocVb6r7hSk7GIaDG2pALMk9-2tv2R7xWg3tQvZMzAWVrVkRcVYkK1TR3OefHJ8qGwbx10iFsZmAHCJNlAkMSN-7jo1kE8Ju1C3K88lSMc8Mf4Bl1A8J6t0VjJa0oqsfmJcySMHTrhse4XnmoVUpr9DEgxzyxHRV4kQW9fGZ1XsKZq1JuCnP3A8UwnPg-y5aeHslfmC78J1dIc0UpVv1S-vowHYq8k4gKMUtwe7OWt_V_MJMUETH9969CXgGejsI3q9aXhtllAjEOh7U8uuofzaCTvXAb0939Vo3L0RGyscxFD44qex2URWoCiO_5_QhrFjAt3kPx2Q0vHuoyGiYDGilGw53BYYcvGtCj_74FSIAdNOBWTS9iGROsXd4yibATPQcQepH-cEhhZOUxUGw8V7Qhxyq8HYSPv2q3QRqO3SMIopsV15dZS_xMm_kZ7O8iLC-XimHJ3wT81XjmKXZSwLSotbZ_C0Yg_DzBuG7J1rBjULjh9DgjlYVbs_mq8XESPJRxM3Jh3mYFz9q1i12orNPAZd81R-fRS4jMpcvr2z8-6SIhPvHbP2SPAw=s500-no?authuser=3'
        });
        
        var infoWindow = new google.maps.InfoWindow({
            content: '<h6> Hello I am Here </h6>'
        });
        
        marker.addListener('click', function(){
           infoWindow.open(map, marker); 
        });
        
        // add Marker function
//        function addMarker(coords){
//           var marker = new google.maps.Marker({
//           position:coords,
//           map: map,
//           icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
//        }); 
//          
//        addMarker({lat: 26.8467 ,lng: 80.9462});  
//        }
    }
</script>
-->
    
<!--
    <script>
      (function(exports) {
        "use strict";

        // The following example creates complex markers to indicate beaches near
        // Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
        // to the base of the flagpole.
        function initMap() {
          var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: {
              lat: -33.9,
              lng: 151.
            }
          });
          setMarkers(map);
        } // Data for the markers consisting of a name, a LatLng and a zIndex for the
        // order in which these markers should display on top of each other.

        var beaches = [
          ["Bondi Beach", -33.890542, 151.274856, 4],
          ["Coogee Beach", -33.923036, 151.259052, 5],
          ["Cronulla Beach", -34.028249, 151.157507, 3],
          ["Manly Beach", -33.80010128657071, 151.28747820854187, 2],
          ["Maroubra Beach", -33.950198, 151.259302, 1]
        ];

        function setMarkers(map) {
          // Adds markers to the map.
          // Marker sizes are expressed as a Size of X,Y where the origin of the image
          // (0,0) is located in the top left of the image.
          // Origins, anchor positions and coordinates of the marker increase in the X
          // direction to the right and in the Y direction down.
          var image = {
            url:
              "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(20, 32),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 32)
          }; // Shapes define the clickable region of the icon. The type defines an HTML
          // <area> element 'poly' which traces out a polygon as a series of X,Y points.
          // The final coordinate closes the poly by connecting to the first coordinate.

          var shape = {
            coords: [1, 1, 1, 20, 18, 20, 18, 1],
            type: "poly"
          };

          for (var i = 0; i < beaches.length; i++) {
            var beach = beaches[i];
            var marker = new google.maps.Marker({
              position: {
                lat: beach[1],
                lng: beach[2]
              },
              map: map,
              icon: image,
              shape: shape,
              title: beach[0],
              zIndex: beach[3]
            });
          }
        }

        exports.beaches = beaches;
        exports.initMap = initMap;
        exports.setMarkers = setMarkers;
      })((this.window = this.window || {}));
    </script>
-->
  </head>
  <body>
    <div class="app-sidebar-wrapper">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Team DOT" class="logo-src"><img src="assets/images/Logo-dot.png" width="60px"></a>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
            <div class="scrollbar-sidebar scrollbar-container">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Menu</li>
                        <li class="mm-active">
                            <a href="Dashboard.php">
                                <i class="metismenu-icon"><img src="assets/icons/dashboard.png" width="20px">  </i>
                                Dashboards
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="Profile.php">
                                <i class="metismenu-icon"><img src="assets/icons/Profile.png" width="20px">  </i>
                                Profile
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="Item.php">
                                <i class="metismenu-icon"><img src="assets/icons/online-shop.png" width="20px">  </i>
                                Items
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="Order.php">
                                <i class="metismenu-icon"><img src="assets/icons/orders.png" width="20px">  </i>
                                Orders
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="Stock%20Ups.php">
                                <i class="metismenu-icon"><img src="assets/icons/Stock.png" width="20px">  </i>
                                Stock Ups
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="Analytics.php">
                                <i class="metismenu-icon"><img src="assets/icons/Analytic.png" width="20px">  </i>
                                Analytics
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="Map.php">
                               <i class="metismenu-icon"><img src="assets/icons/1.png" width="20px">  </i>
                                Map
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="Support.php">
                                <i class="metismenu-icon"><img src="assets/icons/Support.png" width="20px">  </i>
                                Support
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="../index.php">
                                <i class="metismenu-icon"><img src="assets/icons/logout.png" width="20px">  </i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-drawer-overlay d-none animated fadeIn"></div>
        
    </div>
    <div id="map"></div>
      <p>Your Location: <span id="location"></span></p>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    alert(longitude);
    $.ajax({
        type:'POST',
        url:'getLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
        }
    });
}
</script>
  </body>
  <script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script>

</html>