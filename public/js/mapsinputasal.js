var mapasal;
var markerasal;
var loasal;
function addr_search_asal() {
  var inp = document.getElementById("addrasal");

  $.getJSON('http://nominatim.openstreetmap.org/search?format=json&limit=5&q=' + inp.value, function(data) {
    var items = [];

$.each(data, function(key, val) {
  items.push(
    "<li><a href='#' onclick='chooseAddrAsal(" 
    + val.lat + ", " 
    + val.lon + ");return false;'>" 
    + val.display_name +
    '</a></li>');
});

$('#resultsasal').empty();
    if (items.length != 0) {
      $('<p>', { html: "Search results:" }).appendTo('#resultsasal');
      $('<ul/>', {
        'class': 'my-new-list',
        html: items.join('')
      }).appendTo('#resultsasal');
    } else {
      $('<p>', { html: "No results found" }).appendTo('#resultsasal');
    }
  });
}

function chooseAddrAsal(lat, lng, type) {
  locsearchAsal(lat,lng);
    if (markerasal != undefined) {
              mapasal.removeLayer(markerasal);
        }
    var location = new L.LatLng(lat, lng);
  mapasal.panTo(location);
  if (type == 'city' || type == 'administrative') {
    mapasal.setZoom(11);
  } else {
    mapasal.setZoom(13);
  }
  markerasal = L.marker([lat, lng]).addTo(mapasal);
  
  $("#latasal").val(lat);
  $("#lngasal").val(lng);
}
function locsearchAsal(lat,lng) {
var settings = {
  "url": "http://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=" + lat +"&lon=" + lng,
  "method": "GET",
  "timeout": 0,
  "headers": {
    "Content-Type": "application/x-www-form-urlencoded"
  },
  "data": {
    
  }
};

$.ajax(settings).done(function (response) {
    $("#asal").val(response.display_name);
});
}
function load_mapasal() {
  mapasal = new L.Map('mapsLokasiAsal', {zoomControl: false});

  var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    osmAttribution = 'Map data &copy; 2012 <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
    osm = new L.TileLayer(osmUrl, {maxZoom: 18, attribution: osmAttribution});

  mapasal.setView(new L.LatLng(-6.947898, 107.627445), 8).addLayer(osm);
}

window.onload = load_mapasal;

