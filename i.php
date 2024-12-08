<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komtim - Talent Customer Service</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar Section -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <span class="logo-text">komtim <small>by Komarce</small></span>
            </div>
            <ul class="nav-links">
                <li><a href="#mengapa">Mengapa Komarce</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#keuntungan">Keuntungan</a></li>
                <li><a href="#event">Event</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#talent-pool">Talent Pool</a></li>
            </ul>
            <div class="contact-button">
                <a href="#hubungi-kami">Hubungi Kami</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Dapatkan Talent Customer Service Terlatih dari <span class="highlight">Komtim</span></h1>
        <p>
            Bangun bisnis kamu dengan Layanan Pelanggan yang berkualitas dari Komtim. Mudah, tanpa ribet, dan bisa 
            monitoring kinerja dari mana saja. Rasakan pengalaman hire customer service dari Komtim bersama ribuan 
            pebisnis online dan UMKM di seluruh Indonesia.
        </p>
        <div class="button-container">
            <a href="#mengapa" class="btn primary-btn">Pelajari Selengkapnya <span>&#8250;</span></a>
            <a href="#" class="btn outline-btn">
                <span class="icon">&#128100;</span> Pilih Talent
            </a>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonial" class="testimonial-section">
        <h1>Apa Kata Mereka?</h1>
        <hr class="section-line">
        <div class="testimonial-container">
            <?php
            // Data testimonial
            $testimonials = [
                [
                    "nama" => "Amat Faozi",
                    "jabatan" => "Shipper",
                    "pesan" => "Saya sangat senang dengan CS dari bosCS. Selain ramah, juga sangat bertanggungjawab.",
                    "gambar" => "https://via.placeholder.com/100" // Ganti dengan URL gambar asli
                ],
                [
                    "nama" => "Putri Dini",
                    "jabatan" => "Pemilik Usaha",
                    "pesan" => "Dari awal saya memakai bosCS karena awal usaha ingin segera berkembang dg live streaming dari host live di bosCS.",
                    "gambar" => "https://via.placeholder.com/100" // Ganti dengan URL gambar asli
                ],
                [
                    "nama" => "Hendrawan",
                    "jabatan" => "Direktur",
                    "pesan" => "Saya sangat puas dengan layanan dari bosCS.",
                    "gambar" => "https://via.placeholder.com/100" // Ganti dengan URL gambar asli
                ]
            ];

            // Loop untuk menampilkan testimonial
            foreach ($testimonials as $testimonial) {
                echo '<div class="testimonial-card">';
                echo '<img src="'.$testimonial["gambar"].'" alt="'.$testimonial["nama"].'">';
                echo '<p class="pesan">'.$testimonial["pesan"].'</p>';
                echo '<h4 class="nama">'.$testimonial["nama"].'</h4>';
                echo '<p class="jabatan">'.$testimonial["jabatan"].'</p>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <!-- Why Section -->
    <section id="mengapa" class="why-section">
        <h1>Kenapa harus merekrut Customer Service dari <span class="highlight">Komtim</span></h1>
        <hr class="section-line">
        <div class="benefit-container">
            <div class="benefit-card">
                <div class="icon" style="color: #FFC107;">&#128100;</div>
                <h3>Talent CS yang Kompeten</h3>
                <p>Talent yang disalurkan telah menjalani pendidikan dengan kurikulum terbaru dan sampai dinyatakan siap.</p>
            </div>
            <div class="benefit-card">
                <div class="icon" style="color: #4CAF50;">&#128179;</div>
                <h3>Gaji Pokok yang Terjangkau</h3>
                <p>Gaji sangat terjangkau sesuai standar daerah talent tetap menguntungkan pebisnis.</p>
            </div>
            <div class="benefit-card">
                <div class="icon" style="color: #2196F3;">&#128274;</div>
                <h3>Didampingi oleh Leader Profesional</h3>
                <p>Kinerja talent CS kami diawasi dan dipantau oleh leader yang berpengalaman di bidangnya.</p>
            </div>
        </div>

        <div class="benefit-container">
            <div class="benefit-card">
                <div class="icon" style="color: #2196F3;">&#128221;</div>
                <h3>Fleksibel</h3>
                <p>Monitoring kinerja talent dari mana saja melalui aplikasi Komerce untuk Android dan iOS.</p>
            </div>
            <div class="benefit-card">
                <div class="icon" style="color: #4CAF50;">&#128200;</div>
                <h3>Hemat Hingga Jutaan Rupiah</h3>
                <p>Tak perlu keluar biaya lebih untuk mempersiapkan kantor dan perlengkapannya, Komerce menghemat hingga jutaan rupiah!</p>
            </div>
            <div class="benefit-card">
                <div class="icon" style="color: #FFC107;">&#10060;</div>
                <h3>Tidak Terikat Kontrak</h3>
                <p>Sistem perekrutan tanpa kontrak dapat disesuaikan dengan kebutuhan bisnismu.</p>
            </div>
        </div>
    </section>
</body>
</html>
