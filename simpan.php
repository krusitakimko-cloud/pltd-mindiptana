<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    // Mengambil input dari form pengaduan
    $nama     = mysqli_real_escape_string($koneksi, $_POST['nama_pelapor']);
    $no_hp    = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
    $lokasi   = mysqli_real_escape_string($koneksi, $_POST['lokasi']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $gejala   = mysqli_real_escape_string($koneksi, $_POST['gejala']);
    $catatan  = mysqli_real_escape_string($koneksi, $_POST['catatan']);

    // Query untuk menyimpan ke tabel laporan_gangguan
    $query = "INSERT INTO laporan_gangguan (nama_pelapor, no_hp, lokasi, kategori, gejala, catatan) 
              VALUES ('$nama', '$no_hp', '$lokasi', '$kategori', '$gejala', '$catatan')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Laporan berhasil dikirim!');
                window.location.href='pengaduan.php';
              </script>";
    } else {
        echo "Gagal menyimpan laporan: " . mysqli_error($koneksi);
    }
}
?>