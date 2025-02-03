<?php

require_once('koneksi.php');

session_start();
//simpan  data yang dikirim oleh user
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
// ubah data yang dikirim oleh user menjadi string husus di no-hp
$Nohp = strval($_POST['no-hp']);
$alamat = $_POST['alamat'];
$nama = $_POST['nama'];



//cek apakah data yang dikirim oleh user sudah ada di database
$sql = "SELECT * FROM user WHERE Username = '$username' OR Email = '$email' OR No_hp = '$Nohp'";
$query = mysqli_query($conn, $sql);


//Todo cek apakah data yang dikirim oleh user kosong
if (empty($username) || empty($password) || empty($email) || empty($Nohp) || empty($alamat) || empty($nama)) {
     // ? jika kosong maka tampilkan pesan error dan kembali  ke halaman register
     $_SESSION['message_eror'] = "Data tidak boleh kosong";
     header("Location: ../View/register.php");
} elseif ($query->num_rows > 0) {
     // ambil data user dalam bentuk array
     $data = $query->fetch_assoc();
     // cek data yang di inputkan oleh user jika sama dengan data yang ada di database kembalikan ke halaman register
     if ($data['Username'] == $username) {
          $_SESSION['username_eror'] = "Username sudah terdaftar";
          header("Location:../View/register.php");
     } else if ($data['Email'] == $email) {
          $_SESSION['email_eror'] = "Email sudah terdaftar";
          header("Location:../View/register.php");
     } else if ($data['No_hp'] == $Nohp) {
          $_SESSION['nohp_eror'] = "No Hp sudah terdaftar";
          header("Location:../View/register.php");
     }
} else {
     //jika data yang dikirim oleh user bukan kosong, input data yang dikirim oleh user ke database
     $InsertData = "INSERT INTO user (Username, Password, Email, NamaLengkap,No_hp, Alamat) VALUES ('$username',
     '$password','$email','$nama','$Nohp','$alamat')";

     $query = $conn->query($InsertData);
     if ($query) {
          // jika berhasil input data ke database, maka tampilkan pesan berhasil dan kembali ke halaman login
          $_SESSION['message_success'] = "Register Berhasil silahkan login dengan username dan passsword yang sudah anda daftarkan";
          header("Location:../View/index.php");
     }
}