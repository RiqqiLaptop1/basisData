<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data | TOKO EMAS RIQQI</title>
  <style>
    fieldset {
      width: 350px;
    }
  </style>
</head>

<body>
  <?php
  if (isset($_POST['tambah'])) :
    $koneksi = mysqli_connect('localhost', 'root', '', 'toko_emas_riqqi_db')
      or die(mysqli_error($koneksi));

    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $gaji = htmlspecialchars($_POST['gaji']);

    $sql = "INSERT INTO karyawan_riqqi 
    (nama_karyawan,almt_karyawan,gaji_karyawan,tgl_gabung)VALUES
    ('$nama','$alamat',$gaji,now())";

    mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
    echo "berhasil tambah data";
  else :
  ?>
    <fieldset>
      <legend>Tambah Data Karyawan</legend>
      <form action="" method="POST">
        <table>
          <tr>
            <td><label for="nama">Nama Karyawan</label></td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama"></td>
          </tr>
          <tr>
            <td><label for="alamat">Alamat Karyawan</label></td>
            <td>:</td>
            <td><input type="text" name="alamat" id="alamat"></td>
          </tr>
          <tr>
            <td><label for="gaji">Gaji Karyawan</label></td>
            <td>:</td>
            <td><input type="number" name="gaji" id="gaji"></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><button type="submit" name="tambah">Tambah</button></td>
          </tr>
        </table>
      </form>
    </fieldset>
  <?php endif; ?>
</body>

</html>