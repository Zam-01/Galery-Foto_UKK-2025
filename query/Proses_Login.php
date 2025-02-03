<?php

session_start();

include('koneksi.php');
// aambil data yang sudah di inputkan oleh user
$username = $_POST['username'];
$password = $_POST['password'];

// TODO ambil data dari databse yang sesuai dengan user yang login 

$query = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
     $data = $result->fetch_assoc();
     $_SESSION['Is_Login'] = true;
     $_SESSION['Username'] = $data['Username'];
     $_SESSION['Password'] = $data['Password'];
     header('location: /Latihan-Ukk/View/barang.php');
     exit();
}

// ? cek jika username dan password tidak cocok
if ($data['Username'] !== $username && $data['Password'] !== $password) {
     $_SESSION['user_eror'] = 'maaf username dan password  yang anda masukkan tidak sesuai, ';
     header('Location: ../View/index.php');
}