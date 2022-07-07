<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'toko_emas_riqqi_db')
  or die(mysqli_error($koneksi));

$sql = "SELECT id_karyawan, nama_karyawan,almt_karyawan, gaji_karyawan FROM karyawan_riqqi
WHERE gaji_karyawan <1100000";

$ambilData = mysqli_query($koneksi, $sql)
  or die(mysqli_error($koneksi));

while ($row = mysqli_fetch_assoc($ambilData)) {
  echo "ID KARYAWAN   : {$row['id_karyawan']} <br>
        NAMA KARYAWAN : {$row['nama_karyawan']} <br>
        ALAMAT KARYAWAN : {$row['almt_karyawan']} <br>
        GAJI KARYAWAN : {$row['gaji_karyawan']} <br>
        ----------------------------------------- <br>";
}
echo "Berhasil ambil data";
mysqli_close($koneksi);
