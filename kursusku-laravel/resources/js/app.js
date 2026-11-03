import $ from 'jquery';

window.$ = window.jQuery = $;

// KODE AJAX CEK KURSI (Disesuaikan dengan form pendaftaran kita)
$(document).ready(function() {
    $('#kursus').on('change', function() {
        // Ambil nama kursus dari teks option yang dipilih
        const namaKursus = $(this).find('option:selected').text();
        const $infoBox = $('#info-kursi');

        // Jika belum dipilih, sembunyikan info
        if (!$(this).val() || namaKursus === '-- Pilih Kursus --') {
            $infoBox.hide();
            return;
        }

        // Tampilkan status memuat
        $infoBox.text('Memuat ketersediaan...').show();

        // Panggil API yang sudah kita buat di web.php
        $.ajax({
            url: `/api/cek-kursi?kursus=${encodeURIComponent(namaKursus)}`,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                $infoBox.text(`${data.sisa} kursi tersisa untuk ${data.kursus}.`);
            },
            error: function() {
                $infoBox.text('Gagal memuat ketersediaan kursus.').css('color', 'red');
            }
        });
    });
});