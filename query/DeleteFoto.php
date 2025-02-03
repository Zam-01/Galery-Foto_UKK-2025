<?php
include("koneksi.php");
$FotoID = $_GET['FotoID'];

// todo: hapus foto

$query = "DELETE FROM foto WHERE FotoID = '$FotoID' ";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
     $_SESSION['success'] = "Berhasil Hapus Foto";
     header('Location: ../View/kelolafoto.php');
} else {
     $_SESSION['error'] = "Gagal Hapus Foto";
}
