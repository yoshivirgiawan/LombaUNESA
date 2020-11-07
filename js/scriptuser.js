$(function(){
    $('.ubahDataMahasiswa').on('click', function() {
        $('#exampleModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body-form').attr('action', 'http://localhost/MVC/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/MVC/public/mahasiswa/getubah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#jurusan').val(data.jurusan);
            }
        });
    });

    $('.tambahDataMahasiswa').on('click', function() {
        $('#exampleModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body-form').attr('action', 'http://localhost/MVC/public/mahasiswa/tambah');
        $('#nama').val(null);
        $('#nrp').val(null);
        $('#jurusan').val(null);
    });
});