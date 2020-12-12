<?php
@ob_start();
session_start();
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>DOT | Map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="favicon.ico">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.07a59de7b920cd76b874.css" rel="stylesheet"></head>
   
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
      .loc-btn{
        margin-left: 50%;
        word-spacing: 5px;
        letter-spacing: 2px;
        font-size: 18px;
      }
      #floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: "Roboto", "sans-serif";
  line-height: 30px;
  padding-left: 10px;
}

#floating-panel {
  margin-left: -52px;
}
    </style>

  </head>
  <body >
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
        <div class="app-drawer-overlay d-none animated fadeIn">
          
        </div>
        
    </div>


    <div id="map" onload="drop()"></div>

  </body>

  <script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type = "text/javascript" 
  src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>

<script type = "text/javascript" 
  src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
</script>
  <!-- <script>
    // If you're adding a number of markers, you may want to drop them on the map
// consecutively rather than all at once. This example shows how to use
// window.setTimeout() to space your markers' animation.

var neighborhoods = [
  { lat: 52.511, lng: 13.447 },
  { lat: 52.549, lng: 13.422 },
  { lat: 52.497, lng: 13.396 },
  { lat: 52.517, lng: 13.394 }
];

var markers = [];
var map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    
    // center: { lat: 52.52, lng: 13.41 },
    center: { lat: -33.89,
              lng: 151.274 },
    styles: [
              {
                elementType: "geometry",
                stylers: [
                  {
                    color: "#242f3e"
                  }
                ]
              },
              {
                elementType: "labels.text.stroke",
                stylers: [
                  {
                    color: "#242f3e"
                  }
                ]
              },
              {
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#746855"
                  }
                ]
              },
              {
                featureType: "administrative.locality",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#d59563"
                  }
                ]
              },
              {
                featureType: "poi",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#d59563"
                  }
                ]
              },
              {
                featureType: "poi.park",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#263c3f"
                  }
                ]
              },
              {
                featureType: "poi.park",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#6b9a76"
                  }
                ]
              },
              {
                featureType: "road",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#38414e"
                  }
                ]
              },
              {
                featureType: "road",
                elementType: "geometry.stroke",
                stylers: [
                  {
                    color: "#212a37"
                  }
                ]
              },
              {
                featureType: "road",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#9ca5b3"
                  }
                ]
              },
              {
                featureType: "road.highway",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#746855"
                  }
                ]
              },
              {
                featureType: "road.highway",
                elementType: "geometry.stroke",
                stylers: [
                  {
                    color: "#1f2835"
                  }
                ]
              },
              {
                featureType: "road.highway",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#f3d19c"
                  }
                ]
              },
              {
                featureType: "transit",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#2f3948"
                  }
                ]
              },
              {
                featureType: "transit.station",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#d59563"
                  }
                ]
              },
              {
                featureType: "water",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#17263c"
                  }
                ]
              },
              {
                featureType: "water",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#515c6d"
                  }
                ]
              },
              {
                featureType: "water",
                elementType: "labels.text.stroke",
                stylers: [
                  {
                    color: "#17263c"
                  }
                ]
              }
            ]
  });
  var image =
            "https://i.ibb.co/VDL0bLB/rsz-1rsz-1rsz-dot-gps.png";

            var delivered = "https://i.ibb.co/xXK3NJv/rsz-1rsz-delivered.png";
            
          var beachMarker = new google.maps.Marker({
            position: {
              lat: -34.89,
              lng: 151.274
            },
            map: map,
            icon: delivered
          });
          var beachMarker = new google.maps.Marker({
            position: {
              lat: -34.89,
              lng: 150.274
            },
            map: map,
            icon: image
          });
          var beachMarker2 = new google.maps.Marker({
            position: {
              lat: -33.89,
              lng: 151.274
            },
            map: map,
            icon: image
          });

          delivered.addListener("click", toggleBounce);
  
}

function drop() {
  clearMarkers();
  for (var i = 0; i < neighborhoods.length; i++) {
    addMarkerWithTimeout(neighborhoods[i], i * 200);
  }
}

      

function addMarkerWithTimeout(position, timeout) {
  window.setTimeout(function() {
    markers.push(
      new google.maps.Marker({
        position: position,
        map: map,
        animation: google.maps.Animation.DROP
      })
    );
  }, timeout);
}

function clearMarkers() {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
  markers = [];
}
$(document).ready(function() {

$(beachMarker).click(function(){
   $(this).effect( "bounce", {times:3}, 300 );
});

});
  </script> -->

  <!-- <script>
    // The following example creates a marker in Stockholm, Sweden using a DROP
// animation. Clicking on the marker will toggle the animation between a BOUNCE
// animation and no animation.

var marker;

function initMap() {
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 13,
    center: { lat: 59.325, lng: 18.07 }
  });
  var image =
            "https://i.ibb.co/VDL0bLB/rsz-1rsz-1rsz-dot-gps.png";
  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    icon : image,
    animation: google.maps.Animation.DROP,
    position: { lat: 59.327, lng: 18.067 }
  });
  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    icon : image,
    animation: google.maps.Animation.DROP,
    position: { lat: 59.127, lng: 18.067 }
  });
  marker.addListener("click", toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
  </script> -->
  <script>
    // If you're adding a number of markers, you may want to drop them on the map
// consecutively rather than all at once. This example shows how to use
// window.setTimeout() to space your markers' animation.

var neighborhoods = [
  { lat: 52.511, lng: 13.447 },
  { lat: 52.549, lng: 13.422 },
  { lat: 52.497, lng: 13.396 },
  { lat: 52.517, lng: 13.394 }
];

var markers = [];
var map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: { lat: 52.52, lng: 13.41 },
    styles: [
              {
                elementType: "geometry",
                stylers: [
                  {
                    color: "#242f3e"
                  }
                ]
              },
              {
                elementType: "labels.text.stroke",
                stylers: [
                  {
                    color: "#242f3e"
                  }
                ]
              },
              {
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#746855"
                  }
                ]
              },
              {
                featureType: "administrative.locality",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#d59563"
                  }
                ]
              },
              {
                featureType: "poi",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#d59563"
                  }
                ]
              },
              {
                featureType: "poi.park",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#263c3f"
                  }
                ]
              },
              {
                featureType: "poi.park",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#6b9a76"
                  }
                ]
              },
              {
                featureType: "road",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#38414e"
                  }
                ]
              },
              {
                featureType: "road",
                elementType: "geometry.stroke",
                stylers: [
                  {
                    color: "#212a37"
                  }
                ]
              },
              {
                featureType: "road",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#9ca5b3"
                  }
                ]
              },
              {
                featureType: "road.highway",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#746855"
                  }
                ]
              },
              {
                featureType: "road.highway",
                elementType: "geometry.stroke",
                stylers: [
                  {
                    color: "#1f2835"
                  }
                ]
              },
              {
                featureType: "road.highway",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#f3d19c"
                  }
                ]
              },
              {
                featureType: "transit",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#2f3948"
                  }
                ]
              },
              {
                featureType: "transit.station",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#d59563"
                  }
                ]
              },
              {
                featureType: "water",
                elementType: "geometry",
                stylers: [
                  {
                    color: "#17263c"
                  }
                ]
              },
              {
                featureType: "water",
                elementType: "labels.text.fill",
                stylers: [
                  {
                    color: "#515c6d"
                  }
                ]
              },
              {
                featureType: "water",
                elementType: "labels.text.stroke",
                stylers: [
                  {
                    color: "#17263c"
                  }
                ]
              }
            ]
  });
}
$(document).ready(function(){
  
})
$(document).ready(function () {

  drop();
    });
function drop() {
  clearMarkers();
  for (var i = 0; i < neighborhoods.length; i++) {
    addMarkerWithTimeout(neighborhoods[i], i * 200);
  }
}
var image =
            "https://i.ibb.co/VDL0bLB/rsz-1rsz-1rsz-dot-gps.png";

function addMarkerWithTimeout(position, timeout) {
  window.setTimeout(function() {
    markers.push(
      new google.maps.Marker({
        position: position,
        map: map,
        icon: image,
        animation: google.maps.Animation.DROP
      })
    );
  }, timeout);
}

function clearMarkers() {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
  markers = [];
}
  </script>

    </html>
