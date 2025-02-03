<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Register Page</title>
     <!-- link bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
     <!-- link css -->
     <link rel="stylesheet" href="../asset/css/style.css" />
</head>

<body>
     <!-- navbar  -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
          <div class="container-fluid">
               <a class="navbar-brand text-capitalize fw-semibold " href="#">Lorem ipsum dolor sit amet</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
          </div>
     </nav>
     <div class="container">
          <section id="register-form">
               <header id="text-register" class="text-center">
                    <h1 class="text-capitalize font-monospace fw-semibold">Register here</h1>
                    <!-- <p>Create an account to access all the features.</p> -->
               </header>

               <form action="../query/Proses_Register.php" class="" method="post">
                    <?php
                    if (isset($_SESSION['message_eror'])) {
                         echo '<div class="alert alert-danger" role="alert">' . $_SESSION['message_eror'] . '</div>';
                         unset($_SESSION['message_eror']);
                    }
                    if (isset($_SESSION['username_eror'])) {
                         echo '<div class="alert alert-danger" role="alert">' . $_SESSION['username_eror'] . '</div>';
                         unset($_SESSION['username_eror']);
                    }
                    if (isset($_SESSION['email_eror'])) {
                         echo '<div class="alert alert-danger" role="alert">' . $_SESSION['email_eror'] . '</div>';
                         unset($_SESSION['email_eror']);
                    }
                    if (isset($_SESSION['nohp_eror'])) {
                         echo '<div class="alert alert-danger" role="alert">' . $_SESSION['nohp_eror'] . '</div>';
                         unset($_SESSION['nohp_eror']);
                    }
                    ?>
                    <div class="layout  container">

                         <div class="mb-3">
                              <label for="username" class="form-label"> Your Username</label>
                              <input type="username" class="form-control p-3" id="username"
                                   placeholder="Create Your Username" name="username" />
                         </div>
                         <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control p-3" id="email" placeholder="Input Your Email"
                                   name="email" />
                         </div>
                         <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control p-3" id="password"
                                   placeholder="Input Your Password" name="password" />
                         </div>
                         <div class="mb-3">
                              <label for="no-hp" class="form-label">No Hp</label>
                              <input type="text" inputmode="numeric" class="form-control p-3" id="no-hp"
                                   placeholder="Input Your Phone Number" name="no-hp" />
                         </div>
                         <div class="mb-3">
                              <label for="nama" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control p-3" id="nama" placeholder="Input Your Full Name"
                                   name="nama" />
                         </div>

                         <div class="addres">
                              <div class="mb-3" id="alamat-style">
                                   <label for="alamat" class="form-label">Alamat</label>
                                   <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                              </div>
                         </div>
                         <div class="button d-flex justify-content-center gap-4 mt-3 p-2">
                              <button type="submit" class="btn btn-outline-primary" name="submit">
                                   Register
                              </button>
                              <a role="button" type="submit" class="btn btn-outline-warning" href="index.php">Cancel</a>
                         </div>
                    </div>
               </form>
          </section>
     </div>
     <!-- <footer class="fixed-bottom mt-3 pt-3">
          <div class="text-center text-black p-2">
               <p>&copy; 2021 All Right Reserved</p>
          </div>
     </footer> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
</body>

</html>