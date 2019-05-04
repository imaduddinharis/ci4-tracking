$(document).ready(function() {
  // DATATABLES UNTUK LIST PESERTA
  $("#table-peserta").DataTable({
    "ordering": false,
    "select": false,
    "language": {
      "lengthMenu": "Tampilkan _MENU_ karyawan",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ karyawan",
      "search": "Cari:",
      "emptyTable": "Tidak ada data tersedia..."
    }
  });
  // DATATABLES - ORDERING
  $("#table-data").DataTable({
    "select": false,
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "infoEmpty": "Tidak ada data",
      "search": "Cari:",
      "emptyTable": "Tidak ada data tersedia..."
    },
    "columnDefs": [ {
      "targets": 'nosort',
      "orderable": false
    } ]
  });
  $("#table-data-detail").DataTable({
    "select": false,
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "infoEmpty": "Tidak ada data",
      "search": "Cari:",
      "emptyTable": "Tidak ada data tersedia..."
    },
    "columnDefs": [ {
      "targets": 'nosort',
      "orderable": false
    } ]
  });
  $("#table-ordering").DataTable({
    "select": false,
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "infoEmpty": "Tidak ada data",
      "search": "Cari:",
      "emptyTable": "Tidak ada data tersedia..."
    },
    "columnDefs": [ {
      "targets": 'nosort',
      "orderable": false
    } ]
  });
  $("#table-peserta-ordering").DataTable({
    "select": false,
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "infoEmpty": "Tidak ada data",
      "search": "Cari:",
      "emptyTable": "Tidak ada data tersedia..."
    },
    "columnDefs": [ {
      "targets": 'nosort',
      "orderable": false
    } ]
  });
  $("#table-data-modal").DataTable({
    "select": false,
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "infoEmpty": "Tidak ada data",
      "search": "Cari:",
      "emptyTable": "Tidak ada data tersedia..."
    },
    "columnDefs": [ {
      "targets": 'nosort',
      "orderable": false
    } ]
  });
  $(".table-data").DataTable({
    "select": false,
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "infoEmpty": "Tidak ada data",
      "search": "Cari:",
      "emptyTable": "Tidak ada data tersedia..."
    },
    "columnDefs": [ {
      "targets": 'nosort',
      "orderable": false
    } ]
  });
  // DATATABLES UNTUK SIMPLE TABLE
  $("#table-simple").DataTable({
    "ordering": false,
    "select": false,
    "paging": false,
    "info": false,
    "searching": false,
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "infoEmpty": "Tidak ada data",
      "search": "Cari:",
      "emptyTable": "Tidak ada data tersedia..."
    }
  });
  $("#table-simple-2").DataTable({
    "ordering": false,
    "select": false,
    "paging": false,
    "info": false,
    "searching": false,
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data",
      "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "infoEmpty": "Tidak ada data",
      "search": "Cari:",
      "emptyTable": "Tidak ada data tersedia..."
    }
  });
});
