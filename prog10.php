<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hapus Data</title>
</head>

<body>
  <?php
  if (isset($_POST['hapus'])) :
    $conn = mysqli_connect('localhost', 'root', '', 'toko_emas_riqqi_db') or die(mysqli_error($conn));
    $id = htmlspecialchars($_POST['id']);

    $sql = "DELETE FROM karyawan_riqqi WHERE id_karyawan = $id";
    $retval = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    echo 'Hapus data sukses';
    mysqli_close($conn);
  else :
  ?>
    <fieldset>
      <legend>Hapus Data Karyawan</legend>
      <form action="" method="POST">
        <table>
          <tr>
            <td><label for="id">ID Karyawan</label></td>
            <td>:</td>
            <td><input type="text" name="id" id="id"></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><button type="submit" name="hapus">Hapus</button></td>
          </tr>
        </table>
      </form>
    </fieldset>
  <?php endif; ?>
</body>

</html>