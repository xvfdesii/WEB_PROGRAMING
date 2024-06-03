<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Final Task - Wa Ode Asriyani (034)</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/assets/img/dummies/logo_konsel.jpg" rel="logo_konsel">
    <link href="assets/assets/img/dummies/logo_konsel.jpg" rel="logo_konsel">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <a class="navbar-brand" href=""><img class="logo" src="assets/assets/img/dummies/logo.jpg" alt=""></a>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="page.php?id_uraian=1">Geografis</a></li>
                    <li><a href="page.php?id_uraian=2">Kependudukan</a></li>
                    <li><a href="page.php?id_uraian=3">Potensi</a></li>
                    <li><a href="page.php?id_uraian=4">Investasi</a></li>
                    <li><a href="page.php?id_uraian=5">Pemasaran</a></li>
                    <li><a href="page.php?id_uraian=6">Penduduk</a></li>
                    <li><a href="page.php?id_uraian=9">Wilayah</a></li>
                </ul>
            </nav><!-- .navbar -->

            <a class="btn-book-a-table" href="index.php">Kembali</a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Selamat Datang di Website <br>
                        DESA BUNGIN PERMAI</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Desa Bungin Permai adalah salah satu desa yang di Konawe Selatan yang ada di pesisir pantai.
                        penduduknya
                        dulu mayoritas suku Bajo,tapi sekarang sudah berbaur dengan suku lain,seperti Bugis,jawa,tolaki
                        dan Muna.
                    </p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Hubungi Kami</a>
                        <a href="https://www.youtube.com/watch?v=-9EfLYGln78"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch
                                Video</span></a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/assets/img/dummies/desabungin.jpg" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="1500" height="1900" width="1900">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Blog Pesan Tamu</h2>
                    <p>Pesan dan Kesan <span>Kamu Untuk</span> Desa Bungin Permai</p>
                </div>
                <div class="row g-0">
                    <div class="col-lg-8 d-flex align-items-center reservation-form-bg mx-auto">
                        <form method="post" role="form" data-aos="fade-up" data-aos-delay="100">
                            <div class="row gy-4">
                                <div class="col-lg-6">
                                    <input type="text" name="id_tamu" placeholder="ID Tamu" class="form-control"
                                        data-rule="email" data-msg="Please enter a valid email"
                                        style="border-radius: 0px;">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="nama" placeholder="Nama" class="form-control"
                                        data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                                        style="border-radius: 0px;">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Email" class="form-control"
                                        data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                                        style="border-radius: 0px;">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="alamat" placeholder="Alamat" class="form-control"
                                        data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                                        style="border-radius: 0px;">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="organisasi" placeholder="Organisasi" class="form-control"
                                        data-rule="minlen:1" data-msg="Please enter at least 1 chars"
                                        style="border-radius: 0px;">
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea name="pesan" placeholder="Tuliskan Pesan Anda Disini" class="form-control"
                                    rows="5" style="border-radius: 0px;"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="text-center">
                                <p>
                                    <!-- #region   -->
                                </p>
                                <button type="submit" name="submit" class="btn btn-primary"
                                    style="background-color: #ce1212;">Kirim Pesan</button>

                            </div>
                        </form>
                    </div><!-- End Reservation Form -->

                </div>
            </div>
        </section><!-- End Book A Table Section -->



        <?php
if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "", "desa_bungi");
    if (!$con) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $id_tamu = mysqli_real_escape_string($con, $_POST['id_tamu']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $organisasi = mysqli_real_escape_string($con, $_POST['organisasi']);
    $pesan = mysqli_real_escape_string($con, $_POST['pesan']);

    $query = "INSERT INTO tamu (id_tamu, nama, alamat, email, organisasi, pesan) 
              VALUES ('$id_tamu', '$nama', '$alamat', '$email', '$organisasi', '$pesan')";

    if (mysqli_query($con, $query)) {
        echo '<div class="alert alert-success">Data berhasil disimpan ke dalam database.</div>';
    } else {
        echo '<div class="alert alert-danger">Gagal menyimpan data ke dalam database: ' . mysqli_error($con) . '</div>';
    }

    mysqli_close($con);
}
?>




        <!-- ======= Contact Section ======= -->
        <section id="maps" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Maps</h2>
                    <p>Alamat Desa <span>Bungin Permai</span></p>
                </div>

                <div class="mb-3">
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.586389390941!2d122.21830795000001!3d-4.4876564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da28e7d341e3a73%3A0x50d83de823bbd2b6!2sBungin%20Permai%2C%20Kec.%20Tinanggea%2C%20Kabupaten%20Konawe%20Selatan%2C%20Sulawesi%20Tenggara!5e0!3m2!1sid!2sid!4v1698040114839!5m2!1sid!2sid"
                        frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Our Address</h3>
                                <p>Jln. Orinungu, Kambu, Kendari, Sulawesi Tenggara</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>waodeasriyani.e1e122034@gmail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+62 852 3024 9843</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                                    <strong>Sunday:</strong> Closed
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>