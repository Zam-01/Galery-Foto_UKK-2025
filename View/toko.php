<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Page</title>
    <!-- link bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- link css -->
    <link rel="stylesheet" href="./css/toko-style.css" />
  </head>
  <body class="body-toko">
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
              <a class="nav-link" aria-current="page" href="barang.html"
                >Barang</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="toko.html">Toko</a>
            </li>
          </ul>
          <a href=""><button class="btn btn-outline-warning">Logout</button></a>
        </div>
      </div>
    </nav>
    <main class="container-fluid mt-5 pt-5">
      <div class="container mt-3 pt-2">
        <table class="table table-responsive table-bordered">
          <thead>
            <tr>
              <th scope="col" class="text-center px-2">No</th>
              <th scope="col" class="text-center px-2">Logo Toko</th>
              <th scope="col" class="text-center px-2">Nama Toko</th>
              <th scope="col" class="text-center px-2">Alamat</th>
              <th scope="col" class="text-center px-2">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="text-center py-3">1</th>
              <td class="text-center py-3">
                <img src="..." alt="Toko satu" />
              </td>
              <td class="text-center py-3">Atlantis dahsyat</td>
              <td class="text-center py-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit
              </td>
              <td class="text-center py-3">
                <a href="view-toko.html" class="btn btn-outline-dark h-25"
                  >Cek Toko</a
                >
              </td>
            </tr>
            <tr>
              <th scope="row" class="text-center py-3">1</th>
              <td class="text-center py-3">
                <img src="..." alt="Toko satu" />
              </td>
              <td class="text-center py-3">Jaya Handphone</td>
              <td class="text-center py-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit
              </td>
              <td class="text-center py-3">
                <a href="view-toko.html" class="btn btn-outline-dark h-25"
                  >Cek Toko</a
                >
              </td>
            </tr>
            <tr>
              <th scope="row" class="text-center py-3">1</th>
              <td class="text-center py-3">
                <img src="..." alt="Toko satu" />
              </td>
              <td class="text-center py-3">Galaxy</td>
              <td class="text-center py-3">
                <article class="text-wrap mx-auto" style="width: 40rem">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet
                  unde aut sint.
                </article>
              </td>
              <td class="text-center py-3">
                <a href="view-toko.html" class="btn btn-outline-dark h-25"
                  >Cek Toko</a
                >
              </td>
            </tr>
            <tr>
              <th scope="row" class="text-center py-3">1</th>
              <td class="text-center py-3">
                <img src="..." alt="Toko satu" />
              </td>
              <td class="text-center py-3">Xiaomayy</td>
              <td class="text-center py-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit
              </td>
              <td class="text-center py-3">
                <a href="view-toko.html" class="btn btn-outline-dark h-25"
                  >Cek Toko</a
                >
              </td>
            </tr>
          </tbody>
        </table>
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
