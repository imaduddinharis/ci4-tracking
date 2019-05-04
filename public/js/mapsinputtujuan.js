var maptujuan;
var markertujuan;
var lotujuan;
function addr_search_tujuan() {
  var inp = document.getElementById("addrtujuan");

  $.getJSON('http://nominatim.openstreetmap.org/search?format=json&limit=5&q=' + inp.value, function(data) {
    var items = [];

$.each(data, function(key, val) {
  items.push(
    "<li><a href='#' onclick='chooseAddrTujuan(" 
    + val.lat + ", " 
    + val.lon + ");return false;'>" 
    + val.display_name +
    '</a></li>');
});

$('#resultstujuan').empty();
    if (items.length != 0) {
      $('<p>', { html: "Search results:" }).appendTo('#resultstujuan');
      $('<ul/>', {
        'class': 'my-new-list',
        html: items.join('')
      }).appendTo('#resultstujuan');
    } else {
      $('<p>', { html: "No results found" }).appendTo('#resultstujuan');
    }
  });
}

function chooseAddrTujuan(lat, lng, type) {
  locsearchTujuan(lat,lng);
    if (markertujuan != undefined) {
              maptujuan.removeLayer(markertujuan);
        }
    var location = new L.LatLng(lat, lng);
  maptujuan.panTo(location);
  if (type == 'city' || type == 'administrative') {
    maptujuan.setZoom(11);
  } else {
    maptujuan.setZoom(13);
  }
  markertujuan = L.marker([lat, lng]).addTo(maptujuan);
  
  $("#lattujuan").val(lat);
  $("#lngtujuan").val(lng);
}
function locsearchTujuan(lat,lng) {
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
    $("#tujuan").val(response.display_name);
});
}
function load_maptujuan() {
  maptujuan = new L.Map('mapsLokasiTujuan', {zoomControl: false});

  var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    osmAttribution = 'Map data &copy; 2012 <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
    osm = new L.TileLayer(osmUrl, {maxZoom: 18, attribution: osmAttribution});

  maptujuan.setView(new L.LatLng(-6.947898, 107.627445), 8).addLayer(osm);
}

window.onload = load_maptujuan;

