function loadAsrama(idLock) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://api-bulog.sobatteknolog.com/asrama",
        "method": "GET",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded"
        }
    }

    $.ajax(settings).done(function(response) {
        // $.getJSON("test.js", { name: "John", time: "2pm" })
        //     .done(function(json) {
        //         console.log("JSON Data: " + json.users[3].name);
        //     })
        //     .fail(function(jqxhr, textStatus, error) {
        //         var err = textStatus + ", " + error;
        //         console.log("Request Failed: " + err);
        //     });
        var formPilihAsrama = '<option value="">Pilih Asrama</option>';
        $.each(response['result'], function(key, value) {
            var kode_asrama = value['kode_asrama'];
            var nama_asrama = value['nama_asrama'];
            formPilihAsrama += '<option value="' + kode_asrama + '">' + nama_asrama + '</option>';
        });
        var lockid = idLock.id;
        var res = lockid.split("-");
        var idSelectAsrama = "getData-" + res[1];
        $('#lock-' + res[1]).html('unlocked');
        $('#' + idSelectAsrama).html(formPilihAsrama);
    });
}

function inputkamar(idkamar) {
    var idCheck = idkamar.id;
    console.log(idCheck);
    var res = idCheck.split("-");
    var idpeserta = $('#peserta-' + res[1]).val();
    console.log(idpeserta);
    var tp = $('#' + idCheck).val();
    var asrama = $('#getData-' + res[1]).val();
    console.log(asrama);
    if (tp != '') {
        var kamar = {
            "async": true,
            "crossDomain": true,
            "url": "http://api-bulog.sobatteknolog.com/join_diklat_event",
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            "data": {
                "id": idpeserta,
                "asrama": asrama,
                "kamar": tp
            }
        }

        $.ajax(kamar).done(function(response) {
            console.log('sukses');
            $('#lock-' + res[1]).html('locked');
        });
        // console.log(tp);
    } else {
        var formPilihKamar = '<option value="">Pilih Kamar</option>';
        $('#' + idCheck + '-Kamar').html(formPilihKamar);
    }
}

function check(t) {
    var idCheck = t.id;
    console.log(idCheck);
    var tp = $('#' + idCheck).val();
    console.log(tp);
    if (tp != '') {
        var kamar = {
            "async": true,
            "crossDomain": true,
            "url": "http://api-bulog.sobatteknolog.com/pilih_kamar?kode_asrama=" + tp,
            "method": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded"
            }
        }

        $.ajax(kamar).done(function(response) {
            var formPilihKamar = '<option value="">Pilih Kamar</option>';
            $.each(response['result'], function(key, value) {
                var nomor_kamar = value['nomor_kamar'];
                formPilihKamar += '<option value="' + nomor_kamar + '">' + nomor_kamar + '</option>';
            });
            $('#' + idCheck + '-Kamar').html(formPilihKamar);
        });
    } else {
        var formPilihKamar = '<option value="">Pilih Kamar</option>';
        $('#' + idCheck + '-Kamar').html(formPilihKamar);
    }
}