
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="pages/widget/amchart/amcharts.min.js"></script>
<script src="pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript " src="js/SmoothScroll.js"></script>
<script src="js/pcoded.min.js"></script>
<script src="js/demo-12.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.6/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" type="text/javascript" ></script>
<!-- -->
<!-- SWAL 2 -->
<script src="js/sweetalert2.min.js" type="text/javascript" ></script>



<!-- -->
<script src="js/select2.full.js" type="text/javascript" ></script>
<!-- DATATABLES LIST -->
<script src="js/dataTableList.js" type="text/javascript" ></script>

<script>
$(document).ready(function(){
  var loc = window.location.href;

   $('.navmenu').find('a').each(function() {
     var cek = $(this).attr('href');
     if(cek == loc){
       $(this).parents().addClass("active");
    //    console.log("link"+cek);
     }
  });
});
</script>

<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>

<script>
console.log("latC = "+$("#latC").val());
  var map = L.map('mapid').setView([-6.949602, 107.62722], 2);
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiaW1hZHVkZGluaGFyaXMiLCJhIjoiY2p1d2E3MzM4MGFiZDRkcGYyMWF3emtlYiJ9.KTemDE4IAujR0X-ltttotg'
}).addTo(map);
var marker = L.marker([$("#latC").val(), $("#lngC").val()]).addTo(map)
                          .bindPopup('Lokasi Barang Saat Ini')
                          .openPopup();
L.Routing.control({
    waypoints: [
        L.latLng($("#latA").val(), $("#lngA").val()),
        L.latLng($("#latC").val(), $("#lngC").val()),
        L.latLng($("#latB").val(), $("#lngB").val())
    ],
    routeWhileDragging: true
}).addTo(map);


function onMapClick(e) {
L.popup().setLatLng(e.latlng)
    .setContent("Anda mengklik peta pada koordinat " + e.latlng.toString())
    .openOn(map);
}
map.on('click', onMapClick);
</script>

<script>
var map;
var marker;
var lo;
function addr_search() {
  var inp = document.getElementById("addr");

  $.getJSON('http://nominatim.openstreetmap.org/search?format=json&limit=5&q=' + inp.value, function(data) {
    var items = [];

$.each(data, function(key, val) {
  items.push(
    "<li><a href='#' onclick='chooseAddr(" 
    + val.lat + ", " 
    + val.lon + ");return false;'>" 
    + val.display_name +
    '</a></li>');
});

$('#results').empty();
    if (items.length != 0) {
      $('<p>', { html: "Search results:" }).appendTo('#results');
      $('<ul/>', {
        'class': 'my-new-list',
        html: items.join('')
      }).appendTo('#results');
    } else {
      $('<p>', { html: "No results found" }).appendTo('#results');
    }
  });
}

function chooseAddr(lat, lng, type) {
  locsearch(lat,lng);
    if (marker != undefined) {
              map.removeLayer(marker);
        }
    var location = new L.LatLng(lat, lng);
  map.panTo(location);
  if (type == 'city' || type == 'administrative') {
    map.setZoom(11);
  } else {
    map.setZoom(13);
  }
  marker = L.marker([lat, lng]).addTo(map);
  
  $("#lat").val(lat);
  $("#lng").val(lng);
}
function locsearch(lat,lng) {
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
    $("#lokasi").val(response.display_name);
});
}
function load_map() {
  map = new L.Map('mapsLokasi', {zoomControl: false});

  var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    osmAttribution = 'Map data &copy; 2012 <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
    osm = new L.TileLayer(osmUrl, {maxZoom: 18, attribution: osmAttribution});

  map.setView(new L.LatLng(-6.947898, 107.627445), 8).addLayer(osm);
}

window.onload = load_map;

</script>
<!-- <script src="js/mapsinputasal.js" type="text/javascript" ></script>
<script src="js/mapsinputtujuan.js" type="text/javascript" ></script> -->

</body>

</html>
