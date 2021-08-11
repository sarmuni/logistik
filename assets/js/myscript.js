// Add
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal({
        title: 'Data ',
        text: 'Berhasil ' + flashData,
        type: 'success'
    });
}

// Upload
const Upload = $('.flash-data-upload').data('flashdata');
if (Upload) {
    Swal({
        title: 'Data ',
        text: 'Gagal ' + Upload,
        type: 'warning'
    });
}
// end upload

// required
const required = $('.flash-data-required').data('flashdata');
if (required) {
    Swal({
        title: 'Data ',
        text: 'Gagal ' + required,
        type: 'warning'
    });
}
// end required

// tombol-logout
$('.tombol-logout').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "Logout dari aplikasi ini",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});



// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
// end hapus kurir

// tombol-publish
$('.publish').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data akan di non aktifkan",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

// tombol-unpublish
$('.unpublish').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data akan di aktifkan",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});


// tombol-terima_agen
$('.terima_agen').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data akan diterima, penerimaan barang tidak bisa di dikembalikan.!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});