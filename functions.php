<?php 
//koneksi database
$con = mysqli_connect("localhost","root","","web");


function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}


function tambah($data){
    global $con;

    //ambil data tiap elemen dalam form
    $nama = htmlspecialchars($data["nama_menu"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "INSERT INTO menu VALUES ('','$nama', '$gambar', '$harga')";
    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
}


function hapus($id){
    global $con;
    mysqli_query($con, "DELETE FROM menu WHERE ID = $id");
    return mysqli_affected_rows($con);
}

function ubah($data){
    global $con;

    //ambil data yang di update dari form ubah.php
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama_menu"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "UPDATE menu SET 
                Nama_menu = '$nama', 
                Gambar = '$gambar', 
                Harga = '$harga' 
                WHERE ID = $id";

    mysqli_query($con, $query);
    return mysqli_affected_rows($con);
}
?>
