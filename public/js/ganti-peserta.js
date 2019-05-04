$(".btn[data-target='#gantiPesertaModal']").click(function() {
    var columnHeadings = $("thead th").map(function() {
        return $(this).text();
    }).get();
    columnHeadings.pop();
    var columnValues = $(this).parent().siblings().map(function() {
        return $(this).text();
    }).get();
    // var modalBody = $('<div id="modalContent"></div>');
    // var modalForm = $('<form role="form" name="modalForm" action="putYourPHPActionHere.php" method="post"></form>');
    // $.each(columnHeadings, function(i, columnHeader) {
    //     var formGroup = $('<div class="form-group"></div>');
    //     formGroup.append('<label for="' + columnHeader + '">' + columnHeader + '</label>');
    //     formGroup.append('<input class="form-control" name="' + columnHeader + i + '" id="' + columnHeader + i + '" value="' + columnValues[i] + '" />');
    //     modalForm.append(formGroup);
    // });
    // modalBody.append(modalForm);
    // $('.modal-body').html(modalBody);
    $('#nama-peserta').html(columnValues[2]);

    // document.getElementsById('#sebelumGanti').forEach(function(ele, idx) {
    //         ele.append('<input class="form-control" name="nip_sebelumnya" id="nip_sebelumnya" value="' + columnValues[0] + '" />');;
    //     })
    // $('#sebelumGanti').append('<input class="form-control" name="nip_sebelumnya" id="nip_sebelumnya" value="' + columnValues[0] + '" />');;
    $('input[name=nip_sebelumnya]').val(columnValues[0]);
    // $('#formGanti').attr("action", "/ganti-peserta/" + columnValues[0]);

});
// $('.modal-footer .btn-primary').click(function() {
//     $('form[name="modalForm"]').submit();
// });
// $('#pilihGanti').click(function() {
//     console.log('active');
// });
$(document).ready(function() {
    $("#hoverganti").hover(function() {
        console.log("hover in")
    }, function() {
        console.log("hover out")
    });
});
