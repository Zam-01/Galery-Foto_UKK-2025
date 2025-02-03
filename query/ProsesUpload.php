<?php

include("koneksi.php");
//? session
session_start();

// Todo : ambil data dari user 
$JudulFoto = $_POST['JudulFoto'];
$DeskripsiFoto = $_POST['DeskripsiFoto'];
$FileUpload = $_FILES['Gambar'];

// todo : ambil data dari file
$namaFile = $FileUpload['name'];
$ukuranFile = $FileUpload['size'];
$error = $FileUpload['error'];
$tmpName = $FileUpload['tmp_name']; // ? penyimpanan sementara 

// todo : cek apakah user upload file atau tidak
if ($error === 4) {
     $_SESSION['error'] = "Silahkan Upload Foto Terlebih Dahulu";
     header('Location: ../View/TambahFoto.php');
     exit;
}

// todo : ubah file upload menjadi array
$ekstensifileupload = explode('.', $namaFile); //['nama_file','ekstensi_file'] contoh: ['login','jpg']
$NamaFile = strtolower(end($ekstensifileupload));
// todo : strtolower() : mengubah string menjadi huruf kecil
// todo : end() : mengambil index array yang paling akhir 

// todo : cek ekstensi gambar yang di upload user
$extensivalidfile = ['jpg', 'jpeg', 'png'];
if (!in_array($NamaFile, $extensivalidfile)) {
     $_SESSION['error'] = "Silahkan Upload File Dengan Ekstensi jpg, jpeg, png";
     header('Location: ../View/TambahFoto.php');
     exit;
}

// todo : cek ukuran file, maksimal 2MB
if ($ukuranFile > 2000000) {
     $_SESSION['error'] = "Ukuran File Terlalu Besar, Maksimal 2MB";
     header('Location: ../View/TambahFoto.php');
     exit;
}

// todo : upload gambar
$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $NamaFile;

$upload = move_uploaded_file($tmpName, '../asset/img/' . $namaFileBaru);

if (!$upload) {
     $_SESSION['error'] = "Gagal Upload Foto";
     header('Location: ../View/TambahFoto.php');
     exit;
}

// todo : input data ke database
$query = "INSERT INTO foto (JudulFoto,DeskripsiFoto,LokasiFile) VALUES ('$JudulFoto', '$DeskripsiFoto', '$namaFileBaru')";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
     $_SESSION['success'] = "Berhasil Upload Foto";
     header('Location: ../View/kelolafoto.php');
     exit;
} else {
     $_SESSION['error'] = "Gagal Upload Foto";
     header('Location: ../View/TambahFoto.php');
     exit;
}

// var_dump($JufulFoto, $DeskripsiFoto, $FileUpload);