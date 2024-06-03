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
                </li>
                </ul>
            </nav><!-- .navbar -->

            <a class="btn-book-a-table" href="kontak.php">Hubungi Kami</a>
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
                        <a href="kontak.php" class="btn-book-a-table">Hubungi Kami</a>
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


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <?php 
                $con = mysqli_connect("localhost", "root", "", "desa_bungi");
                $id_uraian = $_GET['id_uraian'];
                $hasil = mysqli_query($con, "SELECT * FROM uraian WHERE id_uraian = '$id_uraian'");
                $data = mysqli_fetch_row($hasil);
	            ?>

                <!-- About -->
                <section id="about">
                    <div class="container	">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="about_content">

                                    <div class="section-header">
                                        <h2>
                                            URAIAN
                                        </h2>

                                        <p><span><?php echo $data[1] ?></span></p>
                                    </div>
                                    <p><?php echo $data[3] ?></p>
                                    <p>
                                        <br>
                                        <br>
                                    </p>
                                    <div class="section-header">
                                        <h2></h2>
                                        <p> <span>
                                                ==================================================================================================================================
                                            </span></p>
                                    </div>
                                    <p>
                                        <a href="index.php" class="btn know_btn"
                                            style="background-color: #ce1212;">Kembali</a>

                                    </p>
                                </div>
                            </div>
                            <div class="col-lg4 col-md-6 ">
                                <div class="about_banner"><br><br><br><br><br>
                                    <?php echo "<img src='assets/assets/img/dummies/$data[4]'   />";?>

                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- About end -->


                <!-- ======= Gallery Section ======= -->
                <section id="menu" class="gallery section-bg">
                    <div class="container" data-aos="fade-up">

                        <div class="section-header">
                            <h2>gallery</h2>
                            <p>Check <span>Our Gallery</span></p>
                        </div>

                        <div class="gallery-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <a class="glightbox" data-gallery="images-gallery"
                                        href="assets/assets/img/1x1/10.jpg">
                                        <img src="assets/assets/img/1x1/10.jpg" class="img-fluid" alt="" width="300"
                                            height="300">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="glightbox" data-gallery="images-gallery"
                                        href="assets/assets/img/1x1/2_1.jpg">
                                        <img src="assets/assets/img/1x1/2_1.jpg" class="img-fluid" alt="" width="300"
                                            height="300">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="glightbox" data-gallery="images-gallery"
                                        href="assets/assets/img/1x1/3_1.jpg">
                                        <img src="assets/assets/img/1x1/3_1.jpg" class="img-fluid" alt="" width="300"
                                            height="300">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="glightbox" data-gallery="images-gallery"
                                        href="assets/assets/img/1x1/3_2.jpg">
                                        <img src="assets/assets/img/1x1/3_2.jpg" class="img-fluid" alt="" width="300"
                                            height="300">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="glightbox" data-gallery="images-gallery"
                                        href="assets/assets/img/1x1/4.jpg">
                                        <img src="assets/assets/img/1x1/4.jpg" class="img-fluid" alt="" width="300"
                                            height="300">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="glightbox" data-gallery="images-gallery"
                                        href="assets/assets/img/1x1/5.jpg">
                                        <img src="assets/assets/img/1x1/5.jpg" class="img-fluid" alt="" width="300"
                                            height="300">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="glightbox" data-gallery="images-gallery"
                                        href="assets/assets/img/1x1/6.jpg">
                                        <img src="assets/assets/img/1x1/6.jpg" class="img-fluid" alt="" width="300"
                                            height="300">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="glightbox" data-gallery="images-gallery"
                                        href="assets/assets/img/1x1/7.jpg">
                                        <img src="assets/assets/img/1x1/7.jpg" class="img-fluid" alt="" width="300"
                                            height="300">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>


                    </div>
                </section><!-- End Gallery Section -->

                <!-- ======= Footer ======= -->
                <footer id="footer" class="footer">

                    <div class="container">
                        <div class="row gy-3">


                        </div>
                    </div>

                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>

                </footer><!-- End Footer -->
                <!-- End Footer -->

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