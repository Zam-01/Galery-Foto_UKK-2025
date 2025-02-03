<?php include("../layout/pembuka.php"); ?>
<?php
session_start();
?>
<main class="mt-5 p-4 container ">
     <!-- TODO : Harus di isi -->
     <h1 class="text-center font-monospace">Form Kelola Galery</h1>
     <?php
     if (isset($_SESSION['error'])) {
          echo "<div class='alert alert-danger' role='alert'>
          $_SESSION[error]
          </div>";
          unset($_SESSION['error']);
     }
     ?>
     <form action="../query/ProsesUpload.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
               <label for="Judul_Foto" class="form-label">Judul Foto</label>
               <input type="text" class="form-control" id=Judul_Foto" required name="JudulFoto">
          </div>
          <div class="mb-3">
               <label for="DeskripsiFoto" class="form-label">Deskripsi Foto</label>
               <input type="text" class="form-control" id="DeskripsiFoto" required name="DeskripsiFoto">
          </div>
          <div class="mb-3">
               <label for="formFile" class="form-label">Silahkan Upload Foto Anda😁😁😁😁</label>
               <input class="form-control" type="file" id="formFile" name="Gambar">
          </div>
          <div class="button">
               <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
               <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
     </form>
</main>



<?php include("../layout/penutup.php"); ?>