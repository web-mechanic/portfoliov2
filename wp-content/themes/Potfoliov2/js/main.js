jQuery(document).ready(function($){

var map;
var panel;
var initialize;
var calculate;
var direction;

    var init = function(e) {
  
    $('#check').on('click', calculate);
     
    }; 

initialize = function(){
  var latLng = new google.maps.LatLng(50.548476, 5.12719); // Correspond au coordonnées de la salle
  var myOptions = {
    zoom      : 14, // Zoom par défaut
    center    : latLng, // Coordonnées de départ de la carte 
    mapTypeId : google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
    maxZoom   : 20,
    scrollwheel: false,
    draggable: false
  };
  
  map      = new google.maps.Map(document.getElementById('map'), myOptions);
  panel    = document.getElementById('panel');
  
  var marker = new google.maps.Marker({
    position : latLng,
    map      : map,
    title    : "Lavoir"
    //icon     : "marker_lille.gif" // Chemin de l'image du marqueur pour surcharger celui par défaut
  });
  
var contentMarker = [
      '<div id="containerTabs">',
        '<p class="bule">Pour les amoureux du gps, il faut rentrer Place Fayat à Lavoir... Ensuite démerdez-vous ! </p>',
      '</div>',
      '</div>'
  ].join('');

  var infoWindow = new google.maps.InfoWindow({
    content  : contentMarker,
    position : latLng
  });
  
  google.maps.event.addListener(marker, 'click', function() {
    infoWindow.open(map,marker);
  });
  
  
  direction = new google.maps.DirectionsRenderer({
    map   : map,
    panel : panel // Dom element pour afficher les instructions d'itinéraire
  });

};

calculate = function(){
    origin      = document.getElementById('origin').value; // Le point départ
    destination = document.getElementById('destination').value; // Le point d'arrivé
    if(origin && destination){
        var request = {
            origin      : origin,
            destination : destination,
            travelMode  : google.maps.DirectionsTravelMode.DRIVING // Mode de conduite
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
        directionsService.route(request, function(response, status){ // Envoie de la requête pour calculer le parcours
            if(status == google.maps.DirectionsStatus.OK){
                direction.setDirections(response); // Trace l'itinéraire sur la carte et les différentes étapes du parcours
            }
        });
    }
};


init();
initialize();

});


