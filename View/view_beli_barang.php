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
        <!-- <div class="collapse navbar-collapse" id="navbarNav">
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
        </div> -->
      </div>
    </nav>
    <!-- end navbar -->
    <main class="container-fluid mt-5 pt-5">
      <div id="list-barang" class="list-barang mt-5 py-5 container-fluid">
        <div class="row mt-4 py-4">
          <div
            class="col-8 bg-dark-subtle p-3"
          >
            <figure class="d-flex gap-5 justify-content-center align-items-center">
              <img
                src="./img/infinix-gt-20-pro.jpg"
                class="card-img-top"
                alt="infinix-gt-20-pro"
                style="width: 25rem"
              />
              <figcaption>
                <header>
                  <p class="fw-semibold pt-2 text-center fs-3">
                    Infinix GT 20 Pro
                  </p>
                </header>
                <p class="fs-5 fw-semibold">Harga: Rp. 1200000</p>
                <p class="fs-5 fw-semibold">spesisfikasi: 
                    <ul>
                      <li class="fs-6 fw-semibold">RAM: 8GB</li>
                      <li class="fs-6 fw-semibold">ROM: 128GB</li>
                      <li class="fs-6 fw-semibold">Camera: 64MP</li>
                    </ul>
                </p>
                <div class="d-flex gap-3">
                  <a href="#" class="btn btn-success">Beli</a>
                  <a href="view-toko.html" class="btn btn-warning">Cancel</a>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-4 d-flex justify-content-center align-items-center ">
            <figure class="">
              <img
                src="./img/logo-toko-1.jpg"
                alt="Brand Logo Toko"
                style="width: 15rem"
                class="logo-image"
              />
              <figcaption class="p-2">
                <h3>Handphone Store</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
