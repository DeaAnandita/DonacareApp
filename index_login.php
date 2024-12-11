<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donacare - Landing Page</title>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/js_login.js"></script>
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
                <li class="nav-item" active>
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#kategori">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#donasi">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentangkami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galang.php">Galang Dana</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container d-flex">
        <div class="hero-content">
            <a href="#" class="hero-button">MULAI SEKARANG</a>
            <h1 class="hero-title">Donasi adalah investasi terbaik untuk masa <span>depan</span> yang <span>lebih baik</span>.</h1>
            <p class="hero-description">Satu tindakan kecil dapat membuat perbedaan besar. Donasikan apa yang kamu bisa, dan bersama kita bisa mengubah dunia.</p>
            <div class="hero-buttons">
                <a href="#donasi" class="btn btn-primary">Donasi Sekarang</a>
                <a href="#" class="btn btn-outline-primary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <div class="hero-image">
            <img class="hero-image" src="image/hero-img.png" alt="hero">
        </div>
    </div>
</section>

<!-- Stats Section -->
<div class="stats-section container text-center">
  <div class="row">
      <div class="col">
          <!-- <img src="image/stat1.png" alt="stat1"> -->
          <h3>200k +</h3>
          <p>Orang Berdonasi</p>
      </div>
      <div class="col">
          <h3>35k +</h3>
          <p>Galangan Dana</p>
      </div>
      <div class="col">
          <h3>4k +</h3>
          <p>Komunitas/Yayasan</p>
      </div>
      <div class="col">
          <h3>540 +</h3>
          <p>Brand/Perusahaan</p>
      </div>
  </div>
</div>


<!-- Kategori Section-->
<section id="kategori" class="kategori-section">
  <div class="container">
      <div class="kategori-header">
          <span class="kategori-badge">Kategori</span>
          <h2>Kategori</h2>
          <p>Memberikan adalah tindakan paling mulia, karena dengan donasi kita memberi harapan kepada mereka yang membutuhkan.</p>
      </div>
      <div class="kategori-content">
          <div class="kategori-image">
              <img src="image/kategori.png" alt="Donacare Staff">
          </div>
          <div class="kategori-cards">
              <div class="kategori-card">
                  <div class="icon">📘</div>
                  <h3>Pendidikan</h3>
                  <p>Donasikan apa yang kamu bisa, untuk mengubah pendidikan Indonesia lebih baik!</p>
                  <a href="#">Lihat Kategori →</a>
              </div>
              <div class="kategori-card">
                  <div class="icon">🌋</div>
                  <h3>Bencana Alam</h3>
                  <p>Donasikan apa yang kamu bisa, untuk korban bencana alam yang membutuhkan!</p>
                  <a href="#">Lihat Kategori →</a>
              </div>
              <div class="kategori-card">
                  <div class="icon">🩺</div>
                  <h3>Kesehatan</h3>
                  <p>Donasikan apa yang kamu bisa, untuk membantu pasien yang membutuhkan!</p>
                  <a href="#">Lihat Kategori →</a>
              </div>
              <div class="kategori-card">
                  <div class="icon">👶</div>
                  <h3>Anak Anak</h3>
                  <p>Donasikan apa yang kamu bisa, untuk mengubah pendidikan Indonesia lebih baik!</p>
                  <a href="#">Lihat Kategori →</a>
              </div>
              <div class="kategori-card">
                  <div class="icon">🌱</div>
                  <h3>Lingkungan</h3>
                  <p>Donasikan apa yang kamu bisa, untuk mengubah pendidikan Indonesia lebih baik!</p>
                  <a href="#">Lihat Kategori →</a>
              </div>
              <div class="kategori-card">
                  <div class="icon">🤲</div>
                  <h3>Layanan Sosial</h3>
                  <p>Donasikan apa yang kamu bisa, untuk mengubah pendidikan Indonesia lebih baik!</p>
                  <a href="#">Lihat Kategori →</a>
              </div>
          </div>
      </div>
  </div>
</section>


<!-- Donasi Section -->
<section id="donasi" class="donasi-section" style="background-color: white;">
  <div class="container">
      <div class="donasi-header">
          <span class="donasi-badge">Donasi</span>
          <h2>Mulai Donasi</h2>
          <p>Memberikan adalah tindakan paling mulia, karena dengan donasi kita memberi harapan kepada mereka yang membutuhkan.</p>
          <a href="#" class="lihat-semua-kat">Lihat Semua →</a>
      </div>
      
      <div class="donasi-cards">
          <div class="donasi-card">
              <img src="image/donasi1.png" alt="Donasi Pendidikan">
              <h3>Wujudkan Pendidikan Indonesia Maju</h3>
              <p>Mari bersama wujudkan generasi bangsa yang cerdas dan berpendidikan untuk Indonesia yang lebih baik!</p>
              <div class="progress-bar">
                  <div class="progress" style="width: 75%;"></div>
              </div>
              <div class="donasi-info">
                  <span>Terkumpul: Rp 4.000.000</span>
                  <span>Target: Rp 5.000.000</span>
              </div>
              <form action="donasi.php">
              <button class="donasi-button">Donasi</button>
              </form>
          </div>
          <div class="donasi-card">
              <img src="image/donasi2.png" alt="Bantu Korban Longsor">
              <h3>Bantu Korban Longsor</h3>
              <p>Bersama kita bisa meringankan beban para korban yang terdampak bencana longsor di daerah terpencil.</p>
              <div class="progress-bar">
                  <div class="progress" style="width: 50%;"></div>
              </div>
              <div class="donasi-info">
                  <span>Terkumpul: Rp 2.500.000</span>
                  <span>Target: Rp 5.000.000</span>
              </div>
              <button class="donasi-button">Donasi</button>
          </div>
          <div class="donasi-card">
              <img src="image/donasi3.png" alt="Peduli Gempa Cianjur">
              <h3>Peduli Gempa Cianjur</h3>
              <p>Donasikan bantuan Anda untuk para korban yang terdampak gempa di Cianjur agar mereka bisa bangkit kembali.</p>
              <div class="progress-bar">
                  <div class="progress" style="width: 60%;"></div>
              </div>
              <div class="donasi-info">
                  <span>Terkumpul: Rp 3.000.000</span>
                  <span>Target: Rp 5.000.000</span>
              </div>
              <button class="donasi-button">Donasi</button>
          </div>
          <div class="donasi-card">
            <img src="image/donasi1.png" alt="Donasi Pendidikan">
            <h3>Wujudkan Pendidikan Indonesia Maju</h3>
            <p>Mari bersama wujudkan generasi bangsa yang cerdas dan berpendidikan untuk Indonesia yang lebih baik!</p>
            <div class="progress-bar">
                <div class="progress" style="width: 75%;"></div>
            </div>
            <div class="donasi-info">
                <span>Terkumpul: Rp 4.000.000</span>
                <span>Target: Rp 5.000.000</span>
            </div>
            <button class="donasi-button">Donasi</button>
        </div>
      </div>
  </div>
</section>


<!-- Berita Terkini Section -->
<section id="berita" class="berita-section">
  <div class="container">
      <div class="berita-header">
          <span class="berita-badge">Berita</span>
          <h2>Berita Terkini</h2>
          <p>Keajaiban terjadi ketika kita saling peduli. Donasikan waktu, uang, atau keahlianmu, dan bersama kita dapat membuat dunia ini menjadi tempat yang lebih baik.</p>
          <a href="#" class="lihat-semua">Lihat Semua →</a>
      </div>
      
      <div class="berita-cards">
          <div class="berita-card">
              <img src="image/donasi1.png" alt="Berita Pendidikan">
              <div class="berita-content">
                  <span class="berita-date">20 Okt 2023</span>
                  <h3>Wujudkan Pendidikan Indonesia Maju</h3>
                  <p>Bersama kita bisa wujudkan generasi bangsa yang cerdas dan berpendidikan untuk Indonesia yang lebih baik!</p>
                  <div class="berita-actions">
                      <a href="#" class="like">❤️ 230</a>
                      <a href="#" class="share">🔗 Share</a>
                  </div>
              </div>
          </div>
          <div class="berita-card">
              <img src="image/donasi2.png" alt="Bantu Korban Longsor">
              <div class="berita-content">
                  <span class="berita-date">20 Okt 2023</span>
                  <h3>Bantu Korban Longsor</h3>
                  <p>Mari meringankan beban para korban yang terdampak bencana longsor di daerah terpencil.</p>
                  <div class="berita-actions">
                      <a href="#" class="like">❤️ 125</a>
                      <a href="#" class="share">🔗 Share</a>
                  </div>
              </div>
          </div>
          <div class="berita-card">
              <img src="image/donasi3.png" alt="Peduli Gempa Cianjur">
              <div class="berita-content">
                  <span class="berita-date">20 Okt 2023</span>
                  <h3>Peduli Gempa Cianjur</h3>
                  <p>Bantu korban gempa di Cianjur agar mereka bisa bangkit dan pulih kembali.</p>
                  <div class="berita-actions">
                      <a href="#" class="like">❤️ 150</a>
                      <a href="#" class="share">🔗 Share</a>
                  </div>
              </div>
          </div>
          <div class="berita-cards">
            <div class="berita-card">
                <img src="image/donasi1.png" alt="Berita Pendidikan">
                <div class="berita-content">
                    <span class="berita-date">20 Okt 2023</span>
                    <h3>Wujudkan Pendidikan Indonesia Maju</h3>
                    <p>Bersama kita bisa wujudkan generasi bangsa yang cerdas dan berpendidikan untuk Indonesia yang lebih baik!</p>
                    <div class="berita-actions">
                        <a href="#" class="like">❤️ 230</a>
                        <a href="#" class="share">🔗 Share</a>
                    </div>
                </div>
            </div>
      </div>
  </div>
</section>

<!--Tentang Kami Section-->
<section id="tentangkami" class="section-tentang-kami container">
    <div class="row">
        <div class="col-md-8">
            <span class="donasi-badge">Tentang Kami</span>
            <h2 class="tentang-subtitle">
                Ayo, berkenalan dengan kami!
            </h2>
            <p class="tentang-text">
                <strong>Donacare</strong> adalah sebuah platform online yang dirancang khusus untuk memfasilitasi proses pengumpulan dana atau sumbangan secara daring. Tujuan utama dari website donasi ini adalah untuk menyediakan sarana bagi individu, kelompok, atau organisasi yang ingin memberikan dukungan keuangan atau materi kepada penerima yang membutuhkan.
            </p>
            <p class="tentang-text">
                Kami berusaha untuk mewujudkan perbedaan nyata melalui platform donasi yang kami buat. Dalam upaya kami, kami bekerja sama dengan mitra lokal dan organisasi terpercaya untuk memastikan bahwa bantuan yang diberikan sampai ke tangan yang membutuhkan dengan efektif dan transparan.
            </p>
            <a href="#" class="baca-lanjut">Baca Lebih Lanjut↗</a>
        </div>
        <div class="col-md-4 tentang-logo-container">
            <img src="image/tentangkami.png" alt="Donacare Logo" class="tentang-logo">
        </div>
    </div>
</section>

<!-- Kata Mereka Section -->
<section id="katamereka" class="section-kata-mereka">
    <div class="container">
        <div class="section-header">
            <span class="title-badge">PESAN</span>
            <h2 class="title">Kata Mereka</h2>
            <p class="subtitle">Memberikan adalah tindakan paling mulia, karena dengan donasi kita memberi harapan kepada mereka yang membutuhkan.</p>
        </div>
        <div class="row justify-content-center">
            <!-- Quote 1 -->
            <div class="col-md-4">
                <div class="quote-box">
                    <div class="quote-icon">“</div>
                    <div class="time-ago">5 menit yang lalu</div>
                    <div class="quote-author">Donasi Mulia</div>
                    <div class="quote-text">Kebahagiaan tercipta bukan hanya dari harta dan tahta, tapi sesederhana saat kita saling membantu sesama.</div>
                    <div class="quote-footer">
                        <img src="image/iconquote.png" alt="Anonymous">
                        <span class="author-name">Anonymous</span>
                        <div class="share-icon">
                            <i class="bi bi-share"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quote 2 -->
            <div class="col-md-4">
                <div class="quote-box">
                    <div class="quote-icon">“</div>
                    <div class="time-ago">5 menit yang lalu</div>
                    <div class="quote-author">Donasi Mulia</div>
                    <div class="quote-text">Kebahagiaan tercipta bukan hanya dari harta dan tahta, tapi sesederhana saat kita saling membantu sesama.</div>
                    <div class="quote-footer">
                        <img src="image/iconquote.png" alt="Anonymous">
                        <span class="author-name">Anonymous</span>
                        <div class="share-icon">
                            <i class="bi bi-share"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quote 3 -->
            <div class="col-md-4">
                <div class="quote-box">
                    <div class="quote-icon">“</div>
                    <div class="time-ago">5 menit yang lalu</div>
                    <div class="quote-author">Donasi Mulia</div>
                    <div class="quote-text">Kebahagiaan tercipta bukan hanya dari harta dan tahta, tapi sesederhana saat kita saling membantu sesama.</div>
                    <div class="quote-footer">
                        <img src="image/iconquote.png" alt="Anonymous">
                        <span class="author-name">Anonymous</span>
                        <div class="share-icon">
                            <i class="bi bi-share"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sponsor Section -->
<section class="section-sponsor">
    <div class="container">
        <!-- Left-aligned title -->
        <h2>Didukung Oleh:</h2>
        
        <!-- Sponsor logos card -->
        <div class="sponsor-card">
            <!-- Placeholder images for sponsor logos -->
            <img src="image/sponsor1.png" alt="Sponsor 1">
            <img src="image/sponsor2.png" alt="Sponsor 2">
            <img src="image/sponsor3.png" alt="Sponsor 3">
            <img src="image/sponsor4.png" alt="Sponsor 4">
            <img src="image/sponsor5.png" alt="Sponsor 5">
            <img src="image/sponsor6.png" alt="Sponsor 6">
        </div>

        <!-- Thank you message -->
        <div class="thank-you-message">
            Terima Kasih Telah Menjadi Orang Baik 😊
        </div>

        <!-- Founder Photo -->
        <div class="founder-photo">
            <img src="image/founder.png" alt="Founder Photo">
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/bootstrap-icons.min.js"></script>

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
