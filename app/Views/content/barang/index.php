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
                  <h3 class="m-b-5">Data Barang</h3>
                  <p class="f-14 m-b-0">Leaflet JS</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="">
                <a href="barang/add">
                <button class="btn btn-primary btn-round f-right"><i class="ti-plus"></i>&nbsp;Tambah Barang</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Page-body start -->
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5>Data Barang </h5>
            </div>
            <div class="card-block">
              <div class="table-responsive">
                <table class="display table-wrap table-hover" id="table-data">
                  <thead>
                    <tr>
                      <th>Resi</th>
                      <th>Nama Barang</th>
                      <th>Deskripsi Barang</th>
                      <th>Pengirim</th>
                      <th>Penerima</th>
                      <th>Asal</th>
                      <th>Tujuan</th>
                      <th>Created at</th>
                      <th class="nosort">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(! empty($barang) && is_array($barang)) : ?>
                    <?php $no=1; ?>
                    <?php foreach ($barang as $values): ?>
                    <tr>
                      <td><?=$values['id_barang']?></td>
                      <td><?=$values['nama_barang']?></td>
                      <td><?=$values['deskripsi_barang']?></td>
                      <td><?=$values['pengirim']?><br><?=$values['kontak_pengirim']?><br><?=$values['email_pengirim']?></td>
                      <td><?=$values['penerima']?><br><?=$values['kontak_penerima']?></td>
                      <td><?=$values['asal']?> <br><a href="/barang/edit-lokasi-asal/<?=$values['id_barang']?>" title="edit lokasi asal"><i class='ti-pencil-alt mr-2'></i></a></td>
                      <td><?=$values['tujuan']?> <br><a href="/barang/edit-lokasi-tujuan/<?=$values['id_barang']?>" title="edit lokasi tujuan"><i class='ti-pencil-alt mr-2'></i></a></td>
                      <td><?=date('d F Y', strtotime($values['created_at']))?></td>
                      <td>
                      <div class='dropdown'>
                        <button class='btn btn-inverse btn-outline-inverse btn-mini btn-download dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                          <i class='ti-menu mr-2'></i>Action
                        </button>
                        <div class='dropdown-menu dropdown-menu-right' aria-labelledby='dropdownMenuButton'>
                          <a class='dropdown-item' href='/barang/edit/<?=$values['id_barang']?>'><i class='ti-pencil-alt mr-2'></i>Edit</a>
                          <span class='dropdown-item softdelete' href='#' onClick="window.location='/barang/delete/<?=$values['id_barang']?>'" style="cursor:pointer"><i class='ti-trash mr-2'></i>Delete</span>
                          <a class='dropdown-item' href='/tracking/<?=$values['id_barang']?>'><i class='ti-trash mr-2'></i>View Track</a>
                        </div>
                      </div>
                      </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <?php endif ?>
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
