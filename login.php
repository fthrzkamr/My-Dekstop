<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dua Farma</title>
    <link href="assets/css/login.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css" rel="stylesheet">
    
</head>

<body class="bg-light">
  <div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container px-1 px-md-5 px-lg-1 px-xl-5" style="max-width: 1800px; max-height:1800px;">
      <div class="card card0 border-0 w-100">
        <div class="row d-flex">
          <div class="col-lg-6">
            <div class="card1 pb-5">
              <div class="row px-3 justify-content-center mt-4 mb-5 border-line mt-5">
                <img src="https://i.imgur.com/uNGdWHi.png" class="image">
              </div>
            </div>
          </div>
            <div class="col-lg-6">
              <div class="card2 card border-0 px-4 py-5">
                <h5 class="mb-4">Selamat Datang Di Pendataan Asset Dua Farma Mahakarsa</h5>

                <?php if (isset($_GET['err'])): ?>
                  <script>
                    document.addEventListener('DOMContentLoaded', function () {
                      <?php if ($_GET['err'] == 'empty'): ?>
                        Swal.fire({
                          icon: 'warning',
                          title: 'Oops!',
                          text: 'Username dan password harus diisi.'
                        });
                      <?php elseif ($_GET['err'] == 'wrongpass'): ?>
                        Swal.fire({
                          icon: 'error',
                          title: 'Login Gagal',
                          text: 'Username atau password salah.'
                        });
                      <?php elseif ($_GET['err'] == 'nouser'): ?>
                        Swal.fire({
                          icon: 'error',
                          title: 'Akun Tidak Ditemukan',
                          text: 'Silakan cek kembali username Anda.'
                        });
                      <?php endif; ?>
                    });
                  </script>
                <?php endif; ?>

                <form action="login_auth.php" method="POST">
                  <div class="row px-3 mt-4">
                    <label for="username" class="mb-1"><h6 class="mb-0">Username</h6></label>
                    <input class="mb-4 form-control" type="text" id="username" name="username" placeholder="Masukan Username" required>
                  </div>

                  <div class="row px-3">
                    <label for="password" class="mb-1"><h6 class="mb-0">Password</h6></label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Masukan Password" required>
                  </div>

                  <div class="row px-3 mb-4">
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input id="chk1" type="checkbox" name="remember" class="custom-control-input"> 
                      <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                    </div>
                    <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                  </div>

                  <div class="row mb-3 px-3">
                    <button type="submit" name="login" class="btn btn-primary px-5">Login</button>
                  </div>

                  <div class="row mb-4 px-3">
                    <small class="font-weight-bold">Don't have an account? <a class="text-danger">Register</a></small>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Bootstrap Bundle JS (wajib untuk toast) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</html>