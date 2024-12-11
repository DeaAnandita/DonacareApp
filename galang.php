<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donacare - Galang Dana</title>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/js_login.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Modern Breadcrumb Styling */
        .breadcrumb {
            background-color: #f8f9fa;
            border-radius: 0.25rem;
        }
        .breadcrumb .breadcrumb-item a {
            color: #007bff;
            text-decoration: none;
        }
        .breadcrumb .breadcrumb-item.active {
            color: #6c757d;
            font-weight: bold;
        }
        .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
            color: #007bff;
        }
        .section-fd {
            display: none;
        }
        .section-fd.visible {
            display: block;
        }
    </style>
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
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="galang.php">Galang Dana</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Kategori Section-->
<section id="kategori" class="kategori-sectiong">
  <div class="container">
      <div class="kategori-header">
          <h2 style="margin-top: 20px;">Pilih Kategori Galang Dana!</h2>
          
      </div>
      <div class="kategori-content">
          <div class="kategori-cardsg">
          <a href="step1_galang.php" class="kategori-card-linkg">
            <div class="kategori-cardg">
                <div class="icon">📘</div>
                <h3>Pendidikan</h3>
                <p>Donasikan apa yang kamu bisa, untuk mengubah pendidikan Indonesia lebih baik!</p>
                <span>Lihat Kategori →</span>
            </div>
            </a>
              <div class="kategori-cardg">
                  <div class="icon">🌋</div>
                  <h3>Bencana Alam</h3>
                  <p>Donasikan apa yang kamu bisa, untuk korban bencana alam yang membutuhkan!</p>
                  <span>Lihat Kategori →</span>
              </div>
              <div class="kategori-cardg">
                  <div class="icon">🩺</div>
                  <h3>Kesehatan</h3>
                  <p>Donasikan apa yang kamu bisa, untuk membantu pasien yang membutuhkan!</p>
                  <span>Lihat Kategori →</span>
              </div>
              <div class="kategori-cardg">
                  <div class="icon">👶</div>
                  <h3>Anak Anak</h3>
                  <p>Donasikan apa yang kamu bisa, untuk mengubah pendidikan Indonesia lebih baik!</p>
                  <span>Lihat Kategori →</span>
              </div>
              <div class="kategori-cardg">
                  <div class="icon">🌱</div>
                  <h3>Lingkungan</h3>
                  <p>Donasikan apa yang kamu bisa, untuk mengubah pendidikan Indonesia lebih baik!</p>
                  <span>Lihat Kategori →</span>
              </div>
              <div class="kategori-cardg">
                  <div class="icon">🤲</div>
                  <h3>Layanan Sosial</h3>
                  <p>Donasikan apa yang kamu bisa, untuk mengubah pendidikan Indonesia lebih baik!</p>
                  <span>Lihat Kategori →</span>
              </div>
          </div>
      </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

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