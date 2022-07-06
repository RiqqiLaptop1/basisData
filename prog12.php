<?php
$conn = mysqli_connect('localhost', 'root', '', 'toko_emas_riqqi_db') or die(mysqli_error($conn));

$tableName = "karyawan_riqqi";
$backupFile = "D:/SOFTWARE/EXE/xampp/htdocs/basisData/karyawan_riqqi2.sql";
$sql = "LOAD DATA INFILE '$backupFile' INTO TABLE $tableName";
$restore = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo 'Load data berhasil';
mysqli_close($conn);
