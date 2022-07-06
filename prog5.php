<?php
include 'prog1.php';
$conn = koneksi();

$sql = "INSERT INTO karyawan_riqqi
  (nama_karyawan, almt_karyawan, gaji_karyawan, tgl_gabung) VALUES
  ('RINTANAH','JL.PENI KAV 49 BINAGRIYA',1000000,now())";

$tambahData = mysqli_query($conn, $sql) or die("gagal tambah data : " . mysqli_error($conn));
echo "Berhasil tambah data <br>";
mysqli_close($conn);
