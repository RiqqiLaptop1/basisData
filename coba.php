<?php
if (isset($_POST['kirim'])) {
  var_dump($_POST['nama']);
  var_dump(addslashes($_POST['nama']));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coba</title>
</head>

<body>
  <form action="" method="POST">
    <label for="nama">nama</label>
    <input type="text" name="nama" id="nama">
    <button type="submit" name="kirim">Kirim</button>
  </form>
</body>

</html>