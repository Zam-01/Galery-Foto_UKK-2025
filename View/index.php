<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Login Page</title>
     <!-- link  bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
     <!--  link css -->
     <link rel="stylesheet" href="./asset/css/style.css" />
</head>

<body>
     <nav class="bg-dark p-3">
          <a class="navbar-brand text-white" href="#">LOGIN HERE</a>
     </nav>


     <div class="container pt-5" style="margin-top:6.5rem;">
          <section class="mx-auto p-5 border border-1 rounded-2 shadow-sm" id="form-login "
               style="width: 50%; height:55vh;">
               <header class="text-center" id="text-login">
                    <h1>Login</h1>
               </header>
               <form action="../query/Proses_Login.php" method="post" class="mx-auto mt-5 " id="form-sigin">
                    <?php
                    if (isset($_SESSION['message_success'])) {
                         echo '<div class="alert alert-success text-center" role="alert">' . $_SESSION['message_success'] . '</div>';
                         unset($_SESSION['message_success']);
                    }
                    if (isset($_SESSION['user_eror'])) {
                         echo '<div class="alert alert-danger text-center" role="alert">' . $_SESSION['user_eror'] . '</div>';
                         unset($_SESSION['user_eror']);
                    }

                    ?>
                    <div class="mb-3">
                         <label for="username" class="form-label">Username</label>
                         <input type="text" class="form-control p-3 rounded" id="username" name="username"
                              placeholder="Enter your username" required />
                    </div>
                    <div class="mb-3">
                         <label for="password" class="form-label">Password</label>
                         <input placeholder="Enter your password" type="password" class="form-control p-3 rounded"
                              id="password" name="password" required />
                    </div>
                    <div class="tombol d-flex justify-content-center gap-5 align-items-center mt-5">
                         <button type="submit" class="btn btn-outline-primary" name="login">Login</button>
                         <strong class="text-black">Or</strong>
                         <a href="register.php" class="btn btn-outline-info" role="button">Register</a>
                    </div>
               </form>
          </section>
     </div>
     <!-- <footer>
          <div class="container-fluid">
               <div class="row">
                    <div class="col text-center text-black">
                         <p>&copy; 2021 All Right Reserved</p>
                    </div>
               </div>
          </div>
     </footer> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
</body>

</html>