  <?php
     $HalamanAktif = basename($_SERVER['PHP_SELF']); // Ambil nama file yang sedang aktif
     ?>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3">
       <div class="container-fluid">
            <a class="navbar-brand" href="#">Brand Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                 <ul class="navbar-nav">
                      <li class="nav-item">
                           <a class="nav-link  <?= ($HalamanAktif == 'AlbumFoto.php') ? 'active' : ''; ?>"
                                aria-current="page" href="../View/AlbumFoto.php">Album</a>
                      </li>
                      <li class="nav-item">
                           <a class="nav-link <?= ($HalamanAktif == 'kelolafoto.php') ? 'active' : ''; ?>"
                                aria-current="page" href="../View/kelolafoto.php">Data</a>
                      </li>
                      <li class="nav-item">
                           <a class="nav-link <?= ($HalamanAktif == 'Foto.php') ? 'active' : ''; ?>"
                                href="../View/Foto.php">Foto</a>
                      </li>
                 </ul>
                 <a href=""><button class="btn btn-outline-warning">Logout</button></a>
            </div>
       </div>
  </nav>