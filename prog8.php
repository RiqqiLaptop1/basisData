<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paging Toko Emas Riqqi</title>
</head>

<body>
  <?php
  $batas = 3;
  $koneksi = mysqli_connect('localhost', 'root', '', 'toko_emas_riqqi_db') or die(mysqli_error($koneksi));
  $sql = "SELECT count(id_karyawan) FROM karyawan_riqqi";
  $ambilData = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
  $row = mysqli_fetch_array($ambilData, MYSQLI_NUM);
  $hitung = $row[0];

  if (isset($_GET['page'])) {
    $page = $_GET['page'] + 1;
    $offset  = $batas * $page;
  } else {
    $page = 0;
    $offset = 0;
  }
  $left_rec = $hitung - ($page * $batas);

  $sql = "SELECT id_karyawan, nama_karyawan, gaji_karyawan FROM karyawan_riqqi LIMIT $offset,$batas";

  $ambilData = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
  while ($row = mysqli_fetch_assoc($ambilData)) {
    echo "ID KARYAWAN   : {$row['id_karyawan']} <br>
          NAMA KARYAWAN : {$row['nama_karyawan']} <br>
          GAJI KARYAWAN : {$row['gaji_karyawan']} <br>
          ----------------------------------------- <br>";
  }

  if ($page > 0) {
    $last = $page - 2;
    echo '<a href="?page=' . $last . '">3 Data Sebelumnya</a> | <a href="?page=' . $page . '">3 Data lagi</a>';
  } elseif ($page == 0) {
    echo '<a href="?page=' . $page . '">3 Data lagi</a>';
  } elseif ($left_rec < $batas) {
    $last = $page - 2;
    echo '<a href="?page=' . $last . '">3 Data Sebelumnya</a>';
  }
  mysqli_close($koneksi);


  ?>

</body>

</html>