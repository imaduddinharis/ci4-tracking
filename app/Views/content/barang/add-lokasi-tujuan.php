<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-header card">
          <div class="row align-items-start">
            <div class="col-lg-8">
              <div class="page-header-title">
                <i class="ti-agenda bg-c-orange"></i>
                <div class="d-inline">
                  <h3 class="m-b-0">Tambah Lokasi Tujuan</h3>
                  <p class="f-14 m-b-0">Leaflet JS</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page-body start -->
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5 style="margin-top:3px!important;">Silahkan input lokasi tujuan</h5>
            </div>
            <div class="card-block">
                <form method="post" action="/barang/post-lokasi-tujuan">
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tujuan</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="id_barang" name="id_barang" value="<?=$id_barang?>" required>
                                <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                                <input type="hidden" class="form-control" id="lat" name="lat" required>
                                <input type="hidden" class="form-control" id="lng" name="lng" required>
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                        <div id="mapsLokasi"></div>
                              <div id="search">
                                <input type="text" name="addr" value="" id="addr" size="10" onkeyup="addr_search();" />
                                <button type="button" onclick="addr_search();">Search</button>
                                <div id="results"></div>
                              </div>
                        </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <button name="lokasi_tujuan_add" type="submit" class="btn btn-primary f-right m-l-5">Tambah Lokasi</button>
                        <a href="/barang" class='btn btn-outline-primary f-right'>Batal</a>
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
