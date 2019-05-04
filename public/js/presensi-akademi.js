var table3;
var loading;
$(document).ready(function() {
    table3 = $('#table-presensi').DataTable({

        dom: 'Bfrtip',
        select: true,
        buttons: [{
                text: 'Select all',
                action: function() {
                    table3.rows().select();
                }
            },
            {
                text: 'Select none',
                action: function() {
                    table3.rows().deselect();
                }
            }
        ],
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'multi',
            selector: 'td:first-child'
        },
        order: [
            [1, 'asc']
        ],
        language: {
            lengthMenu: "Tampilkan _MENU_ karyawan",
            info: "Menampilkan _START_ - _END_ dari _TOTAL_ karyawan",
            search: "Cari:",
            emptyTable: "Tidak ada data karyawan tersedia..."
        }
    });

    table3.on('select', function(e, dt, type, indexed) {
        var tblData = table3.rows('.selected').data();
        if (tblData.length > 0) {
            // console.log(tblData.length);
            $('#btn-presensi-hadir').prop("disabled", false);
            $('#btn-presensi-tidak-hadir').prop("disabled", false);
            $('#btn-presensi-izin').prop("disabled", false);
        } else if (tblData.length === 0) {
            $('#btn-presensi-hadir').prop("disabled", true);
            $('#btn-presensi-tidak-hadir').prop("disabled", true);
            $('#btn-presensi-izin').prop("disabled", true);
        }
    });

    table3.on('deselect', function(e, dt, type, indexed) {
        var tblData = table3.rows('.selected').data();
        if (tblData.length > 0) {
            $('#btn-presensi-hadir').prop("disabled", false);
            $('#btn-presensi-tidak-hadir').prop("disabled", false);
            $('#btn-presensi-izin').prop("disabled", false);
        } else if (tblData.length === 0) {
            $('#btn-presensi-hadir').prop("disabled", true);
            $('#btn-presensi-tidak-hadir').prop("disabled", true);
            $('#btn-presensi-izin').prop("disabled", true);
        }
    });
});


$('#btn-presensi-hadir').on('click', function() {

    // Add loading
    $(".loading-wrap").show();

    var tblData = table3.rows('.selected').data();
    var lp = document.getElementById("learning_plan").value;
    var tmpData;
    var dump;
    var nip = [];
    var kodeunik;
    var j = 0;
    $.each(tblData, function(i, val) {
        tmpData = tblData[i];
        dump = tmpData.toString().split(',');
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "http://api-bulog.sobatteknolog.com/presensi_action",
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            "data": {
                "nip": dump[1],
                "kode_lp": lp,
                "status": 1,
            }
        }

        $.ajax(settings).done(function(response) {
            // console.log(j);
            // console.log(tblData.length);
            j++;
            var x = (j / tblData.length) * 100;
            loading = parseInt(x, 10);
            $("#progress-bar").css('width', loading);
            // console.log(loading);
            if (j === tblData.length) {
                $(".loading-wrap").hide();
                swal({
                    title: 'Berhasil!',
                    text: 'Presensi Updated.',
                    type: 'success'
                }).then(function() {
                    location.reload();
                });
            }
        });
    });
    // alert(kodeunik);

});
$('#btn-presensi-tidak-hadir').on('click', function() {

    // Add loading
    $(".loading-wrap").show();

    var tblData = table3.rows('.selected').data();
    var lp = document.getElementById("learning_plan").value;
    var tmpData;
    var dump;
    var nip = [];
    var kodeunik;
    var j = 0;
    $.each(tblData, function(i, val) {
        tmpData = tblData[i];
        dump = tmpData.toString().split(',');
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "http://api-bulog.sobatteknolog.com/presensi_action",
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            "data": {
                "nip": dump[1],
                "kode_lp": lp,
                "status": 2,
            }
        }

        $.ajax(settings).done(function(response) {
            // console.log(j);
            // console.log(tblData.length);
            j++;
            var x = (j / tblData.length) * 100;
            loading = parseInt(x, 10);
            $("#progress-bar").css('width', loading);
            // console.log(loading);
            if (j === tblData.length) {
                $(".loading-wrap").hide();
                swal({
                    title: 'Berhasil!',
                    text: 'Presensi Updated.',
                    type: 'success'
                }).then(function() {
                    location.reload();
                });
            }
        });
    });
    // alert(kodeunik);

});
$('#btn-presensi-izin').on('click', function() {

    // Add loading
    $(".loading-wrap").show();

    var tblData = table3.rows('.selected').data();
    var lp = document.getElementById("learning_plan").value;
    var tmpData;
    var dump;
    var nip = [];
    var kodeunik;
    var j = 0;
    $.each(tblData, function(i, val) {
        tmpData = tblData[i];
        dump = tmpData.toString().split(',');
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "http://api-bulog.sobatteknolog.com/presensi_action",
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            "data": {
                "nip": dump[1],
                "kode_lp": lp,
                "status": 3,
            }
        }

        $.ajax(settings).done(function(response) {
            // console.log(j);
            // console.log(tblData.length);
            j++;
            var x = (j / tblData.length) * 100;
            loading = parseInt(x, 10);
            $("#progress-bar").css('width', loading);
            // console.log(loading);
            if (j === tblData.length) {
                $(".loading-wrap").hide();
                swal({
                    title: 'Berhasil!',
                    text: 'Presensi Updated.',
                    type: 'success'
                }).then(function() {
                    location.reload();
                });
            }
        });
    });
    // alert(kodeunik);

});