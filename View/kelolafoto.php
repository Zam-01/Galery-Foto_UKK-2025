<?php include("../layout/pembuka.php"); ?>
<?php include("../layout/Navbar.php"); ?>
<!-- include koneksi -->
<?php

include("../query/koneksi.php");
// ambil selurh data dari database
$query = "SELECT * FROM foto";
$result = mysqli_query($conn, $query);
//kemudian pecah menjadi sebuah array


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
               $no = 1;
               while ($data = mysqli_fetch_assoc($result)):               ?>
               <tr>
                    <td><?= $no++; ?></td>
                    <td><img src="../asset/img/<?= $data['LokasiFile']; ?>" alt="foto" width="100px"></td>
                    <td><?= $data['JudulFoto']; ?></td>
                    <td>
                         <?= $data['DeskripsiFoto']; ?>
                    </td>
                    <td><?= $data['TanggalUnggah']; ?> WITA</td>
                    <td>
                         <a href="EditFoto.php?FotoID=<?= $data['FotoID']; ?>" class="btn btn-primary btn-sm">Edit</a>
                         <a href="../query/DeleteFoto.php?FotoID=<?=$data['FotoID']; ?>" class="btn btn-danger btn-sm"
                              onclick=" return confirm('Apakah Anda Yakin?')">Hapus</a>
                    </td>
               </tr>

               <?php endwhile; ?>

          </tbody>
     </table>
</main>
<?php include("../layout/penutup.php"); ?>