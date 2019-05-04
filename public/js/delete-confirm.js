$('.softdelete').click(function(e) {
    var href = $(this).attr('href');

    swal({
        title: 'Apakah Anda yakin?',
        text: "Anda tidak akan dapat mengembalikan data ini.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#01489a',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.value) {
            swal(
                'Terhapus!',
                'File Anda telah dihapus.',
                'success'
            ).then(function() {
                window.location.href = href;
            });
        }

    });

    return false;
});
