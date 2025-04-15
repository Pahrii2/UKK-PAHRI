<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Kasir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    body {
      height: 100vh;
      background: linear-gradient(to right, #000000, #6d6d6e);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
      margin: 0;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.08);
      border-radius: 20px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.35);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      overflow: hidden;
      display: flex;
      max-width: 850px;
      width: 100%;
      margin: 20px;
    }

    .image-section img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .form-section {
      padding: 50px 40px;
      color: white;
      flex: 1;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: white;
      border-radius: 10px;
      transition: 0.3s ease;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      box-shadow: none;
    }

    .form-label {
      font-weight: 500;
    }

    .btn-custom {
      background-color: #ffffff;
      color: #000000;
      font-weight: 600;
      border: none;
      border-radius: 10px;
      transition: 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #f0f0f0;
    }

    .input-icon {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: rgba(255, 255, 255, 0.6);
    }

    .input-group input {
      padding-left: 40px;
    }

    .alert {
      background-color: rgba(255, 0, 0, 0.3);
      color: white;
      border: none;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
    }

    @media (max-width: 768px) {
      .image-section {
        display: none;
      }

      .form-section {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-card">
    <div class="col-md-6 image-section d-none d-md-block">
      <img src="assets/logo00.jpg" alt="Login Image"/>
    </div>
    <div class="col-md-6 form-section">
      <h3 class="text-white text-center mb-3">Selamat Datang</h3>
      <p class="text-white-50 text-center mb-4">Silakan login untuk melanjutkan</p>

      <?php
      if (isset($_GET['pesan']) && $_GET['pesan'] == "gagal") {
        echo "<div class='alert'>Username dan password tidak sesuai!</div>";
      }
      ?>

      <form action="cek_login.php" method="post">
        <div class="mb-3 position-relative input-group">
          <span class="input-icon"><i class="bi bi-person-fill"></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" required />
        </div>
        <div class="mb-3 position-relative input-group">
          <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password" required />
        </div>
        <button type="submit" class="btn btn-custom w-100 mt-4">Login</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>