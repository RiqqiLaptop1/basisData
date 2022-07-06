<?php
include 'prog1.php';
$conn = koneksi();
$sql = "CREATE DATABASE toko_emas_riqqi_db";
$buatDb = mysqli_query($conn, $sql)
  or die('Pembuatan Database gagal :' . mysqli_error($conn));

echo "Database toko_emas_riqqi_db berhasil dibuat <br>";
mysqli_close($conn);
