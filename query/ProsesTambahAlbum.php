<?php
session_start();
include_once("koneksi.php");


$NamaAlbum = $_POST['NamaAlbum'];
$Deskripsi = $_POST['Deskripsi'];


if (empty($NamaAlbum) || empty($Deskripsi)) {
     $_SESSION['eror'] = "Data tidak boleh kosong";
     header("Location: ../View/TambahAlbum.php");
     exit();
}
$query = "INSERT INTO album (NamaAlbum, Deskripsi) VALUES ('$NamaAlbum', '$Deskripsi')";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
     header("Location: ../View/AlbumFoto.php");
} else {
     echo "Gagal menambahkan album";
}