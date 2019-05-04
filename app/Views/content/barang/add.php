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
                  <h3 class="m-b-0">Tambah Barang</h3>
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
              <h5 style="margin-top:3px!important;">Silahkan input detail barang</h5>
            </div>
            <div class="card-block">
                <form method="post" action="/barang/post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_barang" required>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="deskripsi_barang" required>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pengirim</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pengirim" required>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email Pengirim</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email_pengirim" required>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kontak Pengirim</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kontak_pengirim" required>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Penerima</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="penerima" required>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kontak Penerima</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kontak_penerima" required>
                            </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <button name="barang_add" type="submit" class="btn btn-primary f-right m-l-5">Tambah Barang</button>
                        <a href="barang" class='btn btn-outline-primary f-right'>Batal</a>
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
