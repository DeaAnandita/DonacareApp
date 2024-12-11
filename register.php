<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password']; // Hash password

    // Insert into database
    $sql = "INSERT INTO users (nama_lengkap, email, username, password) VALUES ('$nama_lengkap', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("location:index_login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donacare - Landing Page</title>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <img class="imgnav" src="image/logo.png" alt="logo" style="width: 255px; height: 100px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html#kategori">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html#donasi">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html#berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html#tentangkami">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Register Section -->
<div class="login-background d-flex justify-content-center align-items-center" style="min-height: 100vh; padding-top: 80px;">
    <div class="card p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">Register</h3>
        <p style="margin-top: -20px; margin-bottom: 25px; color: grey; text-align: center;">Silakan lengkapi data anda!</p>
        <form  method="post">
            <div class="mb-3">
                <label for="fullname" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukkan nama lengkap" name="nama_lengkap">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" id="username" placeholder="Masukkan Username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
            </div>
            <button type="submit" class="btn btn-primary w-100" value="register" name="register">Daftar</button>
        </form>
        <p class="text-center mt-3">
            Sudah punya akun? <a href="login.php">Login di sini</a>
        </p>
    </div>
</div>

<!-- Footer Section -->
<footer class="footer-section py-4">
    <div class="container">
        <div class="row">
            <!-- Logo and About -->
            <div class="col-md-4 mb-4">
                <img src="image/logo.png" width="200px" height="80px">
                <p>Kesempatan kecil dalam aksi sederhana yang dapat mengubah dunia.</p>
                
                <!-- Kritik dan Saran Section -->
                <h5 class="mt-4">Kritik dan Saran</h5>
                <input type="text" class="form-control mt-2" placeholder="Tulis kritik dan saran Anda">
            </div>

            <!-- Menu Links -->
            <div class="col-md-2 mb-4 offset-md-1">
                <h5>Menu</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Kategori</a></li>
                    <li><a href="#">Donasi</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">Tentang kami</a></li>
                </ul>
            </div>

            <!-- Kategori Links -->
            <div class="col-md-2 mb-4">
                <h5>Kategori</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Pendidikan</a></li>
                    <li><a href="#">Bencana Alam</a></li>
                    <li><a href="#">Kesehatan</a></li>
                    <li><a href="#">Anak-anak</a></li>
                    <li><a href="#">Lingkungan</a></li>
                    <li><a href="#">Layanan Sosial</a></li>
                </ul>
            </div>

           <!-- Social Media Links in Vertical List -->
           <div class="col-md-2 mb-4">
            <h5>Follow us on</h5>
            <ul class="list-unstyled social-links-vertical">
                <li><a href="#"><i class="bi bi-instagram"></i><img src="image/IG.png"><p style="color: white;">p</p> Instagram</a></li>
                <li><a href="#"><i class="bi bi-facebook"></i><img src="image/fb.png"><p style="color: white;">p</p> Facebook</a></li>
                <li><a href="#"><i class="bi bi-youtube"></i><img src="image/yt.png"><p style="color: white;">p</p> YouTube</a></li>
            </ul>
        </div>
    </div>
        
        <hr>

        <!-- Copyright -->
        <div class="text-center">
            <p>&copy; 2024 Donacare. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>