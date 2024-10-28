<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PORTFOLIOTYR</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <style>
        body {
            font-family: Arial, sans-serif;
            scroll-behavior: smooth;
        }

        /* Navbar Styling */
        .navbar {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            transition: background-color 0.5s, box-shadow 0.5s;
        }

        /* Transparent Navbar on Load */
        .navbar.transparent {
            background-color: rgba(52, 58, 64, 0.7);
            box-shadow: none;
        }

        /* Hover Effect for Navbar Links */
        .nav-link {
            color: #ffffff !important;
            transition: color 0.3s, transform 0.3s;
        }

        .nav-link:hover {
            color: #ffeb3b !important;
            text-decoration: none;
            transform: scale(1.1);
        }

        /* Custom Button */
        .btn-custom {
            background-color: #0d6efd;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        section {
            padding: 100px 0;
            min-height: 100vh;
        }

        /* Sections Background */
        #home {
            background-color: #f8f9fa;
        }

        #about {
            background-color: #e9ecef;
        }

        #portfolio {
            background-color: #f8f9fa;
        }

        #skills {
            background-color: #e9ecef;
        }

        #contact {
            background-color: #f8f9fa;
        }

        .offset {
            padding-top: 75px;
        }
        </style>
    </head>

    <body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="70" tabindex="0">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top transparent" id="mainNavbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#home">PORTOFOLIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home"><i class="fas fa-home"></i> Rumah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"><i class="fas fa-user"></i> Tentang Saya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio"><i class="fas fa-briefcase"></i> Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills"><i class="fas fa-tools"></i> Keterampilan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><i class="fas fa-envelope"></i> Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sections -->
        <section id="home" class="offset">
            <div class="container text-center">
                <h1>Selamat Datang Di Dunia Desain Saya</h1>
                <p>Mari mengeksplor berbagai karya desain grafis dan UI/UX yang telah Saya buat.</p>
            </div>
        </section>

        <section id="about" class="offset">
            <div class="container text-center">
                <img src="https://i.pinimg.com/736x/b2/42/c5/b242c5c296efeb236e121b22360bac5a.jpg"
                    alt="Foto Tentang Saya" class="img-fluid about-image">
                <h2>Tentang Saya</h2>
                <p>Dengan penuh semangat, Saya telah mendalami dunia UI/UX selama beberapa tahun ini. Saya
                    percaya bahwa desain adalah sebuah karya seni yang mampu menceritakan kisah unik.
                    Dengan pendekatan yang kreatif dan minimalis, Saya selalu berusaha menciptakan desain yang tidak
                    hanya estetis, tetapi juga efektif dalam menyampaikan pesan yang kuat dan membekas di benak audiens.
                    Proses kreatif Saya dimulai dengan riset mendalam terhadap merek klien, sehingga Saya dapat memahami
                    nilai-nilai dan visi mereka secara mendalam. Selanjutnya, Saya akan menggabungkan pemahaman tersebut
                    dengan estetika desain yang Saya kuasai untuk menghasilkan logo yang orisinal dan relevan.
                    Portofolio Saya menampilkan berbagai macam logo yang telah Saya buat untuk klien dari berbagai
                    industri, membuktikan kemampuan Saya dalam menciptakan identitas visual yang kuat dan membedakan
                    merek mereka dari para pesaing.</p>
            </div>
        </section>

        <section id="portfolio" class="offset">
            <div class="container text-center">
                <h2>Portofolio Saya</h2>
                <p>Berikut adalah beberapa proyek yang telah Saya kerjakan</p>
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://i.pinimg.com/474x/ef/34/81/ef34813f8b207e38093955f047eab38c.jpg"
                            alt="Project 1" class="img-fluid rounded mb-2">
                        <h5>Mendesain Aplikasi OKEJEK</h5>
                        <p>Desain aplikasi Okejek berfokus pada kemudahan pengguna, dengan antarmuka yang intuitif dan
                            fitur-fitur lengkap seperti peta interaktif dan pembayaran digital. Okejek hadir untuk
                            mempermudah hidup Anda dengan menyediakan solusi transportasi yang praktis dan efisien.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://i.pinimg.com/736x/e3/7e/02/e37e02b42274192375d046d8e272b44f.jpg"
                            alt="Project 2" class="img-fluid rounded mb-2">
                        <h5>Website Pemesanan Ayam</h5>
                        <p>Merupakan website untuk menjual ayam potong dengan merangkum kenyamanan dan kemudahan dalam
                            setiap langkah transaksi. Kelebihan website ini tidak hanya terletak pada kemudahan
                            berbelanja, tetapi juga pada program loyalitas dan diskon eksklusif
                            yang memberikan pengalaman berbelanja yang lebih menguntungkan.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://i.pinimg.com/736x/0d/5c/7f/0d5c7fed19e17ee0397836158bdaebf7.jpg"
                            alt="Project 3" class="img-fluid rounded mb-2">
                        <h5>Aplikasi ChickMart</h5>
                        <p> Dengan antarmuka yang intuitif dan menawan, Chicmart menyajikan katalog
                            ayam potong berkualitas tinggi dengan deskripsi yang jelas dan harga yang transparan.
                            Pengguna dapat dengan mudah menjelajahi produk, menambahkan pilihan ke keranjang belanja,
                            dan melalui proses pembayaran yang aman dan efisien.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="offset">
            <div class="container text-center">
                <h2>Keterampilan</h2>
                <p>Saya memiliki beragam keterampilan yang memungkinkan saya mengatasi berbagai tantangan dalam
                    mendesain UI/UX</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Pemahaman tentang Pengguna</li>
                    <li class="list-group-item">Desain Visual</li>
                    <li class="list-group-item">Interaksi Pengguna</li>
                    <li class="list-group-item">Keterampilan Teknis</li>
                    <li class="list-group-item">Soft Skills</li>
                </ul>
            </div>
        </section>

        <section id="contact" class="offset">
            <div class="container text-center">
                <h2>Kontak</h2>
                <p>Saya ingin sekali mendengar kabar dari Anda! Jangan ragu untuk menghubungi Saya untuk berkolaborasi
                    atau sekadar menyapa!</p>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Anda" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Send</button>
                </form>
            </div>
        </section>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (window.scrollY > 50) {
                navbar.classList.remove('transparent');
            } else {
                navbar.classList.add('transparent');
            }
        });
        </script>
    </body>

</html>
