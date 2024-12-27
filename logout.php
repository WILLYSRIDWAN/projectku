
<?php
// Mulai sesi
session_start();

// Hancurkan semua sesi
session_unset();
session_destroy();

// Arahkan pengguna kembali ke halaman index.php (atau login.php)
header("Location: index.php"); // Atau bisa ke login.php jika lebih sesuai
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Dropdown</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PERPUSTAKAAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <!-- Pastikan path benar, misalnya jika logout.php ada di folder 'functions' -->
          <a class="nav-link active" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
