<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>view toko</title>
    <!-- link  bootstrap css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!--  link css -->
    <link rel="stylesheet" href="./css/toko-style.css" />
  </head>
  <body>
    <!--navbar  -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Brand Logo</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="barang.html"
                >Barang</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="toko.html">Toko</a>
            </li>
          </ul>
          <a href=""><button class="btn btn-outline-warning">Logout</button></a>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
    <main class="container-fluid mt-5 pt-4">
      <section id="form-cari-barang" class="container mt-4 p-4">
        <form
          class="d-flex gap-3 w-75 mx-auto"
          role="search"
          id="search-barang"
        >
          <input
            class="form-control me-2 p-2"
            type="search"
            placeholder="Cari Barang Yang Anda Inginkan"
            aria-label="Search"
          />
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </section>
      <div id="list-barang" class="list-barang mt-5 py-5 container-fluid">
        <div class="row">
          <div class="col-8 d-flex gap-3 justify-content-center p-3">
            <div class="card col-4" style="width: 18rem">
              <img
                src="./img/infinix-smart-9.jpg"
                class="card-img-top"
                alt="infinix Smart 9 "
              />
              <p class="card-title fw-semibold pt-2 text-center">
                Infinix Smart 9
              </p>
              <div class="card-body d-flex justify-content-center gap-3">
                <a href="#" class="btn btn-primary">View Details</a>
                <a href="view_beli_barang.html" class="btn btn-success">Beli</a>
              </div>
            </div>
            <div class="card col-4" style="width: 18rem">
              <img
                src="./img/infinix-zero-30.jpg"
                class="card-img-top"
                alt="infinix-zero-30.jpg"
              />
              <p class="card-title fw-semibold pt-2 text-center">
                Infinix Zero
              </p>
              <div class="card-body d-flex justify-content-center gap-3">
                <a href="#" class="btn btn-primary">View Details</a>
                <a href="view_beli_barang.html" class="btn btn-success">Beli</a>
              </div>
            </div>
            <div class="card col-4" style="width: 18rem">
              <img
                src="./img/infinix-gt-20-pro.jpg"
                class="card-img-top"
                alt="infinix-gt-20-pro"
              />
              <p class="card-title fw-semibold pt-2 text-center">
                Infinix GT 20 Pro
              </p>
              <div class="card-body d-flex justify-content-center gap-3">
                <a href="#" class="btn btn-primary">View Details</a>
                <a href="view_beli_barang.html" class="btn btn-success">Beli</a>
              </div>
            </div>
          </div>
          <div class="col-4 d-flex justify-content-center">
            <figure class="">
              <img
                src="./img/logo-toko-1.jpg"
                alt="Brand Logo Toko"
                style="width: 15rem"
                class="logo-image"
              />
              <figcaption>
                <h3>Handphone Store</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <a href="view-toko.html" class="btn btn-outline-dark h-25"
                  >Cek Toko</a
                >
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </main>
    <footer class="fixed-bottom">
      <div class="container-fluid mt-2 p-3">
        <div class="row">
          <div class="col text-center text-black">
            <p>&copy; 2025 All Right Reserved | Made By KhaerunNizam.DEV</p>
          </div>
        </div>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
