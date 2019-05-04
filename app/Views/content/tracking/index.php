<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-header card">
          <div class="row align-items-start">
            <div class="col-lg-8">
              <div class="page-header-title">
                <i class="ti-package bg-c-orange"></i>
                <div class="d-inline">
                  <h3 class="m-b-5">Tracking</h3>
                  <p class="f-14 m-b-0">Leaflet JS</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
            </div>
          </div>
        </div>
        <!-- Page-body start -->
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5>Leaflet JS Map Box </h5>
            </div>
            <div class="card-block">
              <div id="mapid"></div>
              <input type="hidden" id="latA" name="latA" value="<?=$barang[0]['lat_asal']?>">
              <input type="hidden" id="lngA" name="lngA" value="<?=$barang[0]['lng_asal']?>">
              <input type="hidden" id="latB" name="latB" value="<?=$barang[0]['lat_tujuan']?>">
              <input type="hidden" id="lngB" name="lngB" value="<?=$barang[0]['lng_tujuan']?>">
              <input type="hidden" id="latC" name="latC" value="<?=$lokasi[0]['latitude']?>">
              <input type="hidden" id="lngC" name="lngC" value="<?=$lokasi[0]['longitude']?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
