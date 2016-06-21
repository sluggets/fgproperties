$(document).ready(function() {
  // enables dropdown "communities" menu in header
  $('.dropdown-toggle').dropdown();

  // tries to catch coordinates passed through php 
  // via script tag in details.php
  try
  {
    var fLat = parseFloat(lat);
    var fLon = parseFloat(lon);
  }
  catch (e)
  {
    return;
  }
  
  // this is the leaflet and mapbox api map building code
  if (lat)
  {
    var mymap = L.map('mapid', {
      center: [fLat, fLon],
      zoom: 15
    });
    L.tileLayer('https://api.tiles.mapbox.com/v4/mapbox.streets/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoic2x1Z2dldHMiLCJhIjoiY2lwZTQwczZyMDAyeXRybmhoeTc4MXA3cSJ9.cq_6YvHYFXm4LM11v_kQ7w', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>, contributors, <a href="http://creativecommons.org/license/by-sa/2.0/">CC-BY-SA</a>, Imagery <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'FGProp',
    accessToken: 'pk.eyJ1Ijoic2x1Z2dldHMiLCJhIjoiY2lwZTQwczZyMDAyeXRybmhoeTc4MXA3cSJ9.cq_6YvHYFXm4LM11v_kQ7w'
    }).addTo(mymap);
  }

  // not sure if I need this or not yet
  // supposedly helps for screen resizing and/or mobile site?
  mymap.invalidateSize();

  // adds the nice little marker for location on the map!
  var marker  = L.marker([fLat, fLon]).addTo(mymap);

});
