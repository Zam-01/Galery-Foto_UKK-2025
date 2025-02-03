<!-- include file pemnuka  -->
<?php include("../layout/pembuka.php"); ?>
<!-- include navbar -->
<?php include("../layout/Navbar.php"); ?>

<?php
include("../query/koneksi.php");

// todo: ambil id foto yang di edit
$id = $_GET["FotoID"];

$query = "SELECT * FROM foto WHERE FotoID = '$id' ";
$data = mysqli_query($conn, $query);


?>



<main class="mt-5 p-4 container ">
     <!-- TODO : Harus di isi -->
     <h1 class="text-center font-monospace">Form Edit Galery</h1>

     <?php
     while ($d = mysqli_fetch_assoc($data)):
     ?>
     <form action="../query/ProsesUpdateFoto.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="FotoID" value="<?= $d['FotoID']; ?>">
          <input type="hidden" name="GambarLama" value="<?= $d['LokasiFile']; ?>">
          <div class="mb-3">
               <label for="nama_toko" class="form-label">Judul Foto</label>
               <input type="text" class="form-control" id="nama_toko" required value="<?= $d['JudulFoto']; ?>"
                    name="JudulFoto">
          </div>
          <div class="mb-3">
               <label for="DeskripsiFoto" class="form-label">Deskripsi Foto</label>
               <input type="text" class="form-control" id="DeskripsiFoto" required name="DeskripsiFoto"
                    value="<?= $d['DeskripsiFoto']; ?>">
          </div>
          <div class="mb-3">
               <label for="formFile" class="form-label">Gambar Lama</label><br>
               <img src="../asset/img/<?= $d['LokasiFile']; ?>" alt="Gambar" class="img-thumbnail" width="300">
          </div>
          <div class="mb-3">
               <label for="formFile" class="form-label">Yakin mau ganti 🥲🥲🥲🥲</label>
               <input class="form-control" type="file" id="formFile" name="GambarBaru">
          </div>
          <div class="button">
               <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
               <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
     </form>
     <?php
     endwhile;
     ?>
</main>


<!-- include file penutup -->
<?php include("../layout/penutup.php"); ?>