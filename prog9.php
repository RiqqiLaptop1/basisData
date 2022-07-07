<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data</title>
</head>

<body>
  <?php
  if (isset($_POST['update'])) :
    $conn = mysqli_connect('localhost', 'root', '', 'toko_emas_riqqi_db') or die(mysqli_error($conn));
    $id = htmlspecialchars($_POST['id']);
    $gaji = htmlspecialchars($_POST['gaji']);

    $sql = "UPDATE karyawan_riqqi SET 
      gaji_karyawan = $gaji
      WHERE id_karyawan = $id";
    $retval = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    echo 'update data sukses';
    mysqli_close($conn);
  else :
  ?>
    <fieldset>
      <legend>Update Data Karyawan</legend>
      <form action="" method="POST">
        <table>
          <tr>
            <td><label for="id">ID Karyawan</label></td>
            <td>:</td>
            <td><input type="text" name="id" id="id"></td>
          </tr>
          <tr>
            <td><label for="gaji">Gaji Karyawan</label></td>
            <td>:</td>
            <td><input type="number" name="gaji" id="gaji"></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><button type="submit" name="update">Update</button></td>
          </tr>
        </table>
      </form>
    </fieldset>
  <?php endif; ?>
</body>

</html>