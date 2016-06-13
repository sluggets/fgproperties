$(document).ready(function() {
  $('.dropdown-toggle').dropdown();

  try
  {
    /*var lat = document.getElementById('lat').textContent;
    var lon = document.getElementById('lon').textContent;*/
    var fLat = parseFloat(lat);
    var fLon = parseFloat(lon);
  }
  catch (e)
  {
    return;
  }
  
  if (lat)
  {
    console.log(fLat + ' ' + fLon);
    //var mymap = L.map('mapid').setView([fLat, fLon], 13);
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

  mymap.invalidateSize();

  var marker  = L.marker([fLat, fLon]).addTo(mymap);

});
