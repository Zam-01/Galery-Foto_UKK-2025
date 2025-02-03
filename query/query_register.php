<?php
// Include database connection file
include_once("koneksi.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $data = [
          'email' => $_POST['email'],
          'password' => $_POST['password'],
          'no_hp' => $_POST['no-hp'],
          'nama' => $_POST['nama'],
          'alamat' => $_POST['alamat']
     ];

     // cek jika data yang dikirimkan oleh user kosong
     if ($data['email'] == '' || $data['password'] == '' || $data['no_hp'] == '' || $data['nama'] == '' || $data['alamat'] == '') {
          $_SESSION['message_eror'] = 'Data tidak boleh kosong';
          header('location:../register.php');
     } else {
          var_dump($data);
     }
}