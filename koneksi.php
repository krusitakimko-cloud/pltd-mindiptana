<?php
// Konfigurasi Database
$host     = "localhost";
$user     = "root";
$password = "";
$database = "db_pltd"; // Disesuaikan dengan nama database di phpMyAdmin Anda

// Membuat koneksi ke database MySQL
$koneksi = mysqli_connect($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil atau gagal
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>