$(function() {
    $('.tambahData').click(function() {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });
    $('.tampilModalUpdate').click(function() {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        $('.modal-body form').attr('action', 'http://localhost/phpmvccrud/public/Mahasiswa/update');
        const id = $(this).data('id');
        // console.log(id);
        $.ajax({
            url: 'http://localhost/phpmvccrud/public/Mahasiswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                // console.log(data);
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            }
        });

    });



});