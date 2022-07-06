<?php
include 'prog1.php';
$conn = koneksi();
mysqli_select_db($conn, 'toko_emas_riqqi_db')
  or die("Koneksi ke Database toko_emas_riqqi_db gagal : " . mysqli_error($conn));

echo "Koneksi berhasil ke database toko_emas_riqqi_db";
mysqli_close($conn);
