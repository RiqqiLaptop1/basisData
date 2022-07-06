<?php
include 'prog1.php';
$conn = koneksi();

$sql = "CREATE TABLE karyawan_riqqi (
  id_karyawan INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nama_karyawan VARCHAR(20) NOT NULL,
  almt_karyawan VARCHAR(20) NOT NULL,
  gaji_karyawan INT NOT NULL,
  tgl_gabung TIMESTAMP NOT NULL)";

$buatTabel = mysqli_query($conn, $sql) or die("Gagal buat tabel :" . mysqli_error($conn));
echo "Tabel karyawan berhasil dibuat";
mysqli_close($conn);
