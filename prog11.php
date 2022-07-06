<?php
$conn = mysqli_connect('localhost', 'root', '', 'toko_emas_riqqi_db') or die(mysqli_error($conn));

$tableName = "karyawan_riqqi";
$backupFile = "D:/SOFTWARE/EXE/xampp/htdocs/basisData/karyawan_riqqi2.sql";
$sql = "SELECT nama_karyawan,gaji_karyawan,almt_karyawan,tgl_gabung INTO OUTFILE '$backupFile' FROM  $tableName";
$backup = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo 'Backup berhasil';
mysqli_close($conn);
