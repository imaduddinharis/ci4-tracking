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
                  <h3 class="m-b-5">Data Lokasi</h3>
                  <p class="f-14 m-b-0">Leaflet JS</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="">
                <a href="/lokasi/add">
                <button class="btn btn-primary btn-round f-right"><i class="ti-plus"></i>&nbsp;Tambah Lokasi</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Page-body start -->
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5>Data Lokasi </h5>
            </div>
            <div class="card-block">
              <div class="table-responsive">
                <table class="display table-wrap table-hover" id="table-data">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>ID Barang</th>
                      <th>Lokasi</th>
                      <th>Deskripsi</th>
                      <th>Created at</th>
                      <th class="nosort">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    foreach ($lokasi as $values):
                      $barang = $mb->where('id_barang',$values['id_barang'])->findAll();
                      // var_dump($barang);
                      // return false;
                    ?>
                    <tr>
                      <td scope='row'><?=$no?></td>
                      <td><?=$barang[0]['nama_barang']?></td>
                      <td><?=$values['alamat']?></td>
                      <td><?=$values['deskripsi']?></td>
                      <td><?=date('d F Y', strtotime($values['created_at']))?></td>
                      <td>
                      <div class='dropdown'>
                        <button class='btn btn-inverse btn-outline-inverse btn-mini btn-download dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                          <i class='ti-menu mr-2'></i>Action
                        </button>
                        <div class='dropdown-menu dropdown-menu-right' aria-labelledby='dropdownMenuButton'>
                          <span class='dropdown-item softdelete' href='#' onClick="window.location='/lokasi/delete/<?=$values['id_lokasi']?>'" style="cursor:pointer"><i class='ti-trash mr-2'></i>Delete</span>
                        </div>
                      </div>
                      </td>
                    </tr>
                    <?php
                    $no++;
                    endforeach;
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
