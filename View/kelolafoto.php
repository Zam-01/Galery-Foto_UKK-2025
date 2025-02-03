<?php include("../layout/pembuka.php"); ?>
<?php include("../layout/Navbar.php"); ?>
<!-- include koneksi -->
<?php

include("./query/koneksi.php");

$query = "SELECT * FROM foto";
$result = mysqli_query($conn, $query);

?>
<main class="container mt-5 pt-5">
     <div class="mb-3 mt-2 p-2">
          <a href="TambahFoto.php" class="btn btn-dark">Tambah Foto</a>
     </div>
     <table class="table">
          <thead>
               <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Foto</th>
                    <th scope="col" class="text-center">Judul</th>
                    <th scope="col" class="text-center">Deskripsi</th>
                    <th scope="col" class="text-center">Tanggal Upload</th>
                    <th scope="col" class="text-center">Action</th>
               </tr>
          </thead>
          <tbody class="text-center">
               <?php

               if ($result->num_rows > 0) {
               } ?>
               <tr>
                    <td>1</td>
                    <td><img src="../asset/img/iphone-11.jpg" alt="foto" width="100px"></td>
                    <td>foto 1</td>
                    <td>ini adalah foto 1</td>
                    <td>2021-10-10</td>
                    <td>
                         <a href="#" class="btn btn-primary">Edit</a>
                         <a href="#" class="btn btn-danger">Delete</a>
                    </td>
               </tr>
          </tbody>
     </table>
</main>
<?php include("../layout/penutup.php"); ?>