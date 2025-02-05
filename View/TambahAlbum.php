<?php include_once("../layout/pembuka.php"); ?>
<?php

session_start();
?>

<div class="container-fluid">
     <div class="container">
          <h2>form tambah album</h2>
          <!-- TODO : isi form disini -->
          <form action="../query/ProsesTambahAlbum.php" method="post">
               <?php
               if (isset($_SESSION['eror'])) {
                    echo "<div class='alert alert-danger' role='alert'>";
                    echo $_SESSION['eror'];
                    echo "</div>";
                    unset($_SESSION['eror']);
               }
               ?>
               <div class="mb-3">
                    <label for="NamaAlbum" class="form-label">Nama Album</label>
                    <input type="text" class="form-control" id="NamaAlbum" name="NamaAlbum">
               </div>

               <div class="mb-3">
                    <label for="Deskripsi" class="form-label">Deskripsi Album</label>
                    <input type="text" class="form-control" id="Deskripsi" name="Deskripsi">
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
          </form>
     </div>
</div>
<?php include_once("../layout/penutup.php"); ?>