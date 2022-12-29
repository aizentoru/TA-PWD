<?php
require 'functions.php';
$menu = query("SELECT * FROM menu");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h2>Daftar Menu</h2>
    <a href="tambah.php">Tambah data menu</a>
    <br><br>

<table border="1" cellpadding = "10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Aksi</th>       
    </tr>
    <?php $no=1 ?>
    <?php foreach($menu as $row): ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $row["Nama_menu"]; ?></td>
        <td><?= $row["Harga"]; ?></td>
        <td>
            <img src="image/<?= $row["Gambar"]; ?>" width="80">
        </td>
        <td>
            <a href="ubah.php">ubah</a> |
            <a href="hapus.php?id=<?= $row['ID']; ?>" onclick="return confirm('yakin hapus?');">hapus</a>
        </td>
    </tr>
    <?php $no++ ?>
    <?php endforeach; ?>

</table> 
</body>
</html>


