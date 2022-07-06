<?php

function koneksi()
{
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $koneksi = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Gagal Koneksi :' . mysqli_error($koneksi));

  echo "Koneksi Berhasil (Muhammad Riqqi Amru 21.230.0069) <br>";

  mysqli_select_db($koneksi, 'toko_emas_riqqi_db')
    or die("Koneksi ke Database toko_emas_riqqi_db gagal : " . mysqli_error($koneksi));
  return $koneksi;
}
