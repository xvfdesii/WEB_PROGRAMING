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
                    <li><a href="#about">Geografis dan Lahan</a></li>
                    <li><a href="#menu">Galeri </a></li>
                    <li><a href="#chefs">Aparat Desa</a></li>
                    <li><a href="#maps">Maps</a></li>
                    <li class="dropdown"><a href="#"><span>Uraian</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="page.php?id_uraian=1">Geografis dan Lahan</a></li>
                            <li><a href="page.php?id_uraian=2">Data Kependudukan</a></li>
                            <li><a href="page.php?id_uraian=3">Potensi Desa</a></li>
                            <li><a href="page.php?id_uraian=4">Investasi</a></li>
                            <li><a href="page.php?id_uraian=5">Pemasaran</a></li>
                            <li><a href="page.php?id_uraian=6">Pertumbuhan Penduduk</a></li>
                            <li><a href="page.php?id_uraian=9">Wilayah Kecamatan</a></li>
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
                <?php $con=mysqli_connect("localhost", "root", "", "desa_bungi");
                                    $tampil=mysqli_query($con, "SELECT * FROM uraian WHERE id_uraian=1");
                                    while($data=mysqli_fetch_row($tampil)){ ?>

                <div class="section-header">
                    <h2>
                        <?php echo $data[1] ?>
                    </h2>

                    <p>Desa Wisata <span>Bungin Permai</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url(assets/assets/img/dummies/pesona1.jpg) ;" data-aos="fade-up"
                        data-aos-delay="150">
                        <div class="call-us position-absolute">
                            <h4>Pesona Desa Wisata</h4>
                            <p>Bungin Permai</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">

                            </p>
                            <ul>
                                <p>
                                    <?php echo $data[2] ?>
                                    <?php }?> berada di atas permukaan air laut sehingga dikenal dengan sebutan desa
                                    terapung dan berbatasan dengan desa-desa di sekitarnya dimana sebelah Utara
                                    berbatasan dengan desa Akuni, Timur berbatasan dengan Desa Torokeku, Selatan
                                    Berbatasan dengan Selat Tiworo dan Barat berbatasan dengan Roraya serta Desa Bungin
                                    Permai sendiri mayoritas di huni oleh etnik bajo yang pada umumnya berprofesi
                                    sebagai nelayan.
                                </p>
                                <p>

                                </p>
                                <div class="position-relative mt-4">
                                    <img src="assets/assets/img/slide/1.jpg" class="img-fluid" alt="">
                                    <img src="assets/assets/img/slide/2.jpg" class="img-fluid" alt="">

                                    <a href="https://www.youtube.com/watch?v=qY38nuJjbPU"
                                        class="glightbox play-btn"></a>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box">
                            <h3>Kondisi Iklim?</h3>
                            <p>
                                Kondisi Iklim Desa Bungin Permai sebagaimana desa-desa lain diwilayah Indonesia
                                mempunyai iklim kemarau, penghujan dan pancaroba hal tersebut mempunyai pengaruh
                                langsung terhadap pola penangkapan ikan, budidaya rumput laut dan keadaan masyarakat.
                                Pada saat musim kemarau terjadi risiko kegagalan usaha tani rumput laut lebih tinggi.
                            </p>
                            <div class="text-center">
                                <a href="page.php?id_uraian=1" class="more-btn">Selengkapnya<i
                                        class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <img src="assets/assets/img/dummies/penduduk.jpg" alt="Icon" width="64" height="64">
                                    <h4>
                                        <?php $con=mysqli_connect("localhost", "root", "", "desa_bungi");
                                $tampil=mysqli_query($con, "SELECT * FROM uraian WHERE id_uraian=2");
                                while($data=mysqli_fetch_row($tampil)){ ?>
                                        <?php echo $data[1] ?>
                                    </h4>
                                    <p>
                                        <?php echo $data[2] ?>
                                        <?php }?>
                                    </p>
                                    <div class="text-center">
                                        <a href="page.php?id_uraian=2" class="btn know_btn"
                                            style="background-color: #ce1212; color: #fff;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div><!-- End Icon Box -->


                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <img src="assets/assets/img/dummies/logo_konsel.jpg" alt="Icon" width="64"
                                        height="64">
                                    <h4>
                                        <?php $con=mysqli_connect("localhost", "root", "", "desa_bungi");
                                    $tampil=mysqli_query($con, "SELECT * FROM uraian WHERE id_uraian=3");
                                    while($data=mysqli_fetch_row($tampil)){ ?>
                                        <?php echo $data[1] ?>
                                    </h4>
                                    <p>
                                        <?php echo $data[2] ?>
                                        <?php }?>
                                    </p>
                                    <div class="text-center">
                                        <a href="page.php?id_uraian=3" class="btn know_btn"
                                            style="background-color: #ce1212; color: #fff;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <img src="assets/assets/img/dummies/wilayah.jpg" alt="Icon" width="64" height="64">
                                    <h4>
                                        <?php $con = mysqli_connect("localhost", "root", "", "desa_bungi");
                                        $tampil = mysqli_query($con, "SELECT * FROM uraian WHERE id_uraian=9");
                                        while ($data = mysqli_fetch_row($tampil)) { ?>
                                        <?php echo $data[1] ?>
                                    </h4>
                                    <p>
                                        <?php echo $data[2] ?>
                                        <?php } ?>
                                    </p>
                                    <div class="text-center">
                                        <a href="page.php?id_uraian=9" class="btn know_btn"
                                            style="background-color: #ce1212; color: #fff;">Selengkapnya</a>
                                    </div>
                                </div>
                            </div><!-- End Icon Box -->


                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->


        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Galeri</h2>
                    <p>Galeri Desa <span>Bungin Permai</span></p>
                </div>

                <!-- ======= Gallery Section ======= -->
                <section id="gallery" class="gallery section-bg">
                    <div class="container" data-aos="fade-up">

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

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Kawasan Desa</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Kegiatan Warga</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                            <h4>Hasil Panen</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Rumput Laut</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Potret</p>
                            <h3>Kawasan Desa</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/3_2.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/3_2.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/4.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/4.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/6_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/6_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/7_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/7_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/8_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/8_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/port 1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/port 1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Starter Menu Content -->

                    <div class="tab-pane fade" id="menu-breakfast">

                        <div class="tab-header text-center">
                            <p>Potret</p>
                            <h3>Kegiatan Warga</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/10.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/10.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/7_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/7_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/6_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/6_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/6.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/6.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/5.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/5.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/Untitled-1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/Untitled-1.jpg" class="menu-img img-fluid"
                                        alt=""></a>

                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Breakfast Menu Content -->

                    <div class="tab-pane fade" id="menu-lunch">

                        <div class="tab-header text-center">
                            <p>Potret</p>
                            <h3>Hasil Panen</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/3_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/3_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/8_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/8_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/6.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/6.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/6_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/6_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/7.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/7.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/8.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/8.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Lunch Menu Content -->

                    <div class="tab-pane fade" id="menu-dinner">

                        <div class="tab-header text-center">
                            <p>Potret</p>
                            <h3>Rumput Laut</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/7.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/7.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/9.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/9.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/9_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/9_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/port 2.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/port 2.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/port 3.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/port 3.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/assets/img/1x1/2_1.jpg" class="glightbox"><img
                                        src="assets/assets/img/1x1/2_1.jpg" class="menu-img img-fluid" alt=""></a>

                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Dinner Menu Content -->

                </div>

            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs section-bg" Center>
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Aparat</h2>
                    <p>Aparat <span>Desa Bungin</span> Permai</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/assets/img/aparat/kades1.jpg" width="300" height="300" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Wati Setiawati</h4>
                                <span>Kepala Desa</span>
                                <p>
                                <p>Nama : Wati Setiawati<br>
                                    Jabatan : Kepala Desa<br>
                                    Tempat Lahir : Desa Bungin<br>
                                    Tanggal Lahir : 12/12/2001<br>
                                </p>
                                </p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/assets/img/aparat/kades2.jpg" width="300" height="300" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Tatang Suratang</h4>
                                <span>Ketua RW</span>
                                <p>
                                <p>Nama : Tatang Suratang<br>
                                    Jabatan : Ketua RW<br>
                                    Tempat Lahir : Kendari<br>
                                    Tanggal Lahir : 11/11/2002<br>
                                </p>
                                </p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/assets/img/aparat/kades3.jpg" width="300" height="300" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ati Surati</h4>
                                <span>Kepala Dusun</span>
                                <p>
                                <p>Nama : Ati Surati<br>
                                    Jabatan : Kepala Dusun<br>
                                    Tempat Lahir : Ranometto<br>
                                    Tanggal Lahir : 10/10/2003<br>
                                </p>
                                </p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                </div>

            </div>
        </section><!-- End Chefs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="maps" class="contact">
            <div class="container" data-aos="fade-up">

                <div id="maps" class="section-header">
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