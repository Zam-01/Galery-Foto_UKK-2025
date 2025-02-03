<!-- include file pemnuka  -->
<?php include("./layout/pembuka.php"); ?>
<!-- include navbar -->
<?php include("./layout/Navbar.php"); ?>

<main class="mt-5 p-4 container ">
     <!-- TODO : Harus di isi -->
     <h1 class="text-center font-monospace">Form Edit Galery</h1>
     <form>
          <div class="mb-3">
               <label for="nama_toko" class="form-label">Judul Foto</label>
               <input type="text" class="form-control" id="nama_toko" required>
          </div>
          <div class="mb-3">
               <label for="alamat_toko" class="form-label">Deskripsi Foto</label>
               <input type="text" class="form-control" id="alamat_toko" required>
          </div>
          <div class="mb-3">
               <label for="formFile" class="form-label">Yakin Mau Ganti😢😢😢😢😢😢</label>
               <input class="form-control" type="file" id="formFile">
          </div>
          <div class="button">
               <button type="submit" class="btn btn-primary">Submit</button>
               <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
     </form>
</main>


<!-- include file penutup -->
<?php include("./layout/penutup.php"); ?>