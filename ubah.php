<?php
require 'functions.php';

//ambil data di url
$id = $_GET["id"];

//query data menu berdasarkan id
$menu = query("SELECT * FROM menu WHERE ID = $id")[0]; 

//cek apakah tombol update sudah ditekan atau belum
if(isset($_POST["update"])){
    //cek data berhasil di update atau tidak
    if(ubah($_POST)>0){
        echo "<script>
            alert('Data berhasil di ubah');
            document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
            alert('Data gagal di update');
            document.location.href = 'index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Menu</title>
</head>
<body>
    <h1>Update Data Menu</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $menu["ID"]; ?>">
        <ul>
            <li>
                <label for="nm">Nama : </label>
                <input type="text" name="nama_menu" id="nm" required value="<?= $menu['Nama_menu'];?>">
            </li>
            <li>
                <label for="gb">Gambar : </label>
                <input type="text" name="gambar" id="gb" value="<?= $menu['Gambar'];?>">
            </li>
            <li>
                <label for="hg">Harga : </label>
                <input type="text" name="harga" id="hg" required value="<?= $menu['Harga'];?>">
            </li>
            <li>
                <button type="submit" name="update">Update</button>
            </li>
        </ul>

    </form>
</body>
</html>